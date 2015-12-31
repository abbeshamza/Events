<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
<h2><?php echo __('User'); ?></h2>
	<table>
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td></tr>
		<tr>
		<td><?php echo __('Username'); ?></td>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td></tr><tr>
		<td><?php echo __('Email'); ?></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td></tr><tr>

		<td><?php echo __('Num Tel'); ?></td>
		<td>
			<?php echo h($user['User']['num_tel']); ?>
			&nbsp;
		</td>
		</tr><tr>
		<td><?php echo __('Nb Point'); ?></td>
		<td>
			<?php echo h($user['User']['nb_point']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
    		<td><?php echo __('Role'); ?></td>
    		<td>
    			<?php echo h($user['User']['role']); ?>
    			&nbsp;
    		</td>
    	</tr>
	</table>
</div>
<table>
<td class="btn btn-info"><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?></td>
<td class="btn btn-danger"> <?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </td>
</table>

<?php  $this->end(); ?>

