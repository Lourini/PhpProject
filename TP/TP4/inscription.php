<?php
session_start();
require_once 'Connexion.php';
//include 'Verif_Generated_Code.php';
$erreur = "";
if (!empty($_POST))
    if ($_POST['Code_Verification'] != $_SESSION['aleat_nbr']) {
        $erreur = "Le code entrée est incorrecte !";
    } else {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['pwd'] = $_POST['pwd1']; // pwd1 == pwd2
        $_SESSION['email'] = $_POST['email1']; // email1 == email2
        $username = $_SESSION['username'];
        $pwd = $_SESSION['pwd'];
        $email = $_SESSION['email'];
        $sql = "INSERT INTO users(ign, pwd, email) VALUES('$username', '$pwd', '$email')";
        $result = mysqli_query($bdd, $sql);
        mysqli_close($bdd);
        header('Location: Accueil.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <script type="text/javascript">
        function checkPassword(str) {
            var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
            return re.test(str);
        }

        function checkForm(form) {
            re = /^\w+$/;
            if (!re.test(form.username.value)) {
                alert("Erreur: Votre login est invalide !\nSvp respecter la format du login !");
                form.username.focus();
                return false;
            }
            if (form.pwd1.value == form.pwd2.value) { // On sait déja que pwd1.value et pwd2.value est non null puisqu'on a ajouté l'attribut REQUIRED dans le formulaire
                if (!checkPassword(form.pwd1.value)) {
                    alert("Erreur: Votre mot de passe est invalide !\nSvp respecter la format demandée !");
                    form.pwd1.focus();
                    return false;
                }
            } else {
                alert("Erreur: Votre mot de passe de confirmation ne correspond pas au mot de passe entrée !\nSvp essayer de retaper votre mot de passe !");
                form.pwd1.focus();
                return false;
            }
            // Ici l'exception sur l'email avec les expressions réguliière mais c'est déja traité en ajoutant l'attribut email dans le formulaire
            var typicalEmail = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; // Preferable de créer une nouvelle fonction checkEmail qui gère cette exception
            if (form.email1.value == form.email2.value) {
                if (!typicalEmail.test(email1)) {
                    alert("Erreur: Votre e-mail est invalide !\Svp respecter la format typique !");
                    form.email1.focus();
                    return false;
                }
            } else {
                alert("Erreur: Votre e-mail de confirmation ne correspond pas à l'mail entrée !\nSvp essayer de retaper votre e-mail !");
                form.email1.focus();
                return false;
            }
            return true;
        }
    </script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row col-md-12">
            <h3>Connectez-vous et profitez de nos meilleur produits</h3>
            <form method="POST" onsubmit="return checkForm(this);" action="Inscription.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Login :</label>
                    <input type="text" class="form-control" name="username" id="usr" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" class="form-control" name="pwd1" id="pwd" required placeholder="Aa0147">
                </div>
                <div class="form-group">
                    <label for="pwd3">Confirmer votre mot de passe :</label>
                    <input type="password" class="form-control" id="pwd3" name="pwd2" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail :</label>
                    <input type="email" class="form-control" id="email" name="email1" required placeholder="exemple@domaine.com">
                </div>
                <div class="form-group">
                    <label for="email3">Confirmer votre E-mail :</label>
                    <input type="email" id="email3" class="form-control" name="email2" required>
                </div>
                <div class="form-group">
                    <label for="code">Code de vérification</label>
                    <center><img id="code" src="Captcha/Verif_Generated_Code.php" alt="Code de vérification" onclick="this.src='Captcha/Verif_Generated_Code.php'"></center>
                    <p style="opacity:0.75;">Cliquer sur l'image pour changer le code généré</p>
                </div>
                <div class="form-group">
                    <label for="code2">Merci de retaper le code de verification</label>
                    <input type="text" id="code2" class="form-control" name="Code_Verification">
                </div>
                <center>
                    <font color="red"><?php echo $erreur; ?></font>
                </center>
                <center><input type="submit" class="btn btn-primary" name="submition" value="S'inscrire"></center>
            </form>
        </div>
    </div>
</body>
<style>
    .container {
        width: 600px;
    }

    form {
        margin: 10px;
    }
</style>

</html>