<?php
require $_SERVER['DOCUMENT_ROOT'] . '/portfolio/assets/vendor/sendmail.php';
require $_SERVER['DOCUMENT_ROOT'] . '/portfolio/assets/php/class/class_model.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>John Noel Gita</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/css/bootstrap.min.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="assets/resource/css/styles.css">

    <!-- Web Icon -->
    <link rel="icon" type="image/png" href="assets/resource/img/apple-touch-icon.png">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/b04d2a2a76.js" crossorigin="anonymous"></script>




</head>

<body>

    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top pr-4">
            <div class="container-fluid">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#home">Home </a>
                        <a class="nav-item nav-link" href="#aboutme">About Me</a>
                        <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
                        <a class="nav-item nav-link" href="#contactme">Contact Me</a>
                    </div>
                </div>
        </nav>
        <!-- End of Navigation -->
        <div class="container mt-5">
            <div class="jumbotron jumbotron-fluid header-text">
                <div class="container mt-5">
                    <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos="fade-down">
                        <h1 class="headername p-1">John Noel Gita</h1>
                        
                        <h3 class="title">Graphic Designer & Web Developer</h3>

                        <button class="btn btn-full btn-lg" role="button" onclick="location.href='#aboutme'">About Me</button>
                        <button class="btn btn-full btn-lg" role="button" onclick="location.href='#portfolio'">My Works</button>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- start of About Me -->
    <section id="aboutme" class="sections">
        <div class="container pt-5">
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos="fade-down">
                <div class="col-lg-6">
                    <h2>About Me</h2>
                    <p class="pt-5 desc">Hello, I'm John Noel A. Gita, a proud Magna Cum Laude graduate with a Bachelor's Degree in Information Technology. My passion lies in the realms of web development and graphic design, where I combine my technical skills with creative flair to craft engaging digital experiences. With a commitment to excellence and a thirst for knowledge, I'm dedicated to pushing the boundaries of digital innovation. Let's connect and create something amazing together!</p>

                    <p class="aboutme_name pt-5">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; John Noel Gita</br></br>
                        Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;jnoelgita@gmail.com</br></br>
                        LinkedIn &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;www.linked.com/in/johnnoelgita</br>
                    </p>
                    <a class="btn btn-full btn-lg mb-5" href="assets/resource/img/GITA_RESUME_LATEST.pdf" role="button" download>Download CV</a>



                </div>
                <div class="col-lg-6">
                    <h1>Contact Me</h1></br>
                    <h5 class="a-name pt-3">If you wish to contact me, lets Talk</h5></br>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>

                    <h4 class="name">jnoelgita@gmail.com</h4></br>
                    <i class="fa fa-mobile"></i>
                    <h4 class="a-name">0916 394 31335</h4></br>
                    <button class="btn btn-full btn-lg" role="button" onclick="location.href='#contactme'">Contact Me</button>

                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <div class="text-white c-align" data-aos="fade-up">
                        <h3>Skills</h3>
                        <hr class="line mb-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="90">
                                    <span class="percent">90</span>
                                </div>
                                <h5>HTML</h5>
                            </div>
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="90">
                                    <span class="percent">87</span>
                                </div>
                                <h5>CSS</h5>
                            </div>
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="70">
                                    <span class="percent">70</span>
                                </div>
                                <h5>PHP</h5>
                            </div>
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="65">
                                    <span class="percent">65</span>
                                </div>
                                <h5>JS</h5>
                            </div>
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="80">
                                    <span class="percent">80</span>
                                </div>
                                <h5>Adobe Photoshop</h5>
                            </div>
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="85">
                                    <span class="percent">85</span>
                                </div>
                                <h5>Graphic Design</h5>
                            </div>
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="85">
                                    <span class="percent">85</span>
                                </div>
                                <h5>SQL</h5>
                            </div>
                            <div class="col-md-3 col-sm-4 skill">
                                <div class="chart" data-aos="zoom-in" data-percent="85">
                                    <span class="percent">85</span>
                                </div>
                                <h5>GitHub</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <section id="portfolio" class="sections">
        <div class="container">

            <h1 class="header-title" data-aos="fade-up" data-aos-duration="1000" data-aos="fade-down">Some of my <span class="works">works.</span></h1>
            <h3 class="header-title mt-3 mb-4" data-aos="fade-up" data-aos-duration="1700" data-aos="fade-down">Graphic Designs</h3>
            <div class="row">
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card">
                        <img src="assets/resource/img/pic3.jpg" class="card-img-top1" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">Shooting Star School Services</h4>
                            <div class="card-subtitle">
                                <p>Designed in Nov 2022</p>
                            </div>
                            <p class="card-text">I designed this logo when BT Construction hired me in Nov 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card">
                        <img src="assets/resource/img/BT_CARD.jpg" class="card-img-top1" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">BT Construction Calling Card</h4>
                            <div class="card-subtitle">
                                <p>Designed in Nov 2021</p>
                            </div>
                            <p class="card-text">I designed this calling card when BT Construction hired me in Nov 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card">
                        <img src="assets/resource/img/btlogo.png" class="card-img-top" width="150" height="180" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">BT Construction Logo</h4>
                            <div class="card-subtitle">
                                <p>Designed in Nov 2021</p>
                            </div>
                            <p class="card-text">I designed this logo when BT Construction hired me in Nov 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card">
                        <img src="assets/resource/img/music.jpg" class="card-img-top" width="150" height="180" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">Kirby Duets</h4>
                            <div class="card-subtitle">
                                <p>Designed in May 2021</p>
                            </div>
                            <p class="card-text">I designed this music album cover for a local singer artist</p>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="header-title mt-3 mb-4" data-aos="fade-up" data-aos-duration="1700" data-aos="fade-down">Website Designs</h3>
            <div class="row">
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card website">
                        <img src="assets/resource/img/KURO.jpg" class="card-img-top1" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">KURO Online Pet Shop</h4>
                            <div class="card-subtitle">
                                <p>Developed on Oct 2021</p>
                            </div>
                            <p class="card-text">This website is one of our project in, and I considered it as one of my first improved responsive website</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card website">
                        <img src="assets/resource/img/portal.jpg" class="card-img-top1" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">The CEU Office Of The Registrar Candidate Verification Portal
                            </h4>
                            <div class="card-subtitle">
                                <p>Develop on Sept Aug 2022 - Dec 2022</p>
                            </div>
                            <p class="card-text">Together with my colleagues in college we are still currently designing and creating this website that serves as our thesis project </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card website">
                        <img src="assets/resource/img/do-qms.jpg" type="image" class="card-img-top" width="150" height="180" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">DepEd Malolos DO Queuing Management System</h4>
                            <div class="card-subtitle">
                                <p>Designed in Nov 2021</p>
                            </div>
                            <p class="card-text">Together with my colleague we develop this queuing system website during our internship trainee</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 !important d-flex align-items-center">
                    <div class="card website">
                        <img src="assets/resource/img/do-inv.png" type="image" class="card-img-top" width="150" height="180" alt="btlogo">
                        <div class="card-body">
                            <h4 class="card-title">DepEd Malolos DO ICT Services Inventory Database Portal</h4>
                            <div class="card-subtitle">
                                <p>Designed in May 2021</p>
                            </div>
                            <p class="card-text">Together with my colleague we develop this queuing system website during our internship trainee</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>
    <section id="contactme" class="sections">
        <div class="container pt-2">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title" data-aos="fade-right" data-aos-duration="1000" data-aos="fade-left">Work with me.</h1>
                    <p class="pt-2" data-aos="fade-right" data-aos-duration="1000" data-aos="fade-left">Get in touch via by filling up the form below, or send an email at <span class="emailadd">jnoelgita@gmail.com</span></p>
                    <?php require 'assets/php/controllers/form_process.php'; ?>
                    <form method="POST" id="inq" action="">
                        <?php if ($message != "") {
                            echo '<div class="alert alert-danger" id="error-message">' . $message . '</div>';
                        } ?>
                        <?php if ($s_message != "") {
                            echo '<div class="alert alert-success" id="success-message">' . $s_message . '</div>';
                        } ?>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                        <label for="">Company Name:</label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Enter your name">
                        <label for="">Email Address:</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email address">
                        <label for="">Concern:</label>
                        <textarea type="textarea" class="form-control" name="concern" id="concern" placeholder="Enter Your message here...."></textarea>
                        <input type="submit" name="submitr" class="btn1 btn-md">
                    </form>
                </div>

                <div class="col-md-6">
                    <h2 data-aos="fade-right" data-aos-duration="1000" data-aos="fade-left">My Social Media Accounts</h2>
                    <div class="icons" data-aos="fade-right" data-aos-duration="1000" data-aos="fade-left">
                        <a href="https://www.facebook.com/johnnoel.gita"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/gitajohnnoel/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/johnnoelgita/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://twitter.com/nyoy_no"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/vendor/easypie/jquery.easypiechart.js"></script>
    <script src="assets/vendor/js/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/resource/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
       
    </script>

</body>

</html>