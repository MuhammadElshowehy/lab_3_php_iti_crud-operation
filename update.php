<?php
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $department = $_POST['department'];

    // var_dump($fname);
    // var_dump($id);
    try {
        $connection = new PDO ("mysql:host=localhost;dbname=lab_3_php", "root", "");
        $connection->query("update student set 
        fname='$fname',
        lname='$lname',
        address='$address',
        country='$country',
        gender='$gender',
        userName='$userName',
        userPass='$userPass'
        where id='$id'");
    }
    catch (PDOException $e) {
        var_dump($e->getMessage());
    }
    header("location:list.php");
?>