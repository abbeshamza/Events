<?php
App::uses('AppModel', 'Model');
/**
 * Carte Model
 *
 */
class Carte extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'carte';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero';
    public $belongsTo = array(
        'User'=> array(
            'className' => 'User',
            'foreignKey' => 'user'
        )
    );
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'numero' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'donnez une valeur numérique',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'update', // Limit validation to 'create' or 'update' operations
			),
            'isUnique' => array(
                'rule' =>array('isUnique'),
                'message'=> 'cette carte existe déjà',
                'on' => 'update',
            ),
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'ce champs ne doit pas etre vide',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Ce champs est obligatoire',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'update', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength',4),
				'message' => 'Le mot de passe doit contenir 4 caractére',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'update', // Limit validation to 'create' or 'update' operations
			),


		),

	);

}
