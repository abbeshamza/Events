<?php
App::uses('AppModel', 'Model');
/**
 * Cadeau Model
 *
 */
class Cadeau extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'label';

    public $belongsTo = array(
        'Categorie'=> array(
            'className' => 'Category',
            'foreignKey' => 'categorie'
        )
    );

}
