<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>

<?php
 
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }

    
	include 'database.php';

    $name = $_POST['name'];
    $age = intval($_POST['age']);
    $gender = $_POST['gender'];
    $img = $_POST['img'];
    $medics = $_POST['medics'];
    $notes = $_POST['notes'];
    
    $sql="INSERT INTO User (name, age, gender, medics, notes) VALUES ('".$name."', '".$age."', '".$gender."', '".$medics."', '".$notes."')";
    $result = mysqli_query($con,$sql);
    if(!$result){
        echo "Problem in Registration. Please try again.";
    }
    else{
        echo "Registration Successful.";
    }
    mysqli_close($con);
?>
</body>
</html>