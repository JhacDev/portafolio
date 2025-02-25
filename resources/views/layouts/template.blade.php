<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Portafolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" /> --}}
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/whatsapp.css">
        <link href="css/template.css" rel="stylesheet" />
        @stack('css')
    </head>
    <body id="page-top">
        <x-navigation-menu/>
        <!-- Masthead-->
        {{-- <header class="masthead bg-primary text-white text-center fondo"> --}}
        <header class="masthead text-white text-center fondo">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/Carnet.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Dev - Jhac</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Desarrollo Apps - Diseñador Web - Desarrollo de Aplicaciones</p>
            </div>
        </header>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary">Portafolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center"> 
                    <!-- Portfolio Item 1-->
                    @yield('content')  
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-secondary text-white mb-0" id="about" style="background-image: url('assets/img/header.png'); background-size: cover; background-position: center;">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white tarjeta">¿QUIEN SOY?</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                    <div class="tarjeta">
                        <div class="row">
                            <div class="col-lg-4 ms-auto"><p class="lead">
                                <strong>
                                    Me dedico al desarrollo web y la creación de aplicaciones web innovadoras , ayudando a empresas y emprendedores a 
                                llevar sus ideas al siguiente nivel mediante soluciones digitales personalizadas. 
                                Desde sitios web modernos y funcionales hasta aplicaciones robustas y escalables, mi objetivo es transformar tus 
                                necesidades en herramientas tecnológicas que impulsen tu negocio.
                                </strong>
                            </p></div>
                            <div class="col-lg-4 me-auto"><p class="lead">
                                <strong>
                                    Con experiencia en el uso de las últimas tecnologías y frameworks, diseño y desarrollo proyectos que no solo se ven bien, 
                                    sino que también ofrecen una experiencia de usuario excepcional. Ya sea que necesites un sitio web responsive para capturar 
                                    nuevos clientes, una aplicación web para optimizar procesos internos o 
                                    una plataforma e-commerce para expandir tu alcance, estoy aquí para guiarte en cada paso del proceso.  
                                </strong>
                            </p></div>
                        </div>
                    </div>
                <!-- About Section Button-->
                {{-- <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                        <i class="fas fa-download me-2"></i>
                        Free Download!
                    </a>
                </div> --}}
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Formulario de Contacto</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Numero de Telefono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- login --}}
        <section class="page-section" id="login">
            {{-- <div class="container"> --}}
                <!-- Contact Section Heading-->
                {{-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Formulario de Contacto</h2> --}}
                <!-- Icon Divider-->
                {{-- <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div> --}}
            {{-- </div> --}}
        </section>
        <!-- Footer-->
        <x-footer></x-footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
<!-- Agregar Bootstrap Icons (si no está incluido en el proyecto) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<a href="https://api.whatsapp.com/send?phone={{ env('WHATSAPP_NUMBER', '51973560162') }}&text={{ urlencode('Hola! Quisiera más información sobre el proyecto.') }}" 
    class="float" 
    target="_blank">
    <i class="bi bi-whatsapp my-float"></i>
</a>

        
        
    </body>
</html>
