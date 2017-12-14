<nav class="navbar navbar-fixed-top">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-primary" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">
        <img src="img/logo.png" class="img-responsive">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-primary">
      <div class="mobile-brand">
        <a href="index">
          <img src="img/logo.png" class="img-responsive">
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button">Why Camden Waterfront</a>
          <ul class="dropdown-menu">
            <li><a class="btn disabled">Why Camden Waterfront</a></li>
            <li><a href="location">Location</a></li>
            <li><a href="tax-incentives">Tax Incentives</a></li>
            <li><a href="talent-attraction">Talent Attraction</a></li>
            <li><a href="views">Views</a></li>
            <li><a href="https://www.youtube.com/watch?v=DtBocfjf1l8&app=desktop" target="_blank">Video Tour</a></li>
          </ul>
        </li>
        <li class="<?php echo $page_name === 'the-waterfront-community' ? 'active' : ''; ?>">
          <a href="the-waterfront-community">The Waterfront Community</a>
        </li>
        <li class="<?php echo $page_name === 'build-to-suit-opportunities' ? 'active' : ''; ?>">
          <a href="build-to-suit-opportunities">Build-to-Suit-Opportunities</a>
        </li>
        <li class="<?php echo $page_name === 'about-liberty-property-trust' ? 'active' : ''; ?>">
          <a href="about-liberty-property-trust">About Liberty Property Trust</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div>

</nav>