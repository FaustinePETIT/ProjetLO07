<?php
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html'; //pareil
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html'; //pareil
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Le nouveau créneau a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>projet = " . $_GET['projet'] . "</li>");
     echo ("<li>examinateur = " . $_GET['examinateur'] . "</li>");
     echo ("<li>creneau = " . $_GET['creneau'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion du créneau</h3>");
     echo ("id = " . $_GET['projet']);
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
