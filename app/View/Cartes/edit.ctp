
  <?php    $this->extend('/Layout/profile');  ?>
  <?php  $this->start('droit'); ?>
<?php echo $this->Form->create('Carte'); ?>
	<fieldset>
		<legend><?php echo __('Edit Carte'); ?></legend>
	<?php

		echo $this->Form->input('numero');
		echo $this->Form->input('password');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

 <?php  $this->end(); ?>


