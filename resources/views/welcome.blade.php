<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>FITHUB</title>
    <link src="{{ asset('/public/img/Favicon.png') }}" alt="Mi Icono" class="icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel-rtl/">
    <script src="https://kit.fontawesome.com/f2d244875c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Nunito:wght@500;700;800&display=swap" rel="stylesheet">
    

    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
      .icon {
  width: 20px;
  height: 20px;
  }

      /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem  /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 60px;
    font-family: 'Nunito', sans-serif;
    color: #2D325B;
  }

  .lead{
    font-size: 25px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
        font-family: 'Nunito', sans-serif;
    color: #2D325B;
  }
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      img{
        max-width: 100%;
      }
      /*CARTILLA*/
      .cards{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card{
            width: 360px;
            margin: 25px;
            padding: 40px 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            transition: all 0.5s ease;
        }

        .title .fa-solid{
            color: black;
            font-size: 60px;
            width:  100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        }

        .title h2{
            color: black;
            font-size: 30px;
            margin-top: 15px;
        }

        .price{
            color: black;
            font-size: 20px;
        }

        .option ul{
            margin-top: 20px;
        }

        .option ul li{
            list-style: none;
            color: black;
        }

        #boton{
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #2D325B;
            border-radius: 40px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
            color: white;
            text-decoration: none;
        }

        .card:hover{
            transform: scale(1.05);
        }
        #titulo {
        font-family: 'Nunito', sans-serif;
        text-align: center;
        color: #2D325B;        
        font-size: 30px;
        margin-top: 15px;
        }
        #mapa-gimnasios {
          padding-top: 60px;
        }
        #qnsomos {
          padding-top: 70px;
        }
        #plan {
          padding-top: 60px;
        }
    </style>


    
    <!-- Custom styles for this template -->
    <link href="../carousel/carousel.rtl.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    
                    <a class="navbar-brand" href="{{ url('/home') }}" >Home</a>
                    @else
                        <a class="navbar-brand" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            
                            <a class="navbar-brand" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">no</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mapa </a>
          </li>


          <li class="nav-item">
            <a class="nav-link ">Plan</a>
          </li>
        </ul>
        <form class="d-flex" role="search">

        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <image href="/img/gim.png"/>  
        </svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>FITHUB</h1>
            <p>Muchos gimnasios a tu disposición</p>
            <p><a class="btn btn-lg btn-light" href="#mapa-gimnasios">Gimnasios</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
      <image href="/img/entreimg.png"/>
        </svg>

        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <p>Encuentra tu plan ideal</p>
            <p><a class="btn btn-lg btn-light" href="#plan">Plan</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <image href="/img/dirimg.png"/>
        </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Vive saluble</h1>
            <p>Aprende a cuidar tu cuerpo</p>
            <p><a class="btn btn-lg btn-light" href="#qnsomos">Nosotros</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">السابق</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">التالي</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    


    <!-- START THE FEATURETTES -->

    <section class="que-es">
      <div class="row featurette">
        <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"> <b>¿Qué es FitHub?</b></h2>
          <p class="lead"> Descubre la revolucionaria plataforma Fithub y accede a una red de gimnasios y centros de fitness con una membresía única. Explora opciones fitness, reserva clases y disfruta de una experiencia completa y conveniente. Únete a la comunidad Fithub y lleva tu entrenamiento al siguiente nivel.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="800" height="800" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
          <image href="/img/quees.png"/>        
        </svg>
        </div>
      </div>
    </section>
    <hr class="featurette-divider">

    <div id="qnsomos">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"><b>¿Quiénes Somos?</b></h2>
        <p class="lead">Nosotros somos una plataforma en línea que conecta a sus miembros con una amplia red de gimnasios y centros de fitness con el objetivo de satisfacer las necesidades de nuestros miembros comprometiéndonos a mejorar su estilo de vida. Con una sola membresía, ofrecemos variedad y comodidad para una experiencia fitness única.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
        <image href="/img/qnsomos.png"/>    
        </svg>
      </div>
    </div>
      </div>
    <hr class="featurette-divider">
    <section id="gimnasios-sec"> 
    <div>    
      <div>
      <h2 style="color: black; font-weight: bold; text-align: center; font-size: 60px;"  >Busca tus gimnasios</h2>
      </div>
      <div class="b-example-divider"></div>
      <div class="row featurette">
        <iframe src="https://my.atlist.com/map/dbad2170-9162-4bf5-9733-b6320dfb291d?share=true" allow="geolocation 'self' https://my.atlist.com" width="100%" height="540px" frameborder="0" scrolling="no" allowfullscreen></iframe>
      </div>
    </div>
        </section>  
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <section id="plan">
  <div id="titulo">
        <h1>Un plan para todos</h1>
      </div>
    <div class="cards">
        <div class="card">
            <div class="title">
                <i class="fa-solid fa-bolt" style="color: #624D4B;"></i>
                <h2>FitPlan</h2>
            </div>
            <div class="price">
                <h4> <sup> $ </sup> 80</h4>
            </div>
            <div class="option">
                <ul>
                    <li><i class="fa-solid fa-check" style="color: #2D325B;"></i> Gimnasios cerca de ti.</li>
                    <li> <i class="fa-solid fa-check" style="color: #2D325B;"></i> Variedad de opciones de entrenamiento.</li>
                    <li><i class="fa-solid fa-check" style="color: #2D325B;"></i> Horarios de tu elección. </li>
                </ul>
            </div>
            <a class="btn" id="boton" onclick="window.location.href='/seleccionarplan'" > Ordena ya</a>
        </div>
    </div>
    </section>

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">عد إلى الأعلى</a></p>
    <p>&copy; 2022–2023 Company, Inc. &middot; <a href="#">FITHUB</a> &middot; <a href="#"> FITHUB</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
