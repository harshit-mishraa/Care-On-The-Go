<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/login.css">
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
        <div class="container">
            <div class="left">
                <img class="left_img" src="img/left_side_login.jpeg" alt="">
            </div>
            <div class="right">
                <form action="login-customer.php" method="post">
                    <h1>Login as Customer</h1>
                    <div><input type="email" name="email" id="email" placeholder="Email"> </div> 
                    <div><input type="password" name="password" id="password" placeholder="Password"></div> 
                    <div><input class="btn" type="submit" value="Login"></div> 
                    <div>
                        <span><a class="register" href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Registration%20Form%20By%20Customer/registration-customer.php">Register Here</a></span>
                        <br>
                        <span><a class="forgot" href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Forgot%20Password/forgot-password.php">Forgot Password</a></span>
                    </div>
                </form>
                <?php
                // Set connection variables
                    $server = "localhost";
                    $username = "root";
                    $password = "";

                    // Create a database connection
                    $conn = mysqli_connect($server, $username, $password,'admin');

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
                    {
                        if(isset($_POST['password']))   
                        {$email=$_POST["email"];
                        $password=$_POST["password"];
                        $query="select * from customers";
                        $result=mysqli_query($conn,$query);
                        
                        while($rows=mysqli_fetch_array($result))
                        {
                            if($rows['email']==$email && ($rows['password'])==$password)
                            {

                                ?>
                                <input type="hidden" id="hidden1" value="<?php echo $rows['name'];?>">
                                <input type="hidden" id="hidden2" value="<?php echo $rows['mobile'];?>">
                                <script>
                                    localStorage.setItem("name",document.getElementById("hidden1").value);
                                    localStorage.setItem("num",document.getElementById("hidden2").value);
                                    localStorage.setItem("type","customer");
                                    window.location.href = "http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Home%20Page/";
                                </script>
                                
                                <?php
                                break; 
                            }
                        }
                        echo"<div style='color: rgb(116, 3, 3);
                                font-size: large;
                                box-sizing: border-box;
                                padding-top: 5px;
                                height:30px;
                                text-align: center;
                                background-color: rgba(206, 94, 94, 0.671);'>
                                Invalid Email Or Password
                                </div>";
                    }}
                    ?>
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