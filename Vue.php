

	<?php
	
	include_once('User.class.php');
	include_once('UserAction.class.php');
	include_once('config.php');
	include_once('template.php');
    $manager = new UserAction($db);
	

	
	if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ajout'])){
		$user=new User(array(
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'adresse'=>$_POST['adresse']));

		$manager->ajouter($user);
		$manager->afficher();
		
		
		}


    if(isset($_POST['modifier'])&& isset($_POST['newnom']) && isset($_POST['newprenom']) && isset($_POST['newadresse']) && isset($_GET['update'])){
            $user=$manager->get($_GET['update']);
           
            $manager->modifier($user);
            $manager->afficher();
        
            }

		
           

		    if(  isset($_GET['sup'])){

			//$manager->get($_GET['sup']);
			$manager->supprimer($_GET['sup']);
			$manager->afficher();
		
		    }
		?>

</body>
</html>