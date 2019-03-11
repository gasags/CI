<html>
    <?php
    require_once 'includes/head.php';
    ?>

    <div class="container formConnexion">
        <h3>Veuillez saisir vos informations de connexion</h3>
        <form class="form-horizontal" action="connex.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="mail" >Identifiant :</label>
                <div class="inpConnexion">
                    <input type="text" class="form-control" id="mail" placeholder="Veuillez saisir votre identifiant" name="tb_mail" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Mot de passe :</label>
                <div class="inpConnexion">
                    <input type="password" class="form-control" id="pwd" placeholder="Veuillez saisir votre mot de passe" name="tb_pwd" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Mot de passe :</label>
                <div class="inpConnexion">
                    <input type="password" class="form-control" id="pwd" placeholder="Veuillez saisir votre mot de passe" name="tb_pwd" required>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary" name='btn_login'>Se connecter</button>
                </div>
            </div>
        </form>
    </div>
</html>