<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Guest</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/register_customer.css">
    <link rel="stylesheet" href="../../Home Page/css/login_dropdown.css">
    
</head>

<body>
    <header>
        <nav>
            <img src="../../Home Page/img/logo.png" alt="Logo" class="src">
            <ul class="navbar">
            <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Home%20Page/">Home</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/About/about_us.html">About Us</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/About/why_us.html">Why Us</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/About/contact_us.php">Contact Us</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/About/about_team.html">About Team</a></li>
                <li class="dropdown">
                    <a href="#" class="need dropbtn">
                        
                        
<div id="before" class="dropdown-content" style="float:right;">
                            <a id="login.customer" href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Login%20Form%20By%20Customer/login-customer.php" >Login as Customer</a>
                            <a id="login.driver" href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Login%20Form%20By%20Driver/login.php">Login as Driver</a>
                        </div>
                    
                        
                        <div id="after" class="dropdown-content" style="float:right;">
                            <a id="settings">Settings</a>
                            <a id="logout" href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Home%20Page/">Log Out</a>
                        </div>
                    
                        
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <img class="bg" src="img/backgroundimg.jpeg" alt="">
        <div class="container">
            <div class="form">
                <h1>Book as Guest</h1>
                <form action="registration-guest.php" method="POST">
                    <div class="form-group">
                        
                        <input type="text" name="fullname" id="fullname" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        
                        <input type="number" name="mobile" id="mobile" placeholder="Mobile Number">
                    </div>

                    <div class="form-group">
                        
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        
                        <input placeholder="Date of Birth" name="dob" class="textbox-n" type="text" onfocus="(this.type='date')"
                            id="date">
                    </div>

                    <div class="form-group">
                        
                        <input type="text" name="address1" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        
                        <input list='listid' type="text" name="destination" id="destination" placeholder="Destination">
                        <datalist id='listid'>
                        <?php

// Set connection variables
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
    echo "<div style='color: rgb(116, 3, 3);
font-size: large;
box-sizing: border-box;
padding-top: 5px;
height:30px;
text-align: center;
background-color: rgba(206, 94, 94, 0.671);'>
Could Not Connect...
</div>";
} else {
    $query = "select * from admin.hosptials";
    $result = mysqli_query($conn, $query);
    
    while ($rows2 = mysqli_fetch_array($result)) {
?>
            
            
            <option value="<?php echo $rows2['name'];?>">
                        
            <?php }} ?>
            </datalist>
                    </div>
                    
                    <div class="form-group"><input class="btn" type="submit" value="Book Now"></div>
                    
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
            $dob = $_POST['dob'] ;
            $address = $_POST['address1'] ;
            $destination = $_POST['destination'] ;

            $query1 = "select * from admin.hosptials where name='$destination';";
            $result1 = mysqli_query($con, $query1);
            $rows3 = mysqli_fetch_array($result1);
            $helpline=$rows3['mobile']; 
            $sql = "INSERT INTO `guest`.`booking` (`name`,`mobile`,`email`,`dob`,`address`,`destination`,`helpline`) VALUES ('$name', '$mobile', '$email', '$dob','$address','$destination','$helpline');";

            if($con->query($sql) == true)
            {  
                ?>
                <script>
                window.location.href = "http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Home%20Page/index_afterbooking_guest.php";
                </script>
                <?php
            }
            }
            }
            ?>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <footer class="allcenter">
            <p>Copyright &copy; Care On The Go Pvt Ltd.</p>
        </footer>
    </footer>
    <script src="../../Home Page/js/index.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>