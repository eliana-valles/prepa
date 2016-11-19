<?php include("dBconnection.php");

    $lib_exercise=$_POST['libelleExercice'];
    $idgroupe_primaire=$_POST['groupe1'];
    $idgroupe_secondaire=$_POST['groupe2'];
    $idtype=$_POST['typeEffort'];
    $description=$_POST['description'];

	//Insert data
	$query = "INSERT INTO exercise
	(lib_exercise,idgroupe_primaire,idgroupe_secondaire,idtype,description)
	VALUES
	('$lib_exercise','$idgroupe_primaire','$idgroupe_secondaire','$idtype','$description')";

	mysqli_query($conn,$query);

	$conn->close();

?>