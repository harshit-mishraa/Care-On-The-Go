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
            <h1>Update Contact Info</h1>

            <div class="form">
                <form action="contact.php" method="post" enctype="multipart/form-data">

                    <?php

                    // Set connection variables
                    $server = "localhost";
                    $username = "root";
                    $password = "";

                    // Create a database connection
                    $conn = mysqli_connect($server, $username, $password,'driver');
                    if(isset($_POST['mobile'])){
                        $name=$_POST['name'];
                        $mobile=$_POST['mobile'];
                        $email=$_POST['email'];
                        $dob=$_POST['dob'];
                        $city=$_POST['city'];
                        $address=$_POST['address'];
                        $query="UPDATE contact SET name='$name',mobile='$mobile',email='$email',dob='$dob',city='$city',address='$address'; ";
                        $data=mysqli_query($conn,$query);}
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
                    {    $query="select * from contact";
                        $result=mysqli_query($conn,$query);
                        while($rows=mysqli_fetch_array($result))
                        {
                    ?>       
                    <div>
                        <label for="Name">Name:</label>
                        <input type="text" name="name" id="Name" placeholder="Enter Name" value="<?php echo $rows['name'];?>">
                    </div>
                    <div>
                        <label for="Phone">Mobile No. :</label>
                        <input type="text" name="mobile" id="Bonus" placeholder="Enter Phone Number" value="<?php echo $rows['mobile'];?>">
                    </div>
                    <div>
                        <label for="Email">Email:</label>
                        <input type="email" name="email" id="Email" placeholder="Enter Email Address" value="<?php echo $rows['email'];?>">
                    </div>
                    <div>
                        <label for="City">Date Of Birth:</label>
                        <input type="date" name="dob" id="Bonus" placeholder="Enter Date Of Birth" value="<?php echo $rows['dob'];?>">
                    </div>
                    <div>
                        <label for="City">City:</label>
                        <input type="text" name="city" id="Bonus" placeholder="Enter City" value="<?php echo $rows['city'];?>">
                    </div>
                    <div>
                        <label for="Address">Address:</label> <br>
                        <textarea name="address" id="Decription" placeholder="Enter Address"><?php echo $rows['address'];?></textarea>
                    </div>
                        <?php
                        }} ?>   
                    <div>
                        <input type="submit" name="mySubmit" value="Update" class="submit">
                    </div>
                </form>   
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
</body>

</html>