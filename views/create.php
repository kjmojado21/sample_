<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../action/UserAction.php" method="post">
        <label for="">Enter Firstname</label>
        <input type="text" name="fname" id="">
        <br>
        <label for="">Enter Lastname</label>
        <input type="text" name="lname" id="">
        <br>
        <label for="">Enter Username</label>
        <input type="text" name="uname" id="">
        <br>
        <label for="">Enter Password</label>
        <input type="text" name="pword" id="">
        <br>
        <button type="submit" name="create_user">Create User</button>
        
    </form>
</body>
</html>