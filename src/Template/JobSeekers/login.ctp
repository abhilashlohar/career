<style>
.help-block{
	color:#FFF !important;
}
</style>
<?php $this->set('title', 'Login'); ?>
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
data-animsition-out="fade-out">
	<div class="page-content vertical-align-middle">
	  <div class="brand">
		<?php echo $this->Html->image('/img/logo.png'); ?>
		<h2 class="brand-text">Entry Hires</h2>
	  </div>
	  <p>Login</p>
	  <?= $this->Flash->render() ?>
	  <?= $this->Form->create(@$login,['role'=>'form','id'=>'loginform']) ?>  
		<div class="form-group">
		  <label class="sr-only" for="inputName">Email</label>
		  <?php echo $this->Form->control('email',['class'=>'form-control','placeholder'=>'Email','label'=>false]); ?>
		</div>
		<div class="form-group">
		  <label class="sr-only" for="inputName">Password</label>
		  <?php echo $this->Form->control('password',['class'=>'form-control','placeholder'=>'Password','label'=>false]); ?>
		</div>
		<?= $this->Form->button(__('Login'),['class'=>'btn btn-primary btn-block']) ?>
	  <?= $this->Form->end() ?>
		<p>Still no account? Please go to <?php echo $this->Html->link('Register', array('controller' => 'JobSeekers', 'action' => 'add'));  ?></p>
		
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
<?php echo $this->Html->script('/js/JobSeekers/login.js', ['block' => 'scriptBottom']); ?>