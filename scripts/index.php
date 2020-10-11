<!DOCTYPE html>
<html>
    <head>
    <?php
        require_once 'db.php';

        if(isset($_POST['data'])){
            $sth = $conn->prepare("UPDATE supplies SET quantity = quantity + 1 WHERE Id=1");
            $sth->execute();
        }
    ?>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
    <h1>testpage</h1>
    <form method="POST" action="index.php">
        <input type="submit" name="data" value="1"/>
    </form>