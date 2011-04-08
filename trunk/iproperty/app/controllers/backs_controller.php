<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BacksController extends AppController{
    var $uses = 'Directorys';

    function index(){
        $this->data = $this->Directorys->find('all');
    }

    function insert(){
        if(empty($this->data)){
            //echo $this->redirect('/backs/insert');
            //echo 'debug empty';
        }
        else{
            $this->Directorys->save($this->data);
            $this->redirect('/backs/index');
            //echo 'debug not empty';
        }
    }
    function edit($id = null){
        if(empty($this->data)){
            $this->data = $this->Directorys->findbyid($id);
        }
        else{
            $this->Directorys->save($this->data);
            $this->redirect('/backs/index');
        }


    }
    function delete($id){
        $this->Directorys->delete($id);
        $this->redirect('/backs/index');
        
    }
}
?>
