<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music_audio extends Model
{
    use HasFactory;
    protected  $fillable=['stage_name','song_title', 'song_genre', 'producer','song_mp3','song_artwork'];
    public function artists(){
        return $this->belongsTo(Artist::class, 'artist_id', 'id');

    }
}
