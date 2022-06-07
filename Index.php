<?php
 $server= "localhost";
 $username = "root";
 $password = "";
 $database = "portf";
 
 $koneksi=mysqli_connect($server,$username, $password, $database);
 
 if($koneksi==false){
   die("Tidak dapat melakukan koneksi".mysqli_connect_error());
 }
 
 $tampil=mysqli_query($koneksi,"SELECT * from logos");
 
 $tampilkan=mysqli_fetch_array($tampil);
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muhammad yusuf</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <main class="site-main">

        <section class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text">I'M</h3>
                        <h1 class="title-text text-uppercase">Yusuf</h1>
                        <h4 class="title-text text-uppercase">Front-End Developer </h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <button type="button" class="btn button primary-button mr-4 text-uppercase">hire
                                    me</button>
                                <button type="button" class="btn button secondary-button text-uppercase">Cooperate</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="about-area" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/about-us.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>ABOUT ME</span>

                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                I am passionate about designing and developing website for businesses through brand, communications, product and innovation strategy.
                            </p>
                            <p class="para">
                                Grapich Designer with more than three years of experience. proven skills in logo desing, poster design, UI/UX and webseite design.
                            </p>
                            <p class="para">
                                Experience in social media handling, movie making, and content creator. Has successfully made more than 100 design.
                            </p>
                        </div>
                        <button type="button" class="btn button primary-button text-uppercase">Download cv</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="brand-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="first-row row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo1.png" alt="Brand-1 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo2.png" alt="Brand-2 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo3.png" alt="Brand-3 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo4.png" alt="Brand-4">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo5.png" alt="Brand-5 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo6.png" alt="Brand-6">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo7.png" alt="Brand-7 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo8.png" alt="Brand-8 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo9.png" alt="Brand-9">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="experience-area">
                            <div class="d-flex flex-row years-area">
                                <h2 class="p-3 years">3</h2>
                                <h2>
                                    <span>Years</span>
                                    <span>Experience</span>
                                    <span>Working</span>
                                </h2>
                            </div>
                            <div class="d-flex flex-row flex-wrap call-area">

                                <div class="call-now">
                                    <a href="#" class="text-uppercase h5 font-roboto">BRANDS I HAVE WORKED WITH</a>

                                </div>
                            </div>
                            <div class="bg-panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="services-area" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">Services Offers</h1>
                        <p class="para">
                            I'm here to scale up your business performance with my skills. Here is my skills proven to give you a best solution by using my services.
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/s1.png" alt="Services-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">LOGO DESIGN</h5>
                                    <p class="card-text text-secondary">
                                    A good logo designed by it’s own philosphy and shape that involve a business company
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/s2.png" alt="Services-2">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">UI/UX DESIGN</h5>
                                    <p class="card-text text-secondary">
                                        UI/UX is one of the most important in apps because it influence people to use it
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/s3.png" alt="Services-3">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">web design</h5>
                                    <p class="card-text text-secondary">
                                        Scale up your retail business to be a digital by make your own company website
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/s4.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">WEB SECURITY</h5>
                                    <p class="card-text text-secondary">
                                        Protect your own website from hacker by using our web security system. guaranteed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="project-area" id="portfolio">
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Recently Done Project</h1>
                    <h1 class="text-uppercase title-h1">Quality Work</h1>
                </div>

                <div class="button-group">
                    <button type="button" class="active" id="btn1" data-filter="*">All</button>
                    <button type="button" data-filter=".popular">Popular</button>
                    <button type="button" data-filter=".latest">Latest</button>
                    <button type="button" data-filter=".following">Following</button>
                    <button type="button" data-filter=".upcoming">Upcoming</button>
                </div>

                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p1.jpg">
                                    <img src="./img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">MOUNTAIN VECTOR</h4>
                                <span class="text-secondary">Latest, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p2.jpg">
                                    <img src="./img/portfolio/p2.jpg" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">DESK STORE UI</h4>
                                <span class="text-secondary">Popular, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                    <img src="./img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">SWEAT COFFEE</h4>
                                <span class="text-secondary">Popular, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                    <img src="./img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">PODCAST DESIGN</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                    <img src="./img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">HOTELS UI/UX</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                                    <img src="./img/portfolio/p6.jpg" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">TOGA DESIGN</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                                    <img src="./img/portfolio/p7.jpg" alt="portfolio-7" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">DEER STARS</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                    <img src="./img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">C-STOCK UI/UX</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                    <img src="./img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">STUDY STORE</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="about-area" id="testimoni">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="about-title">
                            <h1 class="text-uppercase title-h1">Client Say about me</h1>
                            <p class="para">
                                Build a company to be better by our services is one of our goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container carousel py-lg-5">
                <div class="owl-carousel owl-theme">
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Joko Geter</h4>
                            <p class="para">The best services that i ever got. its clean, detailed and useful for our company to grow up wit the new logo</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Andhika Sutoro</h4>
                            <p class="para">Recommended for you who wants to make a website profile to your company. the UI really good and the UX was user frendly.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t3.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Bong Catar</h4>
                            <p class="para">I'm glad to know you deserve a web security so my website now fredom from hacker.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t4.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Lutfi </h4>
                            <p class="para">Thank you for designed my company logo. the philosophy relate to the company vision. Keep going forward!</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t5.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Deddy Corb</h4>
                            <p class="para">For all company they have to use your web security because its guaranteed safe.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t6.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Farhan Nabil</h4>
                            <p class="para">The UI/UX was out of the box! we are easy tou use all the feaures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="subscribe-us-area">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12 text-center subscribe-title">
                        <h4 class="text-uppercase">Get my proposal on cooperation</h4>
                        <p class="para">Write down your Email and let me help your company scaling up by sending my proposal
                        </p>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center">
                    <form class="w-50">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col input-textbox">
                                <input type="text" id="txtemail" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                                <div class="btn-submit">
                                    <button type="submit" class="btn btn-success float-right">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="card-body">
                    <div >
                        <center><h3>Pengunjung Website</h3></center>
                        
                    </div>
                    <div class>
                        <canvas id="myChartab"></canvas>
                    </div>

                    <script>
                        const data = {
                            labels: [
                            '<10 Tahun',
                            '11-17 Tahun',
                            '18-25 Tahun',
                            '26-35 Tahun',
                            '>35 Tahun'
                            ],
                            datasets: [{
                            label: 'Status',
                            data: [12, 19, 3, 5,3],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(75, 192, 192)',
                                'rgb(255, 205, 86)',
                                'rgb(201, 203, 207)',
                                'rgb(54, 162, 235)',
                            ]
                            }]
                        };

                        const config = {
                            type: 'bar',
                            data: data,
                            options: {}
                        };
                    
                        const myChart = new Chart(
                        document.getElementById('myChartab'),
                        config
                        );
                    </script>
                </div>
                </div>
            </div>
        </div>




    </main>


    <footer class="footer-area" id="contact">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="./img/logo.png" alt="logo"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">get in touch!</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2022|
                        <a href="#"><span style="color: var(--primary-color);">C-Stock</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>


</body>

</html>