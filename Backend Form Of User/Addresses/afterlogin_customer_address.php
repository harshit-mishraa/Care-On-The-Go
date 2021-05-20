<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer after login</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/other.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/afterlogin_customer.css">
    <link rel="stylesheet" href="css/afterlogin_customer_address.css">
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
            <div class="address">
                <form class="form" action="" method="POST">
                    <h1>Add Address</h1>
                    <div class="form-group">
                        
                        <input type="text" name="type" id="type" placeholder="Type">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" name="address" id="address" placeholder="Address">
                    </div>
                    <div>
                        <input class="btn" type="submit" value="Add Address">
                    </div>

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

                        if (isset($_POST['address'])) {
                            $type = $_POST['type'];
                            $address = $_POST['address'];
                            $sql = "INSERT INTO `customer`.`address` (`Type`,`Address`) VALUES ('$type', '$address');";

                            if ($con->query($sql) == true) {
                                echo "<div style='color: green;
                font-size: large;
                box-sizing: border-box;
                padding-top: 5px;
                height:30px;
                text-align: center;
                background-color: rgba(90, 197, 90, 0.671);'>
                Submitted Successfully.
                </div>";
                            }
                        }
                    }
                    ?>
                    <table class="showAddress">
                        <thead>
                            <th>Type</th>
                            <th>Address</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
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
                                $query = "select * from customer.address";
                                $result = mysqli_query($conn, $query);

                                while ($rows = mysqli_fetch_array($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $rows['Type']; ?></td>
                                        <td><?php echo $rows['Address']; ?></td>
                                        <td><a class="savebtn" href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Addresses/delete.php?address=<?php echo $rows['Address'];?>">Delete</a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>


                    </table>
                </form>
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