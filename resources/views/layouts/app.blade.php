<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Namasté Thai Masaje Tailandés | Roquetas de Mar | Almería</title>
        <title>Namastethai: </title>
        <meta name="description" content="Ofrecemsos los mejores masajes tailandés en Almería para eliminar tensiones, estres y mejorar la calidad de vida" />

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
                        "sameAs": ["https://www.facebook.com/namastethai", "https://www.youtube.com/user/namastethai/", "https://twitter.com/namastethai/"],
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
                        "description": "Ofrecemsos los mejores masajes tailandés en Almería para eliminar tensiones, estres y mejorar la calidad de vida",
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
            <h1 class="text-light"><a href="index.html"><span>Namasté Thai</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
    
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Inicio</a></li>
              <li class=""><a href="#about">Servicios</a></li>
              <li><a href="#services">Historia</a></li>
              <li><a href="#imagenes">Imágenes</a></li>
              <li><button class="btn btn-primary m-3">Contacta ahora</button></li>
            </ul>
          </nav><!-- .nav-menu -->
    
        </div>
    </header>
</div>

        @yield('content')

        <footer class="bgc-primary">
            <div class="container ">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Donde estamos</h4>
                        <p class="lead mb-0">
                            Av.Sabinar, 355 
                            <br>
                            Roquetas de Mar, Almería
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Nuestras Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><svg class="svg-inline--fa fa-facebook-f fa-w-10 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg><!-- <i class="fab fa-fw fa-facebook-f"></i> --></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-fw fa-twitter"></i> --></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg><!-- <i class="fab fa-fw fa-linkedin-in"></i> --></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><svg class="svg-inline--fa fa-dribbble fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="dribbble" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg><!-- <i class="fab fa-fw fa-dribbble"></i> --></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Especalista en masajes thailandés</h4>
                        <p class="lead mb-0">
                            Ayudamos a que te sientas bien
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
