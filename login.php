<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* body{
         background-color:lightseagreen;
     } */
        .wrapper {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img/img.png);
            background-size: cover;
            background-position: unset;
            height: 100vh;
            left: 0;
        }
        form{
            padding: 100px; /* change this value to set page */
        }
        .login-form {
            text-align: center;
            margin: 40px auto;
        }

        h2 {
            margin-top: 40px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: lightcyan;
        }

        .form-group input,
        .form-group button {
            border: 1px solid black;
            border-radius: 6px;
        }

        .form-group button:hover {
            color: #f1f1f1;
            background-color: black;
        }

        .form-group {
    
            padding: 2px 4px;
        }

        label {
            color: lightcyan;
        }
        .form-group .star{
            color: red;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include("header.php"); ?>


        <div class="login-form">
            <form action="" method="">
                <div class="form-group">
                    <h2><strong><u>Log-in</u></strong></h2>
                </div>
                <div class="form-group">
                    <label>Username</label><label class="star">*</label>
                    <input type="text" placeholder="Username" name="unm" required="required" width="100px">
                </div>
                <div class="form-group">
                    <label>Password</label><label class="star">*</label>
                    <input type="password" placeholder="Password" name="pwd" required="required" width="100px">
                </div>
                <div class="form-group">
                    <button type="submit" name="sub" width="50%">Log in</button>
                    <button type="Reset" name="sub" width="50%">Reset</button>
                </div>

            </form>

        </div>
        <?php include("footer.php"); ?>
    </div>
</body>

</html>