<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: login.php");
}

else{
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
    </head>
    <body>
        <li>
            <h1>Hello <?=$_SESSION['sess_user'];?></h1>&nbsp;&nbsp;
        </li>
        <li>
            <a href="logout.php">Logout</a>
        </li>

    </body>
</html>
<?php
    }
?>