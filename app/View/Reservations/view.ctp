<div class="reservations view">
<h2><?php echo __('Reservation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbr Place'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['nbr_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Statut'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['statut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['Event']['label'], array('controller' => 'events', 'action' => 'view', $reservation['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Panier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['Panier']['user'], array('controller' => 'paniers', 'action' => 'view', $reservation['Panier']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation'), array('action' => 'edit', $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reservation'), array('action' => 'delete', $reservation['Reservation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $reservation['Reservation']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paniers'), array('controller' => 'paniers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Panier'), array('controller' => 'paniers', 'action' => 'add')); ?> </li>
	</ul>
</div>
