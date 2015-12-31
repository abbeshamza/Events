<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>
<div class="container col-md-10">
	<h2><?php echo __('Events'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('label'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('nbr_participant'); ?></th>
			<th><?php echo $this->Paginator->sort('lieu'); ?></th>
			<th><?php echo $this->Paginator->sort('prix'); ?></th>
			<th><?php echo $this->Paginator->sort('categorie'); ?></th>
			<th><?php echo $this->Paginator->sort('user'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['label']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['description']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['date']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['nbr_participant']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['lieu']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['prix']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['Categorie']['label'], array('controller' => 'categories', 'action' => 'view', $event['Categorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['User']['username'], array('controller' => 'users', 'action' => 'view', $event['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>


<?php  $this->end(); ?>