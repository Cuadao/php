<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teams Details</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>

<?php
// initialize variables
$clubId = null;
$clubName = null;
$ground = null;


// check if there's a clubsId in the url string
if (!empty($_GET['clubId'])) {
    // if there is a clubsId, query the db for the details on this record so we can populate the form
    $clubId = $_GET['clubId'];

    // connect
$servername = "172.31.22.43";
$username ="Camilo200399644";
$password = "CdZowfMApS";

$db = new PDO("mysql:host=$servername; dbname=Camilo200399644", $username, $password);
    $sql = "SELECT * FROM clubs WHERE clubId = $clubId";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':clubId', $clubId, PDO::PARAM_INT);
    $cmd->execute();
    $club = $cmd->fetch();  // use fetch for a single record.  It's faster than fetchAll()

    // populate the variables from the query result
    $clubName = $club['clubName'];
    $ground = $club['ground'];
}
?>

<form method="post" action="teamsave.php">
    <fieldset>
        <label for="clubName" class="col-md-2">Club Name: *</label>
        <input name="clubName" id="clubName" required maxlength="50" value="<?php echo $clubName; ?>" />
    </fieldset>
    <fieldset>
        <label for="ground" class="col-md-2">Ground:</label>
        <input name="ground" id="ground" maxlength="50" value="<?php echo $ground; ?>" />
    </fieldset>
    <input type="hidden" name="clubId" id="clubId" value="<?php echo $clubId; ?>" />
    <button>Save</button>
</form>
</body>
</html>