<?php include('connexion.php');
session_start();
include('connexion.php');
$codeuse="SELECT * FROM codeuses WHERE id=".$_SESSION['variable'];
    $res=mysqli_query($link,$codeuse);
    $data=mysqli_fetch_array($res);

$msg="";
if (isset($_POST['btnValider'])){ 
	$sql="INSERT INTO interets(description,titre,id_codeuses) 
	VALUES ('".$_POST['description_centre_d_interets']."',
	                  '".$_POST['centre_d_interet']."',
			 		  '".$_SESSION['variable']."')";
	$result=mysqli_query($link,$sql);
	if ($result) {
		$msg='Insertion réussie';

	}else{
		$msg=mysqli_error($link);
	}
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/interets.css">

	<title>Interets</title>
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

<h1><marquee behavior="alternate">AJOUTER VOS CENTRES D'INTERETS</marquee></h1>

<div class="col-md-4">
<ul class="nav navbar-nav navbar-left">
<li class="active">
	<nav><a href="modif_profil.php" class="btn-treehouse">Modifier Profil</a></nav>
	</li><br><br>

	<li>
	<nav><a href="codeuses.php">Créer CV</a></nav>
	</li><br><br>

	<li>
		<nav><a href="affichageCV.php">Afficher votre CV</a></nav>
	</li><br><br>

	<li>
	<nav><a href="experiences.php">Ajouter Experiences</a></nav>
	</li><br><br>

	<li>
	<nav><a href="diplomes.php">Ajouter Diplomes</a></nav>
	</li><br><br>

	<li>
	<nav><a href="centre_d_interets">Ajouter Centre d'Intérêts</a></nav>
	</li><br><br>
	</ul>
</div>

<div class="col-md-8">
<form action="" method="post" enctype="multipart/form-data">
    <?php echo $msg; ?>                              
		<div class="form-group">
			<label>description de centre d'Interêts</label>
			<input type="text" name="description_centre_d_interets" class="form-control" placeholder="Sport"><br>
		</div>

		<div class="form-group">
			<label >centre d'Interêts</label>
			<select name="centre_d_interet">
			<option value="natation">Natation</option>
			<option value="tennis">Tennis</option>
			<option value="football">Football</option>
			<option value="natation">Natation</option>
			<option value="basketball">Basketball</option>
			</select>
			
		</div>

		<center><button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block submit">Valider</button></center><br><br>

</form>
</div>

<span><?php
		echo $msg;
	 ?>
	 	
	 </span>
	<div class="col-md-2"></div>

	<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>Numero</th>
				<th>titre</th>
				<th>Description</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
		</thead>	
		<tbody>

		<?php
			$n=1;
			$list=" SELECT * FROM interets";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 

		?>

		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['description']; ?></td>
			<td><?php echo $data['titre']; ?></td>
		</tr>

		<?php  
			$n++;

			}
		?>
	</tbody>
	</table>
	</div>

</body>
</html>