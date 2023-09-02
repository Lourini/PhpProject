<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>FORMULAIRE</title>
</head>

<body>
    <?php
    require_once 'connexion.php';
    if ($_POST) {
        extract($_POST);
        $sql = "UPDATE etudiants SET nom='$nom_etud', prenom='$prenom_etud', date='$date_nais', sexe='$sexe', adresse='$adresse' WHERE id='$matricule'";
        $resultat = mysqli_query($link, $sql);
        if ($resultat) {
            echo "<script>alert('l`etudiant est modifié avec succés.');document.location='http://localhost/phpcours/projet/TP/TP3/Listes-Etudiants.php'</script>";
        }
    }
    if ($_GET['mat_modif']) {
        $key = $_GET['mat_modif'];
        $sql = "SELECT * FROM `etudiants` WHERE id = $key";
        $resultat = mysqli_query($link, $sql);
        if ($resultat == FALSE) {
            echo "<script>alert('aucun etudiant avec le matricule $key demande');document.location='http://Localhost/phpcours/projet/TP/TP3/Listes-Etudiants.php';</script>";
            //header('Location:Listes-Etudiants.php');
        } else {
            $row = mysqli_fetch_assoc($resultat);
            extract($row);
            mysqli_free_result($resultat);
            mysqli_close($link);
        }
    }
    if (isset($_GET['mat_sup'])) {
        $matricule = $_GET['mat_sup'];
        $sql = "DELETE FROM etudiants WHERE id='$matricule'";
        $resultat = mysqli_query($link, $sql);
        mysqli_close($link);
        if ($resultat) {
            header('Location:Listes-Etudiants.php?action=vrai');
        } else {
            header('Location:Listes-Etudiants.php?action=non');
        }
        mysqli_free_result($resultat);
    }
    ?>

    <div class="container">
        <div class="row col-md-12">
            <h3>Modifier un Etudiant </h3>
            <form role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div class="form-group">
                    <label>Matricule :</label>
                    <input type=" text" name="matricule" class="form-control" placeholder="Matricule" value="<?php echo $id; ?>" />
                </div>
                <div class="form-group">
                    <label for="Nom">Nom :</label>
                    <input id="Nom" class="form-control" type="text" name="nom_etud" placeholder="Nom" value="<?php echo $nom; ?>">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input id="prenom" class="form-control" type="text" name="prenom_etud" placeholder="Prenom" value="<?php echo $prenom; ?>">
                </div>
                <div class="form-group">
                    <label for="date">Date de naissance :</label>
                    <input id="date" class="form-control" type="date" name="date_nais" value="<?php echo $date; ?>" />
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe :</label>
                    <select name="sexe" class="form-control">
                        <option value="masculin" <?php if ($sexe == 'masculin') echo 'selected'; ?>>Masculin</option>
                        <option value="féminin" <?php if ($sexe == 'féminin') echo 'selected'; ?>>Féminin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="adresse">Address :</label>
                    <input id="adresse" class="form-control" type="text" name="adresse" value="<?php echo $adresse; ?>" />
                </div>
                <button type="submit" class="btn btn-primary">enregister</button><input type="reset" value="effacer" class="btn btn-warning" />
            </form>
        </div>
    </div>

</body>

</html>