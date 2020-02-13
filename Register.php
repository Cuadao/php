<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="signupSection">
<div class="info">
    <h2>Assignment 1</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>
<?php
// save inputs
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$telephone = $_POST['telephone'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$city = $_POST['city'];
$address = $_POST['address'];

//Validate imputs
$ok = true; //variable to check if is posible to save

if(empty($name)){
    echo 'Name is reguired<br/>';
}
elseif (strlen($name) > 100){
    echo 'Name must be 100 characters or less<br/>';
    $ok = false;
}

/* if (!empty($telephone)){
    if(!is_integer($telephone)){
        echo 'Ranking must be a number 0 or higher<br/>';
        $ok = false;
    }
    if ($telephone < 0){
        echo 'Ranking must be a number 0 or higher<br/>';
        $ok = false;
    } 
}
 */
if ($ok == true){


    // connect
    $servername = "localhost";
    $username ="root";
    $password = "";

    $db = new PDO("mysql:host=$servername; dbname=php", $username, $password);
    /* $db = new PDO('mysql:host=172.31.22.43;dbname=Rich100', 'Rich100', 'x'); */

    // set up insert
    $sql = "INSERT INTO user_register (name, lastname, telephone, gender, country, city, address) VALUES 
        (:name, :lastname, :telephone, :gender, :country, :city, :address)";
    $cmd = $db->prepare($sql);

    // bind the variables into the INSERT command
    $cmd->bindParam(':name', $name, PDO::PARAM_STR, 50);
    $cmd->bindParam(':lastname', $lastname, PDO::PARAM_STR, 50);
    $cmd->bindParam(':telephone', $telephone, PDO::PARAM_STR, 50);
    $cmd->bindParam(':gender', $gender, PDO::PARAM_STR, 50);
    $cmd->bindParam(':country', $country, PDO::PARAM_STR, 50);
    $cmd->bindParam(':city', $city, PDO::PARAM_STR, 50);
    $cmd->bindParam(':address', $address, PDO::PARAM_STR, 100);

    // save to db
    $cmd->execute();

    // disconnect
    $db = null;


    echo 'User Registered Correctly';

}
?>
</p>

    </div>
</div>
<button link="RegistroUsuario.php">Return to User Register</button>
</body>
</html>