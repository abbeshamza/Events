<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>
<div class="container col-md-10">
	<h2><?php echo __('Cadeaus'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('label'); ?></th>
			<th><?php echo $this->Paginator->sort('prix'); ?></th>
			<th><?php echo $this->Paginator->sort('categorie'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cadeaus as $cadeau): ?>
	<tr>
		<td><?php echo h($cadeau['Cadeau']['id']); ?>&nbsp;</td>
		<td><?php echo h($cadeau['Cadeau']['label']); ?>&nbsp;</td>
		<td><?php echo h($cadeau['Cadeau']['prix']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cadeau['Categorie']['label'], array('controller' => 'categories', 'action' => 'view', $cadeau['Categorie']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cadeau['Cadeau']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cadeau['Cadeau']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cadeau['Cadeau']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cadeau['Cadeau']['id']))); ?>
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