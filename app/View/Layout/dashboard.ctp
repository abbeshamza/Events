

<?php    $this->extend('/Layout/admin');  ?>
<?php  $this->start('contenu'); ?>

<div class="container">
	<div class="row">
		<h2>Dashboard</h2>
	</div>
         <div class="row">
  <div class="col-md-2">

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
              Users  <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
          <div class="panel-body">
            <div class="list-group">


<div class="list-group-item">
  <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> afficher tous les utilisateurs', array('action' => 'admin_index','controller'=>'users'),array('escape' => false)); ?>
   </div>
   <div class="list-group-item">
   <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Ajouter un utilisateur', array('action' => 'admin_add','controller'=>'users'),array('escape' => false)); ?>
  </div>


 
</div>
          </div>
        </div>
      </div>


 <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Events <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
          <div class="panel-body">
            <div class="list-group">
             <div class="list-group-item">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Liste events', array('action' => 'index','controller'=>'events'),array('escape' => false)); ?>
  </div>

      <div class="list-group-item">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Ajouter un event', array('action' => 'add','controller'=>'events'),array('escape' => false)); ?>
  </div>


</div>
          </div>
        </div>
      </div>





       <div class="panel panel-primary">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Reservations <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                  <div class="list-group">
                   <div class="list-group-item">
       <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Liste reservations', array('action' => 'index','controller'=>'reservations'),array('escape' => false)); ?>
        </div>

            <div class="list-group-item">
       <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Ajouter une reservation', array('action' => 'add','controller'=>'reservations'),array('escape' => false)); ?>
        </div>


      </div>
                </div>
              </div>
            </div>
             <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingfour">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                           Categories <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        </a>
                      </h4>
                    </div>
                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <div class="list-group">
                         <div class="list-group-item">
             <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Liste catégories', array('action' => 'index','controller'=>'categories'),array('escape' => false)); ?>
              </div>

                  <div class="list-group-item">
             <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Ajouter une catégorie', array('action' => 'add','controller'=>'categories'),array('escape' => false)); ?>
              </div>


            </div>
                      </div>
                    </div>
                  </div>



                   <div class="panel panel-primary">
                          <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                 Cadeaux <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <div class="list-group">
                               <div class="list-group-item">
                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Liste cadeaux', array('action' => 'index','controller'=>'cadeaus'),array('escape' => false)); ?>
                    </div>

                        <div class="list-group-item">
                   <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Ajouter un cadeau', array('action' => 'add','controller'=>'cadeaus'),array('escape' => false)); ?>
                    </div>


                  </div>
                            </div>
                          </div>
                        </div>









    </div>



  </div>


            <div class="col-md-10">
             <?php echo $this->fetch('corps'); ?>

            </div>
</div>






</div>
<?php  $this->end('contenu'); ?>