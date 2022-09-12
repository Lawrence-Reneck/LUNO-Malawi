<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Music_audio;
use App\Models\news;
use App\Models\Quote;
use Maher\Counters\Facades\Counters; 
class home_pageController extends Controller
{
        public function index(){
        $artists = Artist::all();
        $news = News::all();
        // $music_mp3s = Music_audio::all();
        // $counter =  Counters::increment('number_of_visitors');
        $music_mp3s = Music_audio::where('created_at', '>=', Carbon::today()->startOfMonth()->subMonth())->get()->sortByDesc('view_count')->take(10);
        $music_mp3s_promoted = Music_audio::where('paid_promo', '=',1)->paginate(12);
        $artists_upcoming = Artist::where('upcoming_artist', '=',1)->paginate(12);
        $artists_legend = Artist::where('legend_artist', '=',1)->paginate(3);
        $promoted_artists = Artist::where('paid_promo', '=',1)->paginate(15);
        $songs_recently_added = Music_audio::latest()->take(1)->get(); #order by recent
        $quotes = Quote::latest()->take(1)->get(); #order by recent
        return view('index', compact('artists','music_mp3s','news','music_mp3s_promoted','artists_upcoming','promoted_artists','songs_recently_added','artists_legend','quotes'));
      }
    
}
