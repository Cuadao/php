<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="signupSection"> 
    <div class="info">
    <h2>Assignment 1</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Camilo Cely Becerra</p>
    
    </div>
    <form method="post" action="Register.php" class="signupForm" >
    <h2>User Register</h2>
    
    <ul class="noBullet">
    <li>
        <legend>First Name:</legend>
        <input name="name" id="name" class="inputFields" required/>
    </li>
    <li>
        <legend>Last Name:</legend>
        <input name="lastname" id="lastname" class="inputFields" required/>
    </li>
    <li>
        <legend>Telephone:</legend>
        <input name="telephone" id="telephone" class="inputFields" required/>
    </li>
    <li data-role="controlgroup">
      <legend>Choose your gender:</legend><br>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="M" checked>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="F"><br>
    </li>
    <li><br>
        <legend>Country:</legend>
        <input name="country" id="country" class="inputFields" required/>
    </li>
    <li>
        <legend>City:</legend>
        <input name="city" id="city" class="inputFields" required/>
    </li>
    <li>
        <legend>Address</legend>
        <input name="address" id="address" class="inputFields" required/>
    </li>
    <li>
    <button class="offset-md-2 btn btn-primary">Save</button>
   </li>
    </ul>
 </form>
</div>

</body>
</html>