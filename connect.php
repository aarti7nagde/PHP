<?php
    if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];

    $servername = 'localhost';
    $user = 'root';
    $pass = ''; //blank
    $database = 'student';

    $conn = mysqli_connect($servername,$user,$pass,$database);
    $sql = "INSERT INTO registration(firstname,lastname,username,email,password,address,city,state,zipcode) values ('$firstname','$lastname','$username','$email','$password','$address','$city','$state','$zipcode')";
    mysqli_query($conn,$sql);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";
    }
    
?>
