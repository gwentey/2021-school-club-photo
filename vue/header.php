<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>L'art naïf</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css"> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css_princip.css">

  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">L'art <span>naïf</span></a>
	      <div class="order-lg-last btn-group">
         
         
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="./?action=accueil" class="nav-link">Acceuil</a></li>
	          <li class="nav-item"><a href="./?action=AfficheListePhotos" class="nav-link">Les Oeuvres des Artistes</a></li>
              <?php   
               if(isset($_SESSION["user"])){ ?>

     <li class="nav-item"><a class="nav-link" href="./?action=MesArticles">Mes articles : <?= $_SESSION["user"]->nom_user; ?></a></li>
      <li class="nav-item"><a class="nav-link" href="./?action=Deconnection">DECONNECTION</a></li>

    <?php } else { ?>
      <li class="nav-item"><a href="./?action=Connection" class="nav-link">Se connecter</a></li>
    <?php } ?>
        </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
