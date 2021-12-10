<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Artist;
use App\Models\Quote;

class newsController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
        ]);
        
            $news= new News;
            $news -> breaking_news = $request -> input('breaking_news');
            $news -> title = $request -> input('title');
            $news -> source = $request -> input('source');
            $news->save();
            return redirect()->back()->with('news_creation_response', 'the news has been Added Successfully');
    
    }
    public function show()
    {
        $news=News::paginate(3);
        $quotes = Quote::latest()->take(1)->get(); #order by recent
        $artists_legend = Artist::where('legend_artist', '=',1)->paginate(12);
        return view('pages/news',compact('news','artists_legend','quotes'));
    }

    public function edit($id)
    {
        
        $news = News::find($id);
        
        return json_encode($news);

        
    }
    public function update(Request $request,$id)
    {
        $news = News::find($id);
        // $validatedData = $request->validate([
        //     'quote '       => 'required|min:1|max:256',
        //     'owner '       => 'required|min:1|max:256',
        // ]);
        $news->title = $request['title'];
        $news->source = $request['source'];
        $news->breaking_news = $request['breaking_news'];
        $news->save();
        return redirect()->back()->with('message','updated');
    
    
    }
    public function delete($id)
    {
        
        $mews = News::find($id)->delete();
        return back();

        
    }

}
