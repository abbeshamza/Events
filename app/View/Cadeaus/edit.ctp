<div class="cadeaus form">
<?php echo $this->Form->create('Cadeau'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cadeau'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('label');
		echo $this->Form->input('prix');
		echo $this->Form->input('categorie');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cadeau.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Cadeau.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Cadeaus'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
