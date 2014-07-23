<!-- NAVBAR
================================================== -->
  <body>
    <?php include_once("analyticstracking.php") ?>
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
              <a class="navbar-brand hidden-xs" href="/index.php">Aaron McCloud Modeling</a>
              <a class="navbar-brand visible-xs" href="/index.php">Aaron, Model</a>
              <a class="navbar-brand visible-xs" href="tel:+12069499806"><span class="glyphicon glyphicon-phone"></span>&nbsp;949-9806</a>
          </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <!-- <li class="active"><a href="#">Home</a></li> -->

                <li class="<?php if ($section == "resume") { echo "active"; } ?>"><a href="/pages/resume.php">Résumé</a></li>

                <li class="dropdown <?php if ($section == "art") { echo "active"; } ?>
                  <?php if ($section == "recent") { echo "active"; } ?>
                  <?php if ($section == "2012") { echo "active"; } ?>
                ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if ($section == "art") { echo "active"; } ?>"><a href="/pages/art.php">Artworks</a></li>
                    <li class="<?php if ($section == "recent") { echo "active"; } ?>"><a href="/pages/recent-photos.php">Recent Photos</a></li>
                    <li class="<?php if ($section == "2012") { echo "active"; } ?>"><a href="/pages/2012-photo-shoot.php">Nov. 2012 Shoot</a></li>
                  </ul>
                </li>

                <li class="hidden-sm hidden-xs <?php if ($section == "references") { echo "active"; } ?>" ><a href="/pages/references.php">References</a></li>
                <!-- <li class="hidden-xs hidden-sm"><a href="/pages/ebook.php">E-Book</a></li> -->
                <!-- <li class="hidden-sm hidden-xs hidden-md"><a href="/pages/gift-certificates.php">Gift Certificates</a></li> -->
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="hidden-xs"><a href="tel:+12069499806"><span class="glyphicon glyphicon-phone"></span>&nbsp(206) 949-9806</a></li>
                <li class="<?php if ($section == "contact") { echo "active"; } ?>"><a href="/pages/contact.php" >Contact</a></li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </div>
