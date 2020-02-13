<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users Registered</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="signupSection"> 
<?php
// connect
$servername = "localhost";
$username ="root";
$password = "";

$db = new PDO("mysql:host=$servername; dbname=php", $username, $password);
/* $db = new PDO('mysql:host=172.31.22.43;dbname=Rich100', 'Rich100', 'x'); */

// set up & execute query
$sql = "SELECT * FROM user_register";
$cmd = $db->prepare($sql);
$cmd->execute();
$musicians = $cmd->fetchAll();

// start table
echo '<table border="1"><thead><th>Name</th>
                        <th>Last Name</th>
                        <th>Telephone</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        </thead>';

// loop through data and display the results
foreach ($musicians as $value) {
    echo '<tr><td>' . $value['name'] . '</td>
        <td>' . $value['lastname'] . '</td>
        <td>' . $value['telephone'] . '</td>
        <td>' . $value['gender'] . '</td>
        <td>' . $value['country'] . '</td>
        <td>' . $value['city'] . '</td>
        <td>' . $value['address'] . '</td></tr>';
}

echo '</table>';
?>
<button link="RegistroUsuario.php">Return to User Register</button>
</div>
</body>
</html>