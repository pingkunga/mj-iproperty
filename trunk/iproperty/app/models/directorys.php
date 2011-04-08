<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Directorys extends AppModel{
    var $validate = array(
        'name' => array(
            'rule' => 'alphaNumeric' //คือ ประกอบไปด้วย ตัวอักษร+ตัวเลข
        ),
        'address' => array(
            'rule' => 'alphaNumeric'
        ),
        'phone' => array(
            'rule' => 'alphaNumeric'
        ),
        'fax' => array(
            'rule' => 'alphaNumeric'
        )
    );
}
?>
