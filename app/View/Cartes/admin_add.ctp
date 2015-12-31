<div class="cartes form">
<?php echo $this->Form->create('Carte'); ?>
	<fieldset>
		<legend><?php echo __('Add Carte'); ?></legend>
	<?php
		echo $this->Form->input('numero');
		echo $this->Form->input('solde');
		echo $this->Form->input('password');
		echo $this->Form->input('users');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cartes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
