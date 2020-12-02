<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script>
    function Submit(e){
        datainsert(e);
        // return false;
    }

    async function datainsert(e)
    {
        d=document.forms[0];

        n = d.elements("Name").value;
        ph = d.elements("Phone").value;
        en = d.elements("EMAIL").value;
        ad = d.elements("Address").value;
        pwd = d.elements("password").value;
        conpwd = d.elements("conpwd").value;
        try
        {
            let res = await fetch("Name="+n+"&Phone="+ph+"&EMAIL="+en+"&Address="+ad+"&password="+pwd+"&conpwd"=+conpwd+);
            let json=await res.json();
            if(json.res==1)
            {
                alert("Successfully registration");
                location.href="login1.php";
            }
            else
            {
                alert("incoreect details");
            }
            console.log(json);
        }
        catch(e)
        {
            console.log(e);
        }
    }
</script>

<script>

function loadXMLDoc()
{
    var xmlhttp;
    if (window.HttpRequest)
    {
    // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new HttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }

    }

    var name=document.getElementById("name").value;
    var phone=document.getElementById("Phone").value;
    var email=document.getElementById("email").value;
    var add=document.getElementById("add").value;
    var pwd=document.getElementById("pwd").value;
    var conpwd=document.getElementById("conpwd").value;
    var pwd = md5(pwd);
    var conpwd = md5(conpwd);

    xmlhttp.open("GET","it.php?Name="+name+"&Phone="+phone+"&Email="+email+"&address="+add+"&pwd="+pwd+"&conpwd="+conpwd,true);
    //xmlhttp.open("GET","demo_get.php?fname=Henry&lname=Ford",true);

    xmlhttp.send();
}
</script> -->
    <style>
        .text-center h1{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }
        .reg{
            text-align: center;
            margin-top: 30px;
        }
        .reg input, button{
            border: 1px solid black;
            border-radius: 6px;
        }
        .reg button:hover{
            color: #f1f1f1;
            background-color: black;
            /* border: none; */
        }
    </style>
</head>
<?php include_once("header.php"); ?>

<body>
    <p>

        <div class="regi" id="regi">
            <div class="text-center">
                <p>
                        <h1>Registration yourself to take a membership </h1>
                    
                </p>
            </div>
            <!-- require("header.php");?> -->
            <form id="registrationForm" method="GET" action="">
                <div class="reg">
                    <p><input type="text" id="name" name="name" placeholder="Name"></p>
                    <p><input type="text" id="Phone" name="phone" placeholder="Phone"></p>
                    <p><input type="text" id="email" name="email" placeholder="Email id"></p>
                    <p><input type="text" id="add" name="address" placeholder="Address"></p>
                    <p><input type="text" id="pwd" name="pwd" placeholder="password"></p>
                    <p><input type="text" id="conpwd" name="conpwd" placeholder="confirm password"></p>

                    <p><button type="submit" id="submitButton" onclick="loadXMLDoc()">Submit</button></p>
                </div>
            </form>
            <!-- <div id="result"></div> -->
            <!--onclick="return Submt"-->
        </div>

    </p>
    <div class="footer">
        <?php include("footer.php"); ?>
    </div>

</body>

</html>