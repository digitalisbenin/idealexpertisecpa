<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>idealexpertisecpa/Qui sommes-nous</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body class="about-page">

  <header id="header" class="header sticky-top">

    {{--  <div style="background-color: #318ce7; color: white;" class="topbar  d-flex align-items-center light-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i style="color: white;"  class="bi bi-envelope d-flex align-items-center"><a  style="color: white; text-decoration: none;" href="#">info@idealexpertisecpa.com</a></i>
          <i style="color: white;" class="bi bi-phone d-flex align-items-center ms-4"><span style="color: white;"  >(+229) 01 52 00 64 37 / (+229) 01 97 98 02 36</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a style="color: white;" href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a style="color: white;" href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a style="color: white;"  href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a style="color: white;" href="https://www.linkedin.com/in/djimessa-modeste-dansou-47624316/details/experience/?_l=en_US" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>  --}}
    <!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
          <a href="/" class="logo d-flex align-items-center">

            <img src="assets/img/hero-carousel/logoideal.jpeg" alt=" logo" height="80px">
            {{--  <h1 class="sitename">Idealexpertisecpa</h1>  --}}
          </a>

          <nav id="navmenu" class="navmenu">
            <ul class="montserrat fw-bold" style="font-size: 2px;" >
              <li><a href="{{ url('/') }}" class="montserrat fw-bold {{ Request::is('/') ? 'active' : '' }}" style="font-size: 18px;" >Accueil</a></li>
          
              <li class="dropdown">
                  <a href="#" class="montserrat fw-bold {{ Request::is('propos') || Request::is('clients') || Request::is('galerie') || Request::is('carriere') ? 'active' : '' }}" style="font-size: 18px;">
                      <span>A propos</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                  </a>
                  <ul>
                      <li><a href="{{ url('/propos') }}" class="{{ Request::is('propos') ? 'active' : '' }}">QUI SOMMES-NOUS</a></li>
                      <li><a href="{{ url('/clients') }}" class="{{ Request::is('clients') ? 'active' : '' }}">NOS CLIENTS</a></li>
                      <li><a href="{{ url('/galerie') }}" class="{{ Request::is('galerie') ? 'active' : '' }}">GALERIE</a></li>
                      <li><a href="{{ url('/carriere') }}" class="{{ Request::is('carriere') ? 'active' : '' }}">CARRIERE</a></li>
                  </ul>
              </li>
          
              <li><a href="{{ url('/service') }}" class="montserrat fw-bold {{ Request::is('service') ? 'active' : '' }}"style="font-size: 18px;" >Nos Services</a></li>
              <li><a href="{{ url('/formation') }}" class="montserrat fw-bold text-danger {{ Request::is('formation') ? 'active' : '' }} " style="font-size: 18px;" >Formations</a></li>
              <li><a href="{{ url('/contact') }}" class="montserrat fw-bold {{ Request::is('contact') ? 'active' : '' }}" style="font-size: 18px;">Contacts</a></li>
          
              @auth
              <li class="dropdown">
                <a href="#" class="montserrat fw-bold {{ Request::is('tableau') || Request::is('user-resultes') || Request::is('mes-cours') ? 'active' : '' }} "style="font-size: 18px;" >
                    <span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                </a>
                <ul>
                    @if(Auth::check() && Auth::user()->role_id == 1)
                    <li><a href="{{ url('tableau') }}" class="{{ Request::is('tableau') ? 'active' : '' }}">TABLEAU DE BORD</a></li>
                    @endif
                    <li><a href="{{ url('user-resultes#resultats') }}" class="{{ Request::is('user-resultes') ? 'active' : '' }}">MES RESULTATS</a></li>
                    <li><a href="{{ url('/mes-cours') }}" class="{{ Request::is('mes-cours') ? 'active' : '' }}">MES FORMATIONS</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">DECONNEXION</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </li>
                  <li>
                      <a href="{{ url('cart') }}" class="montserrat fw-bold {{ Request::is('cart') ? 'active' : '' }}" style="font-size: 18px;">
                          Panier <span class="badge badge-pill bg-success cart-count">0</span>
                      </a>
                  </li>
              @else
                  <li><a href="{{ url('/login') }}" class="montserrat fw-bold {{ Request::is('login') ? 'active' : '' }}" style="font-size: 18px;" >Connexion</a></li>
              @endauth
          </ul>
            
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

        </div>

      </div>


  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Qui sommes-nous</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Accueil</a></li>
            <li class="current">Qui sommes-nous</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section" style="text-align: justify; font-family: 'Montserrat', sans-serif;">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">


            <p class="mt-4 " style="text-align: justify;">Implanté dans la capitale économique du Bénin, le cabinet ‘’Ideal Expertise CPA’’ est un cabinet
                 d’expertise-comptable pluridisciplinaire, dont la vocation est d’accompagner un grand nombre de sociétés dans
                  les domaines de laabilité, du conseil, et de l’audit. Inscrit à l’Ordre des Experts – Comptables (l’OECCA – Bénin),
                   le cabinet, à travers une large gamme de services qu’il propose, assiste ses clients dans la mise en place d’outils
                    de pilotage utiles à une bonne gestion de leur organisation.</p>
                    <br>
                    <br>

            <p style="text-align: justify;" >“ Nous sommes avant tout
                des professionnels ” Les diverses prestations proposées parnotre cabinet sont effectuées dans le respect des règles déontologiques qui régissent la profession des experts – comptables. Toujours à la pointe de l’actualité, le cabinet ‘’Ideal Expertise CPA’’ vous accompagne dans tous vos projets.

                Le cabinet ‘’Idéal Expertise CPA’’ est avant tout une équipe de comptables professionnels, dynamique, réactive, de taille humaine et proche de ses clients.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              {{--  <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>  --}}

              <div class="position-relative mt-4">
                <img src="assets/img/dg2.jpeg" class="img-fluid rounded-4" alt="">

              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <section id="testimonials" class="testimonials section" >

        <div class="container" style="text-align: justify; font-family: 'Montserrat', sans-serif;">

          <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="testimonial-item">

                <h2>Notre force</h2>

                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span style="text-align: justify;">Plus de 20 ans d’expériences au service de différents secteurs d’activités. M. DANSOU D. Modeste est diplômé de grandes écoles en France et au Canada. Il cumule plusieurs années d’expériences professionnelles riches et variées. Il a une connaissance complète de la structure des organisations et a une grande habileté pour la mise en place de situation profitable pour l’entreprise.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="testimonial-item">

                <h2>Nos valeurs</h2>


                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span style="text-align: justify;" >‘’ Ideal Expertise CPA’’ agit en tant que Partenaire-Conseil de votre entreprise. Nos compétences associées à la proximité avec les dirigeants nous permettent d’effectuer une grande diversité de missions dans de nombreux secteurs d’intervention. Notre cabinet vous accompagne dans toutes les opérations liées à la vie de l’entreprise. Le cabinet ‘’Idéal Expertise CPA’’ apporte une particulière attention au respect des valeurs qui régissent la profession d’expert-comptable et de commissaires aux comptes: qualité, proximité et réactivité.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="testimonial-item">

                <h2>Notre démarche</h2>


                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span style="text-align: justify;"> Notre ambition de comprendre vos besoins et à trouver une solution adéquate à chaque demande. Pour cela, avant toute mission, nous vous proposons une rencontre afin de nous faire part de vos attentes. Parce que nous savons que votre démarche constitue un investissement pour votre entreprise, nous étudierons au mieux votre demande afin de s’adapter à vos besoins, mais également à votre budget.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="testimonial-item">

                <h2>Nos atouts</h2>


                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><br>
                    ☞ un travail de qualité
                    effectué par des collaborateurs
                    expérimentés,<br>
                    ☞ une forte disponibilité de
                    l’ensemble de nos collaborateurs
                    tout au long de l’année,<br>
                    ☞ un partenariat avec
                    d’autres professionnels:

                    avocats,informaticiens, ingénieurs,
                    fiscalistes etc.. issus de divers
                    secteurs qui permette de bénéficier
                    de tarifs préférentiels sur certaines
                    prestations,<br>
                    ☞ des forfaits adaptés aux
                    besoins de chaque client,<br>
                    ☞ la transparence sur nos tarifs. </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->




          </div>

        </div>

      </section><!-- /Testimonials Section -->



  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">A PROPOS DE NOUS</span>
            </a>
            <div class="footer-contact pt-3">
              <p>est un cabinet d’expertise comptable<br> et d’ingénierie conseils à dimenssion <br>internationale…</p>
              {{--  <p>New York, NY 535022</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>  --}}
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Lien rapides</h4>
            <ul>
              <li><a href="/">Accueil</a></li>
              <li><a href="service">Nos Services</a></li>
              <li><a href="carriere">carrières</a></li>
              <li><a href="https://web53.lws-hosting.com:2096/cpsess9121598487/3rdparty/roundcube/?_task=mail&_mbox=INBOX" target="_blank">Webmail</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Impot</h4>
            <ul>
              <li><a href="https://cnss.bj/avis-recrutement-inspecteur-cipres/">CIPRES-Avis d’appel à candidatures pour le recrutement d’un inspecteur régional de la prévoyance sociale</a></li>
              {{--  <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>  --}}
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>CNSS</h4>
            <ul>
              <li><a href="https://cnss.bj/avis-recrutement-inspecteur-cipres/">CIPRES-Avis d’appel à candidatures pour le recrutement d’un inspecteur régional de la prévoyance sociale</a></li>
              {{--  <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>  --}}
            </ul>
          </div>



        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center">
          <div>
              Copyrights © 2023 Tous droits réservés par Idéal Expertise CPA
          </div>
          {{--  <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>  --}}
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
