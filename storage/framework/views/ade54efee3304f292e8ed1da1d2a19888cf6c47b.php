<?php $__currentLoopData = $promoted_artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promoted_artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-2 menu-item">
<center>
	  <a href="<?php echo e(('/storage/imagesORartworks/'.$promoted_artist->profile_picture)); ?>" ><img src="<?php echo e(('/storage/imagesORartworks/'.$promoted_artist->profile_picture)); ?>" class="rounded-circle" alt=""></a>
	  <h4><?php echo e($promoted_artist->stage_name); ?></h4>
	  <p class="ingredients">
	  <?php echo e($promoted_artist->residence); ?>/<?php echo e($promoted_artist->genre_known_with); ?>

	  </p>

	  <p class="price">
      <h5>  <button class="btn btn-sm"><a href="/show_artist/<?php echo e($promoted_artist->stage_name); ?>">view & download</a></button> </h5>
	  </p>
	  </center> 
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\luno2\luno_malawi\resources\views/partials/promoted_artists.blade.php ENDPATH**/ ?>