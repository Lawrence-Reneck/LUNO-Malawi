@foreach($promoted_artists as $promoted_artist)
<div class="col-lg-2 menu-item">
<center>
	  <a href="{{ ('/storage/imagesORartworks/'.$promoted_artist->profile_picture) }}" ><img src="{{ ('/storage/imagesORartworks/'.$promoted_artist->profile_picture) }}" class="rounded-circle" alt=""></a>
	  <h4>{{$promoted_artist->stage_name}}</h4>
	  <p class="ingredients">
	  {{$promoted_artist->residence}}/{{$promoted_artist->genre_known_with}}
	  </p>

	  <p class="price">
      <h5>  <button class="btn btn-sm"><a href="/show_artist/{{$promoted_artist->stage_name}}">view & download</a></button> </h5>
	  </p>
	  </center> 
	</div>
@endforeach