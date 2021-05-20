if ((localStorage.getItem("name") == null || localStorage.getItem("num") == null)) {
    document.getElementsByClassName("need")[0].innerText = "Login ↓";

}
else {
    document.getElementsByClassName("need")[0].innerHTML = "Hi," + localStorage.getItem("name") + " ↓ ";
}



let dropdown = document.getElementsByClassName("dropdown");
let before = document.getElementById("before")
let after = document.getElementById("after");
if ((localStorage.getItem("name") == null || localStorage.getItem("num") == null)) {
    
    // before.style.zIndex ="1";
    // after.style.zIndex ="0";
    after.style.display="none";
    

}
else {
    // before.style.zIndex ="0";
    // before.style.zIndex ="1";
    before.style.display="none";
}