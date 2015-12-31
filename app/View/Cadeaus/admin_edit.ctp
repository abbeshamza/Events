<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
<?php echo $this->Form->create('Cadeau'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cadeau'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('label');
		echo $this->Form->input('prix');
		echo $this->Form->input('categorie');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


		<div class="btn btn-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cadeau.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Cadeau.id')))); ?></div>
<?php  $this->end(); ?>