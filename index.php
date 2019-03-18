<html>
    <?php
    session_start();
    require_once 'includes/head.php';

    if(!isset($_SESSION['utilisateur']))
    {
    	header('Location:connexion.php');
    }
    ?>

    <body>
        <div class="container">
            <h2>Mes favoris</h2>
            <h3>Par album</h3>
            <table class="table">
                <thead>
                <tr>
                    <th style="width:5%">Consulter</th>
                    <th>Nom</th>
                    <th>Artiste</th>
                    <th>Année</th>
                    <th>Prix</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><button type="submit" class="glyphicon glyphicon-search btn btn-info" name="btn_consulter"></button></td>
                    <td>Black in black</td>
                    <td>ACDC</td>
                    <td>1980</td>
                    <td>50€</td>
                </tr>
                </tbody>
            </table>
            <h3>Par artiste</h3>
            <table class="table">
                <thead>
                <tr>
                    <th style="width:5%">Consulter</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Pays</th>
                    <th>Genre</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><button type="submit" class="glyphicon glyphicon-search btn btn-info" name="btn_consulter"></button></td>
                    <td>ACDC</td>
                    <td>hard rock</td>
                    <td>Australie</td>
                    <td>hard rock </td>
                </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>