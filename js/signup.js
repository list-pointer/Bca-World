

function button_onclick() {
var a = document.form.phone.value;
if(a=="")
{
alert("please Enter the Contact Number");
document.form.phone.focus();
return false;
}
else if(isNaN(a))
{
alert("Enter the valid Mobile Number(Like : 9566137117)");
document.form.phone.focus();
return false;
}
    else{
        window.open("login.html");
    }
}

