<!DOCTYPE HTML>
<!--
	Ex Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
		</noscript>

	
 
<link href="/css/animate.css" rel="stylesheet" type="text/css">  


 
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">
		<?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- Header -->
	
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page" >
		<?php $__currentLoopData = $show_songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show_song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="5u">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Downlod <strong><?php echo e($show_song->song_title); ?></strong> by  <strong><a href="/show_artist/<?php echo e($show_song->artists->id); ?>"><?php echo e($show_song->artists->stage_name); ?></a></strong> </h2>
              <p>Latest Urban Noise (LUNOMW) is a fact growing social platform where you can download music by Malawian artists.you can contact the numbers from the bottom section for promo. Thank you, enjoy!</p>
              <button  style="height:50px; width:auto"> 
                                <a style="color:orange; font-size:40px" class="fas fa-download"
                href="/download/<?php echo e($show_song->song_mp3); ?>"><?php echo e($show_song->view_count); ?></a></button> </div>
          </div>
          <div class="5u">
		  <img src="<?php echo e(('/storage/imagesORartworks/'.$show_song->song_artwork)); ?>" style="width:auto; border:5px solid; padding: 5px" alt="">
		  <audio controls controlsList="nodownload">
			<source src="/download/<?php echo e($show_song->song_mp3); ?>" type="audio/mpeg"> 
			</audio>
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


	<?php echo $__env->make('partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\xampp\htdocs\luno2\luno_malawi\resources\views/pages/single_song.blade.php ENDPATH**/ ?>