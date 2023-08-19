<!DOCTYPE html lang=en>
<html>
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Home</title>
    <link rel = "icon" href ="logo.png">
    
    <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <img src="logo.png" alt="Logo"class="navbar-brand" height="70" width="70">
        <div class="nav-title">Our Lady of the Roses Montessori Learning Center</div>
        </div>
        </nav>
        </header>


</head>

    <body>
        <div class="container-fluid content" >
          <h3> Create an Account</h3>
            <form action="reg_process.php" method="post">
            <?php if(isset($_GET['msg'])){ ?>
    <div class="alert-warning alert"><?php echo $_GET['msg'];?></div>
     <?php }?>
              <div class="row">
                <div class="col">
                  <label for="fname">First name:</label>
                  <input type="text" class="form-control" placeholder="Enter first Name" id="fname" name="fname" required>
                </div>
                <div class="col">
                  <label for="fname">Middle name:</label>
                  <input type="text" class="form-control" placeholder="Enter middle name" id="mname" name="mname" required>
                </div>
                <div class="col">
                  <label for="lname">Last name:</label>
                  <input type="text" class="form-control" placeholder="Enter last name" id="lname" name="lname" required>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="contact">Phone Number:</label>
                  <input type="tel" class="form-control" placeholder="Enter phone number" id="contact" name="contact" required>
                </div>
              </div>
                <div class="form-group col-6">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
                </div>
                <div class="form-group col-6">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd" required>
                </div>
                <div class="form-group form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" onclick="myFunction()" onchange="togglePasswordVisibility" id="cb">Show password
                  </label>
                </div>
                <button type="submit" class="btn btn-primary" id="crtbtn">Create Account</button>
              </form>
        </div>

        <script src="js/bootstrap.js"></script>
        <script>
        function myFunction() {
            var x = document.getElementById("pwd");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
          </script> 
          <script>
        function togglePasswordVisibility() {
          const passwordInput = document.getElementById("pwd");
          const checkbox = document.getElementById("cb");

          if (checkbox.checked) {
            passwordInput.type = "text";
          } else {
            passwordInput.type = "pwd";
          }
        }
      </script> 
    </body>
</html>
