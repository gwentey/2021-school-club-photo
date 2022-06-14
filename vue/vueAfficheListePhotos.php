<?php include_once("header.php"); ?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('image/oeuvres.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2">Choix d'oeuvres par type :</span></p>
              <div class="form-group">

       <form method="POST" action="">

    <select name="type" class="form-control">
    <option name="type" value="null" disabled>Choisir un type</option>

    <?php foreach($lesResultatsTypes as $leResultatType){ ?>

    <option name="type" value="<?php echo $leResultatType->id_type; ?>"><?php echo $leResultatType->nom_type; ?></option>
    <?php } ?>
    </select>
        <button type="submit" name="submit" class="btn btn-success">Chercher</button>

  </div>
          </div>
        </div>
      </div>
    </section>
</form>
<?php 
if(isset($_POST['submit'])){
?>

	<br />
    	<div class="container">
    		<div class="row">
    			<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>Œuvre</th>
						    	<th>Description</th>
						        <th>Nom</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">


    <?php foreach($lesResultatsListePhotos as $leResultatPhoto){ ?>

				    	<td>
							<div class="image" style="background-image:url('image/<?php echo $leResultatPhoto->photos; ?>')"></div>
						    	</td>
						      <td>
						      		<span><?php echo $leResultatPhoto->texte_photo; ?></span>
						      </td>
						      <td><a href="?action=AffichePhoto&amp;numero=<?php echo $leResultatPhoto->id_photo; ?>"><?php echo $leResultatPhoto->titre_photo; ?></td>
						    </tr>
						<?php } ?>  

						  </tbody>
						</table>
					</div>
    		</div>
<?php } else { ?>
 <section class="ftco-section" style="background-image:url(image/giphy.gif); background-repeat: no-repeat;">
    	<div class="container">
    		<div class="row">
    			<div align="right">
<h1>Tout artiste est précieux car il apaise le monde humain et enrichit le coeur des hommes.</h1>
<h3>Natsume Soseki</h3>
</div>
<br />


<br />
<br />
</div>
</div>

 <?php } ?>

<?php include_once("footer.php"); ?>