<div class="row"> 
					<div class="6u">
						<section>
						<u><h5>NEWS PIE</h5></u>
						<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<header>
								
								
								<br>
								<h2><?php echo e($news->title); ?></h2>
								<span class=""><strong>source:</strong><?php echo e($news->source); ?></span>
							</header>
							<p>
								<?php echo e($news->breaking_news); ?>

							</p>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<a href="/view_breaking_news" class="button">More News</a>
						</section>
						
					</div>
					<div class="3u">
						<section class="sidebar">
							<header>
								<h2>monthly top 10</h2>
							</header>
							<ul class="style2">
								<?php $__currentLoopData = $music_mp3s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $music_mp3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
									<a href="#"><img src="images/pics07.jpg" alt=""></a>
									<p><strong><?php echo e($music_mp3->song_title); ?></strong><br><br><?php echo e($music_mp3->artists->stage_name); ?>

									 </p>
									<h5><button><a href="/download/<?php echo e($music_mp3->song_mp3); ?>">vote</a></button>  <button class="btn btn-sm"><a href="/show_song/<?php echo e($music_mp3->id); ?>">view & download(<?php echo e($music_mp3->view_count); ?>)</a></button> </h5>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>						
						</section>
					</div>
					<div class="3u">
						<section class="sidebar">
							<header>
								<h2>Upcoming artists</h2>
							</header>
							<ul class="style1">
								<?php $__currentLoopData = $artists_upcoming; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist_upcoming): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="show_artist/<?php echo e($artist_upcoming->id); ?>"><?php echo e($artist_upcoming->stage_name); ?> real name <?php echo e($artist_upcoming->full_name); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</ul>
						</section>
						<section class="sidebar">
							<header>
								<h2>Songs recently added</h2>
							</header>
							<ul class="style1">
							<?php $__currentLoopData = $songs_recently_added; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song_recently_added): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="show_song/<?php echo e($song_recently_added->id); ?>"><?php echo e($song_recently_added->song_title); ?> done by <?php echo e($song_recently_added->artists->stage_name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</section>
					</div>
				</div><?php /**PATH C:\xampp\htdocs\luno\LUNO-Malawi-master\LUNO-Malawi-master\resources\views/partials/various_artists.blade.php ENDPATH**/ ?>