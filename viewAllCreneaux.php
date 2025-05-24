<!-- ----- début viewAllCreneaux -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html'; // pareil
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html'; // pareil
      ?>
      
    <h2>Tous mes créneaux</h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Projet</th>
          <th scope = "col">Date/Heure</th>
          <th scope = "col">Statut</th>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", 
             $element->getProjetLabel(), $element->getCreneau(), $element->getStatut());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
<!-- ----- fin viewAllCreneaux -->
