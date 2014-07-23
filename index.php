<?php 
$pageKeywords = "modeling, seattle model, art";
$pageDescription = "I'm Aaron McCloud, a model in the Seattle area. Check out my site!";
$pageTitle = "Aaron McCloud Modeling";
$section = "home";
include('includes/header.php');
include('includes/nav.php');

?>


    <!-- Carousel
    ================================================== -->
      <div id="myCarousel" class="carousel slide fixed" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
         <img src="img/bg_01.jpg" alt="" />
            <div class="container">
              <div class="carousel-caption">
                <h1>Inspiration...</h1>
                <p class="lead">Hello, I'm Aaron McCloud, a model in the Seattle area.</p>
                <p><a class="btn btn-lg btn-primary" href="/pages/2012-photo-shoot.php" role="button">Browse Photos</a></p>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="img/bg_02.jpg" alt="" />
            <!-- <div id="csl-item2" class="carousel-image">&nbsp;</div>
            -->
            <div class="container">
              <div class="carousel-caption">
                <h1>Presence...</h1>
                <p>Look around my site, admire paintings, sculptures...</p>
                <p><a class="btn btn-lg btn-danger" href="/pages/art.php" role="button">Browse Art</a></p>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="img/bg_03.jpg" alt="" />
            <!-- <div id="csl-item3" class="carousel-image">&nbsp;</div>
            -->
            <div class="container">
              <div class="carousel-caption">
                <h1>Energy</h1>
                <p>...&amp; photography I've inspired.</p>
                <p><a class="btn btn-lg btn-warning" href="/pages/2012-photo-shoot.php" role="button">Browse Photos</a></p>
              </div>
            </div>
          </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- /.carousel -->



<?php include('includes/closing.php'); ?>





