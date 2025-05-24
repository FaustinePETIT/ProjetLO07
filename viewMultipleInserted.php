<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <div class="alert alert-success" role="alert">
      <?php
      if ($results) {
        echo ("<h3>" . $results . " nouveaux créneaux ont été ajoutés avec succès</h3>");
      } else {
        echo ("<h3>Problème lors de l'insertion des créneaux</h3>");
      }
      ?>
    </div>

    <a href="router1.php?action=listeCreneaux" class="btn btn-primary">Retour à la liste des créneaux</a>

  </div>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
</body>

