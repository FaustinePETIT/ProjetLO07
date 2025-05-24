
<!-- ----- début viewInsertMultiple -->

<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';//pareil 
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';//pareil avec router
    ?>

    <form role="form" method='get' action='router1.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='creneauxCreated'>
        <label for="projet">Projet :</label>
        <select class="form-control" name='projet'>
          <?php
          foreach ($results as $projet) {
            echo "<option value='" . $projet['id'] . "'>" . $projet['label'] . "</option>";
          }
          ?>
        </select>

        <label for="creneau_debut">Date et Heure de Début :</label><input type="datetime-local" class="form-control" name='creneau_debut'>
        <label for="nombre_creneaux">Nombre de Créneaux (1-10) :</label><input type="number" class="form-control" name='nombre_creneaux' min="1" max="10">
        <label for="examinateur">Examinateur :</label><input type="text" class="form-control" name='examinateur'>

        <?php if(isset($error)) echo "<div class='alert alert-danger'>" . $error . "</div>"; ?>
      </div>

      <button class="btn btn-primary" type="submit">Ajouter Créneaux</button>
    </form>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
</body>
<!-- ----- fin viewInsertMultiple -->