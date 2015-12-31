<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
<h2><?php echo __('Category'); ?></h2>
	<table>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</td>
		</tr>
		<tr><td><?php echo __('Label'); ?></td>
		<td>
			<?php echo h($category['Category']['label']); ?>
			&nbsp;
		</td>
	</tr>
	</table>
</div>

<table>
<td class="btn btn-info"><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?></td>
<td class="btn btn-danger">  <?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
                             		 </td>
</table>

<?php  $this->end(); ?>