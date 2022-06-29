<?php require('register.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO</title>
    <link rel="stylesheet" href="css/css.css">


</head>

<body >

    <img id="image" src="./img/world.jpg" alt="the wed site logo" width="128" height="128" id="image" >
    <div class="header"  >
        <img src="./img/l.jpg" alt="login logo" width="128" height="128">
        <form action="" method="post">
            <label class="information" for="email"> Enter your E-mail </label> <br>
            <input class="information"  type="email" name="email" id="email"  required="required"> <br>

            <label class="information" for="password"> Enter Your Password </label> <br>
            <input class="information" type="password" name="password" id="password" required="required"> <br> <br>


            
            <input id="submit" type="submit" name="login" value="login"> <br>
            <br>
            Don't Have Account? <a href="signUp.php">Sign Up</a>


        </form>

    </div>



</body>

</html>