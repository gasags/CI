<html>
    <?php
        require_once 'includes/head.php';
    ?>

    <body>
        <?php
            session_start();

            if(!isset($_SESSION['utilisateur']))
            {
                header('Location:connexion.php');
            }

            if(isset($_GET["modif"]))
            {
                if($_GET["modif"] == "errorPwd")
                {
                    require_once 'errorPassword.html';
                }
                else if($_GET["modif"] == "ok")
                {
                    require_once 'modifPwd.html';
                }
            }
        ?>
        <div class="container formConnexion">
            <h3>Modifier mon compte</h3>
            <form class="form-horizontal" action="modifCompte.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Mot de passe :</label>
                    <div class="inpConnexion">
                        <input type="password" class="form-control" id="pwd" placeholder="Veuillez saisir votre mot de passe" name="tb_pwd" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd2">Mot de passe :</label>
                    <div class="inpConnexion">
                        <input type="password" class="form-control" id="pwd2" placeholder="Veuillez confirmer votre mot de passe" name="tb_pwd2" required>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary" name='btn_create'>Modifier</button>
                    </div>
                </div>
            </form>
            <a href="suppCompte.php" class="btn btn-primary"> Supprimer mon compte </a>
        </div>
    </body>
</html>