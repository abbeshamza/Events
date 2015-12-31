





 <div class="container">

     <?= $this->Form->create('User'); ?>
        <h2 class="form-signin-heading">Please sign in</h2>


        <label for="inputEmail" class="sr-only">Email address</label>

        <?= $this->Form->input('username',array('label' => 'Identifiant'), array('class' => 'form-control',
                                                                                   'placeholder'=>"Enter username")); ?>


        <?= $this->Form->input('password',array('label' => 'Mot de passe'), array('class' => 'form-control')); ?>
<table class="table-responsive">

<tr> <td> <?= $this->Form->end('se connecter'); ?></td>

<tr><td> <?php   echo $this->Html->link( '<button type="button" class="btn btn-success btn-lg">Inscription</button>', array('action' => 'add','controller'=>'users' ) ,array('escape' => false)) ;?> </td> </tr>
</table>




    </div> <!-- /container -->