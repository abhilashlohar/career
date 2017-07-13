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
    background-image: url(/img/bgheader.png);
    -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
</style>
<?php $this->set('title', 'Dashboard'); ?>
<!--
<div style="position: relative;">
	<?php echo $this->Html->image('/img/dashboard2.svg',['width'=>'100%']); ?>
	<div style="position: absolute;top: 0;bottom: 0;right: 0;left: 0;">
		<table width="100%">
			<tr>
				<td width="50%">
					<div style="width: 60%;margin: auto;margin-top: 5%;">
					<span style="font-size: 32px;color: rgba(77, 57, 75, 1);font-family: 'HelveticaNeue';"><?= $job_seeker_name ?></span><br/>
					<span style="font-size: 18px;color: rgba(77, 57, 75, 1);font-family: 'HelveticaNeue';"><?= $located_city ?></span><br/>
					<span style="font-size: 18px;color: rgba(77, 57, 75, 1);font-family: 'HelveticaNeue';">Android Development</span>
					</div>
				</td>
				<td width="50%">
					<div class="col-md-2 pull-right" style="width:85px;border:2px solid black;border-radius: 59%;height: 83px;text-align: center;padding-top: 6%;font-size: 15px;font-weight: 700;margin: auto;margin-top: 8%;margin-right: 15%;" >
					  63%
					</div>
					<div class="pull-right" style="width:200px;text-align: right;padding-top: 6%;font-size: 15px;margin: auto;margin-top: 19%;margin-right: -19%;color:#000;" >
					  Performance Level
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
-->

<div class="page-header height-300 margin-bottom-30">
      <div class="margin-top-30">
        
        <ul class="list-inline font-size-14">
          <li class="col-md-6" style="text-align:left;color:#000; font-size:18px;">
           <?= $job_seeker_name ?><br/><?= $located_city ?><br/>Android Development
          </li>
          <li class="col-md-6" style="text-align:right">
		  <svg height="100" width="100" style="margin-right: 5%;">
				<circle cx="50" cy="50" r="40" stroke="black" stroke-width="9" fill="white" fill-opacity="0" />
				<text x="50%" y="50%" text-anchor="middle" stroke="rgb(0, 0, 0)" stroke-width="2px" dy=".3em">63%</text>
		  </svg>
		  <p style="color:#000; font-size:18px;">Performance Level</p>
          </li>
        </ul>
      </div>
    </div>
<div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
		<div class="col-lg-4" style="height: 536px;">
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
		<div class="col-lg-4" style="height: 536px;">
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
              
              <button type="button" class="btn padding-horizontal-40" style="background-color: rgba(77, 57, 75, 1); color:#FFF;">View All</button>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>
		<div class="col-lg-4" style="height: 536px;">
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
              
              <button type="button" class="btn padding-horizontal-40" style="background-color: rgba(77, 57, 75, 1); color:#FFF;">View All</button>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>
</div>   
</div>   
   
<?php echo $this->Html->css('/assets/examples/css/dashboard/v2.css', ['block' => 'Dashboard2']); ?>

<style>
/* .dashboard .page-header {
  background-image: url("<?php echo $this->request->webroot; ?>assets/images/dashboard2-header.jpg");
  -webkit-background-size: cover;
          background-size: cover;
} */
</style>
<?php echo $this->Html->css('/assets/examples/css/charts/chartjs.css', ['block' => 'cssChart']); ?>
<?php $this->Html->script('/assets/vendor/chart-js/Chart.js', ['block' => 'jsChart']); ?>
<?php $this->Html->script('/assets/examples/js/charts/chartjs.js', ['block' => 'jsChart1']); ?>