<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>
<div class="container col-md-10">

<?php echo $this->Form->create('Event', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('label');
		echo $this->Form->input('categorie');
		echo $this->Form->input('description');
		echo $this->Form->input('img', array('type'=>'file'));
		echo $this->Form->input('date');
		echo $this->Form->input('lieu');
		echo $this->Form->input('prix');
		echo $this->Form->input('nbr_participant');
		echo $this->Form->input('user');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<
<?php  $this->end(); ?>