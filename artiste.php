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
    <h2>Nom de l'artiste</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Durée</th>
            <th>Album</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Hells Bells</td>
            <td>5:12</td>
            <td>Black in black</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>