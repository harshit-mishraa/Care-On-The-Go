
var t=localStorage.getItem("type");

document.getElementsByClassName("condition")[0].addEventListener("click",function()
{
    if(t=="customer")
{
    document.getElementsByClassName("condition")[0].href="http://localhost/Care%20On%20The%20Go(DevJam)(NEW)/Booking%20Backend/Customer%20Booking/afterlogin_choose.php";
}
else
{
    alert("Login With Customer ID To Continue.")
}
})
