<?php

class User
{
	private $id;
	private $nom;
	private $prenom;
	private $adresse;

	public function getId(){
		return $this->id;
	}
	

	public function getNom(){
		return $this->nom;
	}


	public function getPrenom(){
		return $this->prenom;
	}


	public function getAdresse(){
		return $this->adresse;
	}


	public function setId($id){
		$id=(int) $id;

			$this->id=$id;
	}

	public function setNom($nom){

			$this->nom=$nom;
		
	}

	public function setPrenom($prenom){
		 $this->prenom=$prenom;
	}

	public function setAdresse($adresse){
		 $this->adresse=$adresse;
	}

	public function init(array $donnees){
		foreach ($donnees as $key => $value){
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method)){
				$this->$method($value);
			}
		}
	}

	public function __construct(array $donnees){
		$this->init($donnees);
		
	}
}
?>