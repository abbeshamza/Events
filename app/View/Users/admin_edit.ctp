<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
<?php echo $this->Form->create('User', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
<div class="btn btn-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
                            		 </div>
</div>

<?php  $this->end(); ?>