

<?php    $this->extend('/Layout/user');  ?>
<?php  $this->start('contenu'); ?>

<div class="container">
	<div class="row">
		<h2>Profile</h2>
	</div>
         <div class="row">
  <div class="col-md-2">

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
              Profile  <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
          <div class="panel-body">
            <div class="list-group">


<div class="list-group-item">
  <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> afficher  Mon Profile', array('action' => 'view','controller'=>'users'),array('escape' => false)); ?>
   </div>
   <div class="list-group-item">
   <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Modifier Mon Profile', array('action' => 'edit','controller'=>'users'),array('escape' => false)); ?>
  </div>


 <div class="list-group-item">
   <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Modifier carte de crédit', array('action' => 'edit','controller'=>'cartes'),array('escape' => false)); ?>
  </div>
  <div class="list-group-item">
     <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Afficher carte de crédit', array('action' => 'view','controller'=>'cartes'),array('escape' => false)); ?>
    </div>
</div>
          </div>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Mes Events <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
          <div class="panel-body">
            <div class="list-group">
             <div class="list-group-item">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Publiés', array('action' => 'myevents','controller'=>'events'),array('escape' => false)); ?>
  </div>

      <div class="list-group-item">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Reservés', array('action' => 'mesreservation','controller'=>'reservations'),array('escape' => false)); ?>
  </div>


</div>
          </div>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              Fidelisation  <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree" aria-expanded="true">
          <div class="panel-body">
            <div class="list-group">
 <div class="list-group-item">
 <?php echo $this->Html->link('<span class="glyphicon glyphicon-link" aria-hidden="true"></span> Liste des cadeaux', array('action' => 'index','controller'=>'cadeaus'),array('escape' => false)); ?>
  </div>
  <a href="#" class="list-group-item"> <span class="glyphicon glyphicon-link" aria-hidden="true"></span> Transformer mes points </a>


</div>
          </div>
        </div>
      </div>
    </div>



  </div>
  
            
            <div class="col-md-10">
             <?php echo $this->fetch('droit'); ?>

            </div>
</div>
  
    
    
    
    
    
</div>
<?php  $this->end('contenu'); ?>