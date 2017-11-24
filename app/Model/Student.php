<?php

/**
 * Description of Student Model
 *
 * @author pierre
 */
class Student extends AppModel
{

    // relations
    public $hasMany = array(
        'Grade' => array(
            'className' => 'Grade'
        )
    );

    // validators
    public $validate = array(
        // firstname field
        'firstname' => array(
            'textOnly' => array(
                'rule' => array('custom', '/^[a-zA-Z\s]+$/'),
                'message' => 'Texte uniquement (espace compris)',
                'allowEmpty' => false,
            ),
            'between' => array(
                'rule' => array('between', 3, 20),
                'message' => 'Texte d\'une longueur comprise entre 3 et 20 caractères',
                'allowEmpty' => false,
            ),
        ),
        // lastname field
        'lastname' => array(
            'textOnly' => array(
                'rule' => array('custom', '/^[a-zA-Z\s]+$/'),
                'message' => 'Texte uniquement (espace compris)',
                'allowEmpty' => false,
            ),
            'between' => array(
                'rule' => array('between', 3, 20),
                'message' => 'Texte d\'une longueur comprise entre 3 et 20 caractères',
                'allowEmpty' => false,
            ),
        ),
        //birthday field
        'birthday' => array(
            'rule' => 'date',
            'message' => 'Merci d\'entrer une date de naissance valide (format: d-m-y)',
            'allowEmpty' => false,
        ),
    );
}
