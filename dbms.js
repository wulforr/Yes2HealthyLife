function calcbmi()
{
    var a=document.getElementById("uname").value;
    var b=document.getElementById("height").value;
    var c=document.getElementById("weight").value;
    var d=(c)/(b*b)*10000;
    document.getElementById("p1").innerHTML="Hi "+a+" your BMI is "+d;
}