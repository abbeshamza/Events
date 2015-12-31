
  <?php    $this->extend('/Layout/profile');  ?>
  <?php  $this->start('droit'); ?>

<h2>Information de votre carte :</h2>

<table class='table table-responsive '>
<thead>
<tr>
<th> Numero de votre carte  </th>
<th>votre solde en dinar  </th>
<tr>
</thead>
<tbody>
<tr>
<td> <?php echo h($carte['Carte']['numero']); ?>
     			&nbsp;</td>
<td> <?php echo h($carte['Carte']['solde']); ?>
     			&nbsp;</td>
<tr>
</tbody>

</table>

 <?php  $this->end(); ?>
