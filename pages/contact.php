<?php
$pageKeywords = "art modeling, model, art class";
$pageDescription = "Contact Aaron McCloud about modeling.";
$pageTitle = "Contact Aaron McCloud, Seattle Model";
$section="contact";
include('../includes/header.php');
include('../includes/nav.php');
?>

<div class="container-fluid">
  <div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">
      <div class="page-header top-space-2">
        <h1>Contact</h1>
      </div>
      <p class="lead">Please fill out the form below to contact me for modeling. I have reasonable rates for artists who want private art modeling (usually $20/hr). I will get back to you in 24 - 48 hours. I take cash, check, and credit card.</p>
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Cancelation Policy:</h3>
              </div>
              <div class="panel-body lead">
                If I schedule a session with you, that means that I turn down other work to make that session. You may cancel a session up to 48 hours prior at no cost. If you cancel 48 hours or closer to the session time, full payment is still required.
              </div>
            </div>
      <p class="lead"></p>
      </div>
    </div>

    <div class="col-sm-2">
    </div>

  </div>
</div>




    <!-- Contact Form
    ================================================== -->
<div class="container-fluid top-space">
  <div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">

      <p class="lead"><span class="glyphicon glyphicon-phone"></span>&nbsp;Cell: <a href="tel:+12069499806">(206) 949-9806</p></a>

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Your Message</h3>
        </div>
        <div class="panel-body">

          <form role="form" method="post" action="contact_me.php">

            <div class="form-group">
              <label for="full_name">Name</label>
              <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" rows="7" name="message" id="message" placeholder="Your message here..."></textarea>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-warning inner-center" value="Send&#33;">
            </div>

          </form>

        </div>
      </div>

    </div>

    <div class="col-sm-2">
    </div>

  <div class="row">
</div>









<?php
include('../includes/footer.php');
include('../includes/closing.php');
?>
