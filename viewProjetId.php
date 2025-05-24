<!-- ----- début viewProjetId -->
<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';// tjrs la même
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';// tjrs la même
      
        // $results contient un tableau avec la liste des projets.
      // on n'a pas encore de router à voir ducoup pour la suite : action
      ?>

    <form role="form" method='get' action='router1.php'> 
      <div class="form-group">
        <input type="hidden" name='action' value='examinateurReadCreneauxProjet'>
        <label for="id">Projet : </label> <select class="form-control" id='id' name='id' style="width: 100px">
            <?php
            foreach ($results as $projet) {
             printf("<option value='%d'>%s</option>", $projet->getId(), $projet->getLabel());
            }
            ?>
        </select>
      </div>
      <p/><br/>
      <button class="btn btn-primary" type="submit">Voir les créneaux</button>
    </form>
    <p/>
  </div>
    
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
    
<!-- ----- fin viewProjetId -->