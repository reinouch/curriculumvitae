<?php 
session_start();
include('connexion.php');
$codeuse="SELECT * FROM codeuses WHERE id=".$_SESSION['variable'];
	$res=mysqli_query($link,$codeuse);
	$data=mysqli_fetch_array($res);

$diplomes="SELECT * FROM diplomes WHERE id_codeuses=".$_SESSION['variable'];
	$resdiplomes=mysqli_query($link,$diplomes);

$experiences="SELECT * FROM experiences WHERE id_codeuses=".$_SESSION['variable'];
	$resexperiences=mysqli_query($link,$experiences);
	

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<title>Dashboard</title>
</head>

<body>
<div class="container">
<div class="row">
<nav class="navbar navbar-inverse navbar-fixed">
		<div class="container-header">
		
		<ul class="nav navbar-nav navbar-left">
				<li><a href="index.php"><h6>Sheisthecode Cv</h6></a></li>
			</ul>
		</div>
			<ul class="nav navbar-nav navbar-right">
			<li class="active">
				<a href="#">A propos</a>
			</li>
			<li>
				<a href="">User</a>
			</li>
			</ul>
</nav>                
</div><br><br>

<div class="col-md-3">
<ul class="nav navbar-nav navbar-left">
<li class="active">
	<nav><a href="codeuses.php" class="btn-treehouse">Modifier Profil</a></nav>
	</li><br><br>

	<li>
	<nav><a href="cv.php">Créer CV</a></nav>
	</li><br><br>

	<li>
		<nav><a href="">Afficher votre CV</a></nav>
	</li><br><br>

	<li>
	<nav><a href="experiences.php">Ajouter Experiences</a></nav>
	</li><br><br>

	<li>
	<nav><a href="diplomes.php">Ajouter Diplomes</a></nav>
	</li><br><br>

	<li>
	<nav><a href="interets.php">Ajouter Centre d'Intérêts</a></nav>
	</li><br><br>
	</ul>
</div>

<div class="col-md-9">
<div class="col-md-12">
<div class="col-md-4">
	<p><?php echo $data['nom']." ".$data['prenoms'];  ?><br>
	 <?php echo $data['date_de_naissance']; ?><br>
	 <?php echo $data['telephone']; ?><br>
	 <?php echo $data['email']; ?><br>
	</p>
</div>
<div class="col-md-4"><p>Resume de la codeuse</p></div>
<div class="col-md-4">
	<img src="upload/<?php echo $data['photo']; ?>"><p><?php echo $data['nom']." ".$data['prenoms'];  ?></p>
	<a href="http://facebook.com/calliframe" title="Suivez-moi sur facebook !"><img src="https://www.calliframe.com/wp-content/uploads/2013/12/facebook.png" height="40px" width="40px"/></a>
</div>
</div>
	</div>
</div>

<div class="row">
	<p><center>
		Mes Experiences<br>

		Mes Diplomes <br>
		<?php
			while ($data_diplomes=mysqli_fetch_array($resdiplomes)) { 
			echo $data_diplomes['specialisation']; 
			echo $data_diplomes['date_diplome']; 
			echo $data_diplomes['ecole'].
			"<br>"; 
		} ?> <br>
		Mes Centres d'interets<br>
	</center></p>
</div>
		
</div>
</body>
</html>