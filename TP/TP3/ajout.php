<?php
require_once 'connexion.php';
if ($_POST) {
    extract($_POST);
    $sql = "INSERT INTO etudiants VALUES('$matricule','$nom_etud','$prenom_etud','$date_nais','$sexe','$adresse')";
    $resultat = mysqli_query($link, $sql);
    //$req = $link->prepare("INSERT INTO `liste-etudiants` (`id`, `nom`, `prenom`, `date`, `sexe`, `adresse`) VALUES (NULL,?,?,?,?,?)");
    //$req->execute(array($Matricule, $Nom, $prenom, $date, $sexe, $address));

    if ($resultat) {
        echo "<script>alert('l`etudiant $nom_etud $prenom_etud est enregistre avec succés.');document.location='http://localhost/phpcours/projet/TP/TP3/Listes-Etudiants.php'</script>";
    } else {
        echo "<script>alert('l`etudiant $nom_etud $prenom_etud n`est pas enregistre .');document.location='http://localhost/phpcours/projet/TP/TP3/ajout.html'</script>";
    }
}
mysqli_close($link);
/*if ($_POST) {
    extract($_POST);
    $sql = "INSERT INTO Liste-etudiants VALUES('$matricule','$nom_etud','$prenom_etud','$date_nais','$sexe','$adresse')";
    $resultat = mysqli_query($link, $sql);
    if ($resultat) {
        echo "Etudiant enregistré avec succès.<br>";
        echo "<a href='form-table.html'>Retour a la page d'accueil</a>";
    } else {
        echo "Erreur d'enregistrement d'un étudiant <br>";
        echo "<a href='form-table.html'>Retour a la page d'accueil</a>";
    }
    mysqli_free_result($resultat);
    mysqli_close($link);
}*/
