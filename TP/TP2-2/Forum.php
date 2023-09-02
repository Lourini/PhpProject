<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <table class="table">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <tr>
                    <td>Nom</td>
                    <td><input type=" text" class="form-control" name="Nom" placeholder="Nom" required minlength="5" />
                    </td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td><input class="form-control" type=" text" name="Prénom" placeholder="Prénom" required minlength="5" />
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type=" text" name="Email" placeholder="Email" required minlength="5" />
                    </td>
                </tr>
                <tr>
                    <td>Ville</td>
                    <td><input class="form-control" type="text" name="Ville" placeholder="Ville" required minlength="5" />
                    </td>
                </tr>
                <tr>
                    <td>Pays</td>
                    <td><input class="form-control" type=" text" name="Pays" placeholder="Pays" required minlength="5" />
                    </td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td><textarea class="form-control" name="Message"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Joindre un fichier</td>
                    <td><input class="form-control" type="file" name="MonCV" /></td>
                </tr>
                <tr>
                    <td colspan="2">

                        <center><input type="submit" value="envoyer" name="submit" /></center>

                    </td>
                </tr>

            </form>
        </table>
    </center>

    <?php
    if (isset($_POST["submit"])) {
        $file = fopen('data.txt', 'a+');
        fputs($file, "<center><table class='table table2'> \n");
        $Nom = $_POST["Nom"];
        $Prenom = $_POST["Prénom"];
        fputs($file, "<tr><td> Nom & Prénom $Nom $Prenom</td> \n");
        $Ville = $_POST["Ville"];
        $Pays = $_POST["Pays"];
        fputs($file, "<td> Ville : $Ville/$Pays</td></tr> \n");
        $date = date("Y-m-d__H-i-s");
        fputs($file, "<tr><td>Msg</td><td>$date</td></tr> \n");
        $msg = $_POST["Message"];
        fputs($file, "<tr><td> $msg </td><td></td></tr> \n");
        fputs($file, "</table></center> \n");
        fclose($file);
        if (isset($_FILES['MonCV']) and $_FILES['MonCV']['error'] == 0) { // Testons si le fichier n'est pas trop gros (la taille de l'envoi est limitée par PHP)
            if ($_FILES['MonCV']['size'] <= 1000000) { // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['MonCV']['name']);
                $extension_upload = $infosfichier['extension'];
                //$extensions_autorisees = array('pdf');
                if ($extension_upload == 'pdf') { // Validation de l'extension et Enregistrement +- renommage du fichier
                    // on peut aussi ajouter la date de l'upload 
                    $result = move_uploaded_file($_FILES['MonCV']['tmp_name'], 'C:\wamp64\www\phpcours\projet\TP\TP2-2\Uploded-CV\uploadCV-' . date("Y-m-d__H-i-s") . "." . $extension_upload);
                    if ($result) {
                        // càd $resulat == true
                        echo "<script>alert('succés d'enregistrement !!');</script>";
                    } else {
                        //càd $resulat == false
                        echo "<script>alert('Erreur d'enregistrement !!');</script>";
                        exit;
                    }
                } else {

                    echo "<script>alert('Erreur: extension non autorisé!!');</script>";
                    exit;
                }
            } else {

                echo "<script>alert('Erreur: la taille du fichier est trop grande !!');</script>";
                exit;
            }
        } else {

            // faire la redirection vers la page d'accueille après l'affichage de la boite de dialogue d'erreur
            echo "<script>alert('vouz avez pas entrer votre CV !!');</script>";
            exit; // pour stoper le code php sans afficher une erreur
        }
    }
    $buffer = file("data.txt");
    for ($i = 0; $i < count($buffer); $i++) {
        echo $buffer[$i];
    }

    ?>
</body>

</html>