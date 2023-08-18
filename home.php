
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
    <link rel="icon" href="logo.png">   
    <!-- <link  type="text/css" href="./plugins/bootstrap.min.css"> -->
    <script src="./plugins/popper.min.js"></script>
  </head>
          
  <body >

    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <img src="logo.png" alt="Logo"class="navbar-brand" height="70" width="70">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-title">Our Lady of the Roses Montessori Learning Center</div>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link flex-center" aria-current="page" href="home.php">
                <i class="material-icons " style="font-size: 25px;">home</i>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link cursor-pointer" id="loginbtn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="content">
        <img src="logo1.png" alt="logo" class="logo">
      </div>

      <div class="button">
        <a href="register.php"><button class="register-button" href="register.php">Register Now</button> </a>
        <!-- Button trigger modal -->  
        <button type="button " class="btn register-button " data-bs-toggle="modal" data-bs-target="#loginModal">
          Log in
        </button>
           
        <!-- Modal --> 
        <div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="login.php" method="post">
                  <div class="form-group">
                      <label for="email" class="text-secondary">Email:</label>
                      <input type="text" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                      <label for="pwd" class="text-secondary">Password:</label>
                      <input type="pwd" class="form-control" id="pwd" name="pwd" required>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </div>
          </div> 
        </div> 
    </div> 
    
    <script src="./plugins/bootstrap.bundle.min.js"></script>
    <script src="./plugins/bootstrap.min.js"></script>

  </body> 
</html>
