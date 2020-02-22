<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teams table</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <h1>LAB 2 - Camilo Cely Becerra</h1>
</header>
<body>
<?php
// connect
$servername = "172.31.22.43";
$username ="Camilo200399644";
$password = "CdZowfMApS";

$db = new PDO("mysql:host=$servername; dbname=Camilo200399644", $username, $password);

// set up & execute query
$sql = "SELECT * FROM clubs";
$cmd = $db->prepare($sql);
$cmd->execute();
$teams = $cmd->fetchAll();

// start table
echo '<table border="1"><thead><th>Name</th><th>Label</th><th>Ranking</th></thead>';

// loop through data and display the results
foreach ($teams as $value) {
    echo '<tr><td><a href="teamsdetails.php?clubId=' . $value['clubId'] . '">' . $value['clubName'] . '</td>
        <td>' . $value['ground'] . '</td>
        <td><a class="text-danger" href="teamsdelete.php?clubId=' . $value['clubId'] . '"
            onclick="return confirmDelete();">Delete</a></td>
        </tr>';
}

echo '</table>';

$db = null;
?>
<script src='js/script.js' type='text/javascript'></script>
</body>
</html>