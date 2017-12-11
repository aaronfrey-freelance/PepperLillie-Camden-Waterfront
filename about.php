<!doctype html>
<html class="no-js" lang="en">

  <?php
    $page_title = "The Camden Waterfront";
    $page_description = "The Camden Waterfront Website";
    include 'partials/head.php';
  ?>

  <body id="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>">
      
    <?php include 'partials/header.php'; ?>

    <!-- 1645px -->
    <div class="img-container clearfix">
      <div style="background-image: url('img/about/about-01.png');"></div>
      <div style="background-image: url('img/about/about-02.png');"></div>
      <div style="background-image: url('img/about/about-03.png');"></div>
    </div>

    <div class="container content">
      <div class="row">
        <div class="col-md-12">
          This is where content goes
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php'; ?>

  </body>
</html>