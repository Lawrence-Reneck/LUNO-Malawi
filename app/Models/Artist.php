<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  protected  $fillable=['full_name','stage_name','residence', 'genre_known_with','profile_picture', 'biography' ];
    use HasFactory;

    public function music_mp3s(){
      return $this->hasMany(Music_audio::class, 'artist_id', 'id');
  }
}

