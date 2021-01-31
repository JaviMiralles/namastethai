<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Namasté Thai Masaje Tailandés | Roquetas de Mar | Almería</title>
        <title>Namastethai: </title>
        <meta name="description" content="Ofrecemos los mejores masajes tailandeses en Almería para eliminar tensiones, estres y mejorar la calidad de vida" />

        <link type="image/ico" href="{{ asset('../img/icons/favicon.ico')}}" rel="icon" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/css/style.css" rel="stylesheet">

        {{-- Styles --}}
        <link  rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        {{-- Scripts --}}
        <script async src="{{asset('js/app.js')}}"></script>


        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Organization",
                        "@id": "https://www.namastethai.com//#/schema/organization/namastethai",
                        "name": "namastethai",
                        "url": "https://www.namastethai.com/",
                        "sameAs": ["https://www.facebook.com/namastethai", "https://www.instagram.com/namaste_thai/"],
                        "logo": {
                            "@type": "ImageObject",
                            "@id": "",
                            "url": "",
                            "width": 880,
                            "height": 660,
                            "caption": "namastethai"
                        },
                        "image": {
                            "@id": "https://www.namastethai.com//#/schema/image/namastethai",
                            "inLanguage": "es-ES",
                            "url": "https://mk0apinamastethaiv1r5n.kinstacdn.com/app/uploads/2015/06/namastethai.png",
                            "width": 880,
                            "height": 660,
                            "caption": "namastethai"
                        }
                    },
                    {
                        "@type": "WebSite",
                        "@id": "https://www.namastethai.com//#/schema/website/namastethai",
                        "url": "https://www.namastethai.com/",
                        "name": "namastethai",
                        "potentialAction": { "@type": "SearchAction", "target": "https://www.namastethai.com//?s={search_term_string}", "query-input": "required name=search_term_string" },
                        "publisher": { "@id": "https://www.namastethai.com//#/schema/organization/namastethai" }
                    },
                    {
                        "@type": "WebPage",
                        "@id": "https://www.namastethai.com/",
                        "url": "https://www.namastethai.com/",
                        "inLanguage": "es-ES",
                        "name": "namastethai",
                        "dateModified": "2020-02-03T21:54:07+00:00",
                        "description": "Ofrecemos los mejores masajes tailandeses en Almería para eliminar tensiones, estres y mejorar la calidad de vida",
                        "isPartOf": { "@id": "https://www.namastethai.com//#/schema/website/namastethai" },
                        "about": { "@id": "https://www.namastethai.com//#/schema/organization/namastethai" }
                    },
                    null
                ]
            }
        </script>

    </head>
    <body>
<!--Main Navigation-->
{{-- <section id="topbar" class="d-none d-lg-block" style="">
    <div class="container d-flex justify-content-between">
        <div class="contact-info">
        <ul>
            <li><i class="icofont-envelope"></i><a href="mailto:namastethai.masaje@gmail.com">namastethai.masaje@gmail.com</a></li>
            <li><i class="icofont-phone"></i>686 560 296</li>
        </ul>

        </div>
    </div>
</section> --}}
<div id="header-sticky-wrapper" class="sticky-wrapper" style="height: 70px;">
    <header id="header" style="" class="">
        <div class="container d-flex justify-content-between">
    
          <div class="logo">
              <img style="margin-right: 15px;" src="{{ asset('../img/icons/favicon.ico')}}" alt="masaje tailandes roquetas de mar">
            <h1 class="text-light"><a href="{{route('index')}}"><span>Namasté Thai</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
    
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="#services">Nuestros servicios</a></li>
              <li><a href="#imagenes">Imágenes</a></li>
              <li><a href="#comment">Comentarios</a></li>
              <li><a href="#faq">Preguntas frecuentes</a></li>
              <li><button class="btn btn-primary m-3"><a class="call-to-action" href="#contact">Contacto</a></button></li>
            </ul>
          </nav><!-- .nav-menu -->
    
        </div>
    </header>
</div>

        @yield('content')

        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Donde estamos</h4>
                        <p class="lead mb-0">
                            Av.Sabinar, 355 
                            <br />
                            Roquetas de Mar, Almería
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Nuestras Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/MasajeTailandesRoquetasUrba"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/namaste_thai/"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Especialista en masaje thailandés</h4>
                        <p class="lead mb-0">
                            Te Ayudamos a que te sientas bien
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
            

        </footer>
    </body>
</html>
