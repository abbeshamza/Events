<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>
<div class="container col-md-10">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('label');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php  $this->end(); ?>