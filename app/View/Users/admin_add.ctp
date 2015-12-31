<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>
<div class="container col-md-10">
<?php echo $this->Form->create('User', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('num_tel');
		echo $this->Form->input('nb_point');
		echo $this->Form->input('role');
		echo $this->Form->input('img', array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php  $this->end(); ?>