<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>
<div class="container col-md-10">
<?php echo $this->Form->create('Cadeau'); ?>
	<fieldset>
		<legend><?php echo __('Add Cadeau'); ?></legend>
	<?php
		echo $this->Form->input('label');
		echo $this->Form->input('prix');
		echo $this->Form->input('categorie');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php  $this->end(); ?>