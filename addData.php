<?php
    try {
        $connection = new pdo ("mysql:host=localhost;dbname=lab_3_php", "root", "");
        $data = $connection->prepare("insert into student (fname, lname, address, country, gender, userName, userPass, department)
        values (?,?,?,?,?,?,?,?)");
        $data->execute([
            $_POST['fname'],
            $_POST['lname'],
            $_POST['address'],
            $_POST['country'],
            $_POST['gender'],
            $_POST['userName'],
            $_POST['userPass'],
            $_POST['department']
        ]);
    }
    catch (PDOException $e) {
        var_dump($e->getMessage());
    }

    header("location:list.php");
?>