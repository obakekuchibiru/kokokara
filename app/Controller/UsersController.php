<?php

App::uses('AppController', 'Controller');
//ライブラリがクラスでないため、import を使用
App::import('Vendor', 'facebook', array("file" => "facebook".DS."src".DS."facebook.php"));


class UsersController extends AppController {
  public $name = 'Users';
  public $uses = 'User';

   public $components = array(
      'Session',
      'Auth' => array(
          'authenticate' => array(
              'Form' => array(
                  'userModel' => 'User',
                  'passwordHasher' => array(
                      'className' => 'None'
                  ),
                  'fields' => array('username' => 'oauth_token' , 'password'=>'oauth_token_secret'),
              ),
          ),
          'loginError' => 'パスワードもしくはログインIDをご確認下さい。',
          'authError' => 'ご利用されるにはログインが必要です。',
          'loginAction' => array('controller' => 'users', 'action' => 'index'),
          'loginRedirect' => array('controller' => 'users', 'action' => 'success'),
          'logoutRedirect' => array('controller' => 'users', 'action' => 'index'),
      ),
  );


  public function beforeFilter() {
      parent::beforeFilter();
  }
  
  public function index() {
  }
  
  public function success() {
    $uid = $this->Auth->user('uid');
    $user_data = $this->User->getUser($uid);
    $this->set('user_data', $user_data);
  }
  
  public function logout() {
    $this->Auth->logout();
    $this->redirect($this->Auth->logoutRedirect);
  }

}
?>