<?php
session_start();
$_SESSION['panier']= array("SAMSUNG_GALAXY_S9"=>0, "HUAWI_P30"=>0, "Apple_iphone_8"=>0);
header("Location:ajout_article.php");
