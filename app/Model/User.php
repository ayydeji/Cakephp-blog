<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
  public $validate = array(
    'username'=> array(
      'required' => array(
        'rule'=>'notBlank',
        'message'=>'A username is required'
      ),
      'uniqueUsernameRule' => array(
        'rule'=> 'isUnique',
        'message' => 'Username already registered'
      )
    ),
    'email'=> array(
      'required' => array(
        'rule'=>'notBlank',
        'message'=> 'An Email is required'
      ),
      'uniqueEmailRule' => array(
        'rule'=> 'isUnique',
        'message' => 'Email already registered'
      )
    ),
    'password'=> array(
      'required' => array(
        'rule'=>'notBlank',
        'message'=> 'A password is required'
      )
    )
  );

  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}

  public $hasMany = array(
    'Post'  => array(
      'className' => 'Post',
      'foreignKey' => 'user_id',
      'dependant' => false
    )
  );
}
 ?>
