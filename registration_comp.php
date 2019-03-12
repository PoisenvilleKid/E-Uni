<?php
    // store values from form in index.html
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $major = $_POST['Major'];
    $classification = $_POST['Classification'];
    $phone = $_POST['phoneNumber'];
    $gender = $_POST['Gender'];
    $email = $_POST['email'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    if (isset($_POST['orgnization'])) {
        $organization = 1;
    } else {
        $organization = 0;
    };
    if (isset($_POST['meetups'])) {
        $meetup = 1;
    } else {
        $meetup = 0;
    };
    if (isset($_POST['socialEvents'])) {
        $socialevent = 1;
    } else {
        $socialevent = 0;
    };
    if (isset($_POST['foodieFriends'])) {
        $foodiefriend = 1;
    } else {
        $foodiefriend = 0;
    };
    $con = mysqli_connect("localhost","root","");
    $firstname = stripcslashes($firstname);
    $lastname = stripcslashes($lastname);
    $major = stripcslashes($major);
    $classification = stripcslashes($classification);
    $phone = stripcslashes($phone);
    $gender = stripcslashes($gender);
    $email = stripcslashes($email);
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $firstname = mysqli_real_escape_string($con,$firstname);
    $lastname = mysqli_real_escape_string($con,$lastname);
    $major = mysqli_real_escape_string($con,$major);
    $classification = mysqli_real_escape_string($con,$classification);
    $phone = mysqli_real_escape_string($con,$phone);
    $gender = mysqli_real_escape_string($con,$gender);
    $email = mysqli_real_escape_string($con,$email);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);
  
  
    mysqli_select_db($con, "test_1");
    $sql = "INSERT INTO user VALUES ('$firstname', '$lastname', '$major', '$classification', '$phone', '$gender', '$email', '$username', '$password','$organization','$meetup','$socialevent','$foodiefriend')";
    $result = mysqli_query($con,$sql)or die("Failed to query database ".mysqli_error($con));
?>