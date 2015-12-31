
<?php    $this->extend('/Layout/profile');  ?>

<?php  $this->start('droit'); ?>

<div class="users form">
<?php echo $this->Form->create('User', array('type'=>'file')); ?>
	<fieldset>
		<h2><?php echo __('Modifier mon Profile'); ?></h2>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('num_tel');
		echo $this->Form->input('img', array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


<?php  $this->end('droit'); ?>
