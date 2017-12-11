<!doctype html>
<html class="no-js" lang="en">

  <?php
    $page_title = "The Camden Waterfront";
    $page_description = "The Camden Waterfront Website";
    include 'partials/head.php';
  ?>

  <body id="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>">
      
    <?php include 'partials/header.php'; ?>

    <div class="home-banner">
      <a href="#" class="btn btn-primary video_tour">Video Tour</a>
      <div class="pan-container">
        <div class="pan-image"></div>
      </div>
      <span>The Camden Waterfront</span>
    </div>

    <div class="content text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <h1>The Future on the Horizon</h1>
            <h2>The Camden Waterfront is an entirely new mixed-use urban neighborhood on the banks of the Delaware River with dramatic views of the stunning Philadelphia skyline and Benjamin Franklin Bridge.</h2>
            <h2>Defined by progressive architecture and vibrant activity throughout the day, The Camden Waterfront will consist of up to 1.2 million square feet of high-performance office space, a 180-room hotel, apartment living, retail amenities and an expanded and improved public park.</h2>
          </div>
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php'; ?>

  </body>
</html>