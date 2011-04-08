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

    function insert($id){
//        if(empty($this->data)){
//            //echo $this->redirect('/backs/insert');
//            //echo 'debug empty';
//           //$this->Directorys->create();
//        }
//        else{
//
//               if($this->Directorys->save($this->data)){
//                   $this->Session->setFlash('เพิ่มข้อมลแล้วู');
//                   $this->redirect('/backs/index');
//               }
//              else{
//                  $this->Session->setFlash('ผิดพลาด');
//              }

           
            //echo 'debug not empty';
            //$this->render('view');
            $this->render('view','default');
    }
    function save(){
        if(!$this->Directorys->save($this->data)){
            $this->setAction('edit',$this->data['Directorys']['id']);
        }else{
            $this->setAction('index');
        }
//        $this->Directorys->save($this->data);
//        $this->redirect('/backs/index');
    }
    function edit($id = null){
        $this->data = $this->Directorys->findbyid($id);
        $this->render('view','default');
    }
    function delete($id){
        $this->Directorys->delete($id);
        $this->redirect('/backs/index');
    }
    
}
?>
