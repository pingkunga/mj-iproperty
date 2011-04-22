<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create();
    echo $this->Form->inputs(array(
        'legend' => 'Signup',
        'username',
        'password'
    ));
    echo $this->Form->end('Submit');
?>
