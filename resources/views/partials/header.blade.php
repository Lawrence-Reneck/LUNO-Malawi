<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src="images/top.png" class="img-responsive" style="height: 150px"><span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a class="news" href="/view_breaking_news" >breaking news</a></li>
          <li><a href="/artists_all">artists</a></li>
          <!-- <li><a href="#events">Events</a></li> -->
          <li class="dropdown"><a href="#"><span>Top CHARTS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
			  <li><a href="#">Trending TOP 20</a></li>
              <li class="dropdown"><a href="#"><span>Gospel</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
					<li><a href="#">hiphop top 10</a></li>
                	<li><a href="#">melody top 10</a></li>
                	<li><a href="#">praise and whoship to top 10</a></li>
                </ul>
              </li>
			 
              <li><a href="#">Upcoming top 100</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact us</a></li>
          <li><a href="{{ route('login') }}">login</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table">Tugwirizane</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>