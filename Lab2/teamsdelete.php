<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Team</title>
</head>
<body>

<?php
// read the selected musicianId from the value at the end of the url
$clubId = $_GET['clubId'];

// connect to the db
$servername = "172.31.22.43";
$username ="Camilo200399644";
$password = "CdZowfMApS";

$db = new PDO("mysql:host=$servername; dbname=Camilo200399644", $username, $password);

// set up SQL command to delete the selected record
$sql = "DELETE FROM clubs WHERE clubId = :clubId";

// bind Parameter to pass in the selected id
$cmd = $db->prepare($sql);
$cmd->bindParam(':clubId', $clubId, PDO::PARAM_INT);

echo '<script type="script.js"> confirmDelete(); </script>';

// execute the SQL command
$cmd->execute();

// disconnect
$db = null;

// take the user back to the updated list (so they can see the selected record is now gone)
header('location:teams.php');

?>


</body>
</html>