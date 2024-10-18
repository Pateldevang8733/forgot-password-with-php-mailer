<?php
session_start(); 
$message = "";
require("conn.php");

if (isset($_POST["userlogin"])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    $query = "SELECT * FROM members WHERE `Email`='$email' AND `Password`='$pass'";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            // Debugging line: Output the raw password and the hashed password
            echo "Raw Password: " . $_POST['pass'] . "<br>";
            echo "Hashed Password: " . $result_fetch['Pass'] . "<br>";
        
                header("location:userlogedpage.php");
                exit;
            } else {
                echo "<script>alert('Incorrect password');</script>";
            }
        } else {
            echo "<script>alert('User not found');</script>";
        }
    }
  

	
	
//secure the data
	
	
	
	


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="sty.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>



<body>
    <div class="main_container">

        <body style="background-color:black ;">
            <!-- Your content here -->
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


                    <div class="login_button">
                        <button class="btn btn-primary me-md-2" type="button">Login</button>
                        <button class="btn btn-primary" type="button">Admin login</button>
                    </div>
                </div>
            </div>
            <div class="middelmenu">
        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="slide">
                    <img src="./image/1.jpg" alt="Slide 1" />
                </div>
                <div class="slide">
                    <img src="./image/4.jpg" alt="Slide 2" />
                </div>
                <div class="slide">
                    <img src="./image/3.jpg" alt="Slide 3" />
                </div>
            </div>
                    <!-- Navigation buttons -->
                    <button class="slider-nav prev">&#10094;</button>
                    <button class="slider-nav next">&#10095;</button>
                </div>
            </div>

            <div class="endmenu">
                <text id="t">
                    <P><span style="color: rgb(255, 0, 0);font-weight: bold;">100+ Colleges</span> Here , Find Your Best
                        College<br>Login For More</P>
                </text>
                <button type="button" class="btn btn-outline-success">Login </button>




            </div>
            <div class="endmenu2">
                <h1><span style="color: rgb(247, 200, 112);">Top Colleges For You</h1></span>
                <div class="container">
                    <img src="./image/1.jpg">
                    <img src="./image/3.jpg">
                    <img src="./image/4.jpg">







                </div>
            </div>


            <div class="footer">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Anand Agricultural University</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-body-secondary" href="#">hello<svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </footer>


            </div>
    </div>
    <div class="login-overlay">
        <div class="login-box">
            <div class="cancel" style="width: 320px;height: 20px;padding-bottom: 20px;">
                <button
                    style="background-color: white; color: black; border: 1px solid black; font-size: 12px; width: 20px; height: 20px; cursor: pointer; line-height: 18px; text-align: center; padding: 0; float: right;"
                    onclick="window.location.href='home.php';">
                    X
                </button>
            </div>
            <div class="login-header">
                <img src="./image/user.png" alt="User Icon" class="user-icon">
                <h2>Login</h2>
            </div>
            <form method="POST">
                <input type="text" placeholder="email" name="email" required>
                <input type="password" placeholder="Password" name="pass" required>
                <button type="submit" name="userlogin">Sign in</button>

                <p>Are you new to the college area? <a href="register.php">Register</a></p>

                <div class="link forget-pass text-center">Forgot password? <a href="forgot-password.php"> Reset here</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
</div>
</div>
</div>


<script type="text/javascript">
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const errorElement = document.getElementById('error');
const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

form.addEventListener('submit', (e) => {
    let messages = [];
    if (username.value === '' || username.value == null) {
        messages.push('Name is required');
    }

    if (email.value === '' || email.value == null) {
        messages.push('Email is required');
    } else {

        if (email.value.match(pattern)) {

        } else {
            messages.push('Your Email is Invalid');
        }
    }


    if (pass.value === '' || pass.value == null) {
        messages.push('Password is required');
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join(', ');
    }
});
</script>
</body>

</html>