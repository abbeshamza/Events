<?php    $this->extend('/Layout/dashboard');  ?>
<?php  $this->start('corps'); ?>

<div class="container col-md-10">
<h2><?php echo __('Event'); ?></h2>
	<table >
	<tr>
	<td><?php echo __('Id'); ?></td>
	<td><?php echo h($event['Event']['id']); ?>
        			&nbsp;</td>
	</tr>
	<tr>
    <td><?php echo __('Label'); ?></td>
    <td><?php echo h($event['Event']['label']); ?>
        			&nbsp;</td>
    </tr>
    <tr>
    	<td><?php echo __('Description'); ?></td>
    	<td><?php echo h($event['Event']['description']); ?>
            			&nbsp;</td>
    	</tr>
    	<tr>
        <td><?php echo __('Date'); ?></td>
        <td><?php echo h($event['Event']['date']); ?></td>
        </tr>
       <tr>
           	<td><?php echo __('Nbr Participant'); ?></td>
           	<td><?php echo h($event['Event']['nbr_participant']); ?></td>
           	</tr>
           	<tr>
               <td><?php echo __('Lieu'); ?></td>
               <td><?php echo h($event['Event']['lieu']); ?>
                   			&nbsp;</td>
               </tr>
               <tr>
                   	<td><?php echo __('Prix'); ?></td>
                   	<td><?php echo h($event['Event']['prix']); ?>
                        			&nbsp;</td>
                   	</tr>
                   	<tr>
                       <td><?php echo __('Categorie'); ?></td>
                       <td><?php echo $this->Html->link($event['Categorie']['label'], array('controller' => 'categories', 'action' => 'view', $event['Categorie']['id'])); ?></td>
                       </tr>
                       <tr>
                           	<td><?php echo __('User'); ?></td>
                           	<td><?php echo $this->Html->link($event['User']['username'], array('controller' => 'users', 'action' => 'view', $event['User']['id'])); ?>
                                			&nbsp;</td>
                           	</tr>
                           	<tr>
                               <td><?php echo __('Img'); ?></td>
                               <td><?php if($event['Event']['img'])

                                                   		echo $this->Html->image($event['Event']['img']);
                                                   		 ?>
                                                   			&nbsp;</td>
                               </tr>


	</table>
</div>


<table>
<td class="btn btn-info"><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?></td>
<td class="btn btn-danger"><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?>  </td>
</table>
<?php  $this->end(); ?>

