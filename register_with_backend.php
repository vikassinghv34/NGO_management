<?php
session_start();
error_reporting(0);  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function onsubmitstop(e) {
            if (document.getElementById("conpwd").value == document.getElementById("pwd").value) {
                insertuser(e);
                return false;
            }
            alert('password not match');
        }
        async function insertuser(e) {
            Sform = document.forms[0];
            u_name = Sform.elements['name'].value;
            u_phone = Sform.elements['phone'].value;
            u_email = Sform.elements['email'].value;
            u_address = Sform.elements['address'].value;
            u_type = Sform.elements['usertype'].value;
            u_pwd = Sform.elements['pwd'].value;

            try {
                let response = await fetch("regi.php?name=" + u_name + "&phone=" + u_phone + "&email=" + u_email + "&address=" + u_address + "&usertype=" + u_type + "&pwd=" + u_pwd + "");
                let json = await response.json();
                if (json.response == 1) {
                    alert('Successfull registerd');
                    location.href = "login_with_backend.php";
                } else {
                    alert('Please fill require fields');
                }
                console.log(json);
            } catch (e) {
                console.log(e);
            }
        }
    </script>
    <style>
        form {
            padding: 30px;
            margin-top: auto;
        }

        .text-center h1 {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: lightcyan;
            /* margin-top: 20px; */
        }

        .reg {
            text-align: center;
            margin-top: 30px;
        }

        .reg input,
        button {
            border: 1px solid black;
            border-radius: 6px;
        }

        .reg button:hover {
            color: #f1f1f1;
            background-color: black;
            /* border: none; */
        }

        label {
            color: lightcyan;
        }

        .wrapper {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img/img.png);
            background-size: cover;
            background-position: unset;
            height: auto;
            left: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .reg-input {
            padding: 7.7px 6px;
        }

        .reg-input .star {
            color: red;
            font-size: 20px;
        }

        .reg-input input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #submitButton {
            width: 79px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include("header.php"); ?>
<div class="msg"><?php if($message!=""){ echo $message; } ?></div>
        <div class="regi" id="regi">

            <!-- require("header.php");?> -->
            <form id="registrationForm" method="GET" action="">
                <div class="text-center">
                    <div class="text">
                        <h1><strong><u>Registration Form</u></strong></h1>

                    </div>
                </div>
                <div class="reg">
                    <div class="reg-input"><label>Name</label><label class="star">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="name" placeholder="Name"></div>
                    <div class="reg-input"><label>Phone number</label><label class="star">*</label>&nbsp;&nbsp;&nbsp;<input type="number" id="Phone" name="phone" placeholder="Phone" required></div>
                    <div class="reg-input"><label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" id="email" name="email" placeholder="Email id" required ></div>
                    <div class="reg-input"><label>Address</label><label class="star">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="add" name="address" placeholder="Address" required ></div>
                    <div class="reg-input" style="margin-left: 110px;"><label>Type</label><label class="star">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="donate" name="usertype" class="usertype" value="donator" required />&nbsp;<label>Donator</label>&nbsp;&nbsp;<input type="radio" id="receive" name="usertype" class="usertype" value="receiver" required />&nbsp;<label>Receiver</label>&nbsp;&nbsp;<input type="radio" id="member" name="usertype" class="usertype" value="member" required />&nbsp;<label>Member</label>&nbsp;&nbsp;<input type="radio" id="member" name="usertype" class="usertype" value="member" required />&nbsp;<label>NGO</label></div>
                    <div class="reg-input"><label>Password</label><label class="star">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="pwd" name="pwd" placeholder="password" required /></div>
                    <div class="reg-input"><label>Re-Password</label><label class="star">*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="conpwd" name="conpwd" placeholder="confirm password" required /></div>

                    <div class="reg-input"><button type="submit" id="submitButton" onclick="onsubmitstop(event);">Sign Up</button>
                        <button type="reset" id="submitButton">Reset</button></div>

                </div>
            </form>
            <!-- <div id="result"></div> -->
            <!--onclick="return Submt"-->
        </div>

        <?php include("footer.php"); ?>
    </div>
</body>

</html>