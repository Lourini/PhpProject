<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Liste des Etudiants</title>

</head>

<body>
    <?php require_once 'connexion.php'
    ?>
    <table class="table">
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
            <th>Sexe</th>
            <th>Adresse</th>
            <th>Action</th>
        </tr>
        <?php
        $query = "SELECT * FROM `etudiants`";
        $resultat = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($donne = mysqli_fetch_assoc($resultat)) {
            extract($donne);
            echo '<tr>';
            echo '<td>mat-' . $id . '</td>';
            echo '<td>' . $nom . '</td>';
            echo '<td>' . $prenom . '</td>';
            echo '<td>' . $date . '</td>';
            echo '<td>' . $sexe . '</td>';
            echo '<td>' . $adresse . '</td>';
            echo "<td><a class='btn btn-warning' href='modif.php?mat_modif=$id'>Modifier</a>";
            echo "<a  class='btn btn-danger' href='modif.php?mat_sup=$id'>Supression</a>";
            echo '</td></tr>';
        }
        if (isset($_GET['Action'])) {
            if ($_GET['Action'] == "vrai") {
                echo "<script>alert('l'etudiant de matricule $_GET[sup] est supprimé avec succés');</script>";
            } else {
                echo "<script>alert(' Erreur de suppresion de l'etudiant de matricule $_GET[sup]');</script>";
            }
        }
        echo "<hr><pre>";
        echo "<a href ='ajout.html'>Ajouter un Etudiant</a>";
        echo "le nombre actuel des étudiants inscrits est <b>" . mysqli_num_rows($resultat) . "</b>";
        mysqli_free_result($resultat);
        mysqli_close($link);
        ?>
    </table>
    <style>
        .btn-danger {
            margin-left: 2px;
        }
    </style>

</body>

</html>