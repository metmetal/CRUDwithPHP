
<?php
 class UserAction
{
	private $db;

	public function __construct($db)
	{
		$this->setDb($db);	
	}

	public function setDb(PDO $_db)
	{
		$this->db = $_db;
	}

	public function ajouter(User $u){
		$req=$this->db->prepare('INSERT INTO user SET id=:id,nom=:nom,prenom=:prenom,adresse=:adresse');
		$req->bindValue(':id',$u->getId(),PDO::PARAM_INT);
		$req->bindValue(':nom',$u->getNom());
		$req->bindValue(':prenom',$u->getPrenom());
		$req->bindValue(':adresse',$u->getAdresse());
		$req->execute();
		}

	public function modifier(User $u){
		$q = $this->db->prepare('UPDATE user SET  nom = :nom, prenom = :prenom, adresse =:adresse WHERE id = :id');
		$q->bindValue(':id', $u->getId(),PDO::PARAM_INT);
		$q->bindValue(':nom', $_POST['newnom']);
		$q->bindValue(':prenom', $_POST['newprenom']);
		$q->bindValue(':adresse', $_POST['newadresse']);
		$q->execute();

		}

		public function get($info){
			$q = $this->db->prepare('SELECT id, nom, prenom,adresse FROM user WHERE id =:id');
			$q->bindValue(':id',$info);
			$q->execute(array(':id' => $info));
			return new User($donnees = $q->fetch(PDO::FETCH_ASSOC));
		}


	public function supprimer($info){
		$q =$this->db->prepare('DELETE FROM user WHERE id= :id');
		$q->bindValue(':id',$info);
		$q->execute();
		}

		public function afficher(){
			$q = $this->db->query('SELECT id, nom, prenom, adresse FROM user ORDER BY id desc');

			?>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Gestion des utilisateurs</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!--<input type="submit" value="Ajouter" name="ajout1">-->
                                    <a href="login.php">Ajouter</a>




			<table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <!--<th>Identifiant</th>-->
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Adresse</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       <tbody>


			
			<?php

		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{?>

				
				
                    <tr>
					    <td><?php echo $donnees['nom']; ?> </td>
						<td><?php echo $donnees['prenom']; ?> </td>
						<td><?php echo $donnees['adresse']; ?> </td>
						<td><?php echo '<a href="login2.php?modif='.$donnees['id'].'& modnom='.$donnees['nom']. '& modpren='.$donnees['prenom']. '& modad='.$donnees['adresse']. '"'.'>Modifier</a>'.'<br>'; 
								echo '<a href="Vue.php?sup='.$donnees['id'].'"'.'>Supprimer</a>';?> 
					</td>

                     </tr>
				
			<?php		
		}
		?>

		</tbody>
			</table>
			</div>
		</div>
	</div>
</div>


		<?php
}
		
}
?>