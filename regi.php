<?php

require_once('conn.php');

$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$address = $_GET['address'];
$type = $_GET['usertype'];
$pwd = $_GET['pwd'];
$error = array();
if (empty($name)) {

    array_push($error, "name is required");
}
if (empty($phone)) {

    array_push($error, "Phone number is required");
}
if (empty($email)) {

    array_push($error, "email is required");
}
if (empty($address)) {

    array_push($error, "address is required");
}
if (empty($type)) {

    array_push($error, "User type is required");
}
if (empty($pwd)) {

    array_push($error, "password is required");
}

if (count($error) == 0) {
    $pwd = md5($pwd);
    $sql = "INSERT INTO register(name,number,mail,address,type,pwd) VALUES('$name','$phone','$email','$address','$type','$pwd')";

    if ($conn->query($sql) == true) {
        echo '{"response":1}';
    } else {
        echo '{"response":0}';
    }

    //check that email/username is already exit
    // $sql2="SELECT * FROM register WHERE (email='$email');";
    // $result2=mysqli_query($conn,$sql2);
    // if(mysqli_num_rows($result2)>0)
    // {
    //     $row=mysqli_fetch_assoc($result2);
    //     if($email==isset($row['email']))
    //     {
    //         echo '{"response":0}';
    //     }
    // }
}
else
{
    echo '{"response":0}';
}
$conn->close();
