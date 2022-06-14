<?php include_once("headerEgg.php"); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('image/perso/fond.gif');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">

          </div>
        </div>
      </div>
    </section>

  <br />

<body>
<?php if(!isset($_POST['code'])){ ?>
<!-- partial:index.partial.html -->
<form action="" method="POST">
<main class="page-content">
  <div class="card">
    <div class="content">
      <h2 class="title">Loved</h2>
      <p class="copy">Le coeur, le corps, l'amour, un lien symbolique et universelle</p>
      <button name="code" value="amour" type="submit" class="btn">Découvir mon amour</button>
    </div>
  </div>
</form>
  <div class="card">
    <div class="content">
      <h2 class="title">Depressed</h2>
      <input name="message" type="hidden" value="mes nuages sombrent m'inspirent ?">
      <p class="copy">Quand mes propres nuages réapparaîssent...</p>
      <button name="code" value="depress" type="submit" class="btn">Entrer dans mes nuages</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">Zebred</h2>
       <input name="message" type="hidden" value="un décalage étrange">
      <p class="copy">Le décalage avec cette société n'est qu'un gouffre sans fin</p>
      <button name="code" value="zebre" type="submit" class="btn">Voir ce gouffre</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">Happinessed</h2>
      <p class="copy">Patience, patience... je n'ai pas encore tout vécu pour me permettre de crée la dessus</p>
            <p class="btn"/>

    </div>
  </div>
</main>

<?php }else{ ?>


      <div class="container">
        <div class="row">
          <div align="right">

    <?php foreach($lesResultatsListePhotosEgg as $leResultatPhoto){ ?>

<div class="cardaff cardaff-1">
<div class="image" style="background-image:url('image/<?php echo $leResultatPhoto->photos; ?>')"></div>
<a style="font-family: 'Gill Sans', sans-serif; color: initial; " href="?action=AffichePhotoEgg&amp;numero=<?php echo $leResultatPhoto->id_arti; ?>"><?php echo $leResultatPhoto->titre_arti; ?></a>
</div>
    <?php } ?>

</div>
<br />


<br />
<br />
</div>
</div>
           
<?php } ?>
<audio loop autoplay controls>
  <source src="image/perso/song.mp3" type="audio/mp3">
</audio>

<?php include_once("footer.php"); ?> 