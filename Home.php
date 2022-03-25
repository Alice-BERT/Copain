<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheetHome.css">
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
  <title>Home</title>
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
  <h4 class="titre">Annonces les plus récentes</h4>
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <img class="card-img-top" src="Images\chen honk walk.gif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <img class="card-img-top" src="Images\chen honk walk.gif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <img class="card-img-top" src="Images\chen honk walk.gif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</body>
</html>