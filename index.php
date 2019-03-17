<html>
    <?php
    session_start();
    require_once 'includes/head.php';

    if(!isset($_SESSION['utilisateur']))
    {
    	header('Location:connexion.php');
    }
    ?>

    <div class="container">
        <h3>Accueil</h3>
    </div>
</html>