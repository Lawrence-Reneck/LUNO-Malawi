<!DOCTYPE html>
<html lang="en">

@include('partials/head')

<body>
  <!-- ======= Header ======= -->
  @include('partials/header')<!-- End Header -->
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
  @include('partials/promoted_artists')
<section>


@include('partials/various_artists')

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  @include('partials/footer')<!-- End Footer -->
  <!-- End Footer -->
</body>
</html>