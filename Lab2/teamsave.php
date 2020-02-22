<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// save inputs
$clubId = $_POST['clubId'];  // we need the id if we are updating an existing record
$clubName = $_POST['clubName'];
$ground = $_POST['ground'];

$ok = true; 

if (empty($clubName)) {
    echo 'Name is required<br />';
    $ok = false;
}

// strlen is a PHP function that shows the length of a string value
elseif (strlen($clubName) > 100) {
    echo 'Name team be 100 characters or less<br />';
    $ok = false;
}

if (empty($ground)) {
    echo 'Ground is required<br />';
    $ok = false;
}

elseif (strlen($ground) > 100) {
    echo 'Name ground be 100 characters or less<br />';
    $ok = false;
}

// is the form ok?
if ($ok == true) {
    // connect
    $servername = "172.31.22.43";
    $username ="Camilo200399644";
    $password = "CdZowfMApS";
    
    $db = new PDO("mysql:host=$servername; dbname=Camilo200399644", $username, $password);

    // set up insert or update
    if (empty($clubId)) {
        $sql = "INSERT INTO clubs (clubName, ground) VALUES 
        (:name, :ground)";
    }
    else {
        $sql = "UPDATE clubs SET clubName = :clubName, ground = :ground WHERE clubId = :clubId";
    }

    $cmd = $db->prepare($sql);

    // bind the variables into the INSERT command
    $cmd->bindParam(':clubName', $clubName, PDO::PARAM_STR, 100);
    $cmd->bindParam(':ground', $ground, PDO::PARAM_STR, 50);
  
    if (!empty($clubId)) {
        $cmd->bindParam(':clubId', $clubId, PDO::PARAM_INT);
    }

    // save to db
    $cmd->execute();

    // disconnect
    $db = null;

    //echo 'Musician Saved';
    header('location:teams.php');
}
?>

</body>
</html>