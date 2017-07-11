<style>
.panel-title,.pearl-title,.page-dark.layout-full {
    color: #FFF !important;
}
.form-control {
border:1px solid #FFF !important;
}
.trans{
	background: #0009;
border-radius: 20px;
}
.accordian-trans{
	background: #0000;
	border:1px solid #FFF;
}
table td,th {
    color: #FFF !important;
}
.wizard-pane {
  position: absolute;
  top: 0;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity .2s ease;
       -o-transition: opacity .2s ease;
          transition: opacity .2s ease;
}
.wizard-pane.active {
  position: relative;
  visibility: visible;
  opacity: 1;
}
.wizard-pane.activing {
  visibility: visible;
}
.wizard-content {
  position: relative;
  padding: 0;
  -webkit-transition: height .2s ease;
       -o-transition: height .2s ease;
          transition: height .2s ease;
}
.disabledElement {
    pointer-events: none;
    opacity: 0.4;
}
.black-color{
	color: #000 !important;
}
.margin{
	margin-bottom: 5px;
}
</style>
<?php $this->set('title', 'Registrations'); ?>

<!-- Page -->

<div class="page animsition">
	<div class="page-content container-fluid">
		<div class="row">
		<?= $this->Form->create($jobSeeker,['id'=>'registrationForm','class'=>'form-horizontal','style'=>'width: 80% !important;','type'=>'file']) ?>
			<div class="col-md-12">
			<!-- Panel Wizard Form -->
				<div class="panel trans" id="exampleWizardForm">
					<div class="panel-heading">
					  <h3 class="panel-title"></h3>
					</div>
					<div class="panel-body">
						<!-- Steps -->
						<div class="pearls row">
							<div class="pearl current col-xs-4 first_step">
								<div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
								<span class="pearl-title">Personal</span>
							</div>
							<div class="pearl col-xs-4 second_step">
								<div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
								<span class="pearl-title">Academic</span>
							</div>
							<div class="pearl col-xs-4 last_step">
								<div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
								<span class="pearl-title">Job</span>
							</div>
						</div>
						<!-- End Steps -->

						<!-- Wizard Content -->
						<div class="wizard-content ">
							<div class="wizard-pane col-md-4 col-sm-offset-4 active" id="personal_info" role="tabpanel">

									<div class="form-group">
										<?php echo $this->Form->control('name',['class'=>'form-control','placeholder'=>'Full Name','label'=>false,'required'=>'required','id'=>'inputName']); ?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->control('mobile_no',['class'=>'form-control','placeholder'=>'Mobile No.','label'=>false,'required'=>'required','id'=>'inputMobileNo']); ?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->control('email',['class'=>'form-control','placeholder'=>'Email','label'=>false,'required'=>'required','id'=>'inputEmail']); ?>
										</div>
									
									<div class="form-group">
										<?php echo $this->Form->control('password',['class'=>'form-control','placeholder'=>'Password','label'=>false,'data-fv-notempty'=>'true','data-fv-notempty-message'=>'The password is required and cannot be empty','data-fv-identical'=>'true','data-fv-identical-field'=>'retype_password','data-fv-identical-message'=>'The password and its confirm are not the same','id'=>'inputPassword','required'=>'required']); ?>
									</div>
									
									<div class="form-group">
										<?php echo $this->Form->control('retype_password',['type'=>'password','class'=>'form-control','placeholder'=>'Retype Password','label'=>false,'data-fv-notempty'=>'true','data-fv-notempty-message'=>'The confirm password is required and cannot be empty','data-fv-identical'=>'true','data-fv-identical-field'=>'password','data-fv-identical-message'=>'The password and its confirm are not the same','required'=>'required','id'=>'inputPasswordConfirm']); ?>
										
									</div>
									<div class="form-group">
									<?= $this->Form->button(__('Next'),['class'=>'btn btn-gradient btn-block','type'=>'button','id'=>'first_step']) ?>
									</div>
									
									<center><p>Already registered? <?php echo $this->Html->link('Login', array('controller' => 'JobSeekers', 'action' => 'login'));  ?></p></center>
									</div>
									
								
							<div class="wizard-pane" id="academic_info" role="tabpanel">
								<div class="col-lg-12">
									<!-- Example Continuous Accordion -->
									<div class="examle-wrap black-color">
									  <div class="example">
										<div class="panel-group panel-group-continuous" id="exampleAccordionContinuous"
										aria-multiselectable="true" role="tablist">
										  <div class="panel accordian-trans">
											<div class="panel-heading" id="exampleHeadingContinuousOne" role="tab">
											  <a class="panel-title" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
											  href="#exampleCollapseContinuousOne" aria-controls="exampleCollapseContinuousOne"
											  aria-expanded="true">
											  10th
											</a>
											</div>
											<div class="panel-collapse collapse in" id="exampleCollapseContinuousOne" aria-labelledby="exampleHeadingContinuousOne"
											role="tabpanel">
											  <div class="panel-body">
												<div class="form-group">
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[0][degree_type]',['label'=>false,'type'=>'hidden','value'=>'10th','class'=>'']); ?>
													<?php echo $this->Form->control('job_seeker_rows[0][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'required'=>'required','id'=>'10_institute_name']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[0][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'required'=>'required','id'=>'10_location']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[0][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'required'=>'required','id'=>'10_percentage_cgpa']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[0][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'required'=>'required','id'=>'10_passed_out_year']); ?>
													</div>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="panel accordian-trans">
											<div class="panel-heading" id="exampleHeadingContinuousTwo" role="tab">
											  <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
											  href="#exampleCollapseContinuousTwo" aria-controls="exampleCollapseContinuousTwo"
											  aria-expanded="false">
											  12th/Intermediate
											</a>
											</div>
											<div class="panel-collapse collapse" id="exampleCollapseContinuousTwo" aria-labelledby="exampleHeadingContinuousTwo"
											role="tabpanel">
											  <div class="panel-body">
												<div class="form-group">
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[1][degree_type]',['label'=>false,'type'=>'hidden','value'=>'Intermediate','class'=>'']); ?>
													
													<?php echo $this->Form->control('job_seeker_rows[1][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'required'=>'required','id'=>'12_institute_name']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[1][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'required'=>'required','id'=>'12_location']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[1][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'required'=>'required','id'=>'12_percentage_cgpa']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[1][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'required'=>'required','id'=>'12_passed_out_year']); ?>
													</div>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="panel  accordian-trans">
											<div class="panel-heading" id="exampleHeadingContinuousThree" role="tab">
											  <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
											  href="#exampleCollapseContinuousThree" aria-controls="exampleCollapseContinuousThree"
											  aria-expanded="false">
											  Degree
											</a>
											</div>
											<div class="panel-collapse collapse" id="exampleCollapseContinuousThree" aria-labelledby="exampleHeadingContinuousThree"
											role="tabpanel">
											  <div class="panel-body">
												<div class="form-group">
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[2][degree_type]',['label'=>false,'type'=>'hidden','value'=>'Intermediate','class'=>'']); ?>
													<?php echo $this->Form->control('job_seeker_rows[2][degree_name]',['class'=>'form-control','placeholder'=>'Degree Name','label'=>false,'id'=>'degree_degree_name']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[2][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'id'=>'degree_institute_name']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[2][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'id'=>'degree_location']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[2][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'id'=>'degree_percentage_cgpa']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[2][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'id'=>'degree_passed_out_year']); ?>
													</div>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="panel  accordian-trans">
											<div class="panel-heading" id="exampleHeadingContinuousFour" role="tab">
											  <a class="panel-title collapsed" data-parent="#exampleAccordionContinuous" data-toggle="collapse"
											  href="#exampleCollapseContinuousFour" aria-controls="exampleCollapseContinuousFour"
											  aria-expanded="false">
											  PG
											</a>
											</div>
											<div class="panel-collapse collapse" id="exampleCollapseContinuousFour" aria-labelledby="exampleHeadingContinuousFour"
											role="tabpanel">
											  <div class="panel-body">
												<div class="form-group">
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[3][degree_type]',['label'=>false,'type'=>'hidden','value'=>'Intermediate','class'=>'']); ?>
													<?php echo $this->Form->control('job_seeker_rows[3][degree_name]',['class'=>'form-control','placeholder'=>'Degree Name','label'=>false,'id'=>'pg_degree_name']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[3][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'id'=>'degree_institute_name']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[2][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'id'=>'pf_location']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[3][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'id'=>'pg_percentage_cgpa']); ?>
													</div>
													<div class="col-md-3 margin">
													<?php echo $this->Form->control('job_seeker_rows[3][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'id'=>'pg_passed_out_year']); ?>
													</div>
												</div>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
									<!-- End Example Continuous Accordion -->
								  </div>
								<?= $this->Form->button(__('Next'),['class'=>'btn btn-gradient pull-right','type'=>'button','id'=>'second_step']) ?>
								<?= $this->Form->button(__('Back'),['class'=>'btn btn-default pull-left','type'=>'button','id'=>'second_step_back']) ?>
							</div>
							<div class="wizard-pane" id="exampleGetting" role="tabpanel">
								<div class="form-group">
										<div class="col-sm-5">
											<?php echo $this->Form->control('located_city',['class'=>'form-control','placeholder'=>'Located City','label'=>false,'required'=>'required']); ?>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-5">
											<?php echo $this->Form->control('skill_set',['class'=>'form-control','placeholder'=>'Skill Set','label'=>false,'required'=>'required']); ?>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-5">
											<?php echo $this->Form->control('job_profile',['class'=>'form-control','placeholder'=>'Job Profile','label'=>false,'required'=>'required']); ?>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-5">
											<?php echo $this->Form->control('profile_document',['class'=>'form-control','placeholder'=>'Job Profile','label'=>false,'required'=>'required','type'=>'file']); ?>
										</div>
									</div>
									<?= $this->Form->button(__('Next'),['class'=>'btn btn-success pull-right','id'=>'last_step']) ?>
							</div>
						</div>
					<!-- End Wizard Content -->

					</div>
				</div>
			<!-- End Panel Wizard One Form -->
			
			</div>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
  <!-- End Page -->
<?php //echo $this->Html->css('/assets/vendor/jquery-wizard/jquery-wizard.css', ['block' => 'cssWizard']); ?>
<?php echo $this->Html->script('/js/JobSeekers/add.js', ['block' => 'scriptJobSeekeersAdd']); ?>
<?php //echo $this->Html->script('/assets/vendor/matchheight/jquery.matchHeight-min.js', ['block' => 'scriptWizard1']); ?>
<?php //echo $this->Html->script('/assets/vendor/jquery-wizard/jquery-wizard.js', ['block' => 'scriptWizard1']); ?>
<?php //echo $this->Html->script('/assets/js/components/jquery-wizard.js', ['block' => 'scriptWizard2']); ?>
<?php //echo $this->Html->script('/assets/js/components/matchheight.js', ['block' => 'scriptWizard2']); ?>
<?php //echo $this->Html->script('/assets/examples/js/forms/wizard.js', ['block' => 'scriptWizard2']); ?>
