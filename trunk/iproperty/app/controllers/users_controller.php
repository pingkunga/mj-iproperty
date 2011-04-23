<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class UsersController extends AppController {
        //var $components = array('Auth');
        public function login(){

        }
        public function logout() {
            $this->Auth->logout();
            //$this->redirect($this->Auth->logout());
            $this->redirect(array('controller'=>'webs','action'=>'home'));
        }
        public function beforeFilter() {
            parent::beforeFilter();
            //ให้ตัว action add ทำงานได้โดยไม่จำเป็นต้อง login
            //$this->Auth->allow('add');
        }
        public function add() {
            $this->layout='admin';
            if (!empty($this->data)) {
                $this->User->create();
                if ($this->User->save($this->data)) {
                    $this->Session->setFlash('User created!');
                    $this->redirect(array('action' => 'login'));
                } else {
                    $this->Session->setFlash('Please correct the
    errors');
                }
            }
        }
    }
?>
