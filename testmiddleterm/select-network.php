<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<h1>Midle Term Exam - Camilo Cely</h1>
   <form method="post" action="shows.php">
    <label for="netwotk">Select Network</label>
    <?php

$networkId = null;
$networkName = null;

// ckech if there
if (!empty($_GET['networkId'])){
    $networkId = $_GET['networkId'];
}

$servername = "172.31.22.43";
$username ="Camilo200399644";
$password = "CdZowfMApS";

$db = new PDO("mysql:host=$servername; dbname=Camilo200399644", $username, $password);

//set up SQL command to delete the selected record
//$sql = "SELECT * FROM networks WHERE networkid = $networkId";

$sql = $db->query("SELECT * FROM Camilo200399644.networks"); // Run your query

echo '<select name="networkName">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
   echo '<option value="'.$row['networkName'].'">'.$row['networkName'].'</option>';
}

echo '</select>';// Close your drop down box


//disconnect
$db = null;
?>  
    <button class="getbutton">Get Shows</button>
    </form><br>
</body>
</html>