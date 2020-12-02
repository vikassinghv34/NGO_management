<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* * {box-sizing: border-box;} */

        body {
            margin-top: 0;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
        }

        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 20px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header-right a:hover {
            background-color: #ddd;
            color: black;
        }


        .header a {
            color: white;
            color: dodgerblue;
            text-decoration: none;
        }

        .header-right {
            float: right;
        }

        .head a {
            font-size: 40px;
        }

        @media screen and (max-width: 100px) {
            .header a {
                float: none;
                display: block;
                text-align: left;

            }

            .header-right {
                float: none;
            }
        }

        .logo {
            display: inline-block;
            cursor:pointer;
        }

        .logo img {
            margin: auto -10px;
            height: 55px;
            width: 55px;
            /* top: 20px; */
            margin-bottom: -70%;
            backdrop-filter: drop-shadow(5px 4px 6px brown);
        }

        .logo h5 {
            margin-top: 20px;
            text-align: center;
            text-decoration-color: darkgray;
            float: left;
        }

        .logo h4 {
            margin-top: 20px;
            float: right;
            color: lightbrown;
            text-decoration-color: green;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="logo">
        <h5>LiFe</h5>
            <a href="#"><img src="img/logo.png" alt=""></a>
            <h4> CaRe</h4></a>
        </div>
        <div class="header-right">
            <a class="active" href="Home.php">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="Login.php">Login</a>
            <a href="register.php">Signin</a>
        </div>
    </div>
    <style>
        .footer {
            position: absolute;
            /* left: 0;*/
            bottom: 0;
            width: 100%;
            background-color: #f1f1f1;

        }

        .footer p {
            text-align: center;
            color: blue;
        }
    </style>

    <div class="footer">
        <div class="">



        </div>
        <p>©LifeCare 2020</p>
    </div>
</body>

</html>