<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>


	</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark custom_height">
  <a id="header" class="navbar-brand" href="#">
<h1>Account Management System</h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <?php if($this->Session->check('Auth.User')){ ?>
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php echo $this->Html->link( "Add Account",   array('action'=>'add') ); ?>  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $this->Html->link( "Account List",   array('action'=>'index') );  ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $this->Html->link( "",   array('action'=>'logout'), array("class"=>'fa fa-power-off ')); 
 ?></a>
      </li>
    <?php }else{ ?> 
    	 <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $this->Html->link( "Create Account",   array('action'=>'index') );  ?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $this->Html->link( "Login",   array('action'=>'login') );  ?></a>
      </li>
     <?php } ?>
    </ul>
  </div>
</nav>
		<div id="content">
			<div style="visibility: hidden">
			<?php echo $this->Session->flash(); ?>
		</div>
			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer">
			<p>Account Management System Made By <i class="fa fa-heart"></i> Sidra</p>
		</div>
	</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var i = $('#flashMessage').text();
		if(i!=""){
			if(i!="Item deleted"){
				swal("", i, "success");
			}
		}
	});
</script>
</html>
