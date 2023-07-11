<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Media extends Model
{
    use HasFactory, RefreshDatabase;
    protected $fillable = array('*');



    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }


    public function videosBySeasons()
    {
        $seasons = [];
        $this->videos;
        for ($i = 1; $i <= $this->seasons_count; $i++) {
            $videos = [];
            foreach ($this->videos as $key => $value) {
                if (intval($value->season) === $i)
                    array_push($videos, $value);
            }

            array_push($seasons, [
                "season" => $i,
                "videos" => $videos
            ]);
        }
        return $seasons;
    }

    public function baseVideo()
    {
        return Video::where('media_id', $this->id)->orderBy('episode', 'ASC')->orderBy('season', 'ASC')->first();
    }

    public function video()
    {
        return $this->videos[0];
    }
}
