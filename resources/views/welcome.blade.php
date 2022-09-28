<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Salsangrita</title>
        <link rel="icon" type="image/x-icon" href="img/LogoS.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
      <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> --}}
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

             <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <img class="" style="width: 200px;" src="img/LogoS.png" alt="Image">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="#inicio" class="nav-item nav-link active">Inicio</a>
                    <a href="#nosotros" class="nav-item nav-link">Nosotros</a>
                    <a href="#producto" class="nav-item nav-link">Producto</a>
                    <a href="#recetas" class="nav-item nav-link">Recetas</a>
                    <a href="#contacto" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="inicio" class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">LA QUE SE LLEVA BIEN</h2>
                        <h1 class="display-1 text-white m-0">SALSANGRITA</h1>
                        <h2 class="text-white m-0">* DESDE 1975 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">LA QUE SE LLEVA BIEN</h2>
                        <h1 class="display-1 text-white m-0">SALSANGRITA</h1>
                        <h2 class="text-white m-0">* DESDE 1975 *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div id="nosotros" class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Acerca de nosotros</h4>
                <h1 class="display-4">Al Servicio desde 1975</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Mision</h1>
                    <p>Elaborar y comercializar “Salsangrita” con estrictos estándares de calidad sin perder el concepto tradicional y el sabor inigualable en cada paso de su proceso, generando un sentido de pertenencia hacia la marca gracias a los componentes físicos, visuales, de estatus y originalidad de nuestro producto al momento de ser consumido.</p>
                    {{-- <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a> --}}
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Vision</h1>
                    <p>Ser una marca totalmente reconocida a nivel nacional y posicionarnos en el mercado extranjero como una Sangrita única por sus características. El posicionamiento lo lograremos en base a los componentes físicos, visuales, de estatus y originalidad de nuestro producto que serán fijados en la mente del cliente cautivo y por consecuencia el incremento gradual de estos.</p>
                    {{-- <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</h5> --}}
                    {{-- <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div id="producto" class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestro Producto</h4>
                <h1 class="display-4">Ficha Tecnica</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            {{-- <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt=""> --}}
                            <i class="fas fa-home service-icon"></i>
                        </div>
                        <div class="col-sm-7">
                            <h4>Origen</h4>
                            <p class="m-0">Salsangrita es una sangrita originaria de Aguascalientes creada por el Sr. Arturo González.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            {{-- <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt=""> --}}
                            <i class="fas fa-building service-icon"></i>
                        </div>
                        <div class="col-sm-7">
                            <h4>Empresa que lo produce</h4>
                            <p class="m-0">Salsangrita es producida por la empresa del mismo nombre "SALSANGRITA"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            {{-- <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt=""> --}}
                            <i class="fas fa-temperature-low service-icon"></i>
                        </div>
                        <div class="col-sm-7">
                            <h4>Temperatura de Conservación</h4>
                            <p class="m-0">Bajo la sombra en clima fresco, una vez abierta tiene que meterse a refrigeración y el tiempo de vida se extiende a 12 meses</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            {{-- <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt=""> --}}
                            <i class="fas fa-wine-bottle service-icon"></i>
                        </div>
                        <div class="col-sm-7">
                            <h4>Contenido</h4>
                            <p class="m-0">Contenido en la Botella por mililitros/onzas: 1,000 ml.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            {{-- <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt=""> --}}
                            <i class="fas fa-box-open service-icon"></i>
                        </div>
                        <div class="col-sm-7">
                            <h4>Empaquetado</h4>
                            <p class="m-0">La caja contiene 12 botellas con un peso aproximado de 20 kg por caja dando asi unas dimensiones de alto 31, largo 36.5 y ancho27.5</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            {{-- <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt=""> --}}
                            <i class="fas fa-photo-video service-icon"></i>
                        </div>
                        <div class="col-sm-7">
                            <h4>Video de referencia</h4>
                            <p class="m-0"><a href="https://www.youtube.com/watch?v=LjpVLymQcEk">https://www.youtube.com/watch?v=LjpVLymQcEk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    {{-- <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">50% OFF</h1>
            <h1 class="text-white mb-3">Sunday Special Offer</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday from 1st Jan to 30th Jan 2045</h4>
            <form class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    <!-- Offer End -->


    <!-- Menu Start -->
    <div id="recetas" class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Recetas</h4>
                <h1 class="display-4">Rapidas y faciles</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Bebidas</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.png" alt="">
                            {{-- <h5 class="menu-price">$5</h5> --}}
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Michelada</h4>
                            <p class="m-0">En un vaso escarchado con sal, agrega hielo en cubos, el jugo de un limón 1/2 vaso de salsangrita y completa con tu cerveza favorita.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-2.png" alt="">
                            {{-- <h5 class="menu-price">$7</h5> --}}
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Tequila Bandera</h4>
                            <p class="m-0">El tradicional por excelencia: un caballito de jugo de limón, un caballito de tequila de tu preferencia y un caballito de salsangrita.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-3.png" alt="">
                            {{-- <h5 class="menu-price">$9</h5> --}}
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Vampiro</h4>
                            <p class="m-0">En un vaso escarchado con chile en polvo, agrega hielo en cubos, el jugo de 1 limón, 1/3 del vaso con tequila de tu preferencía, 1/3 de salsangrita y complementa con refresco de toronja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Comidas</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-4.png" alt="">
                            {{-- <h5 class="menu-price">$5</h5> --}}
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Carnes y mariscos</h4>
                            <p class="m-0">Coloca en un bol de vidrio la carne y por cada kilo de carne media taza de salsangrita y deja reposar por 2 horas para despues asar. En otro bol añade los mariscos, chile serrano, pepino, cilantro, cebolla y aguacate por ultimo baña los mariscos en salsangrita y a disfrutar. </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-6.png" alt="">
                            {{-- <h5 class="menu-price">$7</h5> --}}
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Botanas</h4>
                            <p class="m-0">Baña con salsangrita tus botanas favoritas, ya sean cacahuates, papas, habas... ¡Todas están deliciosas con salsangrita!.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-5.png" alt="">
                            {{-- <h5 class="menu-price">$9</h5> --}}
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Frutas</h4>
                            <p class="m-0">Corta en gajitos la fruta o verdura de tu preferencia y baña con salsangrita al gusto. TIP: Haz unas sencillas y bonitas brochetas de mango, manzana y piña para acompañar con salsangrita ¡No te arrepentiras!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div id="contacto" class="container-fluid my-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                {{-- <h1 class="display-3 text-primary">30% OFF</h1> --}}
                                <h1 class="text-white">Ubicación</h1>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118472.47150669509!2d-102.36151233556629!3d21.88587916625986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ec143ae4d9fb%3A0x4016978679c5220!2sAguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1664398053619!5m2!1ses-419!2smx" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Contáctanos</h1>
                            <form method="POST" class="mb-5" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}    
                            <div class="form-group">
                                    <input type="text" name="name" class="form-control bg-transparent border-primary p-4" placeholder="Nombre" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control bg-transparent border-primary p-4" placeholder="Email" value="{{ old('email') }}" required>
                                    <!-- {{-- <input type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email" required="required" /> --}} -->
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" name="phone" class="form-control bg-transparent border-primary p-4" placeholder="Teléfono" value="{{ old('phone') }}" required>
                                        <!-- {{-- <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/> --}} -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <textarea name="message" placeholder="Mensaje" rows="3" class="form-control bg-transparent border-primary p-4" value="{{ old('message') }}" required></textarea>
                                        <!-- {{-- <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/> --}} -->
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                        <option selected>Person</option>
                                        <option value="1">Person 1</option>
                                        <option value="2">Person 2</option>
                                        <option value="3">Person 3</option>
                                        <option value="3">Person 4</option>
                                    </select>
                                </div> --}}
                                
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                <h1 class="display-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-4.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Extranjero</h4>
                <p><i class="fas fa-user mr-2"></i>Miguel Mora Rodríguez</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+52 81 8022 5201</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>mmorar@salsangrita.com</p>
                <hr style="border-color: beige">
                <p><i class="fas fa-user mr-2"></i>Miguel Mora Hernández</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+52 81 1738 0237</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>mmorah@salsangrita.com</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">méxico</h4>
                <p><i class="fas fa-user mr-2"></i>Martha Lucia Chaires Calderón</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+52 444 800 7787</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>mchaires@salsangrita.com</p>
                <hr style="border-color: beige">
                <p><i class="fas fa-user mr-2"></i>Gerardo Mora Hernández</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+52 444 419 7990</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>gmora@salsangrita.com</p>
            </div>
           
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Siguenos</h4>
                {{-- <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p> --}}
                <div class="d-flex justify-content-start">
                    <a target="_blank" class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.youtube.com/channel/UCv0L2urXemKRQJfYjIClcqA"><i class="fab fa-youtube"></i></a>
                    <a target="_blank" class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://es-la.facebook.com/people/SALSANGRITA/100039105506264/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/salsangrita.bajio/?hl=es"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">salsangrita</a>. Todos los derechos reservados.</a></p>
            <p class="m-0 text-white">Creado por <a class="font-weight-bold" href="https://htmlcodex.com">Evoluciona</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

        </div>
    </body>
</html>
