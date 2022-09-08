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
		<?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page" >
<?php $__currentLoopData = $show_artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show_artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="5u">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2> <strong><?php echo e($show_artist->stage_name); ?></strong> real name  <strong><a href="/show_artist/<?php echo e($show_artist->id); ?>"><?php echo e($show_artist->full_name); ?></a></strong> </h2>
              <p><?php echo e($show_artist->biography); ?></p> 
            </div>
          </div>
          <div class="5u">
			<img src="<?php echo e(('/storage/imagesORartworks/'.$show_artist->profile_picture)); ?>" style="width:auto; border:5px solid; padding: 5px" alt="">
			<center><h2><strong>SONGS</strong></h2></center> 
	
	
		   
		  <?php $__currentLoopData = $show_artist->music_mp3s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $music_mp3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
				<div>
					<strong> <center><?php echo e($loop->iteration); ?>.<?php echo e($music_mp3->song_title); ?> <a href="/show_song/<?php echo e($music_mp3->id); ?>">(downlaod)</a>  </center></strong>
					<audio controls controlsList="nodownload">
						<source src="/download/<?php echo e($music_mp3->song_mp3); ?>" type="audio/mpeg"> 
					</audio>
				</div>
			<hr>
		   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		 
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php echo $__env->make('partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\xampp\htdocs\luno\LUNO-Malawi-master\luno_malawi\resources\views/pages/single_artist.blade.php ENDPATH**/ ?>