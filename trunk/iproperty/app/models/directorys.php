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
                'message' => 'ใส่ตัวเลขเท่านั้น'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'ห้ามเว้นช่องว่าง'
            )
        ),
        'address' => array(
            'valid' => array(
                'rule' => 'AlphaNumeric',
                'message' => 'ใส่ตัวเลขเท่านั้น'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'ห้ามเว้นช่องว่าง'
            )
        ),
        'phone' => array(
            'valid' => array(
                //'rule' => 'Numeric',
                'rule' => array('custom','/[0][1-9]{8}/i'),
                'message' => 'ใส่เบอร์โทรศัพท์ เช่น 021234567'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'ห้ามเว้นช่องว่าง'
            )
        ),
//        'phone' => array(
//            'rule' => 'Numeric', //คือ ประกอบไปด้วย ตัวอักษร+ตัวเลข
//            'required' => 'true', //require field validator
//            'message' => 'ต้องใส่นะ'
//        ),
        'fax' => array(
            'valid' => array(
                'rule' => array('custom','/[0][1-9]{8}/i'),
                'message' => 'ใส่เบอร์โทรศัพท์ เช่น 021234567'
            ),
            'required' => array(
                'rule' => 'notEmpty', //require field validator
                'message' => 'ห้ามเว้นช่องว่าง'
            )
        )
    );
}
?>
