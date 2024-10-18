<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userlogedpage</title>
    <link rel="stylesheet" href="sty.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="header">

        <div class="logo">
            <img src="./image/logo2.png" />
        </div>

        <div class="nav">
            <!-- <div class="add">
            <p>
                <h4>About us</h4>
            </p>

            <p>
                <h4>Help</h4>
            </p>
            <p>

        </div>  -->
            <!-- <div class="btn">
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
            </div> -->

            <form method="POST">
                <button name="u">log out</button>
            </form>
        </div>
    </div>
    
<?php
    if(isset($_POST['u']))
    {

        session_destroy();
        header("location:login.php");
    }
?>

</body>

</html>