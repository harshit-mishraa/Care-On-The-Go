
<?php

// Set connection variables
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$conn = mysqli_connect($server, $username, $password);

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
{    $query1="select * from customer.current";
    $result1=mysqli_query($conn,$query1);
    $rows1=mysqli_fetch_array($result1);

    $query2="select * from driver.vehicles";
    $result2=mysqli_query($conn,$query2);
    $rows2=mysqli_fetch_array($result2);
    
    $query4="select * from admin.drivers";
    $result4=mysqli_query($conn,$query4);
    $rows4=mysqli_fetch_array($result4);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care On The Go</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
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
              <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/About/contact_us.html">Contact Us</a></li>
              <li><a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/About/about_team.html">About Team</a></li>
                <li class="dropdown">
                    <a href="#" class="need dropbtn">
                        
                      <div id="before" class="dropdown-content" style="float:right;">
                        <a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Login%20Form%20By%20Customer/login-customer.php">Login as Customer</a>
                        <a href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Login%20Form%20By%20Driver/login.php">Login as Driver</a>
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
        <img class="bg" src="img/health.jpg">
        <h1>We offer Ambulance Services</h1>
        <p class="hea">Racing to Save Lives</p>
        <div class="container">
            <p class="heading">Driving Care In Healthcare</p>
            
            <div class="box">
            <div class="para" >
               <p>Constantly Providing Users A Friendly </p>
               <p> Way To Request And Track Ambulances. </p> 
            </div>
            
            <div class="booked">
                <h2>Your Booking Is Done &#10003;</h2>
                <h2>Our driver will contact you shortly</h2>
                
                <table>
                    <tr>
                        <th>Status</th>
                        <td>On The Route</td>
                      </tr>
                    <tr>
                      <th>Driver Name</th>
                      <td><?php echo $rows4['name']; ?></td>
                    </tr>
                    <tr>
                      <th>Ambulance Type</th>
                      <td><?php echo $rows2['veh_name']; ?></td>
                    </tr>
                    <tr>
                      <th>Registration Number</th>
                      <td><?php echo $rows2['veh_number']; ?></td>
                    </tr>
                    <tr>
                      <th>Hospital</th>
                      <td><?php echo $rows1['dropoff']; ?></td>
                    </tr>
                    <tr>
                      <th>Hospital Assistance Helpline</th>
                      <td><?php echo $rows1['helpline']; ?></td>
                    </tr>
                    <tr>
                      <th>Driver Contact Number</th>
                      <td><?php echo $rows4['mobile']; ?></td>
                    </tr>
                    <th>Pick-Up Address</th>
                      <td><?php echo $rows1['pickup'];} ?></td>
                    </tr>
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
    <script src="js/index.js"></script>
    <script src="js/dropdown.js"></script>
</body>
</html>