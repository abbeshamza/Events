<div class="cartes view">
<h2><?php echo __('Carte'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carte['Carte']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($carte['Carte']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solde'); ?></dt>
		<dd>
			<?php echo h($carte['Carte']['solde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($carte['Carte']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo h($carte['Carte']['users']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carte'), array('action' => 'edit', $carte['Carte']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carte'), array('action' => 'delete', $carte['Carte']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $carte['Carte']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cartes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carte'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
