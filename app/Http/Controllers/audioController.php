<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Music_audio;
use App\Models\Quote;
use Image;
use Storage; 

class audioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
        ]);
        // if($request->file('song_mp3')){
            $file= $request->file('song_mp3');
            $art= $request->file('song_artwork');

            $filename=time().'.'.$file->getClientOriginalExtension(); 
            $request->song_mp3->move('storage/mp3s/', $filename);         

            $artwork=time().'.'.$art->getClientOriginalExtension(); 

            $imgFile = Image::make($art);
            $imgFile->fit(282, 141, function ($constraint) {
             $constraint->upsize();
            });

            $imgFile->save(public_path('storage/imagesORartworks/' . $artwork));          
            $audio= new Music_audio;
            $audio -> song_title = $request -> input('song_title');
            $audio -> artist_id = $request -> input('artist_id');
            $audio -> song_genre = $request -> input('song_genre'); 
            $audio -> producer = $request -> input('producer');  
            $audio-> song_mp3   =  $filename;
            $audio-> song_artwork   =  $artwork;
            $audio->save();
            return redirect()->back()->with('mp3upload', 'the song has been Added Successfully');
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_promo_song(Request $request)
    {
        $song_mp3_id  = $request -> input('song_mp3_id');
        $promo_song = Music_audio::where('id', $song_mp3_id)->first();
        $promo_song = $promo_song->paid_promo;
        $promo_song = (int)$promo_song;
        $promozero =  0;
        $promone =  1;
        if ($promo_song == 1){
            $song_mp3_id  = $request -> input('song_mp3_id');
            $promone =  1;
            $promozero =  0;
            $promoUpdat = Music_audio::where('id', $song_mp3_id)->update([
                'paid_promo' =>$promozero,
                    ]);
        }else{
            $song_mp3_id  = $request -> input('song_mp3_id');
            $promone =  1;
            $promozero =  0;
            $promoUpdat = Music_audio::where('id', $song_mp3_id)->update([
                'paid_promo' =>$promone,
                    ]);
        }
        return redirect()->back()->with('promo', 'the song has been Added to a promo category');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $page_views = Music_audio::find($id); // fetch post from database
        // $page_views->increment('page_views'); // add a new page view to our `views` column by incrementing it

        $show_songs = Music_audio::where('id','=',$id)->get();
        $quotes = Quote::latest()->take(1)->get(); 
        $artists_legend = Artist::where('legend_artist', '=',1)->paginate(3);
        return view('pages/single_song', compact('show_songs','artists_legend','quotes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_song($id)
    {
        $storage_music_names    = Music_audio::where('id',$id)->pluck('song_artwork');
        $path = public_path('storage/imagesORartworks/');
        // unlink($path . $storage_music_names);
        if(!($path . $storage_music_names))
        {
            unlink($path . $storage_music_names);
        }
        Music_audio::find($id)->delete();
        return back();
    }
    
    public function download($file_name) {
        $file_path = public_path('storage/mp3s/'.$file_name);

        \DB::table('music_audios')
        ->where('song_mp3', $file_name)
        ->increment('view_count', 1);

        return response()->download($file_path);

      }

    //   public function incrementFunction()
    //   {
    //       //moreover you can add this function in your public page to be incremented 
    //       //every time user hits your website
    //       Counters::increment('number_of_visitors');
    //   }
}
