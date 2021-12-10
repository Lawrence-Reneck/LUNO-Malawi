<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Music_audio;
use App\Models\News;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin_dashboardController extends Controller
{
    public function index(){
      $artists = Artist::all();
      $song_mp3s = Music_audio::all();
      $news = News::all();
      $quotes = Quote::all();
      if(Auth::guest()){
        return "not logged in";
      }else{
        return view('admin_dashboard', compact('artists','song_mp3s','news','quotes'));
      }
    

    }
  }
