<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Settings</title>
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
                <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Profile/afterlogin_customer_profile.php" style="text-decoration: none;
    color: lightgrey;">Profile Settings</a></li>
                    <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Bookings/afterlogin_customer_booking.php" style="text-decoration: none;
    color: lightgrey;">My Bookings</a></li>
                    <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Addresses/afterlogin_customer_address.php" style="text-decoration: none;
    color: lightgrey;">Update Address</a></li>
                    <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Password/password.php" style="text-decoration: none;
    color: lightgrey;">Update Password</a></li>
                </ul>
            </div>
            <div class="profile">
                
                <form class="form" action="afterlogin_customer_profile.php" method="POST">
                    <h1>Profile Settings</h1>
                    <?php

                    // Set connection variables
                    $server = "localhost";
                    $username = "root";
                    $password = "";

                    // Create a database connection
                    $conn = mysqli_connect($server, $username, $password);
                    if(isset($_POST['mobile']))
                    {
                        $name=$_POST['name'];
                        $mobile=$_POST['mobile'];
                        $email=$_POST['email'];
                        $dob=$_POST['dob'];
                        $query="UPDATE customer.contact SET name='$name',mobile='$mobile',email='$email',dob='$dob'; ";
                        $data=mysqli_query($conn,$query);
                        $query1="UPDATE admin.customers SET name='$name',mobile='$mobile',email='$email'; ";
                        $data1=mysqli_query($conn,$query1);
                        if($data)
                        {
                            ?>
                            <script>
                                localStorage.setItem("name","<?php echo $name?>");
                                localStorage.setItem("mobile","<?php echo $mobile?>");
                                localStorage.setItem("email","<?php echo $email?>");
                                window.location.href = "http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Profile/afterlogin_customer_profile.php";
                            </script>
                            <?php
                            echo"<div style='color: green;
                            font-size: large;
                            box-sizing: border-box;
                            padding-top: 5px;
                            height:30px;
                            text-align: center;
                            background-color: rgba(90, 197, 90, 0.671);'>
                            Updated Successfully.
                            </div>";
                        }
                    }
                    if(! $conn ) 
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
                    {    $query="select * from customer.contact";
                        $result=mysqli_query($conn,$query);
                        while($rows=mysqli_fetch_array($result))
                        {
                    ?>       
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" id="fullname" value="<?php echo $rows['name'];?>" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile Number:</label>
                        <input type="number" name="mobile" id="phone" value="<?php echo $rows['mobile'];?>" placeholder="Mobile Number">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $rows['email'];?>">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input placeholder="Date of Birth" class="textbox-n" value="<?php echo $rows['dob'];?>" type="text" onfocus="(this.type='date')"
                            id="date" name="dob">
                    </div>
                    <div>
                        <input class="btn" type="submit" value="Save Changes">
                    </div>

                    <?php
                        }} ?>

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