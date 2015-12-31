

  <?php    $this->extend('/Layout/profile');  ?>










  <?php  $this->start('droit'); ?>





<div class="cadeaus index">
	<h2><?php echo __('Cadeaux'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('label'); ?></th>
			<th><?php echo $this->Paginator->sort('prix'); ?></th>
			<th><?php echo $this->Paginator->sort('categorie'); ?></th>

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



  <?php  $this->end('droit'); ?>





