<?php include_once("header.php"); ?>

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('image/wow.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <h2 class="mb-0 bread">Les photos de l'article</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
	<br />
    	<div class="container">
    		<div class="row">

    			<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">

						    <tr>
						    	<th>Œuvre</th>
						    	<th>Description</th>
						      <th>Titre</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">

    <?php foreach($lesResultatsPhotosArticles as $leResultatPhotoArticle){ ?>

				    	<td>
							<div class="image" style="background-image:url('image/<?php echo $leResultatPhotoArticle->photos; ?>')"></div>
						    	</td>
						      <td>
						      		<span><?php echo $leResultatPhotoArticle->texte_photo; ?></span>
						      </td>
						      <td>
                  <span><?php echo $leResultatPhotoArticle->titre_photo; ?></span>      
                  </td>
						    </tr>
						<?php } ?>  

						  </tbody>
						</table>
<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Ajouter une photo</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titre_photo">Titre de la photo </label>  
  <div class="col-md-4">
  <input id="titre_photo" name="titre_photo" type="text" placeholder="Titre de la photo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="texte_photo">Description de la photo</label>
  <div class="col-md-4">                     
    <input type="textarea" class="form-control" id="texte_photo" name="texte_photo"></input>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="photo">Votre photo</label>
  <div class="col-md-4">
    <input id="photo" name="photo" class="input-file" type="file">
  </div>
</div>
</fieldset>
<input name="ajouter" type="submit" value="Ajouter la photo" class="btn btn-primary"></input>

</form>

		</div>

<?php include_once("footer.php"); ?>