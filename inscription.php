<?php 
	include('connexion.php');
	$msg="";
	
	if(isset($_POST['btnValider'])){
		if(move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$_FILES['photo']['name'])){
	
			$sqlcodeuses="INSERT INTO codeuses (nom, prenoms,telephone,email,photo, date_de_naissance,mot_de_pass, resume_codeuses) VALUES ('".$_POST['nom']."','".$_POST['prenoms']."','".$_POST['telephone']."','".$_POST['email']."','".$_FILES['photo']['name']."','".$_POST['date_de_naissance']."','".md5($_POST['mot_de_pass'])."','".$_POST['resume_codeuses']."')";
		
			$reponsesql=mysqli_query($link, $sqlcodeuses);
			if($reponsesql){
		
			 	$msg="insertion reussie";
			}else{
			 	$msg=mysqli_error($link);
			}
		}

	}
 ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="CSS/bootstrap.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">

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
		

	
	
	<form action="" method="post" enctype="multipart/form-data">
	<?php echo $msg; ?>
			<div class="form-group">
				<label>nom</label>
				<input type="text" name="nom" class="form-control" placeholder="" value="" required>
			</div>
			<div class="form-group">
				<label>prenoms</label>
				<input type="text" name="prenoms" class="form-control" placeholder="" value="" required>
			</div>
			<div class="form-group">
				<label>date_de_naissance</label>
				<input type="text" name="date_de_naissance" class="form-control" placeholder="" value="" required>
			</div>
			
			<div class="form-group">
				<label>resume</label>
				<input type="text" name="resume_codeuses" class="form-control" placeholder="" value="" required>
			</div>
			<div class="form-group">
				<label>email</label>
				<input type="email" name="email" class="form-control" placeholder="" value="" required>
			</div>
			<div class="form-group">
				<label>téléphone</label>
				<input type="text" name="telephone" class="form-control" placeholder="" value="" required>
			</div>
			<div class="form-group">
				<label>mot de pass</label>
				<input type="password" name="mot_de_pass" class="form-control" placeholder="" value="" required>
			</div>
			
			<div class="form-group">
				<label>photo</label>
				<input type="file" name="photo">
		   </div>
		   <button  type="submit" class="btn btn-primary btn-sm btn-block" name="btnValider" value="enregistrer" >Valider</button>
		    </form>
		   
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src=""></script>
 		<?php 

 		 ?>
	</body>
</html>