<?php require('register.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">

</head>

<body id="body">
<img id="image" src="./img/l.jpg" alt="login logo" width="128" height="128" id="image" >
    <div class="header">
        
        <form action="signUp.php" method="post" enctype="multipart/form-data" >

            <label class="information" for="name"> Enter Your Name </label> <br>
            <input class="information" type="text" name="name" id="name" required="required" > <br>
            
            <label class="information" for="email"> Enter Your Email </label> <br>
            <input class="information" type="email" name="email" required="required" id="email" > <br>

            <label class="information" for="password"> Enter Your Password </label> <br>
            <input class="information" type="password" name="password" required="required" id="password"  > <br>

            <label class="information" for="password"> Confirm Your Password </label> <br>
            <input class="information" type="password" name="confirm_password" id="confirm_password" required="required" > <br>

            <input name = "personal_img" class="form-control" type="file" id="formFile" required="required" ><br><br> 

     
             Have Account? <a href="index.php">Login</a>
             <br> <br>
            <input id="submit" type="submit" name="submit" value="submit"> <br>

            


        </form>
    </div>



</body>

</html>