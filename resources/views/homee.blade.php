
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Browse &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">

    
  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar position-fixed" role="banner">

      <div class="container home">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white h2 mb-0">Browse</a></h1>
          </div>
          <div class="col-12 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active" style="color: #fff;"><a href="{{url('/')}}"><span>Home</span></a></li>
                <li class="has-children">
                  <a><span>Categories</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="categories.html">Automation</a></li>
                    <li><a href="#">Cement</a></li>
                    <li><a href="#">Coal Mining</a></li>
                    <!-- modal triger -->
                    <li><a data-toggle="modal" data-target="#categories">View All..</a></li>
                    <!-- batas modal triger -->
                  </ul>
                </li>
                <li><a href="{{url('company')}}"><span>Directory</span></a></li>
                <li><a href="{{url('product')}}"><span>Products</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li>
                <li><a href="" class="d-xl-none">SIGN IN</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-md-2 d-none d-xl-block position-relative text-right"> <a href="" style="border: 1px solid #00918e; border-radius: 30px; padding: 8px;">SIGN IN</a></div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>

<!-- modalnya isinya kategori -->
<div class="modal fade" id="categories" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-4">
      <table>
        <tr>
          <td><a href="categories.html">Automation</a></td>
          <td><a href="#">Cement</a></td>
          <td><a href="#">Coal Mining</a></td>
          <td><a href="#">Coal Preparation</a></td>
        </tr>
        <tr>
          <td><a href="#">Coal Preparation</a></td>
          <td><a href="#">Automation</a></td>
          <td><a href="#">Cement</a></td>
          <td><a href="#">Coal Mining</a></td>
        </tr>
        <tr>
          <td><a href="#">Coal Mining</a></td>
          <td><a href="#">Automation</a></td>
          <td><a href="#">Cement</a></td>
          <td><a href="#">Coal Preparation</a></td>
        </tr>
        <tr>
          <td><a href="#">Coal Mining</a></td>
          <td><a href="#">Automation</a></td>
          <td><a href="#">Cement</a></td>
          <td><a href="#">Coal Preparation</a></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<!-- batas akhir modal -->
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up">For You to Find <span class="typed-words"></span></h1>
                <p data-aos="fade-up" class=" w-75 mx-auto">Find your best resources you need at Mining Marketingplace Resource Center!</p>
              </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                    <input type="text" class="form-control" placeholder="What are you looking for?">
                  </div>
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input type="text" class="form-control" placeholder="Location">
                    </div>
                    
                  </div>
                  <div class="col-lg-12 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="" id="">
                        <option value="">All Categories</option>
                        <option value="">Hotels</option>
                        <option value="">Restaurant</option>
                        <option value="">Eat &amp; Drink</option>
                        <option value="">Events</option>
                        <option value="">Fitness</option>
                        <option value="">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn text-white btn-primary" value="Search">
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>  




    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Tips &amp; Articles</h2>
            <p class="color-black-opacity-5">See Our Daily tips &amp; articles</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <div class="h-entry-inner">
                <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May 5th, 2019</div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <div class="h-entry-inner">
                <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May 5th, 2019</div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_3.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              <div class="h-entry-inner">
                <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May 5th, 2019</div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">Let's get started. Create your account</h2>
            <p class="mb-0 text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="signup.html" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Products</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
  <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/aos.js')}}"></script>
  <script src="{{asset('assets/frontend/js/rangeslider.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/typed.js')}}"></script>
  <script>
  var typed = new Typed('.typed-words', {
  strings: ["Products"," Mining Needs"," Equipment", " Companies", " News"],
  typeSpeed: 80,
  backSpeed: 80,
  backDelay: 4000,
  startDelay: 1000,
  loop: true,
  showCursor: true
  });
  </script>

<script src="{{asset('assets/frontend/js/main.js')}}"></script>
  
  </body>
</html>