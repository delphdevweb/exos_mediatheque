<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos PHP</title>
</head>
<body>

<?php
//Exercice 1 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean
    if (isset($_GET['nom'], $_GET['prenom'])) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo($nom);
        echo("<p>$prenom</p>"); 
    }

//Exercice 2 Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        echo ("<p>$age</p>");
    }
    else {
        echo ("<p>Merci de renseigner votre âge</p>");
    }

//Exercice 3 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016
    if (isset($_GET['dateDebut'], $_GET['dateFin'])) {
        $dateDebut = $_GET['dateDebut'];
        $dateFin = $_GET['dateFin'];
        echo($dateDebut);
        echo("<p>$dateFin</p>");
    }

//Exercice 4 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP
    if (isset($_GET['langage'], $_GET['serveur'])) {
        $langage = $_GET['langage'];
        $serveur = $_GET['serveur'];
        echo($langage);
        echo("<p>$serveur</p>");
    }

//Exercice 5 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12
    if (isset($_GET['semaine'])) {
        $semaine = $_GET['semaine'];
        echo("<p>$semaine</p>");
    }

//Exercice 6 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101
    if (isset($_GET['batiment'], $_GET['salle'])) {
        $batiment = $_GET['batiment'];
        $salle = $_GET['salle'];
        echo("<p>$batiment</p>");
        echo("<p>$salle</p>");
    }

//Exercice 6 Avec le formulaire de l'exercice 5, après soumission, si la page index.php détecte que des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Seules les données transmises doivent l'être. Si aucune donnée transmise afficher le formulaire. Utiliser qu'une seule page.
    if(!isset($_POST['Civilite'],$_POST['nom'],$_POST['prenom'])) {

?>

<!--Exercice 5 Créer un formulaire sur la page index.php avec :
Une liste déroulante pour la civilité (Mr ou Mme) Un champ texte pour le nom Un champ texte pour le prénom Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.-->
    <form action="" method="POST" enctype="multipart/form-data">
        <select name="Civilite">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <input type="text" name="nom" placeholder="nom" required><br>
        <input type="text" name="prenom" placeholder="prenom" required><br>
<!--Exercice 7 Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.-->
        <input type="file" name="fichier" accept="application/pdf"/> 
        <input type="submit">
    </form>

<?php 

//Exercice 8 Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.
    } else {
        $civilite = $_POST['Civilite'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $fichier = $_FILES['fichier'];
        echo($civilite);
        echo("<p>$nom</p>");
        echo("<p>$prenom</p>"); 
        echo($fichier['name']);
        echo($fichier['type']);
    }
             
?>

</body>
</html>

