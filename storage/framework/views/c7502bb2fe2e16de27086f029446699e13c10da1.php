<!DOCTYPE HTML>
<html>
		<?php echo $__env->make('partials/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<body class="homepage">
		<?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- Banner -->

	<!-- /Banner -->
	<section id="news" class="news">
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
</html><?php /**PATH C:\xampp\htdocs\luno2\luno_malawi\resources\views/pages/news.blade.php ENDPATH**/ ?>