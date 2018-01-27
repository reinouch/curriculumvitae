<?php 
	include('connexion.php');
 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>connection</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="row"><!--Menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid"><!--Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand" href="index.php">SheIstheCode cv</a>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">A propos</a>
					</li>
					<li>
						<a href="inscription.php">S'inscrire</a>
					</li>
					<li>
						<a href="connecter.php">Se coonnecter</a>
					</li>

				</ul>
			</div>		
		</nav>
	</div>
	
		<div class="container">
		<div class="row">
			<div class="col-md-3">
		    </div>
		    <div class="col-md-3">
		    </div>

		</div>
		<form action="">
		<legend>se connecter</legend>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" placeholder="exemple@email.com" value="" required>
		</div>

		<div>
			<label>Mot de pass</label>
			<input type="text" name="mot de pass" class="form-control" placeholder="saisir le mot de pass" value="" required>
			</div>

			<button  type="submit" class="btn btn-primary btn-md btn-" name="btnValider" value="enregistrer" >Valider</button>

			</div>
		</form>
				
			</div>
				
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src=""></script>
	</body>
</html>