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
            
            
            <h1>Testimonial Lists</h1>
            <div class="database">
                <table>
                    <thead>
                        <caption>List of Testimonials</caption>
                        <tr>
                            <th class="col1">Customer</th>
                            <th class="col2">Testimonial</th>
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
                    {    $query="select * from testimonials";
                        $result=mysqli_query($conn,$query);
                        
                        while($rows=mysqli_fetch_array($result))
                        {
                    ?>        
                            <tr>
                            <td><?php echo $rows['Customer'];?></td>
                            <td><?php echo $rows['Testimonial'];?></td>
                            </tr>
                    <?php        
                        }}
                    ?>
                </table>
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