<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\userManager;
use \W\Security\AuthentificationManager;

class SalarieController extends Controller
{

	public function index()
	{  	
		$user=$this->getUser();
		//print_r($user) ;
		$id = $user['id'];
		$dir = __DIR__.'/../../dropbox/'.$id;
		$files = scandir($dir);

		$this->show('salarie/index', ['files'=>$files]);
	}

	public function index2()
	{
		$this->show('salarie/notifs');
	}


	public function loginUser() {

		// affecter une variable à chaque valeur clé
		$email=trim(htmlentities($_POST['email']));
		$password=trim(htmlentities($_POST['password']));

		// initialisation d'un tableau d'erreurs
		$errors = [];
		// Instanciation de UserManager
		$userManager = new UserManager();
		$userManager->setTable('users');

		$resultUser = $userManager->getUserByUsernameOrEmail($email);

		if($resultUser){
			//Instanciation d'un objet de type Authentification
			$authentificationManager= new AuthentificationManager();
			//
			if ($authentificationManager->isValidLoginInfo($email, $password)) {
				$authentificationManager->logUserIn($resultUser);
				// Redirection
				$this->redirectToRoute('salarie');
			}
			else {
				$errors['login'] = "Wrong password";
			}

		}
		else {
			$errors['login'] = "Cette adresse e-mail n'existe pas";
		}
		
		$this->show('home', ['errors' => $errors]);
	}
	
	
}