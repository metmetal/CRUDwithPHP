Ce projet consiste en la réalisation du CRUD pour la gestion des utilisateurs dans la base de données. Le terme CRUD résume les fonctions qu’un utilisateur a besoin pour créer et gérer des données. Il s’agit d’une fonctionnalité de base de toute application à savoir la possibilité de pouvoir :
•	Créer des données dans un formulaire HTML et les insérer en base de donnée ;
•	Lire les données depuis une base de données et les afficher à l’écran ;
•	Mettre à jour ces données dans une base de données ;
•	Supprimer ces données de la base de données.
Ainsi il s’agira pour nous de programmer ces différentes opérations en PHP de manière orientée objet.
Pour ce faire notre code se décompose en 5 principaux fichiers :
•	Config.php : qui va se charger de la connexion à la base de données ;
•	User.class.php : ou on va définir la classe User à savoir les attributs, getters, setters et constructeur ;
•	UserAction.class.php : qui contiendra les différentes fonctions que sont ajouter, modifier, supprimer, afficher et get ;
•	Vue.php : ou l’on va appeler les fonctions définies dans UserAction et selon l’opération va afficher la vue correspondante ;
•	Index.class.php : qui est la page d’accueil, on va simplement y appeler la fonction afficher.
En outre on aura trois autres fichiers indispensables :
•	template.php : qui va contenir le code du template qu’on a téléchargé :
•	login.php : qui contient le code du formulaire d’ajout d’un user ;
•	login2.php : qui contient le code du formulaire de modification d’un user.
