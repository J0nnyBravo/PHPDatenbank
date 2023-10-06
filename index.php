<?php
    require_once './DbConnection.php';
    require_once './ManageUser.php';
    $connection = new DbConnection();
    $mu = new ManageUser();
    //$connection->createNewGuest("mirza", "Hinterseher", "mirzao@xx.at");

//   $firstname =  $_POST["firstname"];
//   $lastname =  $_POST["lastname"];
//   $email =  $_POST["email"];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <label style="padding-right: 10px">Vorname</label>
    <input type="text" name="firstname"><br>
    <label>Nachname</label>
    <input type="text" name="lastname"><br>
    <label>Email</label>
    <input type="text" name="email"><br>
    <input type="submit">
</form>


    <?php //$connection->createNewGuest($firstname, $lastname, $email) ?>

<?php

    //$mu->displayAllUsers();

?>

<?php

    if(isset($_POST['display'])) {
        $mu->displayAllUsers();
    }
    if(isset($_POST['close'])) {
    }
?>

<form method="post">
<input type="submit" name="display"
       value="Display"/>
<input type="submit" name="close"
       value="Close"/>
</form>

</body>
</html>

