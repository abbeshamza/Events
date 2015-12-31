<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 * @property creer_par $creer_par
 * @property category $category
 */
class Event extends AppModel {

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
				'message' => 'ce champ ne doit pas etre vide',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
				'rule' => array('maxLength',255),
				'message' => 'ce champ ne doit pas dépasser les 255 charactéres',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),


		'nbr_participant' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'donner une valeur numérique',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lieu' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'ce champ ne doit pas etre vide',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prix' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'donner une valeur numérique',
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'img' => array(
            'uploadError' => array(
                'rule' => array('uploadError'),
                'message' => 'le téléchargement est pas effectué',
                'allowEmpty'=> TRUE
            ),
            'mimeType' =>array(
                'rule' => array('mimeType',array('image/jpg','image/jpeg','image/png','image/gif')),
                'message' => 'upload n est pas effectuer donner des image du type jpg , jpeg , png ou gif',
                'allowEmpty'=> TRUE
            ),
            'fileSize' =>array(
                'rule' => array('fileSize', '<=','2MB'),
                'message' => 'image taille assez important',
                'allowEmpty'=> TRUE
            ),
            'processCoverUpload' => array(
                'rule'=> 'processCoverUpload',
                'message' => 'le téléchargement a abouti',
                'allowEmpty'=> TRUE
            )

        )
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
        'User'=> array(
            'className' => 'User',
            'foreignKey' => 'user'
        ),
        'Categorie'=> array(
            'className' => 'Category',
            'foreignKey' => 'categorie'
        )
    );
}
