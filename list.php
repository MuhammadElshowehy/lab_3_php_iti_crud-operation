<?php
    echo "<table border=1>";
    echo "<tr>
        <th>id</th>
        <th>fname</th>
        <th>lname</th>
        <th>address</th>
        <th>country</th>
        <th>gender</th>
        <th>userName</th>
        <th>userPass</th>
        <th>department</th>
        <th>actions</th>
    </tr>";

    try {
        $connection = new PDO ("mysql:host=localhost;dbname=lab_3_php", "root", "");
        $data = $connection->query("select* from student");
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $key=>$student) {
            echo "<tr>";
            foreach($student as $value) {
                echo "<td>$value</td>";
            }
            echo "<td> <a href='view.php?id={$student['id']}'>view</a> <a href='edit.php?id={$student['id']}'>edit</a> <a href='delete.php?id={$student['id']}'>delete</a> </td>";
            echo "</tr>";
        }
    }
    catch (PDOException $e) {
        var_dump($e->getMessage());
    }
?>