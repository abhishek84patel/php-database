﻿
<?php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIMT – Badaun Institute of Management & Technology, Badaun</title>
    <link rel="shortcut icon" href="./image/college logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body>

    <header class="">
        <div class=" header-div container0 py-0">
            <div class="web-logo">
                <img src="./image/college logo.jpg" alt="college logo">
            </div>
            <nav>
                <ul>
                    <li><a href="">Home </a> </li>

                    <li><a href="">About</a></li>
                    <li><a href="">Gallery </a></li>
                    <li><a href="">Admissions</a></li>
                    <li><a href="">Student Corner</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>

            </nav>
            <button>login</button>
        </div>
    </header>
    <main class="container0">
        <marquee>
            <a href="./admission.php" target="_blank">  Admissions are open now- go and apply for Admissions </a>
        </marquee>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: 80vh; overflow: hidden;">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./image/slider 3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./image/sliders-2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./image/slider 1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
</body>

</html>
?>