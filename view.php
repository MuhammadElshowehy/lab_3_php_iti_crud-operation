<?php
    echo "<ul>";
    try {
        $connection = new pdo ("mysql:host=localhost;dbname=lab_3_php", "root", "");
        $data = $connection->query("select* from student where id = {$_GET['id']}");
        $result = $data->FETCH();
        echo "<li> {$result['id']} </li>";
        echo "<li> {$result['fname']} </li>";
        echo "<li> {$result['lname']} </li>";
        echo "<li> {$result['address']} </li>";
        echo "<li> {$result['country']} </li>";
        echo "<li> {$result['gender']} </li>";
        echo "<li> {$result['userName']} </li>";
        echo "<li> {$result['userPass']} </li>";
        echo "<li> {$result['department']} </li>";
    }
        catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    echo "</ul>";
?>