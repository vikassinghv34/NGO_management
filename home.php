<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home     </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* html{
            height: 100vh;
        } */
        body{
            margin: 0;
            /* display: flex ;
            flex-direction: column; */
        }
        h1 {
            color: lightcyan;
            text-align: center;
            /* margin-top: 180px; */

        }

        .wrapper {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img/img.png);
            background-size:cover;
            background-position:unset;
            height: 700px;
        }
        .text{
            padding: 247px;
        }
    </style>
</head>

<body>


    <div class="wrapper">
        <div class="main">
            <?php
                include('header.php');
            ?>
        </div>
    <div class="text">
        <h1><strong> SHARE IS THE CAUSE OF SOMEONE'S SMILE :)</strong></h1>
        </div>
    

    <?php include("footer.php"); ?>
    </div>
</body>

</html>