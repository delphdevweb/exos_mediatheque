<?php

//**Exercice 3 **Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
    if (isset($_GET['nom'], $_GET['prenom'])) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo($nom);
        echo("<p>$prenom</p>"); 
    }

//Exercice 4 Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
    if (isset($_POST['nom'], $_POST['prenom'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        echo($nom);
        echo("<p>$prenom</p>"); 
    }

    // if(isset($_REQUEST['nom'] ,$_REQUEST['prenom'])){
    //     $nom = $_REQUEST['nom'];
    //     $prenom = $_REQUEST['prenom'];
    //     echo("<p>$nom</p>");
    //     echo("<p>$prenom</p>");
    // }


?>