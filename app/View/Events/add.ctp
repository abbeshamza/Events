<?php    $this->extend('/Layout/user');  ?>
<?php  $this->start('contenu'); ?>
<div class="events form">
<?php echo $this->Form->create('Event', array('type'=>'file')); ?>
	<fieldset>
		<h2><?php echo __('Publier votre propre Event :'); ?></h2>
	<?php
		echo $this->Form->input('label');
		echo $this->Form->input('categorie');
		echo $this->Form->input('description',$null = array('type' => 'textarea' ));
		echo $this->Form->input('img', array('type'=>'file'));
		echo $this->Form->input('date');
		echo $this->Form->input('lieu');
		echo $this->Form->input('prix');
		echo $this->Form->input('nbr_participant');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Ajouter event')); ?>
</div>

<?php  $this->end('contenu'); ?>