
<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>

	<title>
		Events
	</title>
        <?php echo	$this->Html->css('cake.generic');?>
        <?php echo	$this->Html->css('bootstrap');?>
        <?php echo	$this->Html->css('1-col-portfolio');?>
        <?php echo	$this->Html->script('jquery');?>
        <?php echo	$this->Html->script('bootstrap');?>



</head>
<body>
	<div id="container" class="col-md-12">
		<div id="header">
                <?php echo $this->fetch('header'); ?>
		</div>
		<div id="content">

                        <?php echo $this->Flash->render(); ?>
                        <?php echo $this->fetch('content'); ?>
			            <?php echo $this->fetch('contenu'); ?>
		</div>
		<div id="footer">
                <?php echo $this->fetch('footer'); ?>
                 <div class="row">
                                <div class="col-md-offset-5">
                                    <p>Copyright &copy; Events 2016</p>
                                </div>
                  </div>
		</div>
	</div>




</body>
</html>
