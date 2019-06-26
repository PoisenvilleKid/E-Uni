<?php
    // obtain values from form in test.php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost","root","");

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);

    mysqli_select_db($con, "test_1");

    $result = mysqli_query($con,"select * from user where username = '$username' and password = '$password'")
                or die("Failed to query database ".mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        echo "Login Success! Welcome".$row['username']; 
    } else{
        echo "Failed to login";
    }

?>