<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Pagina Home -->
    <meta charset="utf-8">
    <title>Vluestone</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    <!-- Favicon -->
    <link href="img/Logo 3 Transparent.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i> Suzano - SP</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+055 11 96193-2284</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>vluestone@technology.com.br</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61569495358644&mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/company/vluestone/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/vluestonetech/"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://wa.link/5dph3r"><i class="fab fa-whatsapp"></i></i></a> 
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/@VlueStone"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">Sobre</a>
                       <!--<div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog</a>
                            <a href="detail.html" class="dropdown-item">Canais</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Portfólio</a>
                        <div class="dropdown-menu m-0">
                            <a href="Landingpages.html" class="dropdown-item">Landing pages</a>
                            <a href="Sitesinstitucionais.html" class="dropdown-item">Sites institucionais</a>
                            <a href="Ecommerce.html" class="dropdown-item">E-commerce</a>
                            <a href="App.html" class="dropdown-item">App</a>
                            <a href="Manutencao.html" class="dropdown-item">Manutenção</a>
                        </div>
                    </div>-->
                    <a href="contact.html" class="nav-item nav-link">Contato</a>
                </div>
               <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php $slide1 = get_field('carrossel');
                    ?>
                    <img class="w-100" src="<?php echo $slide1 ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Solução digital </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Criatividade & Inovação</h1>
                            <a href="contact.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Contate-nos</a>
                            <!--<a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Botão inativo</a>
                        </div>
                    </div>
                </div>
                <! --<div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Solução digital</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Criatividade & Inovação</h1>
                            <a href="contact.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Contate-nos</a>
                            <! --<a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Botão inativo</a>- ->
                        </div>
                    </div>-->
                </div>
            </div>
            <!--<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <!-- Navbar & Carousel End -->

