<style>
.widget-content li {
    list-style-type: disc !important;
    
    margin-left: 0;
    margin-right: 0;
}
.widget-content ul{
	padding-left: 5%;
}
.page-header {
    background-image: url(/career/img/bgheader.png);
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	padding-top:3px;
}
.pie-progress-content, .pie-progress-number, .pie-progress-label, .pie-progress .pie-progress-icon
{
	top:40% !important;
}
</style>
<?php $this->set('title', 'Dashboard'); ?>

<div class="page-header height-200 margin-bottom-30">
      <div class="margin-top-20">
			<div style="float:left;width:50%;text-align:left;color:#000; font-size:18px;">
				<strong><span style="font-size:22px;"><?= $job_seeker_name ?></span><br/><?= $located_city ?><br/>Android Development</strong>
			</div>
			<div style="float:right;width:130px;" align="right">
				<div class="pie-progress pie-progress-md center-block" id="performancePieApi" data-plugin="pieProgress"
				data-barcolor="#fa7a7a" data-goal="75" aria-valuenow="75" data-size="350" data-barsize="10"
				aria-valuemin="0" aria-valuemax="100" role="progressbar">
					<div class="pie-progress-number" style="color:#000; font-size:20px;"><strong>75%</strong></div>
					<div class="pie-progress-label" style="color:#000; font-size:15px;"><strong><br/>Performance<br/>Level</strong></div>
				</div>
			</div>
      </div>
    </div>
<div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
		<div class="col-xlg-3 col-lg-4 col-md-12" style="height: 536px;">
          <!-- Panel Web Designer -->
          <div class="widget widget-shadow">
            <div class="widget-content text-center bg-white padding-40">
              <div class="margin-bottom-20">
                <b>Resume Writer</b>
              </div>
              <p class="margin-bottom-35" style="text-align: justify;">
			  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              
              <button type="button" class="btn  padding-horizontal-40" style="background-color: rgba(140, 211, 165, 1); width:190px; color:#FFF;margin-bottom:5px;">View more Tips</button>
			  <button type="button" class="btn  padding-horizontal-40" style="background-color: rgba(77, 57, 75, 1); width:190px; color:#FFF;margin-bottom:5px;">Update Your Resume</button>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>
		<div class="col-xlg-3 col-lg-4 col-md-12" style="height: 536px;">
          <!-- Panel Web Designer -->
          <div class="widget widget-shadow">
            <div class="widget-content text-center bg-white padding-40">
              <div class="margin-bottom-20">
                <b>Assesments</b>
              </div>
			  <div class="example text-left max-width">
                  <canvas id="exampleChartjsDonut" height="200"></canvas>
                </div>
				<p style="text-align: left;"><b>Upcoming Assessment</b></p>
				<ul style="text-align: left;">
					<ul>
					<li>Mock-Software Development<br/>28-09-2017</li>
					<li>Mock-Java Testing<br/>01-10-2017</li>
					<li>Mock-Advanced Algorithm<br/>13-10-2017</li>
					</ul>
				</ul>
              
              <button type="button" class="btn padding-horizontal-40" style="background-color: rgba(77, 57, 75, 1); color:#FFF;margin-top:10px;">View All</button>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>
		<div class="col-xlg-3 col-lg-4 col-md-12" style="height: 536px;">
          <!-- Panel Web Designer -->
          <div class="widget widget-shadow">
            <div class="widget-content text-center bg-white padding-40">
              <div class="margin-bottom-20">
                <b>Jobs</b>
              </div>
			  <div class="example text-left max-width">
                  <canvas id="recommendedChartjsDonut" height="200"></canvas>
                </div>
				<p style="text-align: left;"><b>Recommended Jobs</b></p>
				<ul style="text-align: left;">
					<ul>
					<li>ReactNative Developer<br/>Bangalore</li>
					<li>Javascript Developer<br/>Chennai</li>
					<li>SAP Expert<br/>Mumbai</li>
					</ul>
				</ul>
              
              <button type="button" class="btn padding-horizontal-40" style="background-color: rgba(77, 57, 75, 1); color:#FFF;margin-top:10px;">View All</button>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>
</div>   
</div>   

<style>
/* .dashboard .page-header {
  background-image: url("<?php echo $this->request->webroot; ?>assets/images/dashboard2-header.jpg");
  -webkit-background-size: cover;
          background-size: cover;
} */
</style>
<?php //echo $this->Html->css('/assets/examples/css/dashboard/v2.css', ['block' => 'Dashboard2']); ?>
<!-- Donut Chart -->
<?php echo $this->Html->css('/assets/examples/css/charts/chartjs.css', ['block' => 'cssChart']); ?>
<?php $this->Html->script('/assets/vendor/chart-js/Chart.js', ['block' => 'jsChart']); ?>

<!--  Pi Chart ---->
<?php $this->Html->css('/assets/vendor/aspieprogress/asPieProgress.css', ['block' => 'cssPiChart']); ?>
<?php $this->Html->css('/assets/examples/css/charts/pie-progress.css', ['block' => 'cssPiChart']); ?>
<?php $this->Html->script('/assets/vendor/aspieprogress/jquery-asPieProgress.js', ['block' => 'jsPiChart']); ?>

<?php $this->Html->script('/assets/js/components/aspieprogress.js', ['block' => 'jsPiChart1']); ?>

<!--- Match Height  --->
<?php $this->Html->script('/assets/vendor/matchheight/jquery.matchHeight-min.js', ['block' => 'jsMatchHeight']); ?>
<?php $this->Html->script('/assets/js/components/matchheight.js', ['block' => 'jsMatchHeight1']); ?>

<!-- Index Js -->
<?php $this->Html->script('/js/JobSeekers/index.js', ['block' => 'jsIndex']); ?>


