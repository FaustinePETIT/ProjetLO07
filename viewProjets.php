<!-- ----- début viewProjets -->
<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html'; // à modfier
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html'; // à modifier
      ?> 
      
    <h2>Mes projets</h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">ID</th>
          <th scope = "col">Label</th>
          <th scope = "col">Responsable</th>
          <th scope = "col">Groupe</th>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($results as $element) {
           printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%d</td></tr>", 
             $element->getId(), $element->getLabel(), $element->getResponsable(), $element->getGroupe());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>
<!-- ----- fin viewProjets -->