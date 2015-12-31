<div class="cadeaus view">
<h2><?php echo __('Cadeau'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cadeau['Cadeau']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($cadeau['Cadeau']['label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prix'); ?></dt>
		<dd>
			<?php echo h($cadeau['Cadeau']['prix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cadeau['Categorie']['label'], array('controller' => 'categories', 'action' => 'view', $cadeau['Categorie']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cadeau'), array('action' => 'edit', $cadeau['Cadeau']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cadeau'), array('action' => 'delete', $cadeau['Cadeau']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cadeau['Cadeau']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cadeaus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cadeau'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
