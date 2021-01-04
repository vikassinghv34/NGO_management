<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* * {box-sizing: border-box;} */
*{
    padding: 0;
    margin: 0;
    box-sizing: content-box;
}
        body {
            margin-top: 0;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
           
        }

        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 20px;
            /* height: 100px; */
        }

        p {
            margin: 0;
            padding: 0;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            font-size: 18px;
            line-height: 20px;
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
            cursor: pointer;
        }

        .logo img {
            margin: auto -10px;
            height: 65px;
            width: 65px;
            /* top: 20px; */
            margin-bottom: -70%;
            backdrop-filter: drop-shadow(5px 4px 6px brown);
        }

        .logo h5 {
            margin-top: 20px;
            font-size: 30px;
            text-align: center;
            text-decoration-color: darkgray;
            float: left;
        }

        .logo h4 {
            margin-top: 20px;
            font-size: 35px;
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
            <a href="home.php"><img src="img/logo.png" alt=""></a>
            <h4> CaRe</h4></a>
        </div>
        <div class="header-right">
            <a class="active" href="Home.php">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <?php if(isset($_SESSION['user'])){ ?>
            <a href="logout.php">Log Out</a>
            <?php } else { ?>
            <a href="login_with_backend.php">Log In</a>
            <?php } ?>
            <a href="register_with_backend.php">Register</a>
        </div>
    </div>
    <style>
        .line {
            height: 2rem;
            background-color: black;
            width:100%
        }

        .nav {
            margin-left: 20px;
        }

        .dropbtn {
            background-color: black;
            color: dodgerblue;
            padding: 4px;
            width: 100px;
            font-size: 16px;
            border: none;
        }

        .drop {
            position: relative;
            display: inline-block;
        }

        .dropbtn-content {
            display: none;
            position: absolute;
            background-color:#ddd;
            min-width: 160px;
            /* box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); */
            z-index: 1;
        }

        .dropbtn-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropbtn-content a:hover {
            background-color:lightslategray;
            color: #ddd;
        }

        .drop:hover .dropbtn-content {
            display: block;
        }

        .drop:hover .dropbtn {
            color:white;
        }

        /* .nav a {
            padding: 10px;
            text-decoration: none;
            color:cadetblue;
            text-align: center;
            font-size: 1.2rem;
        }
        .nav a:hover{
            color:blue ;
            background-color: #ddd;
            border-radius: 6px;
        } */
    </style>
    <div class="line">
        <div class="nav">
            <div class="drop">
                <button class="dropbtn">Services</button>
                <div class="dropbtn-content">
                    <a href="#">Link1</a>
                    <a href="#">Link2</a>
                </div>
            </div>
            <div class="drop">
                <button class="dropbtn">Services</button>
                <div class="dropbtn-content">
                    <a href="#">Link1</a>
                    <a href="#">Link2</a>
                    <a href="#">Link3</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <style>
        .footer {
            /* position: absolute; */
            /* left: 0;*/
            display: flex;
            justify-content: space-around;
            z-index:10;
            bottom: 0;
            width: 100%;
            margin-bottom: 0px;
            left:0px;

            /* height:10vh; */
            background-color: #f1f1f1;
            /* margin-top: auto; */

        }

        .footer p {
            text-align: center;
            color: dodgerblue;
            font-size: 1rem;
            height: 40px;
            line-height: 1.5rem;
            padding-top: 10px;
            margin-bottom: 0;
        }
    </style>

    <div class="footer">
        <p>©LifeCare 2020</p>
    </div> -->

</body>

</html>