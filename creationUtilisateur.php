<html>
    <?php
    require_once 'includes/head.php';
    ?>

    <body>
        <?php
        if(isset($_GET["create"]))
        {
            if($_GET["create"] == "errorLogin")
            {
                require_once 'errorCreateUser.html';
            }
            else if($_GET["create"] == "errorPwd")
            {
                require_once 'errorPassword.html';
            }
            else if($_GET["create"] == "errorMail")
            {
                require_once 'errorMail.html';
            }
        }
        ?>
        <div class="container formConnexion">
            <h3>Créer un compte</h3>
            <form class="form-horizontal" action="createUser.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="login" >Identifiant :</label>
                    <div class="inpConnexion">
                        <input type="text" class="form-control" id="login" placeholder="Veuillez saisir votre identifiant" name="login" required>
                    </div>
                </div>
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
                    <label class="control-label col-sm-2" for="mail" >Mail :</label>
                    <div class="inpConnexion">
                        <input type="text" class="form-control" id="mail" placeholder="Veuillez saisir votre adresse mail" name="mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary" name='btn_create'>Créer</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>