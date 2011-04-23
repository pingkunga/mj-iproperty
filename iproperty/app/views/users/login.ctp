<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create(array('action'=>'login'));
    echo $this->Form->inputs(array(
        'legend' => 'Login',
        //texxtbox
        'username',
        //pwd field
        'password',
         //chk box
        'remember' => array('type' => 'checkbox', 'label' =>
'Remember me')
    ));

    echo $this->Form->end('Login');
?>
