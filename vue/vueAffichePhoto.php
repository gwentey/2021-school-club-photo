<?php include_once("header.php"); ?>

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('image/wow.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
           <?php foreach($lesResultatsPhoto as $leResultatPhoto){ ?>

            <h2 class="mb-0 bread"><?php echo $leResultatPhoto->titre_photo; ?></h2>
          </div>
        </div>
      </div>
    </section>
<?php } ?>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
              <div class="image_grand" style="background-image:url('image/<?php echo $leResultatPhoto->photos; ?>')"></div>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $leResultatPhoto->titre_photo; ?></h3>
    				
    				<p><?php echo $leResultatPhoto->texte_photo; ?>
						</p>

	             	</span>
	          	</div>
	          </div>
	      </div>
	  </section>

<?php include_once("footer.php"); ?>