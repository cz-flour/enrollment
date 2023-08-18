
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
            }
            .column{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            h3{
                padding-left: 8px;
            }
        
        .form-control[type="number"]::-webkit-inner-spin-button,
        .form-control[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0;
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
        <div>
        <form action="" method="post">
            <div class="row">
                <div class="col">
                <label class="form-label" for="lrn">Learner Reference Number (LRN)</label>
                    <input type="number" class="form-control" placeholder="Enter LRN" name="lrn" id="lrn" style="width:50ch;" required>
                </div>
            </div>
        <div class="row mt-3">
        <div class="col">
        <label class="form-label">Last name</label>
            <input type="text" class="form-control" placeholder="Enter last name" id="lname" name="lname">
    </div>
        <div class="col">
        <label class="form-label">First name</label>
            <input type="text" class="form-control" placeholder="Enter first name" id="fname" name="fname" style="width:40ch">
    </div>
    <div class="col">
        <label class="form-label">Middle name</label>
            <input type="text" class="form-control" placeholder="Enter middle name" id="mname" name="mname">
    </div>
    <div class="col">
        <label class="form-label">Extension name</label>
            <input type="text" class="form-control" placeholder="eg. Jr." id="mname" name="mname" style="width:10ch;">
    </div>
  </div>
  <div class="row mt-3">
  <div class="col">
        <label class="form-label">Birthday</label>
            <input type="date" class="form-control" placeholder="MM/DD/YR" id="birthdate" name="birthdate" >
    </div>
    <div class="col">
        <label class="form-label">Age</label>
            <input type="number" class="form-control" placeholder="Enter age" id="age" name="age" style="width:15ch;" >
    </div>
    <div class="col">
        <label class="form-label">Height</label>
            <input type="number" class="form-control" placeholder="Enter height (in)" id="height" name="height" style="width:20ch;" >
    </div>
    <div class="col">
        <label class="form-label">Weight</label>
            <input type="number" class="form-control" placeholder="Enter weight (kg)" id="weight" name="weight" style="width:20ch;" >
    </div>
    <div class="col">
        <label class="form-label">Civil Status</label>
        <select class="form-select" id="cstatus">
  <option>Single</option>
  <option>Married</option>
  <option>Seperated</option>
  <option>Divorced</option>
  <option>Widowed</option>
</select>
    </div>
  </div>
  <div class="row mt-3">
  <div class="col">
        <label class="form-label">Nationality</label>
            <input type="text" class="form-control" placeholder="Enter nationality" id="nationality" name="nationality">
    </div>
    <div class="col">
        <label class="form-label">Place of Birth</label>
            <input type="text" class="form-control" placeholder="Enter place of birth" id="place_birth" name="place_birth">
    </div>
    <div class="col">
        <label class="form-label">Sex</label>
        <select class="form-select" id="sex" style="width:15ch;">
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>
    
  </div>
    <div class="row mt-3">
    <div class="col">
        <label class="form-label">Religion</label>
            <input type="text" class="form-control" placeholder="Enter religion" id="religion" name="religion">
    </div>
    <div class="col">
        <label class="form-label">Contact Number</label>
            <input type="number" class="form-control" placeholder="Enter number" id="contact" name="contact">
    </div>
    <div class="col">
        <label class="form-label">Grade Level</label>
        <select class="form-select" id="grlevel" style="width:20ch;">
            <option>11</option>
            <option>12</option>
        </select>
    </div>
    </div>
    <div class="row mt-3">
    <div class="col">
        <label class="form-label">Contact Number</label>
            <input type="number" class="form-control" placeholder="Enter number" id="contact" name="contact">
    </div>
    </div>
  </div>
        </div>
    </div>
    
    </div>
   

    
    <script src="./plugins/bootstrap.bundle.min.js"></script>
    <script src="./plugins/bootstrap.min.js"></script>

  </body> 
</html>