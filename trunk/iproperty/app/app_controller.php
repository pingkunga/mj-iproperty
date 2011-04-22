<?php
class AppController extends Controller {
    var $helpers = array('Form','Html','Javascript','Session','Ajax','Lightbox');

    //$users = $this->User->find('list');
    //$this->set(compact('users'));


    public $components = array(
        'Auth' => array(
            //authorize ตรวจสอบตัว controller
            //โดย default มันจะเด้งไปที่ users_controller ให้รับช่วงต่อไปจัดการ
            'authorize' => 'controller',
//            //ถ้าอยากไม่ให้ไปที่ users/login ใช้ตัว loginAction
//            //อันนี้ก็จะไปที่ Controller: Member == Action: Login
////                'loginAction' => array(
////                    'admin' => false,
////                    'controller' => 'members',
////                    'action' => 'login'
////                ),
            //ถ้า authorize ผ่านก็จะให้ไปในหน้าที่
            'loginRedirect' => array(
                'controller' => 'backs',
                'action' => 'index'
            ),
            'loginError' => 'ไม่มีผู้ใช้นี้ในระบบ',
            'authError' => 'คุณไม่มีสิทธิที่จะเข้าใช้งานส่วนนี้'
        ),
        'Session',
        'Cookie'
    );

    public function isAuthorized() {
        //เป็นของที่คู่กับ authorize
        //ตรวจสอบเงื่อนไข
        return true;
    }
    public function beforeFilter() {
        //parent::beforeFilter();
        //เรียกฟังค์ชั่น allowAccess ขึ้นมาจัดการ
        //$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        //$this->Auth->loginRedirect = array('controller' => 'backs', 'action' => 'index');

        $this->allowAccess();
    }
   
    private function allowAccess() {
        //หน้าที่ที่ฟังค์ชั่น คือ จัดการว่า controller ไหนที่ไม่จำเป็นต้องตรวจสอบ
        if (in_array($this->name, array('Pages','webs'))) {
            //echo 'ASWD';

            $this->Auth->allow('*');
        }
    }
}
?>
