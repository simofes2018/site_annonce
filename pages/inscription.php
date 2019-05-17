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

		<form class="col-lg-offset-1" method="post" action="inscription_trait.php"><br>
			<fieldset>
				<legend> <h2 style="text-align: center;"> --Inscription-- </h2> </legend>

				<div class="row">
					<div class="form-group">
						<span id="nomconf" style="display: inline-block; color: red;"> </span> <br>
						<div class="col-lg-6"> <input type="text" name="nom" placeholder="Nom" class="form-control" id="nom"> </div>
						<span id="prenconf" style="display: inline-block; color: red;"> </span> <br>
						<div class="col-lg-6"> <input type="text" name="prenom" placeholder="Prénom" class="form-control" id="pren"> </div>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="form-group">
						<div class="col-lg-6"> <input type="text" name="adresse" placeholder="Adresse" class="form-control"> </div>
						<div class="col-lg-6"> <input type="tel" name="tel" placeholder="Telephone" class="form-control"> </div>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="form-group">
						<div class="col-lg-6"> <input type="date" name="date_de_naissance" placeholder="Date de naissance" class="form-control"> </div>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="form-group">
						<div class="col-lg-6"> <input type="email" name="email" placeholder="Email" class="form-control"> </div>
						<div class="col-lg-6"> <input type="password" name="password" placeholder="Mot de passe" class="form-control"> </div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="form-group">
						<div class="col-lg-4 col-lg-offset-4"> <input type="submit" name="enregistrer" class="form-control" id="valider"></div>
						
					</div>

			</fieldset>
		</form>
		
	</div>
	<!--script type="text/javascript">

		/*var form =document.querySelector('form');
		var nom = document.getElementById('nom');
		var pren =document.getElementById('pren');
		var nomconf = document.getElementById('nomconf');
		var prenconf = document.getElementById('prenconf');
		var valider = document.getElementById('valider');
		var confirme_nom = false;
		var confirme_prenom = false;



		valider.addEventListener('click', function(e)
		{
			e.preventDefault();
			if (nom.value.length <= 5) {
				nomconf.style.display = "none";
				confirme_nom = true;
			}else{
				nomconf.style.display = "inline-block";
			}
			if(pren.value.length >= 7){
				prenconf.style.display = "none";
				confirme_prenom = true;
			}else{
				prenconf.style.display = "inline-block";
			}
			if(confirme_nom == true && confirme_prenom == true)
			{
				form.submit(); 
			}
			else{
				form.reset();
			}
		});*/
		
		

		


	</script-->
</body>
</html>