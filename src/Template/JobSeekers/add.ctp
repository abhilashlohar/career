<style>
.panel-title,.pearl-title,.page-dark.layout-full {
    color: #FFF !important;
}
.form-control {
border:1px solid #FFF !important;
}
.trans{
	background-color: #FFF0 !important;
}
table td,th {
    color: #FFF !important;
}

</style>
<?php $this->set('title', 'Registrations'); ?>

<!-- Page -->

<div class="page animsition">
	<div class="page-content container-fluid">
		<div class="row trans">
		<?= $this->Form->create($jobSeeker,['id'=>'registrationForm','class'=>'form-horizontal','style'=>'width: 80% !important;','type'=>'file']) ?>
			<div class="col-md-12 trans" style="opacity: 0.8;">
			<!-- Panel Wizard Form -->
				<div class="panel trans" id="exampleWizardForm">
					<div class="panel-heading">
					  <h3 class="panel-title">Job Profile</h3>
					</div>
					<div class="panel-body">
						<!-- Steps -->
						<div class="pearls row">
							<div class="pearl current col-xs-4">
								<div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
								<span class="pearl-title">Personal Info</span>
							</div>
							<div class="pearl col-xs-4">
								<div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
								<span class="pearl-title">Academic Info</span>
							</div>
							<div class="pearl col-xs-4">
								<div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
								<span class="pearl-title">Profile Info</span>
							</div>
						</div>
						<!-- End Steps -->

						<!-- Wizard Content -->
						<div class="wizard-content">
							<div class="wizard-pane active" id="exampleAccount" role="tabpanel">

								<div id="exampleAccountForm">
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputUserName">Name</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('name',['class'=>'form-control','placeholder'=>'Full Name','label'=>false,'required'=>'required','id'=>'inputName']); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputUserName">Mobile No.</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('mobile_no',['class'=>'form-control','placeholder'=>'Mobile No.','label'=>false,'required'=>'required','id'=>'inputMobileNo']); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputUserName">Email</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('email',['class'=>'form-control','placeholder'=>'Email','label'=>false,'required'=>'required','id'=>'inputEmail']); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputPassword">Password</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('password',['class'=>'form-control','placeholder'=>'Password','label'=>false,'data-fv-notempty'=>'true','data-fv-notempty-message'=>'The password is required and cannot be empty','data-fv-identical'=>'true','data-fv-identical-field'=>'retype_password','data-fv-identical-message'=>'The password and its confirm are not the same','id'=>'inputPassword','required'=>'required']); ?>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputRetypePassword">Retype Password</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('retype_password',['type'=>'password','class'=>'form-control','placeholder'=>'Retype Password','label'=>false,'data-fv-notempty'=>'true','data-fv-notempty-message'=>'The confirm password is required and cannot be empty','data-fv-identical'=>'true','data-fv-identical-field'=>'password','data-fv-identical-message'=>'The password and its confirm are not the same','required'=>'required']); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="wizard-pane" id="exampleBilling" role="tabpanel">
								<div id="exampleBillingForm">
									<table class="table">
									<thead>
									<tr>
									<th>Degree Type</th>
									<th>Degree Name</th>
									<th>Institute Name</th>
									<th>Location</th>
									<th>Percentage/CGPA</th>
									<th>Passed Year</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td>PG<?php echo $this->Form->control('job_seeker_rows[0][degree_type]',['label'=>false,'type'=>'hidden','value'=>'PG']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[0][degree_name]',['class'=>'form-control','placeholder'=>'Degree Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[0][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[0][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[0][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[0][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'required'=>'required']); ?></td>
									</tr>
									<tr>
									<td>Degree<?php echo $this->Form->control('job_seeker_rows[1][degree_type]',['label'=>false,'type'=>'hidden','value'=>'Degree']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[1][degree_name]',['class'=>'form-control','placeholder'=>'Degree Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[1][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[1][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[1][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[1][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'required'=>'required']); ?></td>
									</tr>
									<tr>
									<td>Intermediate<?php echo $this->Form->control('job_seeker_rows[2][degree_type]',['label'=>false,'type'=>'hidden','value'=>'Intermediate']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[2][degree_name]',['class'=>'form-control','placeholder'=>'Degree Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[2][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[2][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[2][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[2][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'required'=>'required']); ?></td>
									</tr>
									<tr>
									<td>10th<?php echo $this->Form->control('job_seeker_rows[3][degree_type]',['label'=>false,'type'=>'hidden','value'=>'10th']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[3][degree_name]',['class'=>'form-control','placeholder'=>'Degree Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[3][institute_name]',['class'=>'form-control','placeholder'=>'Institute Name','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[3][location]',['class'=>'form-control','placeholder'=>'Location','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[3][percentage_cgpa]',['class'=>'form-control','placeholder'=>'Percentage/CGPA','label'=>false,'required'=>'required']); ?></td>
									<td><?php echo $this->Form->control('job_seeker_rows[3][passed_out_year]',['class'=>'form-control','placeholder'=>'Passed Out Year','label'=>false,'required'=>'required']); ?></td>
									</tr>
									</tbody>
									</table>
								</div>
							</div>
							<div class="wizard-pane" id="exampleGetting" role="tabpanel">
								<div class="form-group">
										<label class="col-sm-4 control-label" for="inputUserName">Located City</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('located_city',['class'=>'form-control','placeholder'=>'Located City','label'=>false,'required'=>'required']); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputUserName">Skill Set</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('skill_set',['class'=>'form-control','placeholder'=>'Skill Set','label'=>false,'required'=>'required']); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputUserName">Job Profile</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('job_profile',['class'=>'form-control','placeholder'=>'Job Profile','label'=>false,'required'=>'required']); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="inputUserName">Profile Document</label>
										<div class="col-sm-5">
											<?php echo $this->Form->control('profile_document',['class'=>'form-control','placeholder'=>'Job Profile','label'=>false,'required'=>'required','type'=>'file']); ?>
										</div>
									</div>
									
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
<?php echo $this->Html->css('/assets/vendor/jquery-wizard/jquery-wizard.css', ['block' => 'cssWizard']); ?>
<?php echo $this->Html->script('/js/JobSeekers/add.js', ['block' => 'scriptJobSeekeersAdd']); ?>
<?php //echo $this->Html->script('/assets/vendor/matchheight/jquery.matchHeight-min.js', ['block' => 'scriptWizard1']); ?>
<?php echo $this->Html->script('/assets/vendor/jquery-wizard/jquery-wizard.js', ['block' => 'scriptWizard1']); ?>
<?php echo $this->Html->script('/assets/js/components/jquery-wizard.js', ['block' => 'scriptWizard2']); ?>
<?php echo $this->Html->script('/assets/js/components/matchheight.js', ['block' => 'scriptWizard2']); ?>
<?php echo $this->Html->script('/assets/examples/js/forms/wizard.js', ['block' => 'scriptWizard2']); ?>
