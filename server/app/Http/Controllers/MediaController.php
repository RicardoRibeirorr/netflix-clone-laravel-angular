<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $req)
    {
        $query = Media::orderBy('views', 'desc');

        // type 
        if ($req->get('type')) {
            $query->where('type', $req->get('type'));
        }

        // text 
        if ($req->get('q')) {
            $query->where('title', 'LIKE', '%' . $req->get('q') . '%');
        }



        $list = $query->paginate(9);
        return response($list);
    }

    public function latest()
    {
        $list = Media::orderBy('created_at', 'desc')->paginate(9);
        return response($list);
    }

    public function favorites()
    {
        $list = Auth::user()->favorites->paginate(9);
        return response($list);
    }

    public function watched()
    {
        $list = Auth::user()->watched()->paginate(9);
        return response($list);
    }

    public function similar()
    {
        // $genres = Auth::user()->watched->select('genre_id')->groupBy('genre_id');
        // return response($list);
    }

    public function hot()
    {
        return Media::orderBy('created_at', 'desc')->orderBy('views', 'desc')->paginate(9);
    }

    public function top()
    {
        return Media::orderBy('created_at', 'desc')->orderBy('views', 'desc')->first();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media = Media::findOrFail($id);
        $media['base_video_id'] = null;
        $media['base_season_id'] = null;
        $media['base_episode_id'] = null;

        if ($media->type === 'SERIE') {
            $media['seasons'] = $media->videosBySeasons();
        }

        $base_video = $media->baseVideo();
        if ($base_video) {
            $media['base_video_id'] = $base_video->id;
            $media['base_season_id'] = $base_video->season;
            $media['base_episode_id'] = $base_video->episode;
        }


        unset($media->videos);
        return $media;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
