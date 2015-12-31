<div class="paniers view">
<h2><?php echo __('Panier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($panier['Panier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($panier['User']['username'], array('controller' => 'users', 'action' => 'view', $panier['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Panier'), array('action' => 'edit', $panier['Panier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Panier'), array('action' => 'delete', $panier['Panier']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $panier['Panier']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Paniers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Panier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
