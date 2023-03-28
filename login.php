<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>EM | Login form</title>
          <!-- custom css -->
          <link rel="stylesheet" href="css/style.css">
</head>
<body>
          <div class="container">
                    <form action="include/login.php" method="post">
                             <h1>Log in</h1> 

                             <div class="alert">
                              <p>This is an alert message</p>
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

                             <p>Don't have account? <a href="register.php">Sign up</a></p>
                             
                    </form>
          </div>
</body>
</html>