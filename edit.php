<?php
    try {
        $connection = new pdo ("mysql:host=localhost;dbname=lab_3_php", "root", "");
        $data = $connection->query("select* from student where id = {$_GET['id']}");
        $result = $data->FETCH(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        var_dump($e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="update.php" method="post">
        <h2>muhammad gamal elshowehy</h2>
        <br>

        <div class="id">
        <input type="text" name="id" id="id" value=" <?php echo $_GET['id'] ?>" hidden>
        </div>

        <div class="fname">
            <label for="fname">first name</label>
            <input type="text" name="fname" id="fname" value="<?php echo $result['fname'] ?>">
        </div>
        <br>

        <div class="lname">
            <label for="lname">last name</label>
            <input type="text" name="lname" id="lname" value="<?php echo $result['lname'] ?>">
        </div>
        <br>

        <div class="address">
            <label for="address">address</label>
            <textarea name="address" id="address" cols="30" rows="5" placeholder="<?php echo $result['address'] ?>"></textarea>
        </div>
        <br>

        <div class="country">
            <label for="country">country</label>
            <select name="country" id="country">
                <option value="<?php echo $result['country'] ?>"> <?php echo $result['country'] ?> </option>
                <option value="egypt">egypt</option>
                <option value="germany">germany</option>
                <option value="canada">canada</option>
                <option value="america">america</option>
            </select>
        </div>
        <br>

        <div class="gender">
            <h3>gender</h3>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">male</label>
            <input type="radio" name="gender" value="female" id="female"> 
            <label for="female">female</label>
        </div>
        <br>

        <div class="userName">
            <label for="uname">username</label>
            <input type="text" name="userName" id="uname" value="<?php echo $result['userName'] ?>">
        </div>
        <br>

        <div class="userPass">
            <label for="pass">userPass</label>
            <input type="text" name="userPass" id="pass" value="<?php echo $result['userPass'] ?>">
        </div>
        <br>

        <div class="department">
            <label for="dept">department</label>
            <input type="text" name="department" id="dept" value="open source" readonly value="<?php echo $result['department'] ?>"> 
        </div>
        <br>

        <input type="submit" value="update">
        <input type="reset">
    </form>
    <br>
</body>
</html>