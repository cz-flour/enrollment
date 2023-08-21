<?php 
    // UNCOMMENT MO NALANG KADING CONNECTION 
    // require './connection.php'
     
    
?>
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
        #next{
            border-radius: 1px;
            font-size: 15px;
        }
            
          </style>
  <body >

    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <img src="logo.png" alt="Logo"class="navbar-brand" height="70" width="70">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="nav-title">Our Lady of the Roses Montessori Learning Center</div> -->

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

    <div class="container" style="padding-bottom: 30px">
        <form method="POST" action="eform_process.php" >
            <div class="row ">
                <div class="row">
                    <div class="col-sm-12 flex-row flex-wrap d-flex align-items-center justify-content-center py-4 gap-3">
                        <img src="logo1.png"  style="width: 70px;">
                        <h3 class="text-center">Our Lady of the Roses Montessori Learning Center</h3></div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-lg-12"> 
                        <label for="formControlInput" class="form-label">Learner Reference Number</label>
                        <input type="number" class="form-control" name="lrn" id="lrn" placeholder="Enter LRN" style="max-width: 500px;">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name">
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="exename" class="form-label">Extension Name</label>
                        <input type="text" class="form-control" id="extension" name="extension" placeholder="eg. Jr. Sr.">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="formControlInput" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="formControlInput" name="birthdate">
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="height" class="form-label">Height</label>
                        <input type="number" class="form-control" id="height" name="height" placeholder="Enter height (in)">
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter weight (kg)">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="status" class="form-label">Civil Status</label>
                        <select class="form-select form-control " aria-label="Large select" name="cstatus" id="cstatus">
                            <option selected="" disabled>Select status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option> 
                            <option value="Seperated">Seperated</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Nationality">
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="placeofbirth" class="form-label">Place of Birth</label>
                        <input type="text" class="form-control " id="place_birth" name="place_birth" placeholder="Enter place of birth">
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="sex" class="form-label">Sex</label>
                        <select class="form-select form-control " aria-label="Large select" name="sex" id="sex" > 
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>  
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-6 my-2"> 
                        <label for="religion" class="form-label">Religion</label>
                        <input type="text" class="form-control" id="religion" name="religion" placeholder="Enter Religion       ">
                    </div>
                    <div class="col-sm-12 col-lg-6 my-2">
                        <label for="cnumber" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number">
                    </div>  
                </div>
                <div class="row">
                <div class="col-sm-12 col-lg-4 my-2"> 
                        <label for="province" class="form-label">Province</label>
                        <select class="form-select form-control " aria-label="Large select" name="province" id="province" onchange="handleProvinceChange(event)">
                            <option disabled selected>Select</option>  
                            <option value="Albay" >Albay</option> 
                            <option value="Camarines Sur" >Camarines Sur</option> 
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 my-2"> 
                        <label for="municipality" class="form-label">Municipality</label>
                        <select class="form-select form-control " aria-label="Large select" name="municipality" id="municipality" onchange="handleMunicipalityChange(event)">
                            <option disabled selected>Select Municipality</option>  
                            <option value="Oas" >Oas</option> 
                            <option value="Ligao" >Ligao</option> 
                            <option value="Polangui">Polangui</option>
                            <option value="Guinobatan">Guinobatan</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 my-2"> 
                        <label for="brgy" class="form-label">Barangay</label>
                        <select class="form-select form-control " aria-label="Large select" name="brgy" id="brgy">
                            <option disabled selected>Select</option>  
                            <option value="Bagumbayan" class="oas">Bagumbayan</option> 
                            <option value="Bongoran" class="oas">Bongoran</option> 
                            <option value="Calzada" class="oas">Calzada</option> 
                            <option value="Centro Poblacion" class="oas">Centro Poblacion</option> 
                            <option value="Ilaor Norte" class="oas">Ilaor Norte</option>
                            <option value="Ilaor Sur" class="oas">Ilaor Sur</option>
                            <option value="Iraya Norte" class="oas">Iraya Norte</option>
                            <option value="Iraya Sur" class="oas">Iraya Sur</option>
                            <option value="Maporong" class="oas">Maporong</option>
                            <option value="Obaliw" class="oas">Obaliw</option>
                            <option value="Rizal" class="oas">Rizal</option> 
                            <option value="San Juan" class="oas">San Juan</option>
                            <option value="Talongog" class="oas">Talongog</option>
                            <option value="Bagumbayan" class="ligao">Bagumbayan</option>
                            <option value="Binatagan" class="ligao">Binatagan</option>
                            <option value="Guilid" class="ligao">Guilid</option>
                            <option value="Tinago" class="ligao">Tinago</option>
                            <option value="Tomolin" class="ligao">Tomolin</option>
                            <option value="Sta. Cruz" class="ligao">Sta. Cruz</option>
                        </select>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="purok" class="form-label">Purok</label>
                        <input type="varchar" class="form-control " id="purok" name="purok">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-4 my-2"> 
                        <label for="glevel" class="form-label">Grade Level</label>
                        <select class="form-select form-control " aria-label="Large select" name="grlevel" id="grlevel">
                            <option disabled selected>Select</option>  
                            <option value="Grade 11" >Grade 11</option> 
                            <option value="Grade 12" >Grade 12</option> 
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 my-2">
                        <label for="track" class="form-label">Track</label>
                        <select class="form-select form-control " aria-label="Large select" name="track" id="track" onchange="handleTrackChange(event)" > 
                            <!-- <option  disabled>Select Track</option>  -->
                            <option disabled selected>Select</option> 
                            <option value="Academic Track">Academic Track</option>  
                            <option value="Tech-Voc Track">Tech-Voc Track</option> 
                        </select>
                    </div>  
                    <div class="col-sm-12 col-lg-4 my-2">
                        <label for="strand" class="form-label">Strand</label>
                        <select class="form-select form-control " aria-label="Large select" name="strand" id="strand" > 
                            <option disabled selected>Select</option> 
                            <option class="strand" value="General Academic Strand (GAS)" >General Academic Strand (GAS)</option> 
                            <option class="strand" value="Humanities and Social Sciences (HUMMS)">Humanities and Social Sciences (HUMMS)</option>  
                            <option class="track d-none" value="Automotive Servicing" >Automotive Servicing</option> 
                            <option class="track d-none" value="Electrical Installation and Maintenance">Electrical Installation and Maintenance</option> 
                            <option class="track d-none" value="Computer System Servicing">Computer System Servicing</option> 
                        </select>
                    </div>  
                </div>
                <button type="submit "class="btn" id="next"> Next </button>
            </div>
        </form>
    </div>
   
    <script> 
        const track = document.querySelectorAll('.track');
        const strand = document.querySelectorAll('.strand');
 
        function handleTrackChange(event) { 
            if(event.target.value == "Academic Track"){
                for(let i = 0; i < strand.length ; i++) {
                    strand[i].classList.remove("d-none");
                    strand[i].classList.add("d-block");
                    track[i].classList.remove("d-block");
                    track[i].classList.add("d-none");
                }
            }else{
                for(let i = 0; i < track.length ; i++) {
                    track[i].classList.remove("d-none");
                    track[i].classList.add("d-block");
                    strand[i].classList.remove("d-block");
                    strand[i].classList.add("d-none");
                }
            }
        }

    </script>

