<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class WebsController extends AppController{
    var $components = array('RequestHandler');
    var $uses='';
    function  beforeFilter() {
        $this->Auth->allow('*');
        parent::beforeFilter();
//        if ($this->RequestHandler->isAjax()){
//
//        }

    }
    function home(){
//        $this->layout='ajax';
//        $this->render(home);
        //$this->render('home','ajax');
        
    }
    function index(){
        $this->layout='home_layout';
    }
    function service(){
        //$this->render('home','ajax');
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
