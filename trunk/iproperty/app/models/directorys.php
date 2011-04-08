<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Directorys extends AppModel{
    var $validate = array(
        'name' => array(
            'valid' => array(
                'rule' => 'AlphaNumeric',
                'message' => 'enter only alphaNum'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'must enter'
            )
        ),
        'address' => array(
            'valid' => array(
                'rule' => 'AlphaNumeric',
                'message' => 'enter only num'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'must enter'
            )
        ),
        'phone' => array(
            'valid' => array(
                'rule' => 'Numeric',
                'message' => 'enter only num'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'must enter'
            )
        ),
//        'phone' => array(
//            'rule' => 'Numeric', //คือ ประกอบไปด้วย ตัวอักษร+ตัวเลข
//            'required' => 'true', //require field validator
//            'message' => 'ต้องใส่นะ'
//        ),
        'fax' => array(
            'valid' => array(
                'rule' => 'Numeric',
                'message' => 'enter only num'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'must enter'
            )
        )
    );
}
?>
