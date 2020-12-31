

<?php  
include_once('User.class.php');
include_once('UserAction.class.php');
include_once('config.php');
include_once('template.php');

	$manager = new UserAction($db);
	 $manager->afficher();
?>