<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>

<body>

  <?php include "header.html"?>

  <h2>Login Page</h2>



   
  <form action="loginpage.php" method="post">
 
   <div class ="c1">
     Please enter your username:  <input type="text" name="user" placeholder="Username"/></div>
    <div class ="c1">
     Please enter your password: <input type="password" name="pass" placeholder = "Must include a number" /></div>  

  

    <div class = "submitbutton">
      <input type="Submit" />
    </div>

  </form>

  <?php 
  
    $user= $_POST["user"];
    $pass = $_POST["pass"];
    
    if (preg_match('/[A_Za-z]/', $pass) && preg_match('/[0-9]/',$pass))
          {echo "<p class='alert'>"."Thankyou, I have received your login details". "</p>";
            $encryptedpass= md5($pass);
            $loginpage= fopen("loginpage.txt","a+");
              file_put_contents('loginpage.txt', "Your Username is: $user \n Your Password is: $encryptedpass");
            fclose($loginpage);}
        else 
         {echo "<p class='alert'>". 'Please make sure your password contains at least one numeric value'. "</p>" ;}

  ?>
  





  <?php include "footer.html"?>

</body>