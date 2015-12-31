
<?php    $this->extend('/Layout/profile');  ?>

<?php  $this->start('droit'); ?>

<div class="users view">
<h2><?php echo h($user['User']['username']); ?></h2>

		<table class="table-rsponsive ">
		<tr>
		    <td> Votre Email : </td>
		    <td><?php echo h($user['User']['email']); ?>
                			&nbsp; </td>
		</tr>
		<tr>
             <td> Votre numero de telephone  </td>
            <td> <?php echo h($user['User']['num_tel']); ?>
                 			&nbsp; </td>
        </tr>
        <tr>
        	<td> nombres de point de fidelité :</td>
        	<td>  <?php echo h($user['User']['nb_point']); ?></td>
        </tr>
        <tr>
            <td>votre image </td>
            <td><?php if($user['User']['img'])

                        		echo $this->Html->image($user['User']['img'],array("class"=>"img-responsive img-thumbnail"));
                        		 ?>
                        			&nbsp; </td>
        </tr>
		</table>





</div>




<?php  $this->end('droit'); ?>