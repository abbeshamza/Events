<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'label';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'label' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'le label ne doit pas etre vide',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'isUnique' => array(
                'rule' =>array('isUnique'),
                'message'=> 'ce label existe deja',
                'on' => 'create',
            ),

		),
	);
}
