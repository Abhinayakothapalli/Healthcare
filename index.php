<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="page2.css">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        nav {
            display: flex;
            width: 100%;
            background: #0a5071;
            justify-content: space-between;
            text-align: center;
            padding: 15px 30px;
            position: fixed;
            z-index: 3;
            top: 0;
            left: 0;
            right: 0;

        }

        nav .icon {
            font-size: 35px;
            font-weight: 800;
            color: #fff;
            cursor: pointer;
        }

        nav ol {
            display: flex;
            list-style: none;
            margin: auto 0;
        }

        nav ol li {
            margin: 0 2px;
        }

        nav ol li a {
            color: #fff;
            font-size: 20px;
            text-decoration: none;
            text-transform: capitalize;
            letter-spacing: 1px;
            padding: 5px 10px;
        }

        nav ol li:hover a {
            background: #fff;
            color: #0a5071;
        }

        nav .search_box {
            display: flex;
            margin: auto 0;
            height: 35px;
            line-height: 35px;
        }

        nav .search_box input {
            border: none;
            outline: none;
            background: #fff;
            height: 100%;
            padding: 0 10px;
            font-size: 20px;
            width: 350px;

        }

        nav .search_box span {
            color: #0a5071;
            font-size: 20px;
            background: #fff;
            height: 100%;
            padding: 8px;
            position: relative;
            cursor: pointer;
            z-index: 1;
        }

        nav .search_box span:hover {
            color: #fff;
        }

        nav .search_box span::after {
            height: 100%;
            width: 0%;
            content: '';
            background: #ff003c;
            position: absolute;
            top: 0;
            right: 0;
            z-index: -1;
            transition: 0.3s;
        }

        nav .search_box span:hover::after {
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            nav{
                font-size: 50px;
            } 
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .carousel {
            width: 100vw;
            height: 80vh;
            position: relative;
        }

        .carousel>ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: 200ms opacity ease-in-out;
            transition-delay: 200ms;
        }

        .slide>img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .slide[data-active] {
            opacity: 1;
            z-index: 1;
            transition-delay: 0ms;
        }

        .carousel-button {
            position: absolute;
            z-index: 2;
            background: none;
            border: none;
            font-size: 4rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, .5);
            cursor: pointer;
            border-radius: .25rem;
            padding: 0 .5rem;
            background-color: rgba(0, 0, 0, .1);
        }

        .carousel-button:hover,
        .carousel-button:focus {
            color: white;
            background-color: rgba(0, 0, 0, .2);
        }

        .carousel-button:focus {
            outline: 1px solid black;
        }

        .carousel-button.prev {
            left: 1rem;
        }

        .carousel-button.next {
            right: 1rem;
        }

        .main img {
            height: 100%;
            width: 100%;
            display: block;
        }

        .over {
            position: absolute;
            height: 0%;
            width: 100%;
            top: 0;
            left: 0;
            background-color: #0a5071;
            color: white;
            overflow: hidden;
            transition: height 0.5s;
        }

        .over h1 {
            margin-top: 75px;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            letter-spacing: 1px;
        }

        .main:hover .over {
            height: 100%;

        }

        .main {
            margin: 40px;
            margin-top: 100px;
            margin-bottom: 150px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            border-radius: 5px;
        }

        .main:hover {
            cursor: pointer;
        }

        .container {
            display: flex;
            flex-direction: row;
            margin-left: 50px;
        }

        .main {
            position: relative;
            display: inline-block;
            width: 120%;
            height: 120%;
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            background-color: #0a5071;
        }

        .main::after {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            opacity: 0;
            -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .main:hover {
            -webkit-transform: scale(1.25, 1.25);
            transform: scale(1.25, 1.25);
        }

        .main:hover::after {
            opacity: 1;
        }

        .main a {
            text-decoration: none;
            color: white;
        }

        .main img {
            height: 170px;
        }

        .main p {
            padding: 5px;
            justify-content: center;
            text-align: center;
            color: #fff;
            background-color: #0a5071;
        }

        footer {
            background-color: #0a5071;
            padding: 50px;
        }

        footer .pages {
            text-align: center;
        }

        footer .pages h3 {
            color: white;
            font-size: 20px;
            font-family: cosmic, sans-serif;
            padding: 5px;
        }

        footer .pages a {
            text-decoration: none;
            margin: 10px;
            color: orange;
            font-size: 15px;
            font-family: cosmic, sans-serif;
        }

        footer .doc a:hover {
            color: white;
        }

        footer .doc {
            text-align: center;
        }

        footer .doc h3 {
            color: white;
            font-size: 20px;
            font-family: cosmic, sans-serif;
            padding: 5px;
        }

        footer .doc a {
            text-decoration: none;
            margin: 10px;
            color: orange;
            font-size: 15px;
            font-family: cosmic, sans-serif;
        }

        footer .doc a:hover {
            color: white;
        }

        footer .doc a:hover {
            color: white;
        }

        footer .social {
            text-align: center;
        }

        footer .social h3 {
            color: white;
            font-size: 20px;
            font-family: cosmic, sans-serif;
            padding: 5px;
        }

        footer .contact {
            text-align: center;
        }

        footer .contact h3 {
            color: white;
            font-size: 20px;
            font-family: cosmic, sans-serif;
            padding: 5px;
        }

        footer .social a {
            text-decoration: none;
            font-size: 30px;
            color: orange;
            margin: 10px;
        }

        footer .social a:hover {
            color: white;
        }

        footer .contact a {
            text-decoration: none;
            font-size: 30px;
            color: orange;
            margin: 10px;
        }

        footer .contact a:hover {
            color: white;
        }

        footer .footer_logo p {
            height: 45px;
            font-size: 35px;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav>
        <div class="icon">Health <b style="color: red;">C</b>are</div>
        <div class="search_box">
            <input type="search" placeholder="search here">
            <span class="fa fa-search"></span>
        </div>
        <ol>
            <li><a href="#">Home</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="chat.php">chat box</a></li>
            <li><a href="login.php">logout</a></li>
        </ol>
    </nav>
    <section aria-label="Newest Photos">
        <div class="carousel" data-carousel>
            <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
            <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
            <ul data-slides>
                <li class="slide" data-active>
                    <img src="https://i.ytimg.com/vi/PUu5q53nw7I/maxresdefault.jpg" alt="Nature Image #1">
                </li>
                <li class="slide">
                    <img src="https://previews.123rf.com/images/arrow/arrow1607/arrow160700022/61706313-medical-healthcare-background.jpg" alt="Nature Image #2">
                </li>
                <li class="slide">
                    <img src="https://reliablebackgroundscreening.com/wp-content/uploads/2021/08/The-Importance-of-Healthcare-Background-Checks.jpg" alt="Nature Image #3">
                </li>
            </ul>
        </div>
    </section>
    <a href="page1.html">
        <div class="container">
            <div class="main">
                <img src="https://img.freepik.com/premium-photo/medium-shot-pregnant-woman-standing-window_23-2148252648.jpg?w=2000">
                <div class="over">
                    <h1><a href="page2.php">Children & Women</a></h1>
                </div>
                <div>

                    <p>Children & Women</p>
                    <br>
                </div>
            </div>
            <div class="main">
                <img src="https://thumbs.dreamstime.com/b/people-chest-pain-heart-attack-healthcare-people-chest-pain-heart-attack-healthcare-concept-136868126.jpg">
                <div class="over">
                    <h1><a href="page2(d).php">Diseases</a></h1>
                </div>
                <div>

                    <p>Diseases</p>
                    <br>
                </div>
            </div>
            <div class="main">
                <img src="https://media.istockphoto.com/id/1358965099/photo/senior-couple-hugging-in-a-nursing-home-a-happy-senior-couple-standing-next-to-a-window-in-a.jpg?b=1&s=170667a&w=0&k=20&c=i6aR4UxxSn7gy6eiTwQ-csGcZvQFY2805Dd4AnJTdpc=">
                <div class="over">
                    <h1><a href="page2(o).php">Senior <br>Citizens</a></h1>
                </div>
                <div>

                    <p>Senior Citizens</p>
                    <br>
                </div>
            </div>
            <div class="main">
                <img src="https://images.unsplash.com/photo-1508847154043-be5407fcaa5a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZGlzYWJpbGl0eXxlbnwwfHwwfHw%3D&w=1000&q=80">
                <div class="over">
                    <h1><a href="page2(db).php">Physically <br>Disabled<br> People
                        </a></h1>
                </div>
                <div>

                    <p>Physically Disabled People</p>

                </div>
            </div>
            <div class="main">
                <img src="https://warnetthallen.com/wp-content/uploads/2021/01/Should-I-Go-to-a-Doctor-After-a-Car-Accident.jpg">
                <div class="over">
                    <h1><a href="page2(a).php">Accidents</a></h1>
                </div>
                <div>

                    <p>Accidents</p>
                    <br>
                </div>
            </div>
        </div>
    </a>
    <footer>
        <a href="footer.php"></a>
        <div class="footer_logo">
            <p>Health <b style="color: red;">C</b>are</p>
        </div>
        <div class="pages">
            <h3>Pages</h3>
            <a href="about.html">About us</a>|
            <a href="">Services</a>|
            <a href="">Blogs</a>|
            <a href="">Login</a>|
            <a href="">Sign up</a>
        </div><br>
        <div class="doc">
            <h3>Documents</h3>
            <a href="">Privacy Policy</a>|
            <a href="">Terms of Use</a>|
            <a href="">Refund Policy</a>
        </div><br>
        <div class="social">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com/people/1Stopai/100063830183617/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/1stop-ai/?originalSubdomain=li" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/1stop.ai/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/1stopAi" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div><br>
        <div class="contact">
            <h3>Contact us</h3>
            <a href="https://api.Whatsapp.com/send?phone=+917702987186" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="tel: +917702987186"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <a href="mailto: support@1stop.ai"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        </div><br>
        <hr><br>
        <p>copyright &copy; 2022 Health care. All rights reserved</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script>
        const buttons = document.querySelectorAll("[data-carousel-button]")

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const offset = button.dataset.carouselButton === "next" ? 1 : -1
                const slides = button
                    .closest("[data-carousel]")
                    .querySelector("[data-slides]")

                const activeSlide = slides.querySelector("[data-active]")
                let newIndex = [...slides.children].indexOf(activeSlide) + offset
                if (newIndex < 0) newIndex = slides.children.length - 1
                if (newIndex >= slides.children.length) newIndex = 0

                slides.children[newIndex].dataset.active = true
                delete activeSlide.dataset.active
            })
        })
    </script>
</body>
</body>

</html>