<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Idealexpertisecpa/ Module de formation</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">


</head>

<body class="services-page">

  <header id="header" class="header sticky-top">

    {{--  <div style="background-color: #318ce7; color: white;" class="topbar d-flex align-items-center light-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i style="color: white;" class="bi bi-envelope d-flex align-items-center"><a  style="color: white; text-decoration: none;" href="#">info@idealexpertisecpa.com</a></i>
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

              <img src="{{asset('assets/img/hero-carousel/logoideal.jpeg')}}" alt=" logo" height="80px">
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
        <h1 class="mb-2 mb-lg-0">MON PANIER</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Accueil</a></li>
            <li class="current">Mon panier</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

</div><!-- End Page Title -->

<section  id="about" class="about section">
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <div class="py-3">
                @php
                $total=0;
            @endphp
                <ul class="list-group list-group-flush">

                
                    <!-- list group -->
                    @foreach($cartitems as $value)
                    <li class="list-group-item py-3 ps-0 border-top">

                        <!-- row -->
                        <div class="row align-items-center  cartitems product_data ">
                            <div class="col-6 col-md-6 col-lg-7">
                                <div class="d-flex">
                                    <img src="{{ asset('assets/uploads/chapitre_images/'.$value->chapitre->image_url ) }}" alt="Chapitre imaga" class="icon-shape icon-xxl" height="80px" />
                                    <div class="ms-3">
                                        <!-- title -->
                                        <a href="" class="text-inherit">
                                            <input type="hidden" value="{{ $value->chapitre->id }}" class="prod_id">
                                            <h6 class="mb-0 text-center py-4">{{$value->chapitre->titre}}</h6>
                                        </a>
                                        {{--  <span><small class="text-muted">{{$value->quantite}}</small></span>
                                        <!-- text -->--}}
                                        <div class="mt-2 small lh-1">
                                            
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            @php
                            $total += $value->chapitre->montant*$value->quantite;
                           @endphp
                            <!-- input group -->
                            <div class="col-4 col-md-4 col-lg-3">
                                <h5 class="">
                                    <a href="#!" class="text-decoration-none text-inherit delete-cart-item ">
                                        <span class="me-1 align-text-bottom">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="14"
                                                height="14"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-trash-2 text-success"
                                            >
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </span>
                                        <span class="text-muted"></span>
                                    </a>
                                </h5>
                               
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">{{ $value->chapitre->montant }} FCFA</span>
                            </div>
                        </div>

                    </li>
                    @endforeach
                </ul>
                <!-- btn -->
                {{--  <div class="d-flex justify-content-between mt-4">
                    <a href="{{ url('accueil') }}" class="btn btn-dark">Continuer l'achat</a>
                    <a href="#!" class=""></a>
                </div>  --}}
            </div>
        </div>

        <!-- sidebar -->
        <div class="col-12 col-lg-4 col-md-5">
            <!-- card -->
            <div class="mb-5 card mt-6">
                <div class="card-body p-6">
                    <!-- heading -->
                    <h2 class="h5 mb-4">Total</h2>
                    <div class="card mb-2">
                        <!-- list group -->
                        <ul class="list-group list-group-flush">

                            <!-- list group item -->
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-bold">Total Achat</div>
                                </div>
                                <span class="fw-bold">{{$total}} FCFA</span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-grid mb-1 mt-4">

                        @php
                        $remise = 0;
                        $totalApresRemise = $total;

                        if(count($cartitems) >= 3) {
                            $remise = $total * 0.05;
                            $totalApresRemise = $total - $remise;
                        }
                            @endphp

                            @if(count($cartitems) >= 3)
                                <p>Remise (5%) : -{{ number_format($remise, 0, ',', ' ') }} FCFA</p>
                                
                                <h5 class="text-success text-center">Vous avez obtenu une remise</h5>
                            @endif



                        <!-- btn -->

                        <div id='button_payee'></div>

                            <button id="custom_button"  class="btn btn-primary btn-lg d-flex justify-content-between align-items-center mt-3" type="">
                        Acheter maintenant
                            <span class="fw-bold">{{ number_format($totalApresRemise, 0, ',', ' ') }} FCFA</span>

                            </button>
                            @php
                            $price =$totalApresRemise ;
                            $id= "66756fb94af31a555e782fe7";
                            $token= "fp_SrVmGyGvalA9n4lUWeKUJufou0vK2EgVJ59dak3kpXaOPHrgRHpBWtsUJp5Hxs3n";
                            $callback_url= url('success');
                            $error_callback_url=url('/') ;
                            $mode='SANDBOX';
                            $feexpayclass = new Feexpay\FeexpayPhp\FeexpayClass($id, $token, $callback_url, $mode, $error_callback_url);
                              $result = $feexpayclass->init($price, "button_payee", true, "custom_button", " Paiement du module sur idealexpertisecpa", "")
    

                              @endphp



                    </div>
                    <!-- text -->
                    {{--  <p>
                        <small>
                            By placing your order, you agree to be bound by the Freshcart
                            <a href="#!">Terms of Service</a>
                            and
                            <a href="#!">Privacy Policy.</a>
                        </small>
                    </p>  --}}

                    <!-- heading -->
                    {{--  <div class="mt-8">
                        <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                        <form>
                            <div class="mb-2">
                                <!-- input -->
                                <label for="giftcard" class="form-label sr-only">Email address</label>
                                <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card" />
                            </div>
                            <!-- btn -->
                            <div class="d-grid"><button type="submit" class="btn btn-outline-dark mb-1">Redeem</button></div>
                            <p class="text-muted mb-0"><small>Terms & Conditions apply</small></p>
                        </form>
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>
</section>


   


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
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  @if(session('status'))
      <script>
          swal("{{ session('status') }}");
      </script>
  @endif
  {{--  <script >
    FeexPayButton.init("render",{
    id:"6799d8ed512b3c794e2f66f3",
    amount: 5000,
    token:"test_Hg7Kjl3ZAM63UuIUpuudD9nKuu3ZAM67Kjl3Uuhn" ,
    callback:()=> "",
    callback_url: your callurl if you want,
     mode: 'SANDBOX'
    custom_button: true ,
    id_custom_button:"paiement",
    custom_id: If you want to put a reference to allow you to make other requests, you can put it here but it must be a random string,
     description: "Paiement du module sur idealexpertisecpa",
    case: "MOBILE"/"CARD",  })
  </script>  --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script><script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script>
      $(document).ready(function () {
          loadcart();

          $('.addToCartBtn').click( function (e) {
              e.preventDefault();

                  var product_id= $(this).closest('.product_data').find('.chapitre_id').val();
                  var product_qty= $(this).closest('.product_data').find('.qty-input').val();
                  var prixe= $(this).closest('.product_data').find('.formation_id').val();


                  $.ajaxSetup({
                      headers:{
                          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                      method:"Post",
                      url:"/add-to-cart",
                      data:{
                          'chapitre_id':product_id,
                          'quantite':product_qty,
                          'formation_id':prixe,
                      },

                      success:function(response){
                          console.log(response);
                          swal(response.status);
                          loadcart();
                          //window.location.reload();

                      }

                  });

          });
          function loadcart()
          {
              $.ajax({
                  method:"GET",
                  url:"/load-cart-data",
                  success:function(response){
                       $('.cart-count').html('');
                       $('.cart-count').html(response.count);
                      //alert(response.count)
                  }

              });
          };
          $(document).on('click','.delete-cart-item', function (e) {
              e.preventDefault();

                  var prod_id= $(this).closest('.product_data').find('.prod_id').val();

                  //alert(prod_id)
                  $.ajaxSetup({
                      headers:{
                          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                      method:"Post",
                      url:"/delete-cart-item",
                      data:{
                          'article_id':prod_id,

                      },
                      success:function(response){
                          //window.location.reload();
                          setTimeout(function() {
                              window.location.reload();
                          }, 2000);
                         loadcart();
                         // $('.cartitems').load(location.href +" .cartitems");
                          swal("",response.status,"success")
                      }

                  });



          });

          $(document).on('click','.changeQuantity', function (e) {
              e.preventDefault();

                  var product_id= $(this).closest('.product_data').find('.prod_id').val();
                  var qty= $(this).closest('.product_data').find('.qty-input').val();
                 // alert(product_id)
                 // alert(qty)
                  data={
                      'article_id':product_id,
                      'quantite':qty,

                  },

                  $.ajaxSetup({
                      headers:{
                          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                      method:"Post",
                      url:"/update-cart",
                      data:data,
                      success:function(response){
                          loadcart();

                           swal("",response.status,"success")
                          //window.location.reload();
                         //$('.cartitems').load(location.href +" .cartitems");
                      }

                  });



          });

           {{--  function commandes (e,transaction) {
              e.preventDefault();


                      var adresses= $(this).closest('.product_data').find('.adresse').val();
                      var phones= $(this).closest('.product_data').find('.phone').val();



                      $.ajaxSetup({
                          headers:{
                              'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                          }
                      });
                      $.ajax({
                          method:"Post",
                          url:"/placer-commande",
                          data:{
                              'transaction_id':transaction,
                              'adresse':adresses,
                              'phone':phones,

                          },
                          success:function(response){
                              //window.location.reload();

                             //loadcart();
                             // $('.cartitems').load(location.href +" .cartitems");
                              swal("",response.status,"success")
                          }

                      });






          };  --}}




      });


  </script>
</body>

</html>
