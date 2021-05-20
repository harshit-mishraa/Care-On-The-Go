<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer after login</title>
    <link rel="stylesheet" href="css/afterlogin_customer_booking.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="css/afterlogin_customer.css">
    <link rel="stylesheet" href="css/login_dropdown.css">
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
    <script src="js/index.js"></script>
    <main>
        <div class="container">
            <div class="navcol">
                <ul>
                    <li>Profile Settings</li>
                    <li>My Bookings</li>
                    <li>Update Address</li>
                    <li>Sign out</li>
                </ul>
            </div>
            <div class="booking">
                <div class="abc">
                <h1>My Bookings</h1>
                <table class="info">
                    <thead>
                        <th>Driver Name</th>
                        <th>Mobile Number</th>
                        <th>Pick-Up Time</th>
                        <th>Drop-Time</th>
                        <th>Date of Booking</th>
                        <th>Pickup Address</th>
                        <th>Destination Address</th>
                        <th>Amount</th>
                    </thead>
                    <tbody>
                        <?php

                    // Set connection variables
                    $server = "localhost";
                    $username = "root";
                    $password = "";

                    // Create a database connection
                    $conn = mysqli_connect($server, $username);

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
                    {    $query="select * from customer.bookings";
                         $result=mysqli_query($conn,$query);
                        
                        while($rows=mysqli_fetch_array($result))
                        {
                    ?>        
                            <tr>
                            <td><?php echo $rows['driver'];?></td>
                            <td><?php echo $rows['mobile'];?></td>
                            <td><?php echo $rows['picktime']; ?></td>
                            <td><?php echo $rows['droptime'];?></td>
                            <td><?php echo $rows['date'];?></td>
                            <td><?php echo $rows['pickupadd'];?></td>
                            <td><?php echo $rows['destination']; ?></td>
                            <td><?php echo $rows['amount'];?></td>
                            </tr>
                    <?php        
                        }}
                    ?>
                    </tbody>
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
    
</body>

</html>