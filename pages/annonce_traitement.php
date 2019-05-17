<?php
	
	if(isset($_FILES['images']) && $_FILES['images']['error']==0){

		if($_FILES['images']['size']<=1000000){

			$detailFile = pathinfo($_FILES['images']['name']);
			$extensionFile = $detailFile['extension'];
			$extensionValide = array('png','jpg','jpeg');

			if(in_array($extensionFile, $extensionValide)){
				
				move_uploaded_file($_FILES['images']['tmp_name'], '../images/images_annonce/'.basename($_FILES['images']['name']));

			}
		}
	}

?>

Titre : <?php  if(isset($_POST['titre'])) echo $_POST['titre']; ?> <br>
Description : <?php  if(isset($_POST['description'])) echo $_POST['description']; ?> <br>
Prix : <?php  if(isset($_POST['prix'])) echo $_POST['prix']; ?> <br>
<img src=<?php echo "../images/images_annonce/".basename($_FILES['images']['name']); ?>>