<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class TestsController extends AppController{
    var $uses = 'Directorys';
    function index(){

    }
    function product(){

    }
    function directory(){
        $this->data = $this->Directorys->find('all');
    }
    function contact(){

    }
   function aboutUs(){

   }
}
?>
