<?php
App::uses('AppModel', 'Model');
/**
 * Reservation Model
 *
 */
class Reservation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nbr_place' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'donner le nombre maximale des participants',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'required' => array(
                'rule' => array('minLength', 1),
                'allowEmpty' => false,
                'message' => 'donner une valeur'
            )     ,
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'donner une valeur numérique ',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
    public $belongsTo = array(
        'Event' => array(
            'className' => 'Event',
            'foreignKey' => 'event',
        ),
        'Panier' => array(
            'className' => 'Panier',
            'foreignKey' => 'panier',
        ),

    );


}
