
  <?php    $this->extend('/Layout/profile');  ?>
  <?php  $this->start('droit'); ?>
<div class="fluid">
<h2>Nous Contacter :</h2>
 <form method="post" action="/cakephptuto/generals/contact">
  <div class="form-group">
    <label>Sujet </label>
    <input required type="text" name="sujet" class="form-control" id="exampleInputEmail1" placeholder="Sujet">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre message</label>
    <textarea type="textarea" required name="message" class="form-control"  placeholder="Tapez votre message "></textarea>
  </div>

  <button type="submit" class="btn btn-info">Envoyer votre message</button>
 </form>


</div>

 <?php  $this->end(); ?>
