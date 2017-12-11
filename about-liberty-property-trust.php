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
        <div class="col-sm-8 border-right">
          <h1>About Liberty Property Trust</h1>
          <p>For more than four decades, Liberty has been evolving city skylines as a preeminent commercial developer. From the development of its first project in 1972 to today, Liberty continues to build a portfolio of groundbreaking projects such as Comcast Center, Liberty Place, Cambridge Biomedical Campus, The Navy Yard, The Camden Waterfront, Great Valley Corporate Center and the Comcast Technology Center. Understanding buildings from the ground-up gives Liberty teams the insight to provide solutions today, tomorrow and over the long term.</p>
          <p>Liberty is passionate about working with each client to develop successful office buildings that attract and retain the workforce of the future.</p>
        </div>
        <div class="col-sm-4">
          <h2>Core Strengths</h2>
          <ul>
            <li>Site Selection</li>
            <li>Visioning &amp; Project Conceptualization</li>
            <li>Planning &amp; Urban Design</li>
            <li>Project Budgeting</li>
            <li>Budgeting Management</li>
            <li>Schedule Management</li>
            <li>Stakeholder Communication</li>
            <li>Building Trust</li>
          </ul>
        </div>
      </div>

    </div>

    <div class="quote-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="quote">We have relied on our partnership with Liberty time and time again for a wide range of solutions involving myriad operations, different types of facilities, and diverse locations. No matter what the project, Liberty has brought creative thinking and exceptional execution to the process.<span>”</span></p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-offset-6 col-xs-6 col-md-offset-8 col-md-4 quote-person">
            <div class="title">Deirdre Connelly</div>
            <div>President,<br>North America Pharmaceuticals,<br>GSK GlaxoSmithKline</div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php'; ?>

  </body>
</html>