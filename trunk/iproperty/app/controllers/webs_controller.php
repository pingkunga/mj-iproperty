<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class WebsController extends AppController{

    var $uses='';
    function  beforeFilter() {
        $this->Auth->allow('*');
        parent::beforeFilter();
    }
    function home(){
        
    }
    function index(){
        $this->layout='home_layout';
    }
    function service(){

    }

    function directory(){
        
    }
     function gallery(){

    }
    function contact(){

    }
   function aboutUs(){

   }
   function images(){
       
   }
}
?>
