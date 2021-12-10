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
        <div class="8u" style="padding-left:40px">
						<section>
						<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<header>
								<h2><?php echo e($news->title); ?></h2>
								<span class=""><strong>source:</strong><?php echo e($news->source); ?></span>
							</header>
							<p>
								<?php echo e($news->breaking_news); ?>

							</p>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</section>
					</div>
        </div>
<?php echo $__env->make('partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\xampp\htdocs\luno\resources\views/pages/news.blade.php ENDPATH**/ ?>