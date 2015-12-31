<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
<?php echo $this->Form->create('Event', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('label');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
		echo $this->Form->input('nbr_participant');
		echo $this->Form->input('lieu');
		echo $this->Form->input('prix');
		echo $this->Form->input('categorie');
		echo $this->Form->input('user');
		echo $this->Form->input('img', array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>



<div class="btn btn-danger">
<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Event.id')))); ?>
</div>
</div>
<?php  $this->end(); ?>