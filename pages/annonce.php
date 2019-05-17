<!DOCTYPE html>
<html>
<head>

	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title> page inscription </title>
	 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	 
</head>
<body>
	<div class="container">
		<form action="annonce_traitement.php" method="POST" enctype="multipart/form-data">

			<fieldset>
				<div class="form-group">
					<legend> <h2 style="text-align: center;"> ** Annonce ** </h2> </legend>
					<label> Titre </label><br><input type="text"  name="titre" id="titre" class="form-control"><br>
					<label> Description </label><br>
					<textarea id="message" class="form-control" name="description"> votre description </textarea><br>
					<label> Prix </label><br><input type="number"  name="prix" id="prix" class="form-control"><br>
					<label> Images </label><input type="file"  name="images" id="images" class="form-control"><br>
					<button  class="btn btn-success"> Enregistrer </button>
				</div>
			</fieldset>
			
			
		</form>
		
	</div>

</body>
</html>