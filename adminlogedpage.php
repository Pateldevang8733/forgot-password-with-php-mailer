<?php
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location:admin_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>welcome to -<?php echo $_SESSION['adminloginid']?></h1>
<form method="POST">
   <button name="logout">Log out<button>
</form>

<?php
    if(isset($_POST['logout']))
    {

        session_destroy();
        header("location:admin_login.php");
    }
?>
</body>
</html>