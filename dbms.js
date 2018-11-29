function calcbmi()
{

    var a=document.getElementById("uname").value;
    var b=document.getElementById("height").value;
    var c=document.getElementById("weight").value;
    var d=(c)/(b*b)*10000;
    if(b == "" || c == "")
    {
        document.getElementById("p1").innerHTML="Both Height and Weight are required to calculate BMI";    
    }
    else
    document.getElementById("p1").innerHTML="Hi "+a+" your BMI is "+d;
}