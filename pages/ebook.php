<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Carousel styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    <!-- My Custom CSS For This Project -->
    <link href="css/custom-styles.css" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.carousel.fullscreen.css" />

  </head>




<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper" id="top">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden-xs" href="#">Aaron McCloud Modeling</a>
              <a class="navbar-brand visible-xs" href="#">Aaron, Model</a>
              <a class="navbar-brand visible-xs" href="tel:+12069499806"><span class="glyphicon glyphicon-phone"></span>&nbsp;949-9806</a>
          </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <li class="active"><a href="#">Home</a></li>

                <li><a href="#resume">Résumé</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Artworks</a></li>
                    <li><a href="#">Recent Photos</a></li>
                    <li><a href="#">Nov. 2012 Shoot</a></li>
                  </ul>
                </li>

                <li class="hidden-sm hidden-xs"><a href="#refrences">Refrences</a></li>
                <li class="hidden-xs hidden-sm"><a href="#e-book">E-Book</a></li>
                <li class="hidden-sm hidden-xs hidden-md"><a href="#gift-certificates">Gift Certificates</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="hidden-xs"><a href="tel:+12069499806"><span class="glyphicon glyphicon-phone"></span>&nbsp(206) 949-9806</a></li>
                <li><a href="#contact" >Contact</a></li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </div>


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
                <p class="lead">Hello, I'm Aaron McCloud, a model in the Seattle area.<br />Look around my site, chekc out work I've inspired, and  contact me.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse Gallery</a></p>
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
                <p>Hello, I'm Aaron McCloud, a model in the Seattle area.<br />Look around my site, chekc out work I've inspired, and  contact me.</p>
                <p><a class="btn btn-lg btn-danger" href="#" role="button">Browse Gallery</a></p>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="img/bg_01.jpg" alt="" />
            <!-- <div id="csl-item3" class="carousel-image">&nbsp;</div>
            -->
            <div class="container">
              <div class="carousel-caption">
                <h1>Expression...</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-warning" href="#" role="button">Browse Gallery</a></p>
              </div>
            </div>
          </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<!--     <div class="container marketing">
 -->
      <!-- Three columns of text below the carousel -->
<!--       <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div> --><!-- /.col-lg-4 -->
<!--         <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div> --><!-- /.col-lg-4 -->
<!--         <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div> --><!-- /.col-lg-4 -->
      <!-- </div> --><!-- /.row -->


      <!-- START THE FEATURETTES -->

<!--       <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
 -->
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
<!--       <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div> --><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

    <!-- Make Carousel Full-Screen JS File -->
    <script src="js/jquery.carousel.fullscreen.js"></script>
  </body>
</html>
