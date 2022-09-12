<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('partials/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
  <!-- ======= Header ======= -->
  <?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><!-- End Header -->
  <!-- ======= Hero Section ======= -->
 <br>
 <main id="main">
<!-- ======= About Section ======= -->
<section id="news" class="news">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Yummy Menu</span></p>
        </div>
	    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
	   <div class="tab-pane fade active show" id="menu-starters">
	<div class="row gy-5">
  <?php echo $__env->make('partials/promoted_artists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section>


<?php echo $__env->make('partials/various_artists', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php echo $__env->make('partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><!-- End Footer -->
  <!-- End Footer -->
</body>
</html><?php /**PATH C:\xampp\htdocs\luno2\luno_malawi\resources\views/index.blade.php ENDPATH**/ ?>