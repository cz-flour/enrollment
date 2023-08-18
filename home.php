
<!DOCTYPE html lang=en>
<html>
    
    <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Our Lady of the Roses Montessori Learning Center</title>
    <link rel = "icon" href ="logo.png">
       
   

      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <img src="logo.png" alt="Logo"class="navbar-brand" height="70" width="70">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="nav-title">Our Lady of the Roses Montessori Learning Center</div>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php"><i class="material-icons " style="font-size: 25px;">home</i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="loginbtn" data-toggle="modal" data-target="#loginModal">Login</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
</head>
         
        <body >
          <div class="container">
            <div class="content">
              <img src="logo1.png" alt="logo" class="logo">
            </div>
            <div class="button">
              <a href="register.php"><button class="register-button" href="register.php">Register Now</button> </a>
              <button class="login-button" id="loginbtn" data-toggle="modal" data-target="#loginModal">Login</button>
            </div>
            
          </div>

         <!-- The Modal -->
<div class="modal fade" id="loginModal">
<form action="login.php" method="post">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="pwd" class="form-control" id="pwd" name="pwd" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
          
        </body>

</html>
