<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\UserMedia;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $media = Media::findOrFail($id);
        $media->videos;
        return $media->videos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);
        $video->media;
        return $video;
    }

    public function watchMedia($media_id)
    {
        $media = Media::findOrFail($media_id);
        $video = $media->baseVideo();
        return $this->watch($video->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function watch($id)
    {
        $video = Video::findOrFail($id);
        $media = $video->media;


        // update views
        $media->views += 1;
        $media->save();
        $media->videos;

        // create/update user watched
        $userMedia = UserMedia::where([['user_id', Auth::user()->id], ['media_id', $media->id]])->first();
        if ($userMedia) {
            $userMedia->video_id = $video->id;
            $userMedia->save();
        } else {
            UserMedia::firstOrCreate([
                "user_id" => Auth::user()->id,
                "media_id" => $media->id,
                "video_id" => $video->id,
                "is_finished_id" => false
            ]);
        }

        // Next episode for series
        if ($media->type === 'SERIE') {
            $nextEpisodeId = null;
            $nextEpisodeNum = intval($video->episode) + 1;

            foreach ($media->videos as $key => $value) {
                if (intval($value->episode) === $nextEpisodeNum) {
                    $nextEpisodeId = $value->id;
                }
            }

            if ($nextEpisodeId === null) {
                $nextSeasonNum = intval($video->season) + 1;
                foreach ($media->videos as $key => $value) {
                    if (intval($value->episode) === 1 && intval($value->season) === $nextSeasonNum) {
                        $nextEpisodeId = $value->id;
                    }
                }
            }

            $video['next_episode_id'] = $nextEpisodeId;
        }

        unset($video->media->videos);
        return $video;
    }
}
