<html>
    <?php
    require_once 'includes/head.php';
    require_once 'includes/navbar.php';

    if(!isset($_SESSION['utilisateur']))
    {
    	header('Location:connexion.php');
    }

    require_once 'Classes/Calbums.php';
    require_once 'Classes/Cartistes.php';
    ?>

    <body>
        <div class="container">
            <h2>Mes favoris</h2>
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
                <?php
                	foreach(Cartistes::getArtistes() as $artiste)
                	{
                		echo '<tr>';
	                		echo '<td><a href="artiste.php?artiste=' . $artiste->nom . '" class="glyphicon glyphicon-search btn btn-info" name="btn_consulter"></button></td>';
	                		echo '<td>' . $artiste->nom . '</td>';
	                		echo '<td>' . $artiste->type . '</td>';
	                		echo '<td>' . $artiste->pays . '</td>';
	                		echo '<td>' . $artiste->genre . '</td>';
                		echo '</tr>';
                	}
                ?>
                </tbody>
            </table>
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
                <?php
                	foreach(Calbums::getAlbum() as $album)
                	{
                		echo '<tr>';
                		echo '<td><button type="submit" class="glyphicon glyphicon-search btn btn-info" name="btn_consulter"></button></td>';
                		echo '<td>' . $album->nom . '</td>';
                		echo '<td>' . $album->artiste . '</td>';
                		echo '<td>' . $album->annee . '</td>';
                		echo '<td>' . $album->prix . '</td>';
                		echo '</tr>';
                	}
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>