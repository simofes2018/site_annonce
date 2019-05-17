<!DOCTYPE html>
<html>
<head>
	<title> utilisateur </title>
</head>
<body>
	<table>
		<tr>
			<th> nom </th>
			<th> prenom </th>
			<th> age </th>
		</tr>
		<?php 
		try {
			$cnx=new PDO('mysql:host=localhost;dbname=db_test;charset=utf8', 'root','');
		} catch (Exception $e) {
			die('erreur: '.$e->getMessage());
		}

		$result=$cnx->prepare('SELECT * from user WHERE age>=:age');
		$result->execute(array('age'=>30));

		while ($donnees=$result->fetch()) {
			?>
			<tr>

			<td><?= $donnees['nom']; ?> </td>
			<td> <?php echo $donnees['prenom']; ?> </td>
			<td> <?php echo $donnees['age']; ?> </td>
			</tr>
		<?php 
		}
		
	?>


	</table>


</body>
</html>