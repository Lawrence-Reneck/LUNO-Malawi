<!DOCTYPE HTML>
<html>
	<head>
		<title>Ex Machina by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-panels.min.js"></script>
		<script src="/js/init.js"></script>
		 <link href="/select2/css/select2.min.css" rel="stylesheet"> 
		<script src="/select2/js/select2.min.js"></script>
		
		
		<noscript>
			<link rel="stylesheet" href="/css/skel-noscript.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-desktop.css" />
            <link href="/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
		</noscript>
            <link href="/css/animate.css" rel="stylesheet" type="text/css"> 
           
        
        <script>
            $(document).ready(function(){
            // SELECT2 LIBRARY INITIALIZE 
            $('.search-artist').select2();
            }); 
 
        </script>
	</head>
	<body class="homepage">
		@include('partials/header')
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page" >
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="5u">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2> Artists that are registered with   <strong>Latest Urban Noise Malawi</strong> </h2>
              <p>Latest Urban Noise (LUNOMW) is a fact growing social platform where you can download music by Malawian artists.you can contact the numbers from the bottom section for promo. Thank you, enjoy!</p>
              </div>
          </div>
          <div class="5u"  style="width:auto; border:5px solid; padding: 5px" >
		  <center><h2><strong>Artists</strong></h2></center>
        
          <form method="POST" action="{{ url('/search_artist') }}" enctype="multipart/form-data">
              @csrf
            <select class="search-artist " id="" name="id" required="true" >
                <option value="" class="disabled hidden">Select village  to add to the property</option>
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
	
			<!-- Main -->

		</div>
		</div>
	<!-- /Main -->

	<!-- Featured -->

	<!-- /Featured -->


	@include('partials/footer')
	</body>
</html>