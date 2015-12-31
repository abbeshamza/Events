<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">

<h2><?php echo __('Reservation'); ?></h2>
<table>
	<tr>
	<td><?php echo __('Id'); ?></td>
	<td><?php echo h($reservation['Reservation']['id']); ?>
        			&nbsp;</td>
	</tr>
	<tr>
	<td><?php echo __('Nbr Place'); ?></td>
	<td><?php echo h($reservation['Reservation']['nbr_place']); ?>
        			&nbsp;</td>
	</tr>
	<tr>
	<td><?php echo __('Statut'); ?></td>
	<td><?php echo h($reservation['Reservation']['statut']); ?>
        			&nbsp;</td>
	</tr>
	<tr>
	<td><?php echo __('Event'); ?></td>
	<td><?php echo $this->Html->link($reservation['Event']['label'], array('controller' => 'events', 'action' => 'view', $reservation['Event']['id'])); ?>
        			&nbsp;</td>
	</tr>
	</table>
</div>

<table>
<td class="btn btn-info"><?php echo $this->Html->link(__('Edit Reservation'), array('action' => 'edit', $reservation['Reservation']['id'])); ?></td>
<td class="btn btn-danger"> <?php echo $this->Form->postLink(__('Delete Reservation'), array('action' => 'delete', $reservation['Reservation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $reservation['Reservation']['id']))); ?>  </td>
</table>

<?php  $this->end(); ?>