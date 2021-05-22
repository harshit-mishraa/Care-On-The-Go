<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/style.css">
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
    <main>
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

        <div class="main1">
            <div class="database">
                <div class="abc">
                <h1>Manage Bookings</h1>
                <table>
                    <thead>
                        <caption>List Of Customer Bookings</caption>
                        <tr>
                            <th>Date</th>
                            <th>Pick-Up Time</th>
                            <th>Drop-Time</th>
                            <th>Customer</th>
                            <th>Customer Phone No.</th>
                            <th>Pick-Up Address</th>
                            <th>Destination Address</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    
                    <?php

                    // Set connection variables
                    $server = "localhost";
                    $username = "root";
                    $password = "";

                    // Create a database connection
                    $conn = mysqli_connect($server, $username, $password,'driver');

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
                    {    $query="select * from bookings";
                        $result=mysqli_query($conn,$query);
                        
                        while($rows=mysqli_fetch_array($result))
                        {
                    ?>        
                            <tr>
                            <td><?php echo $rows['date'];?></td>
                            <td><?php echo $rows['pickuptime'];?></td>
                            <td><?php echo $rows['droptime'];?></td>
                            <td><?php echo $rows['customer'];?></td>
                            <td><?php echo $rows['phone'];?></td>
                            <td><?php echo $rows['pickupadd'];?></td>
                            <td><?php echo $rows['destination'];?></td>
                            <td><?php echo $rows['amount'];?></td>
                            </tr>
                    <?php        
                        }}
                    ?>
                </table>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <footer class="allcenter">
            <p>Copyright &copy; Care On The Go Pvt Ltd.</p>
        </footer>
    </footer>

    <script>
        if((localStorage.getItem("name")==null) && localStorage.getItem("num")==null)
        {
            document.getElementsByClassName("need")[0].innerText="Login ↓";
            
        }
        else
        {
            document.getElementsByClassName("need")[0].innerHTML="Hi,"+localStorage.getItem("name")+" ↓ ";
        }
    </script>
    <script src="js/index.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>