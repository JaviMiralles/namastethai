@extends('layouts.app')
@section('content')
<main>
    <div class="page-header-content paddingZero bg-home">
        <div class="container">
            <div class="row align-items-center">
                <div  class="col-lg-6 aos-init aos-animate">
                    <h1 style="margin-top: 3rem;" class="page-header-title">Masaje tailandés</br> Namasté Thai</h1>
                    <p class="page-header-text mb-5">El masaje es una técnica que ayuda a la relajación muscular y mental y alivia el dolor, en definitiva, mejora la salud del que lo recibe. Ofrece la oportunidad de desconectar la mente de todo lo cotidiano, de las preocupaciones que se acumulan durante la jornada.</p>
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
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-toggle="modal" data-target="#portfolioModal1">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title uppercase">Thai tradicional</h4>
                <p class="description">Los principales efectos que genera El Masaje Tradicional Tailandés se producen por la aplicación de las presiones y los estiramientos que activan el flujo sanguíneo y de energía vital de una forma natural.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-toggle="modal" data-target="#portfolioModal2">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title uppercase">Lanna tok sen</h4>
                <p class="description">Terapia vibracional totalmente indolora, placentera y relajante, indicada para aliviar tensiones musculares a nivel profundo, insomnio, lesiones antiguas, etc</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-toggle="modal" data-target="#portfolioModal3">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title uppercase">Reflexología podal</h4>
                <p class="description">La reflexología podal es un tratamiento manual terapéutico que trabaja aplicando presiones y deslizamientos en determinados puntos de los pies para provocar reacciones  de forma refleja, en partes distales del cuerpo</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#portfolioModal4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title uppercase">Masaje Thai con pindas</h4>
                <p class="description">El masaje se aplica utilizando pindas que son unas bolsas de tela , rellena con hierbas y especias. Las pindas se calientan en vapor de agua. Está inspirado en los beneficios de las hierbas naturales  combinados con la estimulación de los puntos energéticos del cuerpo o acupresión.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400" data-toggle="modal" data-target="#portfolioModal5">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title">Thai para embarazadas</h4>
                <p class="description">Tratamientos personalizados para embarazadas y post-parto. Aliviar tensiones en las zonas que más trabajan en el cuerpo de una embarazada.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500" data-toggle="modal" data-target="#portfolioModal6">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-spa"></i></div>
                <h4 class="title">Sala Namasté Thai</h4>
                <p class="description py-5">Av.Sabinar, 355 Roquetas de Mar</p>
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

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="img/masajes/masaje2.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="img/masajes/masaje2.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="img/masajes/masaje3.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="img/masajes/masaje3.webp" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="img/masajes/masaje4.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="img/masajes/masaje4.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="img/masajes/masaje5.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="img/masajes/masaje5.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="img/masajes/masaje6.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="img/masajes/masaje6.webp" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="img/masajes/masaje7.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="img/masajes/masaje7.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="img/masajes/masaje8.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="img/masajes/masaje8.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="img/masajes/masaje9.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="img/masajes/masaje9.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>

              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Services Section ======= -->
      <section id="comment" class=" section-bg">
        <div class="section-title">
          <h2 data-aos="fade-up">Comentarios</h2>
        </div>
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p class="author-comment">Alicia Moreno Pimentel</p>
                <p class="fuente-secundaria">Una experiencia nueva para mi. Ha sido estupenda. Como poner a punto todas las partes de mi cuerpo.  Mediante presiones y estiramientos de miembros y articulaciones te desentumece el cuerpo. La manipulación es agradable pero firme. El resultado es de bienestar general.</p>
              </div>
              <div class="carousel-item">
                <p class="author-comment">Ana Belén Valverde</p>
                <p class="fuente-secundaria">Fue una experiencia muy buena, te deja unos días en un estado de relajación y paz increíble. Oksana no se deja ni una parte del cuerpo sin estirarla, sabe lo que hace es una gran profesional. Yo hace unos años estuve en tailandia y ya los había probado este tipo de masajes,con Oksana fue como volver a tailandia pero entendiendo el idioma y con la tranquilidad de estar con una profesional como ella. Repetiré sin duda.</p>
              </div>
              <div class="carousel-item">
                <p class="author-comment">Mónica Sanz</p>
                <p class="fuente-secundaria">Mi primera experiencia el masaje tailandés y ha sido espectacular! Estoy embarazada y me ha trabajado con mucho cariño y sobre todo profesionalidad! Me he sentido súper cómoda y me ha transmitido mucha confianza y mucha paz. Repetiré seguro!!</p>
              </div>
              <div class="carousel-item">
                <p class="author-comment">Rocio Ortuño Garcia</p>
                <p class="fuente-secundaria">EXPERIENCIA FASCINANTE! 100% Recomendado sufro de dolor de espalda desde hace unos cuantos años, fui por recomendación a Namasté Thai porque no podía mover el hombro y salí de allí como nueva, al día siguiente seguía sin creerlo, no dudéis en visitarla. Excelente profesional, atenta y trato muy personal, da lo que el cuerpo necesita y trabaja todo lo que haga falta y cada parte del cuerpo, sin queja alguna, al contrario ha sido maravilloso, gracias Oksana, volveré y te recomendare!!</p>
              </div>
              <div class="carousel-item">
                <p class="author-comment">Sophia Kovarik</p>
                <p class="fuente-secundaria">Excelente masaje tailandés, quedé muy impresionado y de gran valor. El mejor masaje tailandés fuera de Tailandia. (Original) Excellent Thai massage, I was very impressed and great value. Best Thai massage outside Thailandes.</p>
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
      <section id="contact" class=" section-bg">
        <div class="section-title">
          <h2 data-aos="fade-up">Dónde estamos</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg84 col-md-8 aos-init aos-animate">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51129.93857054965!2d-2.6395814365729717!3d36.77965471779069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7065410d84a2e3%3A0x463b914c53ba931a!2sNamast%C3%A9%20Thai!5e0!3m2!1ses!2ses!4v1612030812278!5m2!1ses!2ses" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-4 col-md-4 aos-init aos-animate p-4">
              <div class="section-title">
                <h2 data-aos="fade-up">Contacta con nosotros</h2>
              </div>
              <p class="">Por teléfono</p>
              <p><a href="tel:686560296">686 560 296</a></p>
              <p class="">Por correo electrónco</p>
              <p class=""><a href="mailto:namastethai.masaje@gmail.com">namastethai.masaje@gmail.com</a></p>
            </div>
          </div>
          {{-- Contenido seccion --}}
        </div>
      </section>




      <!-- ======= End Services Section ======= -->

            <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">Preguntas frecuentes</h2>
            <p data-aos="fade-up">Cosas que debes saber de los masajes thailandeses</p>
          </div>
  
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">¿En qué se diferencia el masaje tailandés de otro tipo de masajes?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>Si comparamos el masaje tailandés con masajes occidentales “clásicos” (como el masaje sueco, el masaje californiano, el quiromasaje… o casi todo lo que conocemos simplemente como “masaje”), hay una serie de diferencias evidentes: el masaje tailandés se realiza en un futón en vez de una camilla, con el receptor totalmente vestido, sin utilizar aceites, y las técnicas principales son estiramientos y presiones.</p>
                  <p>A un nivel un poco menos evidente: la mayoría de masajes que utilizan aceite trabajan los tejidos más superficiales, justo por debajo de la piel. Incluso cuando son “fuertes”, trabajan la musculatura a un nivel bastante superficial.</p>
                  <p>Técnicas de presión y estiramientos típicas del masaje tailandés permiten liberar la tensión de la musculatura más profunda, esa que está debajo de capas y capas de tejido, además de trabajar otros tejidos como las fascias, o incluso las redes del sistema nervioso periférico. Es por esto que a menudo los efectos de un masaje tailandés suelen durar más que los de otro tipo de masajes.</p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">¿Dónde y cómo se realiza el masaje tailandés?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>El masaje tailandés tradicional se realiza sobre un futón (un colchón de algodón de unos 7cm de grosor) en el suelo, y con ropa cómoda, ancha y holgada. El masaje se suele realizar en diferentes posturas: boca abajo, boca arriba, de lado o sentado.</p>
                   <p>Muchos de los movimientos y técnicas utilizados necesitan espacio y que el masajista pueda moverse libremente y con seguridad alrededor del receptor (y esto sólo puede hacerse en el suelo).</p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">¿Y si mi estado de salud no me permite tumbarme en el suelo?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>Trabajar en el suelo siempre es lo preferible. Siempre vamos a buscar la máxima comodidad del receptor, usando mantas y cojines para lograr un mayor apoyo en las diferentes posturas.</p>
                  <p>Tal vez no puedas estar tumbado/a en alguna postura concreta, pero sí en otras (por ejemplo, durante el embarazo, o en caso de alguna lesión). Hay muchas técnicas de masaje tailandés que se hacen con el receptor sentado (eso sí, en el suelo).</p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">¿Por qué con ropa? ¿Qué tipo de ropa necesito?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>Sí, el masaje tailandés terapéutico se lleva a cabo totalmente vestido. Por una parte, porque al no utilizar aceites no es necesario quitarse la ropa. Además, el tipo de presiones y estiramientos del masaje tailandés pueden provocar sensación de irritación o quemazón si se hacen directamente sobre la piel.</p>
                  <p>Por otra parte, la ropa ofrece intimidad al receptor en muchos de los estiramientos y posturas del masaje, que podrían ser incómodos tanto para receptor como para terapeuta de otra manera. La ropa para recibir el masaje se proporciona en el local.</p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">¿Con qué frecuencia debo/puedo darme un masaje tailandés?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>¡Tan a menudo como quieras! Suelo responder, medio en broma, medio en serio, que “cuando te lo pida el cuerpo y te lo permita el bolsillo”. El masaje tailandés es una buena herramienta de salud preventiva, y tiene un montón de beneficios. En Tailandia es común recibir masaje con frecuencia, incluso 2 o más a la semana.</p>
                  <p>Generalmente los efectos del masaje suelen durar alrededor de una semana, así que uno a la semana es una buena frecuencia. Pero puede ser una vez al mes, o mejor: una-vez-cuando-me-da-la-gana. Es mucho más importante que desarrolles tu propia consciencia corporal, sentir y entender cómo está tu cuerpo, y poder decidir acordemente cuándo necesitas un masaje.</p>
                  <p>Siempre es mejor no esperar a que se acumule la tensión hasta el punto de sentir dolor o tener una lesión: un buen mantenimiento y la prevención son más eficaces que intentar solucionar los problemas en el momento de crisis.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">¿Debo informar a mi terapeuta sobre mi estado de salud, medicamentos o alergias?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                  <p>Sí. Incluso si el objetivo de la consulta es solo la relajación, es muy importante que el terapeuta conozca cualquier condición médica relevante, lesiones, operaciones, etc. También, aunque no se vayan a utilizar aceites, es importante que tu terapeuta sepa si tienes alguna alergia.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">¿Cualquier persona puede recibir masaje tailandés?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                  <p>El masaje tradicional tailandés se puede adaptar a cada persona. Sin embargo, para poder disfrutar al máximo del masaje y de sus beneficios, deberías poder estar cómodo/a sentado/a y/o tumbado/a en el suelo.</p> <p>Existen algunas condiciones en las que el masaje estaría contraindicado, o en las que se ha de proceder con cautela, o en las que no se realizan algunas de las técnicas.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">¿Puedo recibir masaje tailandés si estoy embarazada?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                  <p>El masaje tailandés es totalmente seguro en el embarazo siempre que se tengan los conocimientos adecuados. Solo terapeutas con formación especializada en embarazo deberían realizarlo: el masaje se ha de adaptar, utilizando las posturas adecuadas, evitando ciertas técnicas y puntos, y teniendo en cuenta los cambios fisiológicos, estructurales y emocionales de la mujer durante el embarazo.</p>
                  <p>Cuando se trata de un embarazo calificado “de riesgo”, siempre es necesario el consentimiento médico antes de realizar el masaje.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Yo no soy flexible. Nunca he hecho yoga. ¿Hay algún pre-requisito para poder recibir masaje tailandés?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                  <p>El único requisito es respirar y saber no hacer nada. No es necesario ser especialmente flexible, ni tener experiencia en yoga para poder beneficiarte de un masaje tailandés.</p>
                  <p>El masaje se adapta a cada cuerpo, hay infinitas técnicas y posturas, y tanto la presión como el grado de estiramiento depende de cada persona. Podría decirse que son las personas menos flexibles las que seguramente más se pueden beneficiar del masaje tailandés.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">¿En qué casos el masaje tailandés NO estaría recomendado?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                  <p>Hay ciertas condiciones y enfermedades en las que el masaje tailandés está parcial o totalmente contraindicado:</p>
                  <ul>
                    <li>Enfermedades cardiovasculares, patologías del corazón o presión arterial alta (que no esté controlada), venas varicosas: se han de aplicar presiones muy suaves.</li>
                    <li>Osteoporosis: se debe tener especial precaución en los estiramientos, y realizar presiones muy suaves.</li>
                    <li>Historial de luxación articular, especialmente del hombro: se han de evitar las movilizaciones y los estiramientos intensos de la(s) articulación(es) afectada(s).</li>
                    <li>Problemas severos de columna vertebral, hernia discal, lumbalgia aguda, ciática, y cuando ha habido cualquier tipo de cirugía: se han de evitar las extensiones de columna, las rotaciones vertebrales, o aplicarlas con mucha precaución y suavidad. Se ha de prestar especial atención a las posturas y a las transiciones entre éstas.</li>
                    <li>En ciertos tipos de cáncer se considera que los masajes pueden acelerar y empeorar la patología, por considerar que se estimula el sistema linfático y sanguíneo. En caso de cáncer siempre se ha de contar con la autorización médica para realizar el masaje.</li>
                    <li>Se debe evitar la aplicación directa de masajes sobre heridas, fracturas, cicatrices de operaciones recientes, articulaciones inflamadas y áreas con la piel inflamada, quemaduras o con cualquier tipo de infección.</li>
                    <li>El masaje estaría totalmente contraindicado en caso de infección activa, fiebre o extrema debilidad física.</li>
                  </ul>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">¿Qué he de tener en cuenta antes de una sesión de masaje tailandés? ¿Y después del masaje?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                  <p>Se recomienda no comer una hora antes del masaje, al menos. También es recomendable esperar una hora después del masaje antes de comer. Es aconsejable beber agua después del masaje, y algún té o infusión caliente para re-hidratar el cuerpo y ayudar a eliminar las toxinas que se liberan durante el masaje.</p>
                  <p>Asegúrate de tener tiempo después del masaje para descansar, asimilar el trabajo, disfrutar de las sensaciones, y no tener que ir corriendo a trabajar o al gimnasio.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed">¿El masaje tailandés duele?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                  <p>Si has recibido un masaje tailandés en tailandia (o tal vez algún/a amigo/a te lo ha explicado), igual ha sido un poco demasiado intenso para tu gusto, hasta el punto de resultar doloroso y/o desagradable.</p>
                  <p>La intensidad de las presiones y de los estiramientos siempre se pueden adaptar a tus preferencias. Si en cualquier momento sientes que “algo no funciona”, comunícaselo a tu terapeuta.</p>
                  <p>Siéntete libre de pedir la presión que es correcta para ti, ese día en concreto, en esa zona del cuerpo.</p>
                </div>
              </li>
  
            </ul>
          </div>
  
        </div>
      </section><!-- End F.A.Q Section -->
