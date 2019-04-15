<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
  		// echo $this->Html->meta('icon');
  		//
  		// echo $this->Html->css('cake.generic');

  		echo $this->fetch('meta');
  		echo $this->fetch('css');
  		echo $this->fetch('script');
  	?>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <style media="screen">
    html,
body {
height: 100%;
}

body {
display: -ms-flexbox;
display: flex;
-ms-flex-align: center;
align-items: center;
padding-top: 40px;
padding-bottom: 40px;
background-color: #f5f5f5;
}

.form-signin {
width: 100%;
max-width: 330px;
padding: 15px;
margin: auto;
}
.form-signin .checkbox {
font-weight: 400;
}
.form-signin .form-control {
position: relative;
box-sizing: border-box;
height: auto;
padding: 10px;
font-size: 16px;
}
.form-signin .form-control:focus {
z-index: 2;
}
.form-signin input[type="email"] {
margin-bottom: -1px;
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
margin-bottom: 10px;
border-top-left-radius: 0;
border-top-right-radius: 0;
}
    </style>
  </head>
  <body class="text-center">
    <main role="main" class="container">
    <!-- <form class="form-signin">

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form> -->
<h1 class="h3 mb-3 font-weight-normal">Register</h1>
  <?php
echo $this->Form->create('User', array('class' => 'form-signin', 'inputDefaults'=> array('label' => false)));
echo $this->Form->input('username', array('class' => 'form-control', 'placeholder'=>'Username', 'style'=> 'margin-bottom: 10px;'));
echo $this->Form->input('password', array('class' => 'form-control', 'placeholder'=>'Password', 'style'=> 'margin-bottom: 10px;'));
echo $this->Form->input('email', array('class' => 'form-control', 'placeholder'=>'Email', 'style'=> 'margin-bottom: 10px;'));
echo $this->Form->button('Register', array('type'=>'submit', 'class'=>'btn btn-success'));
echo '<br><br>';
echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login'));
   ?>

    </main>
  </body>
</html>
