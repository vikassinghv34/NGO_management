<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Welcome Doner</title>

    <style>
        .wrapper {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img/img.png);
            background-size: cover;
            background-position: unset;
            height: 700px;
        }
        .text{
            color:lightcyan;
            text-align: center;
            font-family:  -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 20px;
        }
        form{
            /* padding: 213px; */
        text-align: center;
        }
        /* .label{
            color: lightcyan;
        }
        .star{
            color: red;
            font-size: 20px;
        } */
        .food{
            border-radius:20px;
            padding: 10px;
            background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.2)) ,url(img/food.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 450px;
            height: 121px;
            margin: 51px auto;
            color: lightcyan;
            font-size: 25px;
            border: none;
            font-weight: bold;

            float: left;
            
            margin-left: 200px;
            
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .food:hover{
            /* background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0,0,0,0.8), rgba(0, 0, 0, 0)) ,url(img/food.jpg); */

            color: dodgerblue;
            font-size: 35px;
        }
        .cloth{
            border-radius:20px;
            padding: 10px;
            background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.2)) ,url(img/cloth.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 450px;
            height: 121px;
            margin: 51px auto;
            color: lightcyan;
            font-size: 25px;
            border: none;
            font-weight: bold;
            float: right;
            margin-right: 220px;
            
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .cloth:hover{
            color: dodgerblue;
            font-size: 35px;
        }
        .book{
            border-radius:20px;
            padding: 10px;
            background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)) ,url(img/book.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 450px;
            height: 121px;
            margin: 55px auto;
            color: lightcyan;
            font-size: 25px;
            border: none;
            font-weight: bold;
            float: left;
            margin-left: 200px;
            
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .book:hover{
            color: dodgerblue;
            font-size: 35px;
        }
        .blood{
            border-radius:20px;
            padding: 10px;
            background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)) ,url(img/blood.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 450px;
            height: 121px;
            margin: 55px auto;
            color: lightcyan;
            font-size: 25px;
            border: none;
            font-weight: bold;
            float: right;
            margin-right: 220px;
            
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .blood:hover{
            color:dodgerblue;
            font-size: 35px;
        }
        /* .items:active{
            border: none;
        } */
        h1{
            cursor:context-menu;
        }
        /* .food{
            background-image: linear-gradient(),url(img/food.jpg);
        } */
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include('header.php'); ?>



        <form action="">
        <div class="text">
            <h1><strong>Welcome <!--#display doner's name using session --></strong></h1>
        </div>
        <!-- <label for="type" class="label">Choose Item</label><label class="star">*</label>
            <select name="donation" id="type">
                <option value="cloth">Clothes</option>
                <option value="book">Books</option>
                <option value="food">Food</option> 
             </select> -->
             <div class="items"><button class="food">Donate Food</button></div>
             <div class="items"><button class="cloth">Donate Clothes</button></div>
             <div class="items"><button class="book">Donate Books</button></div>
             <div class="items"><button class="blood">Donate Blood</button></div>

        </form>

        <?php include('footer.php'); ?>
    </div>
</body>

</html>