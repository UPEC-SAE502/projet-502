<?php 
$phpconnect = mysqli_connect("localhost", "root", "");
if (mysqli_connect_errno()){
    echo "Connexion impossible" . mysqli_connect_error();
}
else{
    echo "Connexion réussie </br>";
    $phpdb = "CREATE Database site_docker";
    if(mysqli_query($phpconnect, $phpdb)){
        echo "Base de données site_docker créée ! </br>";
    }
    else{
        echo "Erreur dans la création de la BDD </br>" . mysqli_connect_error($phpconnect);
    }
}
?>