
<?php  $this->start('header'); ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php echo $this->Html->link('<div class="navbar-brand" >Events</div>', array('action' => 'index','controller'=>'events' ),array('escape' => false));?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><?php $session= $this->Session->read();
                echo $this->Html->link( ' <div class="img-responsive">'.
                $this->Html->image($session['user_img'],array("class"=>"img-responsive img-rounded", "width"=>"18px"))
                .'</div> Profil', array('action' => 'view','controller'=>'users' ) ,array('escape' => false)) ;?> </li>


             <li><?php echo $this->Html->link(
             'logout <span class="glyphicon glyphicon-log-in"></span>'
             , array('action' => 'logout','controller'=>'users' ) ,array('escape' => false)) ;?> </li>



      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php  $this->end(); ?>

    <?php  $this->start('content'); ?>
     <?php  $this->end(); ?>