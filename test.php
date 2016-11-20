<?php include("dBconnection.php");

     $query = "INSERT INTO exercise
        (lib_exercise,idgroupe_primaire,idgroupe_secondaire,idtype,description)
        VALUES
        ($_POST['libelleExercice'],$_POST['groupe1'],$_POST['groupe2'],$_POST['typeEffort'],$_POST['description'])";
     echo $query;
     
     /*$last_id = $conn->insert_id;

    /*$uploaddir = '/import/exercices/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Le fichier est valide, et a été téléchargé
               avec succès. Voici plus d'informations :\n";
    } else {
        echo "Attaque potentielle par téléchargement de fichiers.
              Voici plus d'informations :\n";
    }

    echo 'Voici quelques informations de débogage :';
    print_r($_FILES);

    echo '</pre>';*/
     
?>