<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Music_audio;
use App\Models\Quote;
use Illuminate\Http\Request;
use Image;
use Storage; 
class artistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        return view('admin_dashboard', compact('artists'));
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
        // if($request->file('thumbnail')){
            $file= $request->file('profile_picture');
            $filename=time().'.'.$file->getClientOriginalExtension(); 
            // $request->file->move('artists/profiles/', $filename);      
                                        // }
            $imgFile = Image::make($file);
            $imgFile->fit(160, 160, function ($constraint) {
                $constraint->upsize();
            });

            $imgFile->save(public_path('storage/imagesORartworks/' . $filename));          
                


            $artist= new Artist;
            $artist -> full_name = $request -> input('full_name');
            $artist -> stage_name = $request -> input('stage_name'); 
            $artist -> residence = $request -> input('residence'); 
            $artist -> genre_known_with = $request -> input('genre_known_with');  
            $artist -> biography = $request -> input('biography'); 
            $artist-> profile_picture =$filename;
            $artist->save();
            return redirect()->back()->with('responseReply', 'the artist has been Added Successfully');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function search_artist(Request $request)
    {

        $id = $request -> input('id');
        $show_artists = Artist::where('id','=',$id)->get();
        $show_artists_count = Artist::where('id','=',$id)->get()->count();
        $artists_legend = Artist::where('legend_artist', '=',1)->paginate(3);
        $quotes = Quote::latest()->take(1)->get(); #order by recent
        return view('pages/single_artist', compact('show_artists','artists_legend','quotes','show_artists_count'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
      $show_artists = Artist::where('id','=',$id)->get();
      $artists_legend = Artist::where('legend_artist', '=',1)->paginate(12);
      $quotes = Quote::all();
        return view('pages/single_artist', compact('show_artists','artists_legend','quotes'));
    }

    public function artists_all()
    {
      $show_artists = Artist::all();
      $quotes = Quote::latest()->take(1)->get(); 
      $artists_legend = Artist::where('legend_artist', '=',1)->paginate(12);
        return view('pages/all_artists', compact('show_artists','artists_legend','quotes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $artists = Artist::find($id);
        
        return json_encode($artists);

        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $artist = Artist::find($id);
        $artist->full_name = $request['full_name'];
        $artist->stage_name = $request['stage_name'];
        $artist->residence = $request['residence'];
        $artist->genre_known_with = $request['genre_known_with'];
        $artist->profile_picture = $request['profile_picture'];
        $artist->biography = $request['biography'];

        $file= $request->file('profile_picture');
        $filename=time().'.'.$file->getClientOriginalExtension(); 
        // $request->file->move('artists/profiles/', $filename);      
                                    // }
        $imgFile = Image::make($file);
        $imgFile->fit(160, 160, function ($constraint) {
            $constraint->upsize();
        });

        // $imgFile->save(public_path('imagesORartworks/' . $filename));  
        $imgFile->save(public_path('storage/imagesORartworks/' . $filename));        
        $artist->profile_picture = $filename;
        
        $artist->save();
        return redirect()->back()->with('message','updated');
    
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_artist($id)
    {
        $storage_profile_picture_names    = Artist::where('id',$id)->pluck('profile_picture');
        $storage_music_file_names    = Music_audio::where('artist_id',$id)->pluck('song_mp3');
        $storage_song_artwork_names    = Music_audio::where('artist_id',$id)->pluck('song_artwork');
        $image_path = str_replace('/', '\\',public_path('storage/imagesORartworks/'));
        $music_file_path = public_path('storage/mp3s/');
        $cc = $image_path . $storage_profile_picture_names;
        if(!($image_path . $storage_profile_picture_names))
        {
            unlink($image_path . $storage_profile_picture_names);
        }
        if(!($image_path . $storage_song_artwork_names))
        {
            unlink($image_path . $storage_song_artwork_names);
        }

        foreach($storage_music_file_names   as $storage_music_file_name ){

            if(!($music_file_path . $storage_music_file_names))
            {
                unlink($music_file_path . $storage_music_file_names);
            } 
        };
        // dd($image_path);

        Artist::find($id)->delete();

        Music_audio::where('artist_id','=',$id)->delete();

        return back();
    }
    public function create_promo(Request $request)
    {
        $artist_id  = $request -> input('artist_id');
        $promoUpdat = Artist::where('id', $artist_id)->first();
        $promoUpdat = $promoUpdat->paid_promo;
        $promoUpdat = (int)$promoUpdat;
        $promozero =  0;
        $promone =  1;
        if ($promoUpdat == 1){
            $id  = $request -> input('artist_id');
            $promone =  1;
            $promozero =  0;
            $promoUpdat = Artist::where('id', $id)->update([
                'paid_promo' =>$promozero,
                    ]);
        }else{
            $id  = $request -> input('artist_id');
            $promone =  1;
            $promozero =  0;
            $promoUpdat = Artist::where('id', $id)->update([
                'paid_promo' =>$promone,
                    ]);
        }
        return redirect()->back()->with('promo', 'the artist has been Added to a promo category');
    }
    public function create_legend_artist(Request $request)
    {
        $artist_id  = $request -> input('artist_id');
        $promoUpdat = Artist::where('id', $artist_id)->first();
        $legend_artist = $promoUpdat->legend_artist;
        $legend_artist = (int)$legend_artist;
        $legendzero =  0;
        $legendone =  1;
        if ($legend_artist == 1){
            $id  = $request -> input('artist_id');
            $legendone =  1;
            $legendzero =  0;
            $legend_artist = Artist::where('id', $id)->update([
                'legend_artist' =>$legendzero,
                    ]);
        }else{
            $id  = $request -> input('artist_id');
            $legendone =  1;
            $legendzero =  0;
            $legend_artist = Artist::where('id', $id)->update([
                'legend_artist' =>$legendone,
                    ]);
        }
        return redirect()->back()->with('legend', 'the artist has been Added to a legend category');
    }
    public function create_upcoming_artist(Request $request)
    {
        $artist_id  = $request -> input('artist_id');
        $upcoming_artist = Artist::where('id', $artist_id)->first();
        $upcoming_artist = $upcoming_artist->upcoming_artist;
        $upcoming_artist = (int)$upcoming_artist;
        $upcomingzero =  0;
        $upcomingone =  1;
        if ($upcoming_artist == 1){
            $id  = $request -> input('artist_id');
            $upcomingzero =  0;
            $upcomingone =  1;
            $upcoming_artist = Artist::where('id', $id)->update([
                'upcoming_artist' =>$upcomingzero,
                    ]);
        }else{
            $id  = $request -> input('artist_id');
            $upcomingzero =  0;
            $upcomingone =  1;
            $upcoming_artist = Artist::where('id', $id)->update([
                'upcoming_artist' =>$upcomingone,
                    ]);
        }
        return redirect()->back()->with('upcoming', 'the artist has been Added to a upcoming artists category');
    }
}
