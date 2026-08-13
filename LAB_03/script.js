function login()
{
    let username =
    document.getElementById("username").value;

    let password =
    document.getElementById("password").value;

    if(username==="" || password==="")
    {
        document.getElementById("msg").innerHTML =
        "Please fill all fields!";
    }
    else
    {
        document.getElementById("msg").innerHTML =
        "Login Successful!";
    }
}