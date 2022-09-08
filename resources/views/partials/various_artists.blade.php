<div class="container">
  <div class="row gy-3">

	<div class="col-lg-8 col-md-8 d-flex">
	  <i class="bi bi-geo-alt icon"></i>
	  <div>
		<h4>monthly top 10</h4>
		<section class="sidebar">
							<ul class="style2">
								@foreach($music_mp3s as $music_mp3)
								<li>
									<a href="#"><img src="images/pics07.jpg" alt=""></a>
									<p><strong>{{$music_mp3->song_title}}</strong><br><br>{{$music_mp3->artists->stage_name}}
									 </p>
									<h5><button><a href="/download/{{$music_mp3->song_mp3}}">vote</a></button>  <button class="btn btn-sm"><a href="/show_song/{{$music_mp3->id}}">view & download({{$music_mp3->view_count}})</a></button> </h5>
								</li>
								@endforeach
							</ul>						
						</section>
	  </div>
	</div>

	<div class="col-lg-4 col-md-4 d-flex">
	  <h4>Upcoming artists</h4>
	  <div class="social-links d-flex">
	  <section class="sidebar">
		<ul class="style1">
			@foreach($artists_upcoming as $artist_upcoming)
			<li><a href="show_artist/{{$artist_upcoming->id}}">{{$artist_upcoming->stage_name}} real name {{$artist_upcoming->full_name}}</a></li>
			@endforeach
			
		</ul>
	</section>
	  </div>
	</div>

  </div>
</div>


<section class="sidebar">
	<header>
		<h2>Songs recently added</h2>
	</header>
	<ul class="style1">
	@foreach($songs_recently_added as $song_recently_added)
		<li><a href="show_song/{{$song_recently_added->id}}">{{$song_recently_added->song_title}} done by {{$song_recently_added->artists->stage_name}}</a></li>
	@endforeach
	</ul>
</section>






















