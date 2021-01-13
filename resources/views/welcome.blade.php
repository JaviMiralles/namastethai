@extends('layouts.app')
@section('content')
<main>
    <div class="page-header-content paddingZero bg-home">
        <div class="container">
            <div class="row align-items-center">
                <div  class="col-lg-6 aos-init aos-animate">
                    <h1 style="margin-top: 3rem;" class="page-header-title">Masaje thailandés</br> Namasté Thai</h1>
                    <p class="page-header-text mb-5">El masaje es una técnica que ayuda a la relajación muscular y mental, alivia el dolor e induce el sueño, en definitiva, mejora la salud del que lo recibe. Ofrece la oportunidad de desconectar la mente de todo lo cotidiano, de las preocupaciones que se acumulan durante la jornada.</p>
                </div>
                <div class="col-lg-6 ">
                    <img src="{{asset('../img/namaste-thai-01.webp')}}" class="img-fluid">
                </div>
                </div>
            </div>
    </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Nuestros servicios</h2>
            <p>Los efectos de esta técnica se producen por la aplicación de las presiones y los estiramientos que activan el flujo sanguíneo y de energía vital de una forma natural. Las presiones estáticas y rítmicas comprimen el tejido blando, mientras que los estiramientos producen una flexibilidad máxima del mismo y estimulan la vasta red de terminaciones nerviosas que se encuentran en la zona que se trabaja.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title"><a href="">Thai tradicional</a></h4>
                <p class="description">Los principales efectos que genera El Masaje Tradicional Thailandés se producen por la aplicación de las presiones y los estiramientos que activan el flujo sanguíneo y de energía vital de una forma natural.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title"><a href="">Tok Sen</a></h4>
                <p class="description">Terapia vibracional totalmente indolora, placentera y relajante, indicada para aliviar tensiones musculares a nivel profundo, insomnio, lesiones antiguas, etc</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title"><a href="">Reflexología podal</a></h4>
                <p class="description">La reflexología podal es un tratamiento manual terapéutico que trabaja aplicando presiones y deslizamientos en determinados puntos de los pies para provocar reacciones  de forma refleja, en partes distales del cuerpo</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title"><a href="">Masaje Thai  con pindas</a></h4>
                <p class="description">El masaje se aplica utilizando pindas que son unas bolsas de tela , rellena con hierbas y especias. Las pindas se calientan en vapor de agua. Está inspirado en los beneficios de las hierbas naturales  combinados con la estimulación de los puntos energéticos del cuerpo o acupresión.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title"><a href="">Thai para embarazadas</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title"><a href="">Sala Namasté Thai</a></h4>
                <p class="description">Av.Sabinar, 355 Roquetas de Mar</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="imagenes" class="portfolio">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">Imágenes</h2>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Masajes</li>
                <li data-filter=".filter-card">Terápias</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="img/masajes/masaje1.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Masajes</h4>
                <p>App</p>
                <a href="img/masajes/masaje1.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Masajes"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="img/masajes/masaje2.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="img/masajes/masaje2.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="img/masajes/masaje3.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="img/masajes/masaje3.webp" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="img/masajes/masaje4.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="img/masajes/masaje4.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="img/masajes/masaje5.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="img/masajes/masaje5.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="img/masajes/masaje6.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="img/masajes/masaje6.webp" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="img/masajes/masaje7.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="img/masajes/masaje7.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="img/masajes/masaje8.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="img/masajes/masaje8.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="img/masajes/masaje9.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="img/masajes/masaje9.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Services Section ======= -->
      <section id="coment" class=" section-bg">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                hola
              </div>
              <div class="carousel-item">
                que tal
              </div>
              <div class="carousel-item">
                adios
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



        </div>
      </section>




      <!-- ======= End Services Section ======= -->

            <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">F.A.Q</h2>
            <p data-aos="fade-up">Cosas que debes saber de los masajes thailandes</p>
          </div>
  
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">¿Que es el masaje tailandés?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    Respuesta mensaje thailandes
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Origen del Masaje Tailandés <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>
  
            </ul>
          </div>
  
        </div>
      </section><!-- End F.A.Q Section -->
</main>
@endsection