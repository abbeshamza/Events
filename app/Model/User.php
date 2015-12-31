<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Le username ne doit pas etre vide',
				'allowEmpty' => false,
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
				'rule' => array('maxLength',18),
				'message' => 'Le username ne doit pas dépasser les 18 charactéres',
                'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'isUnique' => array(
                'rule' =>array('isUnique'),
                'message'=> 'ce username existe deja',
                'on' => 'create',
            ),
		),
		'email' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'ce champ ne doit pas etre vide',
				'allowEmpty' => false,
                'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'email' => array(
				'rule' => array('email'),
				'message' => 'veuillez insérer un email valide',
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
                'allowEmpty'=> TRUE,
                'on' => 'create', // Limit validation to 'create' or 'update' operations
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

    public function beforeSave($options=array())
    {



    }
}
