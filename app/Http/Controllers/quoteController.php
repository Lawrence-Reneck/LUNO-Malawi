<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
class quoteController extends Controller
{
    public function index()
    {
        
        $quotes = Quote::all();
        return view('pages/quote',compact('quotes'));
    
    }
    public function create(Request $request)
    {
        $owner = $request->owner_variable;
        $quote = $request->quote_variable;

        $this->validate($request, [
        ]);
        
            $quote_object= new Quote;
            $quote_object -> owner = $owner;
            $quote_object -> quote = $quote;
            $quote_object->save();

            // $details_quote = ['ow'=>$owner,'qt'=>$quote];
            // return json_encode( $details_quote);
            // return redirect()->back();
    
    

            return redirect()->back()->with('quote_response', 'the news has been Added Successfully');
    
 
        // return response()->json(['owner'=>$owner,'quote'=>$quote]);

        // return "the owner is : $owner, the quote is : $quote";
    }
    public function edit($id)
    {
        
        
        $quote = Quote::find($id);
        return json_encode($quote);
    
    
    }
    public function update(Request $request,$id)
    {
        $quote = Quote::find($id);
        // $validatedData = $request->validate([
        //     'quote '       => 'required|min:1|max:256',
        //     'owner '       => 'required|min:1|max:256',
        // ]);
        $quote->quote = $request['quote'];
        $quote->owner = $request['owner'];
        
        $quote->save();
        return redirect()->back()->with('message','updated');
    
    
    }
    public function delete($id)
    {
        
        $quotes = Quote::find($id)->delete();
        // $view =  redirect()->back()->render();
        // return response()->json(['html'=>$view]);
        // return response()->view('pages/quote');
        // return Response::json(array('quotes' => 'quotes'));

        return response()->json([
            'quotes' => 'quotes',
           
        ]);
   
    }
}
