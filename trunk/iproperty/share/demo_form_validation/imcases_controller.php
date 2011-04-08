<?php
class ImcasesController extends AppController{
    var $uses = array('Medias');

    function index(){
        $this->data = $this->Medias->find('all');
    }

    function add(){
        $this->render('view');
    }

    function save(){
        if(!$this->Medias->save($this->data)){
            $this->setAction('edit',$this->data['Medias']['id']);
        }else{
            $this->setAction('index');
        }

        
    }

    function edit($id){
        $this->data = $this->Medias->findById($id);
        $this->render('view');
    }
}
?>
