<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
<?php echo $this->Form->create('Reservation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reservation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nbr_place');
		echo $this->Form->input('statut');
		echo $this->Form->input('event');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="btn btn-danger">
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reservation.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Reservation.id')))); ?>

</div>

</div>



<?php  $this->end(); ?>