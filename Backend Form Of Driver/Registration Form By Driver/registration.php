<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/login_dropdown.css">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
<header>
        <nav>
                <img src="img/logo.png" alt="Logo" class="src">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Why Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Team</a></li>
                <li class="dropdown">
                    <a href="#" class="need dropbtn">
                        
                        <div id="before" class="dropdown-content" style="float:right;">
                            <a href="#">Login as Customer</a>
                            <a href="#">Login as Driver</a>
                        </div>
                    
                        
                        <div id="after" class="dropdown-content" style="float:right;">
                            <a href="#">Settings</a>
                            <a href="#">Log Out</a>
                        </div>
                    
                        
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        
        <img class="bg" src="img/backgroundimg.jpeg" alt="">
        <!-- <img class="bg" src="img/registration_bg.jpg" alt=""> -->
        <div class="container">
            <form action="registration.php" method="post" enctype="multipart/form-data">
            <h1>Register as Driver</h1>
            <div class="form-group">
            <div class="col-25">
            <label for="Name">Name:</label>
            </div>
            <div class="col-75">
            <input type="text" name="fullname" id="Name" placeholder="Enter Name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-25">
            <label for="Phone">Mobile No. :</label>
            </div>
            <div class="col-75">
            <input type="text" name="mobile" id="Bonus" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="form-group">
            <div class="col-25">
            <label for="Email">Email:</label>
            </div>
            <div class="col-75">
            <input type="email" name="email" id="Email" placeholder="Enter Email Address">
            </div>
        </div>
        <div class="form-group">
        <div class="col-25">
            <label for="dob">Date Of Birth:</label>
        </div>
        <div class="col-75">
            <input type="date" name="dob" id="Bonus" placeholder="Enter Date of Birth">
        </div>
        </div>
        <div class="form-group">
            <div class="col-25">
            <label for="City">City:</label>
            </div>
            <div class="col-75">
            <input type="text" name="city" id="Bonus" placeholder="Enter City">
            </div>
        </div>
        <div class="form-group">
            <div class="col-25">
            <label for="Address">Address:</label> 
            </div>
            <div class="col-75">
            <input type="address" name="address" id="address" placeholder="Enter Address">
            </div>
            
        </div>
        <div class="form-group">
            <div class="col-25">
            <label for="Service">Service Type:</label> 
            </div>
            <div class="col-75">
            <select name="service" id="mySelect">
                <option value="independent" selected>Independent</option>
                <option value="hospital">Hospital Affiliated</option>
            </select>
            </div> 
        </div>
        <div class="new form-group">
            <div class="col-25">
            <label for="City">Hospital:</label>
            </div>
            <div class="col-75">
            <input type="text" name="hospital" id="Bonus" placeholder="(Leave Blank if not applicable)">
            </div>
        </div>
        <div class="form-group">
            <div class="col-25">
            <label for="Phone">Password :</label>
            </div>
            <div class="col-75">
            <input type="password" id="Bonus" placeholder="Enter Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-25">
            <label for="Phone">Confirm Password :</label>
            </div>
            <div class="col-75">
            <input type="password" name="password" id="Bonus" placeholder="Confirm Password">
            </div>
        </div>
        <br>
        <div class="form-group upload">
            <div class="col-25">
            <label for="Phone">Photo ID Proof :</label>
            </div>
            <div class="col-75">
            <input class="subbtn" type="file" name="fileToUpload" id="fileToUpload">
            <input class="subbtnn" type="submit" value="Upload Image" name="submit">
            </div>
        </div>
        <br>
        <div class="form-group upload">
            <div class="col-25">
            <label for="Phone">PAN Card:</label>
            </div>
            <div class="col-75">
            <input class="subbtn" type="file" name="fileToUpload" id="fileToUpload">
            <input class="subbtnn" type="submit" value="Upload Image" name="submit">
            </div>
        </div>
        <br>
        <div class="form-group upload">
            <div class="col-25">
            <label for="Phone">Driving License-Front:</label>
            </div>
            <div class="col-75">
            <input class="subbtn" type="file" name="fileToUpload" id="fileToUpload">
            <input class="subbtnn" type="submit" value="Upload Image" name="submit">
            </div>
        </div>
        <br>
        <div class="form-group">
            <input type="checkbox" name="myEligibility" id="Eligibility"> <!-- Checked Option-->
            <label for="Eligibility">I agree with the <a href="#">Terms and Conditions</a></label>
        </div>
        <div class="form-group">
            <input type="checkbox" name="myEligibility" id="Eligibility"> <!-- Checked Option-->
            <label for="Eligibility">I agree with the <a href="#">Legal Agreements</a></label>
        </div>
        <div class="form-group">
            <input class="btn" type="submit" name="mySubmit" value="Register">
        </div>
        <div class="form-group">
            Already got an account? <a href="#">Login Here</a>
        </div>

        <?php

            // Set connection variables
            $server = "localhost";
            $username = "root";
            $password = "";

            // Create a database connection
            $con = mysqli_connect($server, $username, $password);

            if(! $con ) 
            {
                echo"<div style='color: rgb(116, 3, 3);
                font-size: large;
                box-sizing: border-box;
                padding-top: 5px;
                height:30px;
                text-align: center;
                background-color: rgba(206, 94, 94, 0.671);'>
                Could Not Connect...
                </div>";
            }
            else
            {

            if(isset($_POST['mobile']))
            {
            $name = $_POST['fullname'] ;
            $mobile = $_POST['mobile'] ;
            $email = $_POST['email'] ;
            $city = $_POST['city'] ;
            $dob=$_POST['dob'];
            $address= $_POST['address'];
            $service = $_POST['service'];
            $hospital = $_POST['hospital'] ;
            $password = $_POST['password'] ;
            
            $password = $_POST['password'] ;
            $sql1 = "INSERT INTO `driver`.`contact` (`name`,`mobile`, `email`, `city`,`dob`,`address`,`service`,`hospital`,`password`) VALUES ('$name', '$mobile', '$email','$city','$dob','$address','$service','$hospital', '$password');";
            $sql2 = "INSERT INTO `admin`.`drivers` (`email`,`password`,`name`,`mobile`) VALUES ('$email','$password','$name','$mobile');";

            if( ($con->query($sql1) == true) && ($con->query($sql2) == true) )
            {   
                echo"<div style='color: green;
                font-size: large;
                box-sizing: border-box;
                padding-top: 5px;
                height:30px;
                text-align: center;
                background-color: rgba(90, 197, 90, 0.671);'>
                Submitted Successfully. Login To Continue.
                </div>";
            }
            }
            }
            ?>
    </form>
    </div>
    </main>
    <footer>
        <footer class="allcenter">
            <p>Copyright &copy; Care On The Go Pvt Ltd.</p>
        </footer>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>