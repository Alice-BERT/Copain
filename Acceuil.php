<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheetAcceuil.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="path/to/font-mfizz/font-mfizz.css">
	<script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		  
	  .nav-item{
		position: relative;
		left: 50%;
	  }
	  
	  .nav-item input[type="text"] {
		width: 70%;
		background-color:white;
		color:grey;
		border: none;
	  }
	  
	  .nav-item .search-container button {
		padding: 6px 10px;
		margin-top: 8px;
		margin-right: 16px;
		background: #ddd;
		font-size: 17px;
		border: none;
		cursor: pointer;
	  }
	  
	  .nav-item .search-container button:hover {
		background: #ccc;
	  }
	  
	  .nav-item a:hover {
		background-color: lightblue;
		color: black;
	  }
	  
	  .dropdown {
		display: inline-block;
	  }
	  
	  .dropdown-item {
		display: none;
		background-color: white;
	  }
	  
	  .dropdown-item a {
		color: black;
		padding: 20px;
		text-decoration: none;
		display: block;
	  }
	  
	  .dropdown:hover .dropdown-item {
		display: block;
	  }
	  
	</style>
	<title>Acceuil</title>
</head>
<body>
	<div class="m-4">
		<nav class="navbar navbar-expand-sm navbar-light bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand text-uppercase fw-bold">
			  <span class="bg-primary bg-gradient p-1 rounded-3 text-dark">You</span> Stage
			</a>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li class="nav-item">
				  <input type="text" placeholder="Rechercher...">
				  <button type="submit"><i class="fa fa-search"></i></button>
				</li>
        <li class="nav-item">
              <a href="Home.php" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item">
              <a href="Offres.php" class="nav-link">Offres</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link">Profil</a>
            </li>
            <li class="nav-item dropdown">
              <a href="Notification.php" class="nav-link">Notifications</a>
            </li>
          </ul>
          <ul class="nav navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="" class="dropdown-item">Entreprises</a>
                <a href="Offres.php" class="dropdown-item">Offres</a>
                <a href="" class="dropdown-item">Candidatures</a>
                <a href="Wish-list.php" class="dropdown-item">Wish-List</a>
                <a href="" class="dropdown-item">Paramètres</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Déconnexion</a>
				  </div>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>    
	  </div>
	<div class="container">
		<h4>Bienvenue sur Youstage</h4>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-7">
				<img src="Images\t-pose.jpg" class="bigoneimg">
			</div>
			<div class="col-5">
				<fieldset class="droite">
					<form action="https://google.com">
						<input type="submit" value="Se connecter" />
				</form>
				</fieldset>
				<p class="texte">
					Gardevoir est un Pokémon humanoïde bipède dont le corps ressemble à une robe flottante. Pratiquement tout son corps est de couleur blanche, sauf ses cheveux, ses bras et l'intérieur de sa robe, qui sont verts. Ses cheveux bouclent sur son visage et sur les côtés de son visage. Il a derrière ses yeux rouges des épines blanches, qui font penser à un loup de carnaval. Il a de longs bras avec trois doigts à chaque main, et de minces jambes blanches. Une corne rouge qui ressemble à un aileron sort de sa poitrine, tandis qu'une autre corne rouge, plus petite et plus arrondie, sort de son dos. Une bande verte qui fait le tour de sa taille relie la corne rouge à ses bras.

Gardevoir est capable de percevoir le futur en utilisant ses pouvoirs psychiques. Il est également capable de créer des trous noirs, de distordre les dimensions, et de s'élever en apesanteur. Son pouvoir atteint son apogée quand Gardevoir protège son Dresseur, pour qui il donnerait sa vie. Ce Pokémon évite les zones urbaines.
				</p>
			</div>
		</div>
	</div>
	<div class="container">
		<footer>
			Mentions Légales 
			bla bla bla
		</footer>
	</div>
</body>
</html>