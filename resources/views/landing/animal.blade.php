<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Zoo-Topia  </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    {{-- <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div> --}}
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>3rd Street, Industrial Area, K'la</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-phone-alt text-primary me-2"></small>
            <small>+256 788225138</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-0" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="{{url('/')}}" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="{{asset('assets/img/icon/icon-10.png')}}" alt="Icon" />
        <h1 class="m-0 text-primary">Zoo-Topia</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
          <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
          <a href="{{url('/service')}}" class="nav-item nav-link">Services</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle active"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="{{url('/animal')}}" class="dropdown-item active">Our Animals</a>
              <a href="{{url('/membership')}}" class="dropdown-item">Membership</a>
              <a href="{{url('/visiting')}}" class="dropdown-item">Visiting Hours</a>
              <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
              <a href="{{url('/404')}}" class="dropdown-item">404 Page</a>
            </div>
          </div>
          <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{url('/tickets')}}" class="btn btn-primary"
          >Book Tickets<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid header-bg py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">
          Our Animals
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Our Animals
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Animal Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="row g-5 mb-5 align-items-end wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="col-lg-6">
            <p><span class="text-primary me-2">#</span>Our Animals</p>
            <h1 class="display-5 mb-0">
              Let`s See Our <span class="text-primary">Zoo-Topia</span> Awsome
              Animals
            </h1>
          </div>
          <div class="col-lg-6 text-lg-end">
            <a class="btn btn-primary py-3 px-5" href=""
              >Explore More Animals</a
            >
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="{{asset('assets/img/animal-md-1.jpg')}}"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/animal-md-1.jpg')}}" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Antelope</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="{{asset('assets/img/animal-lg-1.jpg')}}"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/animal-lg-1.jpg')}}" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Monkey</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="{{asset('assets/img/animal-lg-2.jpg')}}"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/animal-lg-2.jpg')}}" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Cat</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="{{asset('assets/img/animal-md-2.jpg')}}"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/animal-md-2.jpg')}}" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Zebra</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row g-4">
              <div class="col-12">
                <a
                  class="animal-item"
                  href="{{asset('assets/img/animal-md-3.jpg')}}"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/animal-md-3.jpg')}}" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Elephant</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a
                  class="animal-item"
                  href="{{asset('assets/img/animal-lg-3.jpg')}}"
                  data-lightbox="animal"
                >
                  <div class="position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/animal-lg-3.jpg')}}" alt="" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Animal</p>
                      <h5 class="text-white mb-0">Giraffe</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Animal End -->

    <!-- Footer Start -->
    <div
      class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>3rd Street, Industrial Area, K'la
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+012 345 67890
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@example.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Popular Links</h5>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Newsletter</h5>
            <p>Subscribe to our NewsLetter to keep up to date with what we're upto.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">Zoo-Topia</a>, All
              Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By
              <a class="border-bottom" href="https://htmlcodex.com"
                >HTML Codex</a
              >
              <br />Distributed By:
              <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js"')}}></script>
  </body>
</html>