<script>
    const oas = document.querySelectorAll('.oas');
    const ligao = document.querySelectorAll('.ligao');
    const barangay = document.querySelectorAll('.barangay');


    function handleProvinceChange(event) {
        if(event.target.value == Albay){
            for(let i = 0; i<strand.length ; i++){
                    oas[i].classList.remove("d-none");
                    oas[i].classList.add("d-block");
                    oas[i].classList.remove("d-block");
                    oas[i].classList.add("d-none");
            }
            elseif();{
                for(let i=0; i<ligao.length; i++){
                    ligao[i].classList.remove("d-none");
                    ligao[i].classList.add("d-block");
                    ligao[i].classList.remove("d-block");
                    ligao[i].classList.add("d-none");
                }
            }
        }
    }

    function handleMunicipalityChange(event) {
    if (event.target.value === "oas") {
        for (let i = 0; i < oas.length; i++) {
            oas[i].classList.remove("d-none");
            oas[i].classList.add("d-block");
            ligao[i].classList.remove("d-block");
            ligao[i].classList.add("d-none");
        }
    } else if (event.target.value === "ligao") {
        for (let i = 0; i < ligao.length; i++) {
            ligao[i].classList.remove("d-none");
            ligao[i].classList.add("d-block");
            oas[i].classList.remove("d-block");
            oas[i].classList.add("d-none");
        }
    }
}


   
</script>
    
    <script src="./plugins/bootstrap.bundle.min.js"></script>
    <script src="./plugins/bootstrap.min.js"></script>

  </body> 
</html>
