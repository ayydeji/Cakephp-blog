<?php
class PostsController extends AppController {
  public $helpers = array('Html', 'Form');


public function index() {

        $this->set('posts', $this->Post->find('all', array('order'=>'Post.created DESC') ));
    }
    public function add(){
      if ($this->request->is('post')){
        $this->Post->create();
        $this->request->data['Post']['user_id'] = $this->Auth->user('id');
        if ($this->Post->save($this->request->data)){
          $this->Flash->success(__('Your Post has been saved.'));
          return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('Unable to add your post.'));
      }
    }
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Flash->success(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
  }
  public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Post->delete($id)) {
        $this->Flash->success(
            __('The post with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Flash->error(
            __('The post with id: %s could not be deleted.', h($id))
        );
    }

    return $this->redirect(array('action' => 'index'));
}
public function isAuthorized($user) {
  // All registered users can add posts
  if (in_array($this->action, array('add', 'display', 'count'))) {
      return true;
  }

  // The owner of a post can edit and delete it
  if (in_array($this->action, array('edit', 'delete'))) {
      $postId = (int) $this->request->params['pass'][0];
      if ($this->Post->isOwnedBy($postId, $user['id'])) {
          return true;
      }
  }
  return false;
}

public function display(){

  $posts = $this->Post->find('all', array('conditions'=>array('user_id'=>$this->params['user_id']), array('order'=>'Post.created DESC')));
  return $posts;
}

public function count(){

  $posts = $this->Post->find('count', array('conditions'=>array('user_id'=>$this->params['user_id'])));
  return $posts;
}
  }
 ?>
