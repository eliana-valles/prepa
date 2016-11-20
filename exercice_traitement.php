<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "prepa";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	//Création d'un nouvel exercice
	    $lib_exercise = addslashes($_POST['libelleExercice']);
        $description = addslashes($_POST['description']);
        $groupe1 = $_POST['groupe1'];
        $groupe2 = $_POST['groupe2'];
        $type = $_POST['typeEffort'];


        $query = "INSERT INTO exercise
        (lib_exercise,idgroupe_primaire,idgroupe_secondaire,idtype,description)
        VALUES
        ('{$lib_exercise}',{$groupe1},{$groupe2},{$type},'{$description}')";

        $result = mysqli_query($conn,$query);
            
        if ($result == TRUE) {
            header('Location: exercices.php');
            exit;
            
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement : " . $conn->error;
        }
    
    
    $conn->close();

?> 