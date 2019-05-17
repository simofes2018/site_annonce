<?php 
	
	try{
		$bd=new PDO('mysql:host=localhost;dbname=bd_site_annonce;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		die("erreur : ".$e->getMessage());
	}
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel']) && !empty($_POST['date_de_naissance']) && !empty($_POST['email']) && !empty($_POST['password']))
	{

		$insert=$bd->prepare('INSERT INTO user(user_nom, user_prenom, user_adresse, user_telephon, user_date_naissance, user_mail, user_password, id_statut) VALUES(:nom, :prenom, :adresse, :telephone, :date_naissance, :mail, :password, :statut)');

		$insert->execute(array(
			'nom'=>$_POST['nom'],
			'prenom'=>$_POST['prenom'],
			'adresse'=>$_POST['adresse'],
			'telephone'=>$_POST['tel'],
			'date_naissance'=>$_POST['date_de_naissance'],
			'mail'=>$_POST['email'],
			'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT),
			'statut'=>2


	));
	}

	echo "inscription reussie";


?>

