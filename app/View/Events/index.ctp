
<?php    $this->extend('/Layout/user');  ?>
  <?php  $this->start('contenu'); ?>
  <div class="container">
<p>
            Trier par :


            <th><?php echo $this->Paginator->sort('label'); ?></th>
			<th><?php echo $this->Paginator->sort('categorie'); ?></th>
			<th><?php echo $this->Paginator->sort('lieu'); ?></th>
</p>

        <!-- foreach evenet -->
        <?php foreach ($events as $event): ?>

        <div class="row">
            <div class="col-md-6">
               <?php echo $this->Html->image($event['Event']['img'], array("class"=>"img-responsive img-thumbnail", "width"=>"100%", "height"=>"100%"));?>
            </div>
            <div class="col-md-6">
                <h3><?php echo h($event['Event']['label']); ?></h3>
                <h4><?php echo h($event['Categorie']['label']); ?></h4>
               <p><?php echo h($event['Event']['description']); ?>&nbsp;</p>
              <?php echo $this->Html->link(
                    'afficher Event >>',
                    array('action' => 'view', $event['Event']['id']),
                    array('class' => 'btn btn-primary')
                );?>
            </div>
        </div>

        <hr>
  <!-- end foreach evenet -->
  <?php endforeach; ?>



<div class="col-md-offset-3">
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging col-md-offset-3">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>

<?php  $this->end(); ?>








