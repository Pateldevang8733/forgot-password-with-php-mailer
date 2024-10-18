<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROJECT</title>
    <link rel="stylesheet" href="sty.css" />



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderWrapper = document.querySelector('.slider-wrapper');
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;
            let index = 0;

            document.querySelector('.slider-nav.next').addEventListener('click', function() {
                if (index < totalSlides - 1) {
                    index++;
                } else {
                    index = 0; // Loop back to the first slide
                }
                updateSlider();
            });

            document.querySelector('.slider-nav.prev').addEventListener('click', function() {
                if (index > 0) {
                    index--;
                } else {
                    index = totalSlides - 1; // Loop back to the last slide
                }
                updateSlider();
            });

            function updateSlider() {
                const offset = -index * 100; // Slide width
                sliderWrapper.style.transform = `translateX(${offset}%)`;
            }
        });
    </script>

</head>

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
            <a href="login.php">  <button class="btn btn-primary me-md-2" type="button">Login</button></a>
            <a href="admin_login.php">  <button class="btn btn-primary" type="button">Admin login</button></a>
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
    <P><span style="color: rgb(255, 0, 0);font-weight: bold;">100+ Colleges</span> Here , Find Your Best College<br>Login For More</P></text>
    <a href="login.php"> <button type="button" class="btn btn-outline-success">Login </button></a>




    </div>
    <div class="endmenu2">
        <h1><span style="color: rgb(247, 200, 112);">Top Colleges For You</h1></span>
            <div class="container">
                <img src="./image/1.jpg">
                <img src="./image/4.jpg">
                <img src="./image/5.jpg">

            </div>
    </div>


    <div class="footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Anand Agricultural University</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#">hello<svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
        </footer>


    </div>

</body>

</html>