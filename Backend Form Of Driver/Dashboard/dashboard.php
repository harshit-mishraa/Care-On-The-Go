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

            <h1>Dashboard</h1>

            <div class="content1">

                <div class="vehicles">

                    <div class="upper_v">
                        <div style="color:white;font-size: 75px;font-family: 'Times New Roman', Times, serif; text-align:center;">
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
            {
                $sql="SELECT COUNT(*) FROM driver.vehicles;";
                $result = $conn->query($sql);
                while($row = $result->fetch_array()){
                echo $row[0];}
            }
        ?>
                        </div>
                    </div>

                    <div class="lower_v">
                        Registered Vehicles
                    </div>

                </div>

                <div class="bookings">

                    <div class="upper_b">
                    <div style="color:white;font-size: 75px;font-family: 'Times New Roman', Times, serif; text-align:center;">
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
            {
                $sql="SELECT COUNT(*) FROM driver.bookings;";
                $result = $conn->query($sql);
                while($row = $result->fetch_array()){
                echo $row[0];}
            }
        ?> </div>
                        </div> 
                    <div class="lower_b">
                        Bookings
                    </div>

                </div>

            </div>

            <div class="content2">

                <div class="testimonials">

                    <div class="upper_t">
                    <div style="color:white;font-size: 75px;font-family: 'Times New Roman', Times, serif; text-align:center;">
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
            {
                $sql="SELECT COUNT(*) FROM driver.testimonials;";
                $result = $conn->query($sql);
                while($row = $result->fetch_array()){
                echo $row[0];}
            }
        ?> </div>
                        </div>
                    <div class="lower_t">
                        Testimonials
                    </div>

                </div>

                <div class="contact">

                    <div class="info">
                        Update Contact Info
                    </div>

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