<?php
App::uses('AppModel', 'Model');
/**
 * Panier Model
 *
 */
class Panier extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'user';

    public $belongsTo = array(
        'User'=> array(
            'className' => 'User',
            'foreignKey' => 'user'
        )
    );


}
