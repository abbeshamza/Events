

  <?php    $this->extend('/Layout/profile');  ?>










  <?php  $this->start('droit'); ?>









<div class="table table-responsive ">
  <table class="table table-responsive">
    <thead>
    <th>Event</th>
    <th>Nom Event </th>
    <th>Prix en dinar </th>
    <th> Nombre de places</th>
    <th> Statut</th>
    <th>Supprimer</th>
    <th>Payer</th>
    </thead>

    <tbody>
    <?php foreach ($reservations as $reservation): ?>
    <tr

    <?php if ($reservation['Reservation']['statut']=="payee")
    echo " class='info'";
    else
     echo "class='danger'";
      ?>
    >
    <td><?php $session= $this->Session->read();
                        echo $this->Html->link( ' <div class="img-responsive ">'.
                        $this->Html->image($reservation['Event']['img'],array("class"=>"img-responsive img-rounded"))
                        .'</div>', array('action' => 'view','controller'=>'events',$reservation['Event']['id'] ) ,array('escape' => false)) ;?>
    </td>
    <th>
          <?php echo h($reservation['Event']['label']); ?>&nbsp;
          </th>
     <th>
      <?php echo h($reservation['Event']['prix']); ?>&nbsp;
      </th>
    <th>
    <?php echo h($reservation['Reservation']['nbr_place']); ?>&nbsp;
    </th>
    <td>
    <?php echo h($reservation['Reservation']['statut']); ?>&nbsp;
    </td>
    <td>

    <div class='btn btn-danger'>
    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reservation['Reservation']['id']), array('confirm' => __('etes vous sure de supprimer cet event de votre panier ?', $reservation['Reservation']['id']))); ?>
    </div>
    </td>

    <td>

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-success " data-toggle="modal"<?php if ($reservation['Reservation']['statut']=="payee")
                                                                                                                     echo " disabled";

                                                                                                                      ?> data-target="#myModal<?php echo h($reservation['Reservation']['id']); ?>">
      Payer
     </button>

     <!-- Modal -->
     <div class="modal fade" id="myModal<?php echo h($reservation['Reservation']['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title" id="myModalLabel">Carte de crédit</h4>
           </div>
           <div class="modal-body">
           <?php echo $this->Form->create(null, array(
                  'url' => array('controller' => 'reservations', 'action' => 'payer','type'=>'post')
              )); ?>
             <label>Insérer votre numéro de carte crédit </label>
             <input type="text"   placeholder="le numero de votre carte" name="numero">
             <label>Insérer le mot de passe de votre carte  </label>
             <input type="password" placeholder="*********" name="pass">
             <input type="hidden"  name="reservation" value= "<?php echo h($reservation['Reservation']['id']); ?>">
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">payer</button>
              <?php echo $this->Form->end(); ?>

           </div>
         </div>
       </div>
     </div>
    </td>

    </tr>

    <?php endforeach; ?>
    </tbody>
  </table>
  </div>
  <p>
  	<?php
  	echo $this->Paginator->counter(array(
  		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
  	));
  	?>	</p>
  	<div class="paging">
  	<?php
  		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
  		echo $this->Paginator->numbers(array('separator' => ''));
  		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
  	?>
  	</div>

 <?php  $this->end(); ?>