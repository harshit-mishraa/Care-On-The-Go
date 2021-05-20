<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login_dropdown.css">
    <link rel="stylesheet" href="css/other.css">
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
        <div class="navcol">
            <ul>
                <li><a>Dashboard</a></li>
                <li><a>Vehicles</a></li>
                <li><a>Manage Bookings</a></li>
                <li><a>Manage Testimonials</a></li>
                <li><a>Update Contact Info</a></li>
                <li><a>Update Password</a></li>
                <li><a>Sign Out</a></li>
            </ul>
        </div>

        <div class="main1">
            <h1>Manage Vehicle List</h1>

            <div class="form">
                <form action="vehicles.php" method="post">
                    <div class="name">
                        <label for="veh_name" class="normal">Vehicle Name: </label>
                        <input type="text" name="veh_name" id="veh_name">
                    </div>
                    <div class="number">
                        <label for="veh_number" class="normal">Vehicle Registration Number: </label>
                        <input type="text" name="veh_number" id="veh_number">
                    </div>
                    <div class="year">
                        <label for="veh_year" class="normal">Vehicle Model Year: </label>
                        <input type="text" name="veh_year" id="veh_year">
                    </div>
                    
                    <div class="fuel">
                    <label class="normal">Vehicle Fuel Type:</label>
                        <select name="veh_type" id="veh_type">
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="CNG">CNG</option>
                        </select>
                    </div>
                    <button class="submit">Submit</button>
                </form>
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

            if(isset($_POST['veh_number']))
            {
            $veh_name = $_POST['veh_name'] ;
            $veh_number = $_POST['veh_number'] ;
            $veh_year = $_POST['veh_year'] ;
            $veh_type = $_POST['veh_type'] ;
            $sql = "INSERT INTO `driver`.`vehicles` (`veh_name`,`veh_number`, `veh_year`, `veh_type`) VALUES ('$veh_name', '$veh_number', '$veh_year', '$veh_type');";

            if($con->query($sql) == true)
            {   
                echo"<div style='color: green;
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

            <div class="database">
                <table>
                    <thead>
                        <caption>Vehicle List</caption>
                        <tr>
                            <th>Vehicle Name</th>
                            <th>Vehicle Registration No.</th>
                            <th>Vehicle Model Year</th>
                            <th>Vehicle Fuel Type</th>
                            <th>Action</th>
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
                    {    $query="select * from vehicles";
                        $result=mysqli_query($conn,$query);
                        
                        while($rows=mysqli_fetch_array($result))
                        {
                    ?>        
                            <tr>
                            <td><?php echo $rows['veh_name'];?></td>
                            <td><?php echo $rows['veh_number'];?></td>
                            <td><?php echo $rows['veh_year']; ?></td>
                            <td><?php echo $rows['veh_type'];?></td>
                            <td><a class="savebtn" href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/vehicles/delete.php?number=<?php echo $rows['veh_number'];?>">Delete</a></td>
                            </tr>
                    <?php        
                        }}
                    ?>
                </table>

                <div class="save">
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


</body>

</html>


