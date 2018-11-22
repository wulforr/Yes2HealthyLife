function validate(){
    var uname=document.getElementById("uname").Value;
    var email=document.getElementById("email").Value;
    var pass1=document.getElementById("pass").Value;
    var confpass1=document.getElementById("confpass").Value;
    alert("HEY");
    if(confpass1!=pass1)
    {
        document.getElementById("confpasserr").innerHTML="Both passwords donot match";
    }
}