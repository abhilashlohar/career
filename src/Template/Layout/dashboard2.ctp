<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">

	<title><?php echo $title; ?></title>

	<link rel="icon" href="<?php $this->request->webroot; ?>assets/images/apple-touch-icon.png" type="image/gif" sizes="16x16">

	<!-- Stylesheets -->
	<?php echo $this->Html->css('/assets/css/bootstrap.min.css'); ?>
	<?php echo $this->Html->css('/assets/css/bootstrap-extend.min.css'); ?>
	<?php echo $this->Html->css('/assets/css/site.min.css'); ?>

	<!-- Plugins -->
	<?php echo $this->Html->css('/assets/vendor/animsition/animsition.css'); ?>
	<?php echo $this->Html->css('/assets/vendor/asscrollable/asScrollable.css'); ?>
	<?php echo $this->Html->css('/assets/vendor/switchery/switchery.css'); ?>
	<?php echo $this->Html->css('/assets/vendor/intro-js/introjs.css'); ?>
	<?php echo $this->Html->css('/assets/vendor/slidepanel/slidePanel.css'); ?>
	<?php echo $this->Html->css('/assets/vendor/flag-icon-css/flag-icon.css'); ?>

	<!-- Fonts -->
	<?php echo $this->Html->css('/assets/fonts/web-icons/web-icons.min.css'); ?>
	<?php echo $this->Html->css('/assets/fonts/brand-icons/brand-icons.min.css'); ?>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!-- Page -->
	<?php echo $this->Html->css('/assets/examples/css/dashboard/v2.css'); ?>

	<!--[if lt IE 9]>
	<script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	<script src="../../assets/vendor/media-match/media.match.min.js"></script>
	<script src="../../assets/vendor/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Scripts -->
	<?php echo $this->Html->script('/assets/vendor/modernizr/modernizr.js'); ?>
	<?php echo $this->Html->script('/assets/vendor/breakpoints/breakpoints.js'); ?>
	<script>
		Breakpoints();
	</script>
</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <?php echo $this->Html->image('/img/logo.png',['class'=>'navbar-brand-logo']); ?>
		<span class="navbar-brand-text"> Entry Hires</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button" style="height: 64px;">
			<b>Abhilash <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></b>
			</a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
				<?php echo $this->Html->link('<i class="icon wb-power" aria-hidden="true"></i> Logout', array('controller' => 'CorporateUsers', 'action' => 'logout'),['escape'=>false,'role'=>'menuitem']);  ?>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      
    </div>

  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
			<li class="site-menu-item ">
              <a href="#" data-slug="dashboard">
                <?php echo $this->Html->image('/img/dashboard.png',['class'=>'site-menu-icon wb-dashboard','aria-hidden'=>'true','style'=>'font-size: 24px;']); ?>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
			<li class="site-menu-item ">
              <a href="#" data-slug="My Profile">
                <?php echo $this->Html->image('/img/profile.png',['class'=>'site-menu-icon wb-dashboard','aria-hidden'=>'true','style'=>'font-size: 24px;']); ?>
                <span class="site-menu-title">My Profile</span>
              </a>
            </li>
			<li class="site-menu-item ">
              <a href="#" data-slug="My Account">
                <?php echo $this->Html->image('/img/account.png',['class'=>'site-menu-icon wb-dashboard','aria-hidden'=>'true','style'=>'font-size: 24px;']); ?>
                <span class="site-menu-title">My Account</span>
              </a>
            </li>
			<li class="site-menu-item ">
              <a href="#" data-slug="Search Jobseeker">
                <?php echo $this->Html->image('/img/profile.png',['class'=>'site-menu-icon wb-dashboard','aria-hidden'=>'true','style'=>'font-size: 24px;']); ?>
                <span class="site-menu-title">Search Jobseeker</span>
              </a>
            </li>
			<li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="Jobs">
                <?php echo $this->Html->image('/img/jobs.png',['class'=>'site-menu-icon wb-dashboard','aria-hidden'=>'true','style'=>'font-size: 24px;']); ?>
                <span class="site-menu-title">Jobs</span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="#" data-slug="dashboard-v1">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Post Job</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="#" data-slug="dashboard-v2">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Jobs Posted</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>


  <!-- Page -->
  <div class="page">
	<?php echo $this->fetch('content'); ?>
  </div>
  <!-- End Page -->

  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>


  

  <!-- Core  -->
  <?php echo $this->Html->script('/assets/vendor/jquery/jquery.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/bootstrap/bootstrap.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/animsition/jquery.animsition.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/asscroll/jquery-asScroll.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/mousewheel/jquery.mousewheel.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/asscrollable/jquery.asScrollable.all.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/ashoverscroll/jquery-asHoverScroll.js'); ?>

  <!-- Plugins -->
  <?php echo $this->Html->script('/assets/vendor/switchery/switchery.min.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/intro-js/intro.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/screenfull/screenfull.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/slidepanel/jquery-slidePanel.js'); ?>

  <!-- Plugins For This Page -->
  <?php echo $this->Html->script('/assets/vendor/chartist-js/chartist.min.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/gmaps/gmaps.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/matchheight/jquery.matchHeight-min.js'); ?>

 <!-- Scripts -->
  <?php echo $this->Html->script('/assets/js/core.js'); ?>
  <?php echo $this->Html->script('/assets/js/site.js'); ?>

  <?php echo $this->Html->script('/assets/js/sections/menu.js'); ?>
  <?php echo $this->Html->script('/assets/js/sections/menubar.js'); ?>
  <?php echo $this->Html->script('/assets/js/sections/gridmenu.js'); ?>
  <?php echo $this->Html->script('/assets/js/sections/sidebar.js'); ?>

  <?php echo $this->Html->script('/assets/js/configs/config-colors.js'); ?>
  <?php echo $this->Html->script('/assets/js/configs/config-tour.js'); ?>

  <?php echo $this->Html->script('/assets/js/components/asscrollable.js'); ?>
  <?php echo $this->Html->script('/assets/js/components/animsition.js'); ?>
  <?php echo $this->Html->script('/assets/js/components/slidepanel.js'); ?>
  <?php echo $this->Html->script('/assets/js/components/switchery.js'); ?>

  <!-- Scripts For This Page -->
  <?php echo $this->Html->script('/assets/js/components/gmaps.js'); ?>
  <?php echo $this->Html->script('/assets/js/components/matchheight.js'); ?>

  <?php echo $this->Html->script('/assets/examples/js/dashboard/v2.js'); ?>
</body>

</html>