<?php include_once("header.php"); ?>

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('image/wow.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <h2 class="mb-0 bread">Espace de connection</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
    	<div class="container">

    <form action="" method="POST">

        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>  
          <div class="col-md-5">
          <input name="mail" type="text" placeholder="Votre email" class="form-control input-md" required="">
            
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="password">Mot de passe</label>
          <div class="col-md-4">
            <input name="password" type="password" placeholder="Votre mot de passe" class="form-control input-md">
           <br /> 
            <input name="connecter" type="submit" value="Connection" class="btn btn-primary"></input>
          </div>
          <p>Vous êtes nouveau ici ?<a href="?action=Inscription">S'inscrire</a>
        </div> 
    </form>
	    </div>

	  </section>

<?php include_once("footer.php"); ?>