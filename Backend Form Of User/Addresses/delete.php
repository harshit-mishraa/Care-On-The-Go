<?php

     // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $conn = mysqli_connect($server, $username, $password);
    $unique=$_GET['address'];
    echo $unique;   
    $query="DELETE FROM customer.address WHERE Address='$unique';";
    $result=mysqli_query($conn,$query);
     
    if($result)
            {   
                echo"<div style='color: green;
                font-size: large;
                box-sizing: border-box;
                padding-top: 5px;
                height:30px;
                text-align: center;
                background-color: rgba(90, 197, 90, 0.671);'>
                Deleted Successfully.
                </div>";
                $action="done";
            }
    else
    {
        echo "fail";
    }
    ?>


<script>
        window.location.href = "http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Addresses/afterlogin_customer_address.php";
</script>

