<div id="featured">
			<div class="container">
				<div class="row">
			<?php $__currentLoopData = $artists_legend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $legend_artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					</section>
					<section class="4u">
						<div class="box">
							<!-- <a href="#" class="image left"><img src="/images/pics05.jpg" alt=""></a> -->
							<a href="#" class="image left"><img src="<?php echo e(('/storage/imagesORartworks/'.$legend_artist->profile_picture)); ?>" alt=""></a>
							<h3><?php echo e($legend_artist->stage_name); ?></h3>
							<p><?php echo e(substr($legend_artist->biography, 0, 70)); ?>.</p>
							<a href="show_artist/<?php echo e($legend_artist->id); ?>" class="button">view legend</a>
						</div>
					</section>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="divider"></div>
			</div>
		</div>
	<!-- /Featured -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
							<h2>Famous quote</h2>
							<?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="balloon">
								<blockquote>&ldquo;&nbsp;&nbsp;  <?php echo e($quote->quote); ?>  &nbsp;&nbsp;&rdquo;<br>
									<br>
									<strong>&ndash;&nbsp;&nbsp;<?php echo e($quote->owner); ?>  </strong></blockquote>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<div class="ballon-bgbtm">&nbsp;</div>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>About LUNO Malawi</h2>
							<ul class="default">
								<li>
									<h3>Luno Malawi website </h3>
									<p><a href="#">was built under the pressure from fans of Latest Urban Noise Page, a facebook page</a></p>
								</li>
								<li>
									<h3>we promote music and artists</h3>
									<p><a href="#">call or whatsApp +265881704032 FOR PROMO</a></p>
								</li>
								<li>
									<p><a href="#">"SITIMAPWEKESA MMAZIWA KALE"</a></p>
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>About developers</h2>
							<p> LUNO MW was developed and its being mentained by FIBRES SOLUTIONS COMPANY. get your own website at a give away price </p>
							<ul class="style5">
								<li><a href="#"><img src="/images/ad2.png" alt=""></a></li>
								<li><a href="#"><img src="/images/ad3.png" alt=""></a></li>
								<li><a href="#"><img src="/images/ad4.png" alt=""></a></li>
								<li><a href="#"><img src="/images/ad5.png" alt=""></a></li>
							</ul>
							
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>Desclaimer</h2>
							<p><strong>This oage is totally for social purpose. </strong></p>
							<p>So you you feel offended take a deep breath and imagine yoursef having fun</p>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright" class="container">
			Design: <a href="http://Fibres.solutions.mw">FIBRES</a> SOLUTIONS 
		</div><?php /**PATH C:\xampp\htdocs\luno\LUNO-Malawi-master\LUNO-Malawi-master\resources\views/partials/footer.blade.php ENDPATH**/ ?>