<?php

/**
 * Description of Grade Model
 *
 * @author pierre
 */
class Grade extends AppModel
{

    // student related
    public $belongsTo = 'Student';

    // validators
    public $validate = array(
        // subject field
        'subject' => array(
            'between' => array(
                'rule' => array('between', 3, 20),
                'message' => 'Texte d\'une longueur comprise entre 3 et 20 caractères',
                'allowEmpty' => false,
            ),
            'textOnly' => array(
                'rule' => array('custom', '/^[a-zA-Z\s]+$/'),
                'message' => 'Texte uniquement (espace compris)',
                'allowEmpty' => false,
            ),
        ),
        // rate field
        'rate' => array(
            'rule' => array('range', 0, 20),
            'message' => 'Merci d\'entrer un nombre entre 0 et 20',
            'allowEmpty' => false,
        ),
    );
}
