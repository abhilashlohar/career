<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    
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

	<!-- Plugins For This Page validation-->
	<?= $this->fetch('cssWizard')?>
	<?php echo $this->Html->css('/assets/vendor/formvalidation/formValidation.css'); ?>
	
	<!-- Page -->
	<?php echo $this->Html->css('/assets/examples/css/pages/register.css'); ?>
	
	<!-- Fonts -->
	<?php echo $this->Html->css('/assets/fonts/web-icons/web-icons.min.css'); ?>
	<?php echo $this->Html->css('/assets/fonts/brand-icons/brand-icons.min.css'); ?>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

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
<body class="page-register layout-full page-dark">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
	<?= $this->fetch('content') ?>


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
  <?php echo $this->Html->script('/assets/vendor/jquery-placeholder/jquery.placeholder.js'); ?>
  
  <!-- Plugins For This Page validation -->
  <?php echo $this->Html->script('/assets/vendor/formvalidation/formValidation.min.js'); ?>
  <?php echo $this->Html->script('/assets/vendor/formvalidation/framework/bootstrap.min.js'); ?>

  <!-- Scripts -->
   <?= $this->fetch('scriptWizard1')?>
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
  <?= $this->fetch('scriptWizard2')?>
  <!-- Scripts For This Page -->
  <?php echo $this->Html->script('/assets/js/components/jquery-placeholder.js'); ?>
  <?php echo $this->Html->script('/assets/js/components/animate-list.js'); ?>
  
  <!-- Scripts For This Page validation -->
  <?= $this->fetch('scriptBottom')?>
  <?= $this->fetch('scriptJobSeekeersAdd')?>
  
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>
</html>
