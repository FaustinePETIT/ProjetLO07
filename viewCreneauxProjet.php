<!-- ----- début viewCreneauxProjet -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
      
    <h2>Créneaux pour ce projet</h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">ID</th>
          <th scope = "col">Date/Heure</th>
          <th scope = "col">Statut</th>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($results as $element) {
           printf("<tr><td>%d</td><td>%s</td><td>%s</td></tr>", 
             $element->getId(), $element->getCreneau(), $element->getStatut());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
    
<!-- ----- fin viewCreneauxProjet -->
