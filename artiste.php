<html>
<?php
require_once 'includes/head.php';
require_once 'includes/navbar.php';

if(!isset($_SESSION['utilisateur']))
{
    header('Location:connexion.php');
}

require_once 'Classes/Calbums.php';
?>

<body>
<div class="container">
    <h2><?php echo $_GET["artiste"] ?></h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Artiste</th>
                <th>Année</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach(Calbums::getAlbumByArtiste($_GET["artiste"]) as $album)
            {
                echo '<tr>';
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