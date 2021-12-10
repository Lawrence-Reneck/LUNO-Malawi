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
		<link href="/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
		<noscript>
			<link rel="stylesheet" href="/css/skel-noscript.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-desktop.css" />
            <link href="/css/animate.css" rel="stylesheet" type="text/css">  
		</noscript>
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