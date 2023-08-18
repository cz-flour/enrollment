
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
          <style>
            .container{
                margin-top: 110px;
                background-color: white;
                opacity: 0.8;
                border-radius: 9px;
                padding-bottom: 10px;
                padding-top: 10px;
            }
            .column{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            h3{
                padding-left: 8px;
            }
            p{
                margin-left: 50px;
                margin-right: 50px;
                text-indent: 50px;
            }
            .bullet-paragraph {
                margin-left: 50px;
                margin-right: 50px;
                list-style-type:decimal; /* Use "disc" for filled circles */
                padding-left: 20px; /* Add some space between bullet and text */
        }
       
            
          </style>
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
              <a class="nav-link cursor-pointer" id="loginbtn" data-bs-toggle="modal" data-bs-target="#loginModal">Profile</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <div id="hd" style="padding-top: 9px; ">
            <div class="column">
        <img src="logo1.png"  style="width: 70px;">
        <h3>Our Lady of the Roses Montessori Learning Center</h3></div>
        <br>
        <p>Good Day! Welcome to Oas Community College -  Senior High School Online Enrollment System
Thank you for choosing our institution for your education needs. Before you proceed with the enrollment process, please take note of the following instructions and requirements:</p>
<ul class="bullet-paragraph">
    <li>To use our online enrollment system, please make sure you have a stable internet connection to avoid any issues during the submission process.</li>
    <li>Please prepare the necessary documents such as your PSA/NSO Birth Certificate ,High School Report Card (Form 138), Completion Form and 1×1 picture for your ID(white background). </li>
    <li>Once you start the enrollment process, you will be asked to provide personal information such as your name, address, and contact details, etc.</li>
    <li>All fields marked with an asterisk (*) are required. Please ensure that you have filled them in accurately.</li>
    <li>Only PDF file formats are accepted for the attachments. Any other format will not be processed.</li>
    <li>Once you submit the form, you will not be able to make any changes or modifications. Please make sure to review the details you entered before submitting the enrollment form.</li>
</ul>
<p>By clicking "Proceed", you acknowledge that you have read and understood the above instructions and requirements.</p>
<a href="eform.php"> <button class="button" id="proceed"> Proceed </button>
</a>
    </div>
    
    </div>
   

    
    <script src="./plugins/bootstrap.bundle.min.js"></script>
    <script src="./plugins/bootstrap.min.js"></script>

  </body> 
</html>