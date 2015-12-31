<?php    $this->extend('/Layout/user');  ?>
<?php  $this->start('contenu'); ?>

<div class="container col-md-11">
    <div class="row">
            <div class="col-md-5">
                    <?php if($event['Event']['img'])

                                    		echo $this->Html->image($event['Event']['img'],array("class"=>"img-responsive img-thumbnail"));
                                    		 ?>
                                    			&nbsp;
            </div>

            <div class="col-md-offset-1">
                     <h3><?php echo h($event['Event']['label']); ?></h3>
                    <div class="table-responsive">
                        <table class="table-rsponsive ">
                            <tr> <td> label :</td> <td> <?php echo h($event['Event']['label']); ?>
                                                        			&nbsp;</td>  </tr>
                            <tr> <td>Description : </td> <td><p> <?php echo h($event['Event']['description']); ?>
                                                 			&nbsp; </p></td>  </tr>
                                                 			 <tr> <td> Categorie : </td> <td><?php echo h( $event['Categorie']['label']); ?>
                                                                                                                                       &nbsp; </td>  </tr>
                                                                                        <tr> <td>Créer par : </td> <td><?php echo h($event['User']['username']); ?> </td>  </tr>
                            <tr> <td>Date et heure :</td> <td><?php echo h($event['Event']['date']); ?>
                                                			&nbsp; </td>  </tr>
                                                			 <tr> <td> Lieu : </td> <td> <?php echo h($event['Event']['lieu']); ?>
                                                                                                                  			&nbsp; </td>  </tr>
                            <tr> <td>Nombre de places : </td> <td> <?php echo h($event['Event']['nbr_participant']); ?>
                                                 			&nbsp;</td>  </tr>

                            <tr> <td>Prix en dinar : </td> <td><?php echo h($event['Event']['prix']); ?>
                                                     			&nbsp; </td>  </tr>

                            <tr>
                            </tr>
                        </table>
                         <?php
                                                                    echo $this->Form->create('Reservation', array(
                                                                        'url' => array('controller' => 'reservations', 'action' => 'add')
                                                                    ));?>
                                                            <table class="table-rsponsive "><tr><td><h4><?php echo ('Ajouter cet event au panier'); ?></h4>
                                                                        </td><td><?php
                                                                             		echo $this->Form->input('nbr_place');
                                                                             	?>

                                                                      </td>
                                                                       <input type="hidden" name="data[Reservation][event]"  value="<?php echo h($event['Event']['id']); ?>" />
                                                                      <td>
                                                                       <?php echo $this->Form->end(__('ajouter')); ?>
                                                                       </td></tr></table>

                    </div>


            </div>
    </div>
</div>
<?php  $this->end('contenu'); ?>