</main>
<!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-2" id="portfolioModal1Label">Masaje Thai Tradicional</h2>
                                  <img class="img-fluid rounded mb-5" src="img/masajes/masaje-tradicional.webp" alt="masaje tradicional" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-2 text-start">Trabaja presionando puntos y líneas de energía utilizando los dedos, manos, brazos o pies, movilizando el cuerpo, estirándolo desde diferentes ángulos y con movimientos armónicos, para conseguir un profundo efecto terapéutico.</p>
                                  <button class="btn bgc-secundary text-white" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw text-white text-white"></i>
                                      Cerrar ventana
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 2-->
      <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-3" id="portfolioModal2Label">Tok Sen</h2>
                                  <img class="img-fluid rounded mb-5" src="img/masajes/tok-sen.webp" alt="masaje tok sen" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-2 text-start">El masaje Lanna Tok Sen es un método terapéutico original del norte de Tailandia, concretamente del reino de Lanna. Tok Sen es una técnica complementaria al masaje tradicional, reconocida y recomendada por el departamento de medicina tradicional y alternativa Tailandés.</p>
                                  <ul>
                                    <li class="text-start">Produce un efecto relajante que ayuda a eliminar el estrés y facilita la relajación física y mental.</li>
                                    <li class="text-start">Estimula la circulación sanguínea y linfática.</li>
                                    <li class="text-start">Potencia el sistema inmunológico y el potencial de sanación del cuerpo.</li>
                                    <li class="text-start">Regula el funcionamiento de los órganos.</li>
                                    <li class="text-start">Equilibra y restituye los niveles de energía.</li>
                                    <li class="text-start">Ayuda a la eliminación de toxinas.</li>
                                  </ul>
                                  <button class="btn bgc-secundary text-white" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw text-white"></i>
                                      Cerrar ventana
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 3-->
      <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Reflexología podal</h2>
                                  <img class="img-fluid rounded mb-5" src="img/masajes/reflexologia-podal.webp" alt="Reflexología podal" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-2 text-start">La reflexología es una terapia con múltiples beneficios.</p>
                                  <ul>
                                    <li class="text-start">Permite relajarse, reduce el estrés.</li>
                                    <li class="text-start">Ayuda a conciliar el sueño.</li>
                                    <li class="text-start">Activa los mecanismos autoinmunes del cuerpo y la eliminación de toxinas.</li>
                                    <li class="text-start">Alivia el dolor producido por determinadas patologías.</li>
                                    <li class="text-start">Regula el funcionamiento de los sistemas fisiológicos.</li>
                                  </ul>
                                  <p>Más allá de la relajación y el equilibrio, la reflexología también ayuda a tener una circulación sanguínea saludable. Se la conoce como una terapia que mejora la salud y la serenidad mental.</p>
                                  <button class="btn bgc-secundary text-white" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw text-white"></i>
                                      Cerrar ventana
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 4-->
      <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Masaje Thai con pindas</h2>
                                  <img class="img-fluid rounded mb-5" src="img/masajes/masaje-pindas.webp" alt="masaje thai con pindas">
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-2">A nivel muscular el calor húmedo de las pindas produce una relajación, es antiespasmódico y hace desaparecer la fatiga, aumenta la flexibilidad, elasticidad y disminuye la tensión.</p>
                                  <p>Es especialmente recomendado para las personas con acortamiento muscular a los que les resultan desagradables o no aconsejables los estiramientos asistidos.</p>
                                  <button class="btn bgc-secundary text-white" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw text-white"></i>
                                      Cerrar ventana
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 5-->
      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Tratamientos personalizados para embarazadas y post-parto</h2>
                                  <!-- Icon Divider-->
                                  
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="img/masajes/masaje-embarazadas.webp" alt="masajes embarazadas" />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-3 text-start">El Masaje Thai para Embarazadas es un tratamiento muy eficaz para disminuir la hinchazón en brazos y piernas, facilitando la circulación sanguínea y estimulando el funcionamiento del sistema linfático. Alivia los dolores lumbares y de espalda, y ayuda a reducir el estrés. No sólo es un tratamiento muy beneficioso a nivel físico, sino también muy reconfortante a nivel energético y emocional.</p>
                                  <p>Recibir un masaje durante el embarazo ayuda a aliviar el dolor y las molestias propias del estado, mejora la energía durante el parto y favorece la salud del bebé.</p>
                                  <button class="btn bgc-secundary text-white" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw text-white"></i>
                                      Cerrar ventana
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 6-->
      <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Sala Namasté Thai</h2>
                                  <img class="img-fluid rounded mb-5" src="img/masajes/sala-masajes-roquetas-de-mar.webp" alt="masajes tailandes en Roquetas de Mar" />
                                  <img class="img-fluid rounded mb-5" src="img/masajes/sala-masaje.webp" alt="masajes tailandes en Almería" />
                                  <button class="btn bgc-secundary text-white" data-dismiss="modal">
                                      <i class="fas fa-times fa-fw text-white"></i>
                                      Cerrar ventana
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection