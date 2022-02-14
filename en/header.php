<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Türkiye'de Sağlıkta Çözüm Ortağınız. Tedaviniz Boyunca Güvenli Ellerdesiniz.">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Heal Me Tour</title>
    <!-- Stylesheets -->
    <link href="vendor/slick/slick.css" rel="stylesheet">
    <link href="vendor/animate/animate.min.css" rel="stylesheet">
    <link href="vendor/twentytwenty/twentytwenty.css" rel="stylesheet">
    <link href="icons/style.css" rel="stylesheet">
    <link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/style-color-5.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>
<style>
    #loader {
        position: fixed;
        width: 100%;
        height: 100vh;
        background: white url('images/healmelogo.gif') no-repeat center;
        z-index: 999;
    }
</style>
<div id="loader"></div>

<script type="text/javascript">
    var loader;

    function loadNow(opacity) {
        if (opacity <= 0) {
            displayContent();
        } else {
            loader.style.opacity = opacity;
            window.setTimeout(function() {
                loadNow(opacity - 0.05);
            }, 80);
        }
    }

    function displayContent() {
        loader.style.display = 'none';
        document.getElementById('content').style.display = 'block';
    }

    document.addEventListener("DOMContentLoaded", function() {
        loader = document.getElementById('loader');
        loadNow(1.4);
    });
</script>


<body class="shop-page">
    <!--header-->
    <header class="header">
        <div class="header-quickLinks js-header-quickLinks d-lg-none">
            <div class="quickLinks-top js-quickLinks-top"></div>
            <div class="js-quickLinks-wrap-m">
            </div>
        </div>
        <div class="header-topline d-none d-lg-flex">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto d-flex align-items-center">
                        <div class="header-phone"><i class="icon-telephone"></i><a href="tel:02423260027">+90 242 326 00 27</a></div>
                        <div class="header-info"><i class="icon-placeholder2"></i>Kızılarık Mah.2754 Sok. No:1 İç Kapı No:212 Muratpaşa-Antalya</div>
                        <div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@healmetour.com">info@healmetour.com</a></div>
                    </div>
                    <div class="col-auto ml-auto d-flex align-items-center">
                        <span class="header-social">
                            <a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
                            <a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
                            <a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="row align-items-lg-center">
                    <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                        <a href="index" class="header-logo"><img src="images/heal-me-tour-logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-lg ml-auto header-nav-wrap">
                        <div class="header-nav js-header-nav">
                            <nav class="navbar navbar-expand-lg btco-hover-menu">
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="about-us">About Us</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="hospitals">Hospitals</a>

                                                </li>
                                                
                                                <!-- <li>
                                                    <a class="dropdown-item" href="neden-healme-tour">Neden Heal Me Tour ?</a>

                                                </li> -->
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="treatments" class="nav-link dropdown-toggle" data-toggle="dropdown">Treatments</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="oncology">Oncology</a>
                                                    
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="transplantation">Transplantation</a>
                                                    
                                                </li>
                                                <li><a class="dropdown-item" href="general-surgery">General Surgery</a></li>
                                                <li><a class="dropdown-item" href="urology">Urology</a></li>
                                                <li><a class="dropdown-item" href="brain-and-nerve-surgery">Brain and Nerve Surgery</a></li>
                                                <li><a class="dropdown-item" href="cardiovascular-surgery">Cardiovascular Surgery</a></li>
                                                <li><a class="dropdown-item" href="#">Gynecology</a></li>
                                                <li><a class="dropdown-item" href="#">See</a></li>
                                                <li><a class="dropdown-item" href="#">Ear Nose Throat</a></li>
                                                <li><a class="dropdown-item" href="#">Orthopedics and Traumatology</a></li>
                                                <li><a class="dropdown-item" href="physical-therapy-and-rehabilitation">Physical Therapy and Rehabilitation</a></li>
                                                <li><a class="dropdown-item" href="#">Neurology</a></li>
                                                <li><a class="dropdown-item" href="#">Cardiology</a></li>
                                                <li><a class="dropdown-item" href="gastro-enterology">Gastro-Enterology</a></li>
                                                <li><a class="dropdown-item" href="#">Check-Up</a></li>
                                                <li><a class="dropdown-item" href="stem-cell-therapy">Stem Cell Therapy</a></li>
                                                <li><a class="dropdown-item" href="genetic-disases">Genetic Diseases</a></li>
                                                <li><a class="dropdown-item" href="#">Plastic surgery</a></li>
                                                <li><a class="dropdown-item" href="#">Hair Transplant</a></li>
                                                <li><a class="dropdown-item" href="#">Tooth</a></li>
                                                <li><a class="dropdown-item" href="thermal-spa">Thermal Spa</a></li>
                                                <li><a class="dropdown-item" href="#">Elderly Care</a></li>
                                                <li><a class="dropdown-item" href="sports-medicine">Sports Medicine</a></li>

                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Health TourIsm</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="how-we-do">How We Do ?</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="cities">Cities</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="sss">Sıkça Sorulan Sorular</a>
                                        </li> -->

                                        <li class="nav-item">
                                            <a class="nav-link" href="testimonials">TESTIMONIALS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gallery">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact-us">Contact Us</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- <div class="header-search">
                            <form action="#" class="form-inline">
                                <i class="icon-search"></i>
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div> -->
                        <!-- <div class="header-cart cart-toggler">
                            <a href="#" class="icon icon-cart"></a>
                            <span class="badge">2</span>
                            <div class="header-cart-dropdown">
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="shop-product.html"><img src="images/product/prd-sm-1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="shop-product.html">Active Wow Teeth Whitening Charcoal Powder</a></h3>
                                        <div class="price">$38.88</div>
                                    </div>
                                    <div class="prd-sm-delete"><i class="icon-close"></i></div>
                                </div>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="shop-product.html"><img src="images/product/prd-sm-2.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="shop-product.html">Electric Toothbrush</a></h3>
                                        <div class="price">$39.97</div>
                                    </div>
                                    <div class="prd-sm-delete"><i class="icon-close"></i></div>
                                </div>
                                <div class="header-cart-total">
                                    <div class="float-left">Total:</div>
                                    <div class="float-right">$78.85</div>
                                </div>
                                <a href="#" class="btn btn-sm btn-hover-fill"><span>CheckOut</span></a>
                            </div>
                        </div> -->
                        <div class="header-lang lang-toggler">
                            <a href="#" class="icon icon-globe1"></a>
                            <div class="header-lang-dropdown">
                                <ul>
                                    <li><a href="../index"><span class="header-lang-flag"><img src="images/flag/flag_tr.png" alt=""></span><span>Turkish</span></a></li>
                                    <li><a href="../ru/index"><span class="header-lang-flag"><img src="images/flag/flag_ru.png" alt=""></span><span>Russian</span></a></li>
                                    <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_de.png" alt=""></span><span>German</span></a></li>
                                    <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_fr.png" alt=""></span><span>French</span></a></li>
                                    <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_nl.png" alt=""></span><span>Dutch</span></a></li>
                                    <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_sa.png" alt=""></span><span>Arabic</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>