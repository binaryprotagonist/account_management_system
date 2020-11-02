<?php

App::uses('AppModel', 'Model');

class Item extends AppModel {
    public $validate = array(
        'company_name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Company name is required'
            )
        ),
        'postal_code' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Postal Code is required'
            )
        ),
        'subscription_plan' => array(
            'valid' => array(
                'rule' => array('inList', array('Plan 1', 'Plan 2','Plan 3','Plan 4','Plan 5')),
                'message' => 'Please select a valid plan',
                'allowEmpty' => false
            )
        )
    );
}

?>