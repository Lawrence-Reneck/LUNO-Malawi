<!DOCTYPE HTML>
<html>
		@include('partials/head')
	<body class="homepage">
		@include('partials/header')
	<!-- Banner -->

	<!-- /Banner -->
	<section id="news" class="news">
	<!-- Main -->
		<div id="page" >
        <div class="8u" style="padding-left:40px">
						<section>
						@foreach($news as $news)
							<header>
								<h2>{{$news->title}}</h2>
								<span class=""><strong>source:</strong>{{ $news->source}}</span>
							</header>
							<p>
								{{$news->breaking_news}}
							</p>
							@endforeach
						</section>
					</div>
        </div>
@include('partials/footer')
	</body>
</html>