<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>
<div class="container col-md-10">
<?php echo $this->Form->create('Reservation'); ?>
	<fieldset>
		<legend><?php echo __('Add Reservation'); ?></legend>
	<?php
		echo $this->Form->input('nbr_place');
		echo $this->Form->input('statut');
		echo $this->Form->input('event');
		echo $this->Form->input('panier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php  $this->end(); ?>