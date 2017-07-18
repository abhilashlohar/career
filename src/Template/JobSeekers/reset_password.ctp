<style>
.help-block{
	color:#FFF !important;
}
.page-content{
background-color: rgba(0, 0, 0, 0.58);
border-radius: 20px;
}

</style>
<?php $this->set('title', 'Forgot Password'); ?>
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
data-animsition-out="fade-out">
	<div class="page-content vertical-align-middle">
	  <div class="brand">
		<?php echo $this->Html->image('/img/logo.png',['style'=>'height: 42px;']); ?>
		<h2 class="brand-text">Entry Hires</h2>
	  </div>
	  <?= $this->Flash->render() ?>
	  <?= $this->Form->create() ?>  
		<div class="form-group">
		  <label class="sr-only" for="inputName">New Password</label>
		  <?php echo $this->Form->control('password',['class'=>'form-control','placeholder'=>'Password','label'=>false,'required'=>'required']); ?>
		</div>
		<div class="form-group">
		  <label class="sr-only" for="inputName">Confirm Password</label>
		  <?php echo $this->Form->control('confirm_password',['class'=>'form-control','placeholder'=>'Password','label'=>false,'required'=>'required']); ?>
		</div>
		<?= $this->Form->button(__('Login'),['class'=>'btn btn-gradient btn-block']) ?>
	  <?= $this->Form->end() ?>
		
		
	  <footer class="page-copyright page-copyright-inverse">
		<p>© 2017 Entry Hires.</p>
	  </footer>
	</div>
</div>
<!-- End Page -->
<?php echo $this->Html->script('/js/JobSeekers/login.js', ['block' => 'scriptBottom']); ?>