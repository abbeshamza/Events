

<div class="container">
<?php echo $this->Form->create('User', array('type'=>'file')); ?>

		<h1>Inscription</h1>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('num_tel');
		echo $this->Form->input('img', array('type'=>'file'));
	?>


<?php echo $this->Form->end(__('Submit')); ?>
</div>

