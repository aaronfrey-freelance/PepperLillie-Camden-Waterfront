<!doctype html>
<html class="no-js" lang="en">

  <?php
    $page_title = "Business Tax Incentive Program | The Camden Waterfront";
    $page_description = "Grow NJ is a powerful job creation andretention program helping qualified companies succeed in New Jersey.  Within the Grow NJ Program, Camden is designated as a Garden State Growth Zone (GSGZ), which means The Camden Waterfront projects can qualify for the highest levels of economic tax incentives.";
    include 'partials/head.php';
  ?>

  <body id="<?php echo $page_name; ?>">
      
    <?php include 'partials/header.php'; ?>

    <div class="container-fluid">

      <div class="content">

        <div class="row grey-bg">
          <div class="col-md-12">
            <h1>Business Tax Incentive Program</h1>
            <h2>Grow New Jersey</h2>
            <p>Grow NJ is a powerful job creation and retention program helping qualified companies succeed in New Jersey.  Within the Grow NJ Program, Camden is designated as a Garden State Growth Zone (GSGZ), which means The Camden Waterfront projects can qualify for the highest levels of economic tax incentives. These incentives will cover 100% or more of the costs involved with creating a new office facility.</p>
          </div>
        </div><!-- .row -->

        <div class="row grey-bg">

          <div class="col-sm-6">

            <div class="hidden-xs">
              <?php include 'partials/incentives-callout.php'; ?>
            </div>

          </div>

          <div class="col-sm-6 text-center">
            <img src="img/incentives/info-graphic-top.svg" class="infographic-top">
          </div>

          <div class="hidden-xs">
            <?php include 'partials/incentives-list.php'; ?>
          </div>

        </div><!-- .row -->

        <div class="visible-xs">
          <?php include 'partials/incentives-callout.php'; ?>
          <?php include 'partials/incentives-list.php'; ?>
        </div>

      </div><!-- .content -->

    </div><!-- .container -->

    <div class="container-fluid">
      
      <div class="row">
        
        <div class="col-md-12">
          <img src="img/incentives/infographic-mobile.png" class="infographic visible-xs img-responsive">
          <img src="img/incentives/info-graphic-bottom.svg" class="infographic hidden-xs img-responsive">
        </div>

        <div class="col-md-12">
          <p class="more-info text-center hidden-xs">
            For more information on the NJ Grow Program in Camden, please visit the New Jersey Economic<br>
            Development Authority (NJEDA) website: <a href="http://www.njeda.com/pdfs/GSGZ_Camden.aspx" target="_blank">http://www.njeda.com/pdfs/GSGZ_Camden.aspx</a><br>
            <span>*Businesses should consult with the NJEDA to determine their maximum tax credit eligibility.</span>
          </p>          
        </div>

      </div><!-- .row -->

    </div>

    <?php include 'partials/footer.php'; ?>

  </body>
</html>