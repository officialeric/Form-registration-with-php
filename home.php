<?php
session_start();
if (isset($_SESSION['user_id'])){

?>

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
                   <p>Welcome <?=$_SESSION['user_name']?></p>
                   <a href="include/logout.php"><button>log out</button>
                   </a>
          </div>
</body>
</html>
<?php } ?>