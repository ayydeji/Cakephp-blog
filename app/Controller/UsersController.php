<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
  public function beforeFilter(){
    parent::beforeFilter();
    $this->Auth->allow('add', 'logout');
  }
  public function index(){
    $ide = $this->Auth->user('id');
    $id = substr($ide, 0, strlen($ide));
    $posts = $this->requestAction(array('controller'=>'posts', 'action'=>'display'), array('user_id' =>array($id)));
    $count = $this->requestAction(array('controller'=>'posts', 'action'=>'count'), array('user_id' =>array($id)));
    $this->set('posts', $posts);
    $this->set('count', $count);
  }
  public function add(){
    $this->layout = null;
    if ($this->request->is('post')){
      $this->User->create();
      if ($this->User->save($this->request->data)){
        $this->Flash->success(__('This user has been saved'));
        return $this->redirect(array('controller'=> 'users', 'action'=> 'login'));
      }
      $this->Flash->error(__('This user could not be saved, Please try again'));
    }
  }

  public function login() {
    $this->layout = null;
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
}

  public function logout(){
    return $this->redirect($this->Auth->logout());
  }
  public function isAuthorized($user) {
     // The owner of an article can edit and delete it
     if (in_array($this->request->action, ['index'])) {
        $userId = (int)$this->request->params['pass'][0];
        if ($user['id'] !== $userId) {
           return false;
        }
      }
     return parent::isAuthorized($user);
  }

}
 ?>
