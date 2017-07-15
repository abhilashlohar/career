<style>
.help-block{
	color:#FFF !important;
}
.trans{
	background-color: rgba(0, 0, 0, 0.58);
	border-radius: 20px;
}
</style>
<?php $this->set('title', 'Signup'); ?>
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
data-animsition-out="fade-out">
	<div class="page-content vertical-align-middle trans">
	  <div class="brand">
		<?php echo $this->Html->image('/img/logo.png'); ?>
		<h2 class="brand-text">Entry Hires</h2>
	  </div>
	  <p>Sign up to find interesting thing</p>
	  <?= $this->Flash->render() ?>
	  <?= $this->Form->create($corporateUser,['role'=>'form','id'=>'signupform']) ?>
		<div class="form-group">
		  <label class="sr-only" for="inputName">Name</label>
		  <?php echo $this->Form->control('full_name',['class'=>'form-control','placeholder'=>'Full Name','label'=>false]); ?>
		</div>
		<div class="form-group">
		  <label class="sr-only" for="inputName">Corporate Name</label>
		  <?php echo $this->Form->control('corporate_name',['class'=>'form-control','placeholder'=>'Corporate Name','label'=>false]); ?>
		</div>
		<div class="form-group">
		  <label class="sr-only" for="inputName">Email</label>
		  <?php echo $this->Form->control('email',['class'=>'form-control','placeholder'=>'Email','label'=>false]); ?>
		</div>
		<div class="form-group">
		  <label class="sr-only" for="inputName">Password</label>
		  <?php echo $this->Form->control('password',['class'=>'form-control','placeholder'=>'Password','label'=>false,'data-fv-notempty'=>'true','data-fv-notempty-message'=>'The password is required and cannot be empty','data-fv-identical'=>'true','data-fv-identical-field'=>'retype_password','data-fv-identical-message'=>'The password and its confirm are not the same']); ?>
		</div>
		
		<div class="form-group">
		  <label class="sr-only" for="inputName">Retype Password</label>
		  <?php echo $this->Form->control('retype_password',['type'=>'password','class'=>'form-control','placeholder'=>'Retype Password','label'=>false,'data-fv-notempty'=>'true','data-fv-notempty-message'=>'The confirm password is required and cannot be empty','data-fv-identical'=>'true','data-fv-identical-field'=>'password','data-fv-identical-message'=>'The password and its confirm are not the same']); ?>
		</div>
		<?= $this->Form->button(__('Register'),['class'=>'btn btn-primary btn-block','id'=>'validateButton2']) ?>
	  <?= $this->Form->end() ?>
	  <p>Have account already? Please go to <?php echo $this->Html->link('Sign In', array('controller' => 'CorporateUsers', 'action' => 'login'));  ?></p>

	  <footer class="page-copyright page-copyright-inverse">
		<p>WEBSITE BY amazingSurge</p>
		<p>© 2015. All RIGHT RESERVED.</p>
		<div class="social">
		  <a href="javascript:void(0)">
			<i class="icon bd-twitter" aria-hidden="true"></i>
		  </a>
		  <a href="javascript:void(0)">
			<i class="icon bd-facebook" aria-hidden="true"></i>
		  </a>
		  <a href="javascript:void(0)">
			<i class="icon bd-dribbble" aria-hidden="true"></i>
		  </a>
		</div>
	  </footer>
	</div>
</div>
<!-- End Page -->
<?php echo $this->Html->script('/js/CorporateUsers/add.js', ['block' => 'scriptBottom']); ?>