<?php
    try {
        $connection = new pdo ("mysql:host=localhost;dbname=lab_3_php", "root", "");
        $connection->query("delete from student where id = {$_GET['id']}");
        header("location:list.php");
    }
    catch (PDOException $e) {
        var_dump($e->getMessage());
    }
    $connection->close();
?>