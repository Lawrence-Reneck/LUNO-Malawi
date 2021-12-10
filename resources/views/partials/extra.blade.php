<div id="page">

<div id="marketing" class="container">
				<div class="row">
					@foreach($music_mp3s_promoted as $music_mp3)
					<div class="3u">
						<section>
							<header>
								<h2>{{$music_mp3->song_title}}</h2>
							</header>
							<p class="subtitle">{{$music_mp3->artists->full_name}}. this song was produced by.. Quisque semper augue mattis maecenas ligula.</p>
							<p><a href="#"><img src="{{ ('/storage/imagesORartworks/'.$music_mp3->song_artwork) }}" alt=""></a></p>
							<a href="/show_song/{{$music_mp3->id}}" class="button">More</a>
						</section>
					</div>
					@endforeach
				</div>
			</div>
			</div>