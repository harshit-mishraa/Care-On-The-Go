<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/contact.css">
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
            </ul>
        </nav>
    </header>
    <main>
        
        <h1>Get in touch with us using the form given below</h1>
        <div class="contact">
            <form action="contact_us.php" method="post">
                <input type="text" name="name" id="fullname" placeholder="Full Name"> 
                <input type="email" name="email" id="email" placeholder="E-mail"> 
                <input type="number" name="mobile" id="mobileno" placeholder="Mobile Number"> 
                <textarea name="msg" id="msg" cols="40" rows="10" placeholder="Enter Your Message"></textarea>
                <input class="btn" name="submit" type="submit" value="Message Now">

                <?php

// Set connection variables
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password);

if (!$con) {
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

    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $mobile = $_POST['mobile'];
        $email = $_POST["email"];
        $msg = $_POST['msg'];
        $sql = "INSERT INTO `query`.`contact_us` (`name`,`mobile`,`email`,`msg`) VALUES ('$name', '$mobile','$email','$msg');";
        $result = mysqli_query($con, $sql);   
                echo"<div style='color: green;
                font-size: large;
                box-sizing: border-box;
                padding-top: 5px;
                height:30px;
                text-align: center;
                background-color: rgba(90, 197, 90, 0.671);'>
                Submitted Successfully. Thank you for reaching out to us.
                </div>";
              }}
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
    <script src="js/dropdown.js"></script>
</body>

</html>