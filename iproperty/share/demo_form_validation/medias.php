<?php
class Medias extends AppModel{
    var $useTable = 'media';
    var $validate = array(
        'title' => array(
            'rule' => array('minLength', 8),
            'message' => 'Password must be at least 8 characters long'
        ),
        'type' => array(
            'rule' => 'notEmpty',
            'message' => 'Please select a type'
        ),
        'link' => array(
            'rule' => 'url',
            'message' => 'Please enter URL'
        ),
    );


}
?>
