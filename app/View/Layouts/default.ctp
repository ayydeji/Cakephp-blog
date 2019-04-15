
<!-- /**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */ -->

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		// echo $this->Html->meta('icon');
		//
		// echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style>
	.card{
		margin-bottom: 20px;
	}
	.btn{
		margin-bottom: 10px;
	}

	nav a{
		margin-left: 30px;
	}
</style>
</head>
<body>
	<div id="container">
		<div id="content">

			<?php //echo $this->Flash->render(); ?>

		</div>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">myBlog</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <?php echo $this->Html->link('Profile', array('controller'=>'users', 'action'=>'index')) ?>
    <?php echo $this->Html->link('Add Post', array('controller'=>'posts', 'action'=>'add')) ?>
    <?php echo $this->Html->link('All Posts', array('controller'=>'posts', 'action'=>'index')) ?>
  </nav>
  <!-- <a class="btn btn-outline-primary" href="#">Sign out</a> -->
	<?php echo $this->Html->link('Sign out', array('controller'=>'users', 'action'=>'logout'), array('class'=>'btn btn-success')) ?>
</div>
	<?php echo $this->fetch('content'); ?>
		<div id="footer">
		</div>
	</div>
</body>
</html>
