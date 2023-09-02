<?php
    require_once 'Connexion.php';
        
    if( $_POST ){
        $username = $_POST['login'];
        $password = $_POST['pwd'];
        if( $username!="" && $password!="" ){
            $sql = "SELECT ign,pwd FROM users WHERE ign='$username' and pwd='$password' LIMIT 1";// "LIMIT=1" Puisqu'on n'a pas fait une exception sur les mêmes logins & passwords...
            $result= mysqli_query($bdd,$sql);
            if( $result == true ){
                $row = mysqli_fetch_assoc($result);
                if( $row != "" ){
                    extract($row);
                    if( $ign == $username && $pwd == $password ){
                        session_start();
                        $_SESSION['username'] = $username;
                        header('Location: Accueil.php');
                    }
                    }else{
                        $erreur = "Votre login ou mot de passe est invalide !";
                    }
                }
            }else{
                $erreur = "Veuillez écrire votre identifiant et votre mot de passe !";   
        }
    }

?>