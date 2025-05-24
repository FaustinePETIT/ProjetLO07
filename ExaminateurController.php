<?php
require_once '../../../LO07/projet1/ProjetLO07/app/model/ModelCreneau.php';

class ExaminateurController {

    // Liste des projets de l'examinateur 
    public static function examinateurReadProjets() {

        session_start();
        $examinateur_id = $_SESSION['login_id'];
        $results = ModelExaminateur::getProjetsByExaminateur($examinateur_id);
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewProjets.php'; // mettre la bonne vue pas encore le cas
        if (DEBUG)
            echo ("ExaminateurController : examinateurReadProjets : vue = $vue");
        require($vue);
    }

    //liste complete des creneaux
    public static function examinateurReadAllCreneaux() {
        session_start();
        $examinateur_id = $_SESSION['login_id'];
        $results = ModelExaminateur::getAllCreneaux($examinateur_id);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewAllCreneaux.php'; // tjrs la même chose
        if (DEBUG)
            echo ("ExaminateurController: examinateurReadAllCreneaux : vue = $vue");
        require($vue);
    }

    // Affiche un formulaire pour sélectionner un projet
    public static function examinateurReadProjetId() {
        session_start();
        $examinateur_id = $_SESSION['login_id'];
        $results = ModelExaminateur::getProjetsByExaminateur($examinateur_id);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewProjetId.php'; // tjrs la même chose
        require($vue);
    }

    // Affiche les créneaux d'un projet particulier
    public static function examinateurReadCreneauxProjet() {
        session_start();
        $examinateur_id = $_SESSION['login_id'];
        $projet_id = $_GET['id'];
        $results = ModelCreneau::getCreneauxByProjet($examinateur_id, $projet_id);
       
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewCreneauxProjet.php';// tjrs la même chose
        require($vue);
    }

    // Affiche le formulaire de creation d'un creneau
    public static function examinateurCreateCreneau() {
        $results = ModelExaminateur::getAllProjets();
        
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewInsertCreneau.php'; // tjrs la même chose
        require($vue);
    }

    // Ajoute un creneau
    public static function examinateurCreatedCreneau() {
        session_start();
        $examinateur_id = $_SESSION['login_id'];
        // validation basique
        if (empty($_GET['projet_id']) || empty($_GET['creneau'])) {
            $error = "Tous les champs sont obligatoires";
            include 'config.php';
            $vue = $root . '/app/view/examinateur/viewInsertCreneau.php';
            require($vue);
            return;
        }

        $results = ModelExaminateur::insertCreneau(
                htmlspecialchars($_GET['projet_id']),
                $examinateur_id,
                htmlspecialchars($_GET['creneau'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewCreneauInserted.php';
        require($vue);
    }

    // Affiche le formulaire pour ajouter plusieurs créneaux
    public static function examinateurCreateMultipleCreneaux() {
        $results = ModelCreneau::getAllProjets();
        
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewInsertMultiple.php';// tjrs la même chose
        require($vue);
    }

    // Ajoute plusieurs créneaux
    public static function examinateurCreatedMultipleCreneaux() {
        session_start();
        $examinateur_id = $_SESSION['login_id'];
        // validation
        if (empty($_GET['projet_id']) || empty($_GET['creneau_debut']) || empty($_GET['nombre'])) {
            $error = "Tous les champs sont obligatoires";
            include 'config.php';
            $vue = $root . '/app/view/examinateur/viewInsertMultiple.php'; // tjrs la même chose
            require($vue);
            return;
        }

        $nombre = intval($_GET['nombre']);
        if ($nombre < 1 || $nombre > 10) {
            $error = "Le nombre doit être entre 1 et 10";
            include 'config.php';
            $vue = $root . '/app/view/examinateur/viewInsertMultiple.php'; // tjrs la même chose
            require($vue);
            return;
        }

        $results = ModelExaminateur::insertMultipleCreneaux(
                htmlspecialchars($_GET['projet_id']),
                $examinateur_id,
                htmlspecialchars($_GET['creneau_debut']),
                $nombre
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/examinateur/viewMultipleInserted.php'; // tjrs la même chose
        require($vue);
    }
}
?>
<!-- ----- fin ControllerExaminateur -->