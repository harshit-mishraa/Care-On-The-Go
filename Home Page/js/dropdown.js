

var type=localStorage.getItem("type");
  
    if(type=="customer")
    {
        document.getElementById("settings").href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20User/Bookings/afterlogin_customer_booking.php";
    }

    if(type=="driver")
    {
        document.getElementById("settings").href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Backend%20Form%20Of%20Driver/Dashboard/dashboard.php";
    }


document.getElementById("logout").addEventListener("click",function()
{
    localStorage.clear();
})

document.getElementById("logout2").addEventListener("click",function()
{
    localStorage.clear();
})