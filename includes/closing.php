    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>

    <!-- Lightbox Gallery JS -->
    <?php if($_SERVER['PHP_SELF'] == '/pages/art.php') { ?>
      <script src="/js/jquery-1.11.0.min.js"></script>
      <script src="/js/lightbox.min.js"></script>
    <? } ?>

    <?php if($_SERVER['PHP_SELF'] == '/pages/recent-photos.php') { ?>
      <script src="/js/jquery-1.11.0.min.js"></script>
      <script src="/js/lightbox.min.js"></script>
    <? } ?>

    <?php if($_SERVER['PHP_SELF'] == '/pages/2012-photo-shoot.php') { ?>
      <script src="/js/jquery-1.11.0.min.js"></script>
      <script src="/js/lightbox.min.js"></script>
    <? } ?>
    

    <!-- Make Carousel Full-Screen JS -->
    <?php if($_SERVER['PHP_SELF'] == '/index.php') { ?>
      <script src="/js/jquery.carousel.fullscreen.js"></script>
    <? } ?>
    
  </body>
</html>
