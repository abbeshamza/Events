<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
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


<table>
<td class="btn btn-info"><?php echo $this->Html->link(__('Edit Cadeau'), array('action' => 'edit', $cadeau['Cadeau']['id'])); ?></td>
<td class="btn btn-danger"> <?php echo $this->Form->postLink(__('Delete Cadeau'), array('action' => 'delete', $cadeau['Cadeau']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cadeau['Cadeau']['id']))); ?>  </td>
</table>

<?php  $this->end(); ?>
