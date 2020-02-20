<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "172.31.22.43";
$username ="Camilo200399644";
$password = "CdZowfMApS";

$db = new PDO("mysql:host=$servername; dbname=Camilo200399644", $username, $password);

$sql = "SELECT * FROM shows where networkName = 'FX'";
$cmd = $db->prepare($sql);
$cmd->execute();
$shows = $cmd->fetchAll();

echo '<table border="1"><thead><th>Show Name</th><th>Year</th><th>Network</th></thead>';

foreach ($shows as $value) {
    echo '<tr><td>' . $value['showName'] . '</td>
        <td>' . $value['firstYear'] . '</td>
        <td>' . $value['networkName'] . '</td>
        </tr>';
}

?>
</body>
</html>