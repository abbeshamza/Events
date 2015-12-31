<div class="reservations form">
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paniers'), array('controller' => 'paniers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Panier'), array('controller' => 'paniers', 'action' => 'add')); ?> </li>
	</ul>
</div>
