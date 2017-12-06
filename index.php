<!doctype html>
<html class="no-js" lang="en">

  <?php
    $page_title = "The Camden Waterfront";
    $page_description = "The Camden Waterfront Website";
    include 'partials/head.php';
  ?>

  <body id="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>">
      
    <?php include 'partials/header.php'; ?>

    <div class="container content">
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Custom -->
    <script src="js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  </body>
</html>
