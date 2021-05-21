<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/afterlogin_customer.css">
    <link rel="stylesheet" href="css/afterlogin_customer_profile.css">
    <link rel="stylesheet" href="css/login_dropdown.css">
</head>

<body>
    <header>
        <nav>
            <img src="img/logo.png" alt="Logo" class="src">
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
    <script src="js/index.js"></script>
    <script src="js/dropdown.js"></script>
    <main>
        
        <div class="container">
            <div class="navcol">
                <ul>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Dashboard/dashboard.php" style="text-decoration: none; color: lightgrey;">Dashboard</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/vehicles/vehicles.php" style="text-decoration: none; color: lightgrey;">Vehicles</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Bookings/bookings.php" style="text-decoration: none; color: lightgrey;">Manage Bookings</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Testimonials/testimonials.php" style="text-decoration: none; color: lightgrey;">Manage Testimonials</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Contact/contact.php" style="text-decoration: none; color: lightgrey;">Update Contact Info</a></li>
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Password/password.php" style="text-decoration: none; color: lightgrey;">Update Password</a></li>
                </ul>
            </div>
            <div class="profile">
                
                <form class="form" action="password.php" method="POST">
                    <h1>Password Settings</h1>
                          
                    <div class="form-group">
                        <label for="name">Old Password:</label>
                        <input type="password" name="old" id="old"  placeholder="Old Password">
                    </div>

                    <div class="form-group">
                        <label for="mobile">New Password:</label>
                        <input type="password" name="new" id="new"  placeholder="New Password">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Confirm Password:</label>
                        <input type="password" name="confirm" id="confirm"  placeholder="Confirm New Password">
                    </div>

                    <div>
                        <input class="btn" type="submit" value="Save Changes">
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

if(isset($_POST['confirm']))
{
$old = $_POST['old'] ;
$confirm = $_POST['confirm'] ;
$new = $_POST['new'] ;
$query="SELECT password FROM driver.contact";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_array($result);

if($old==$rows[0] && $confirm==$new)
{
    $sql1 = "UPDATE driver.contact SET password ='$confirm' WHERE password='$old';";
    $sql2 = "UPDATE admin.drivers SET password='$confirm' WHERE password='$old';";



    if( ($con->query($sql1) == true) && ($con->query($sql2) == true))
    {   
        echo"<div style='color: green;
        font-size: large;
        box-sizing: border-box;
        padding-top: 5px;
        height:30px;
        text-align: center;
        background-color: rgba(90, 197, 90, 0.671);'>
        Password Changed Succesfully.
        </div>";
    }
}
if($old!=$rows[0])
{
    echo"<div style='color: rgb(116, 3, 3);
    font-size: large;
    box-sizing: border-box;
    padding-top: 5px;
    height:30px;
    text-align: center;
    background-color: rgba(206, 94, 94, 0.671);'>
    Old Password Does Not Match.
    </div>";
}
if($confirm!=$new)
{
    echo"<div style='color: rgb(116, 3, 3);
    font-size: large;
    box-sizing: border-box;
    padding-top: 5px;
    height:30px;
    text-align: center;
    background-color: rgba(206, 94, 94, 0.671);'>
    Both Passwords Do Not Match.
    </div>";
}
}
}
?>

            </div>
            
        </div>

    </main>
    <footer>
        <footer class="allcenter">
            <p>Copyright &copy; Care On The Go Pvt Ltd.</p>
        </footer>
    </footer>
    
</body>

</html>