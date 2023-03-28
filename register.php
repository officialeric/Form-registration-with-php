<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>EM | Sign up form</title>
          <!-- custom css -->
          <link rel="stylesheet" href="css/style.css">
</head>
<body>
          <div class="container">
                    <form action="include/register.inc.php" method="post">
                             <h1>Sign up</h1> 

                              <div class="alert">
                               <p>This is an alert message</p>
                              </div>

                             <div class="field">
                              <label for="fname">First name :</label><br>
                              <input type="text" name="fname" id="fname" placeholder="">
                             </div>

                             <div class="field">
                              <label for="lname">Last name :</label><br>
                              <input type="text" name="lname" id="lname" placeholder="">
                             </div>

                             <div class="field">
                              <label for="uname">User name :</label><br>
                              <input type="text" name="uname" id="uname" placeholder="">
                             </div>

                             <div class="field">
                              <label for="email">Email :</label><br>
                              <input type="email" name="email" id="email" placeholder="">
                             </div>

                             <div class="field">
                              <label for="Password">Password :</label><br>
                              <input type="Password" name="password" id="Password" placeholder="">
                             </div>

                             <input type="submit" value="Submit" name="submit">

                             <p>Already have account? <a href="login.php">Log in</a></p>
                             
                    </form>
          </div>
</body>
</html>