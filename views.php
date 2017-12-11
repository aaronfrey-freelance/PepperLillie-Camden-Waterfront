<!doctype html>
<html class="no-js" lang="en">

  <?php
    $page_title = "The Camden Waterfront";
    $page_description = "The Camden Waterfront Website";
    include 'partials/head.php';
  ?>

  <body id="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>">
      
    <?php include 'partials/header.php'; ?>

    <div class="banner">
      <img src="img/views/banner.jpg" class="img-responsive">
    </div>

    <div class="container">

      <div class="row">

        <div class="content clearfix">

          <div class="col-md-offset-1 col-md-10">
            <h1>Views From the Waterfront</h1>
            <p>The Camden Waterfront is a highly visible location on the Delaware River. Each of the buildings within The Camden Waterfront Masterplan has sweeping panoramic views of the Waterfront Park, the Delaware River, the stunning Philadelphia skyline and the classically elegant Benjamin Franklin Bridge.</p>
            <img src="img/views/night-time.png" class="img-responsive">
          </div>

        </div>

      </div>
      
    </div>

    <?php include 'partials/footer.php'; ?>

  </body>
</html>