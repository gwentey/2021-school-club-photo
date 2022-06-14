<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Mes oeuvres</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./css/egg/dist/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<?php foreach($lesResultatsPhoto as $leResultatPhoto){ ?>
<!-- partial:index.partial.html -->
<article class="article group">
  <img class="image right" src="image/<?php echo $leResultatPhoto->photos; ?>" alt="Image">
  <section class="content">
    <h2 class="headline"><?php echo $leResultatPhoto->titre_arti; ?></h2>
    <p><?php echo $leResultatPhoto->texte_arti; ?></p>
  </section>
  <br />
  <a href="javascript:history.go(-1)"><-</a>
<?php } ?>

</article>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
