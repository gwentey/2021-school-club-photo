<?php include_once("header.php"); ?>

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('image/wow.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <h2 class="mb-0 bread">Mes articles</h2>
          </div>
        </div>
      </div>
     <?php include_once("header.php"); ?>
    </section>

  <br />
      <div class="container">
        <div class="row">
          <div class="table-wrap">
            <table class="table">
              <thead class="thead-primary">
                <tr>
                  <th>Date</th>
                  <th>Titre</th>
                  <th>Texte</th>
                  <th>Type Photo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="alert" role="alert">


    <?php foreach($lesResultatsMesArticles as $leResultatArticle){ ?>

                    <td>
                       <span><?php echo $leResultatArticle->date_arti; ?></span>
                    </td>
                    <td>
                        <span><?php echo $leResultatArticle->titre_arti; ?></span>
                    </td>
                    <td>
                        <span><?php echo $leResultatArticle->texte_arti; ?></span>
                    </td>
                    <td>
                        <span><?php echo $leResultatArticle->nom_type; ?></span>
                    </td>
                    <td><a href="?action=AjouterArticlePhoto&amp;numero=<?php echo $leResultatArticle->id_arti; ?>">Voir les photos</a>
                    </td>
                </tr>
            <?php } ?>  

              </tbody>
            </table>
          </div>
        </div>


<?php include_once("footer.php"); ?>