<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="connexion.php">Music</a>
        </div>
        <?php
        session_start();
        if(isset($_SESSION['utilisateur']))
        {
            ?>
        <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-star"></span>  Mes favoris</a></li>
        </ul>
        <?php
        }
        ?>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if(isset($_SESSION['utilisateur'])) {
                ?>
                <li><a href="gestionCompte.php"><span class="glyphicon glyphicon-user"></span>  Mon compte</a></li>
                <?php
            }
            else
            {
                ?>
                <li><a href="creationUtilisateur.php"><span class="glyphicon glyphicon-user"></span>  Créer un compte</a></li>
                <?php
            }
            if(isset($_SESSION['utilisateur']))
            {
                ?>
                <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>