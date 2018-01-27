<?php 
session_start();
include('connexion.php');
$msg="";
	if (isset($_POST['btnValider']) ){

			$sql="SELECT * FROM codeuses WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND mot_de_pass='".mysqli_real_escape_string($link,md5($_POST['mot_de_pass']))."' LIMIT 0,1";
			$req= mysqli_query($link,$sql);
			if (mysqli_num_rows($req)>0) {
				$data= mysqli_fetch_array($req);
				$_SESSION['variable']=$data['id'];
				header('location:dashboard.php');
			}else{
				$msg= "identifiants incorrects";
			}
	} 


 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CV</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
		<div class="row">
		<nav class="navbar navbar-inverse navbar-fixed">
				<div class="container-header">
				
				<ul class="nav navbar-nav navbar-left">
						<li><a href="#"><h6>Sheisthecode Cv</h6></a></li>
					</ul>
				</div>
					<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="#">A propos</a>
					</li>
					<li>
						<a href="inscription.php">S'inscrire</a>
					</li>
					<li>
						<a href="connecter.php">Se connecter</a>
					</li>
					</ul>
					
		</nav>
		</div>

		<form action="" method="post" enctype="multipart/form-data">
			Créér un CV
			<?php echo $msg ?>
			<div class="form-group">
				<label>email</label>
				<input type="email" name="email" class="form-control" placeholder="" value="" required>
			</div>
			<div class="form-group">
				<label>mot de pass</label>
				<input type="password" name="mot_de_pass" class="form-control" placeholder="" value="" required>
			</div>

			<button  type="submit" class="btn btn-primary btn-md btn-" name="btnValider" value="enregistrer" >Valider</button>

			<div class="row">
		    </div>
		    </div>
		
		

		<!-- jQuery -->
		<script src=""></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src=""></script>		
	</body>
</html>