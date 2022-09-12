@extends('app')

@section('content')
<!-- Main -->
<div id="page" >
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="5u">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2> Artists that are registered with   <strong>Malawi Na Zambia Music</strong> </h2>
              <p>Malawinazambia-music is a fact growing social platform where you can download music by Malawian and Zambian artists combined in a non competetive way.You can contact the numbers from the bottom section for promo. Thank you, enjoy!</p>
              </div>
          </div>
          <div class=""  style="width:auto; border:5px solid; padding: 5px" >
		  <center><h2><strong>Artists</strong></h2></center>
        
          <form method="POST" action="{{ url('/search_artist') }}" enctype="multipart/form-data">
              @csrf
            <select class="search-artist " id="" name="id" required="true" >
                <option value="" class="disabled hidden">Select artist and search</option>
                        @foreach($show_artists as $show_artist)
                <option value="{{$show_artist->id}}">{{$show_artist->stage_name}} </option>

                <!-- <input type="hidden"  name="id" value="{{$show_artist->id}}" > -->
                        @endforeach
	
				           </select>
		  <div> <button>search</button></div>
       
        </form>
       
		  <div>
			  <strong> <center>title</center></strong>
			 
		  
          <audio controls controlsList="nodownload">
			<source src="" type="audio/mpeg"> 
			</audio>
		</div>
	<hr>

		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
		<div  style="background-color:red; margin:auto; width:auto">

			<!-- Extra -->
			  
			<!-- /Extra -->
				
			<!-- Main -->
@endsection