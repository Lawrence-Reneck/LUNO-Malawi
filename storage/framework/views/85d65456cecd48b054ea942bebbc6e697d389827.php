<div id="page">

<div id="marketing" class="container">
				<div class="row">
					<?php $__currentLoopData = $music_mp3s_promoted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $music_mp3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="3u">
						<section>
							<header>
								<h2><?php echo e($music_mp3->song_title); ?></h2>
							</header>
							<p class="subtitle"><?php echo e($music_mp3->artists->full_name); ?>. this song was produced by.. Quisque semper augue mattis maecenas ligula.</p>
							<p><a href="#"><img src="<?php echo e(('/storage/imagesORartworks/'.$music_mp3->song_artwork)); ?>" alt=""></a></p>
							<a href="/show_song/<?php echo e($music_mp3->id); ?>" class="button">More</a>
						</section>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			</div><?php /**PATH C:\xampp\htdocs\luno\LUNO-Malawi-master\luno_malawi\resources\views/partials/extra.blade.php ENDPATH**/ ?>