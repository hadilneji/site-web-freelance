<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') FreeLanci</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset("https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900")}}" rel="stylesheet">
    <link href="{{asset("https://fonts.googleapis.com/css2?family=Rakkas&display=swap")}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">

    <link rel="stylesheet" href="{{asset("css/jquery.fancybox.min.css")}}">

    <link rel="stylesheet" href="{{asset("css/bootstrap-datepicker.css")}}">

    <link rel="stylesheet" href="{{asset("fonts/flaticon/font/flaticon.css")}}">

    <link rel="stylesheet" href="{{asset("css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Phone:</strong> <a href="tel://#">+216 20 000 000</a></span>
              <span><strong class="text-white">Email:</strong> <a href="#">Freelanci@freelance.com</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0" style="font-family:'Rakkas', cursive;">Freeلانسي<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="#home-section"  class="nav-link">Home</a>
                </li>
                <li>
                  <a href="#services-section" class="nav-link">Services</a>
                </li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About</a>
                  <ul class="dropdown">
                    <li><a href="#about-section">Specialties</a></li>
                    <li><a href="#team-section">FreeLancers</a></li>
                  </ul>
                </li>
                <li><a href="{{url('/users')}}" class="nav-link">Registraion</a></li>
                <li><a href="{{url('/depot')}}" class="nav-link">Submit Project</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>We Love To Build <span class="typed-words"></span></h1>
                <div><a data-fancybox data-ratio="2" href="{{route("create")}}" class="btn btn-primary btn-md" style="border: 0; background-color:transparent"></a></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">01.</div>
              <h2 class="text-primary">Innovate</h2>
              <p class="mb-4">We innovate by starting with the customer and working backwards. That became the touchstone for how we invent.  </p>
              <ul class="list-unstyled ul-check primary">
                <li>Customer Experience</li>
                <li>Product Management</li>
                <li>Proof of Concept</li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">02.</div>
              <h2 class="text-primary">Create</h2>
              <p class="mb-4">Creativity is natural extansion of our enthusiasm.</p>
              <ul class="list-unstyled ul-check primary"><br>
                <li>Web Design</li>
                <li>Branding</li>
                <li>Web &amp; App Development</li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">03.</div>
              <h2 class="text-primary">Simple</h2>
              <p class="mb-4">Describe your Project in afew words.</p>
              <ul class="list-unstyled ul-check primary"><br><br>
                <li>Social Media</li>
                <li>Paid Campaigns</li>
                <li>Marketing &amp; SEO</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    
 <section class="site-section border-bottom" id="services-section" >
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center" data-aos="fade-up">
            <h2 class="text-black h1 site-section-heading text-center" style="margin-block-start:-10%">Our Services</h2>
          </div>
        </div>
        <!--Programming & Tech--> 
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
              <div>
                <h3>Programming & Tech</h3>
                <ul class="list-unstyled ul-check primary"><br><br>
                <li>Game Developpement</li>
                <li>Blockchain & Cryptocurrency</li>
                <li>Web Programming</li>
              </ul>
              </div>
            </div>
          </div>
          <!--correction & translation--> 
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
               
              <div>
                <h3>Correction & Translations</h3>
                <ul class="list-unstyled ul-check primary"><br><br>
                <li>Content Writing &amp; Editing</li>
                <li>Career Writing</li>
                <li>Speechwriting</li>
              </ul>
              </div>
            </div>
          </div>
          <!--Graphics & Design --> 
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-format_paint"></span></div>
              <div>
                <h3>Graphics & Design</h3>
                <ul class="list-unstyled ul-check primary"><br><br>
                <li>Logo Design</li>
                <li>NFT Art</li>
                <li>Catalog Design</li>
              </ul>
              </div>
            </div>
          </div>
          <!--Leisure --> 
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-extension"></span></div>
              <div>
                <h3>Leisure</h3>
                <ul class="list-unstyled ul-check primary"><br><br>
                <li>Coaching</li>
                <li>Travelling</li>
                <li>Modeling & Acting</li>
              </ul>
              </div>
            </div>
          </div>
          <!--Mobile Applications --> 
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
              <div>
                <h3>Mobile Applications</h3>
                <ul class="list-unstyled ul-check primary"><br><br>
                <li>converting Site to App</li>
                <li>Full App Creation</li>
                <li>Bug Flex</li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<div class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="text-black h1 site-section-heading" name="FreeLancers">FreeLancers</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>John Rooster</h3>
              <p class="position text-muted">Proofreader And Content Editor</p>
              <p class="mb-4">I offer you my services as an independent proofreader and proofreader, web editor, virtual assistant, human resources manager.
                Very comfortable with the spelling, grammar and syntax of the French language, I am also used to working on the correction, proofreading and reformulation of documents.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Tom Sharp</h3>
              <p class="position text-muted">Full stack Developer</p>
              <p class="mb-4">Passionate Developer and Entrepreneur.With 10 years of experience in professional web development and design.</p>
              <ul class="ul-social-circle" style="margin-block-start: 8em;">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Winston Hodson</h3>
              <p class="position text-muted">Mobile application development</p>
              <p class="mb-4">Mobile application development with Cordova/Ionic/Xamarin/React Native/Objective C/SwiftWebsite and e-commerce development with Wordpress, Joomla, Drupal, Prestashop, OpenCart, Shopify 
              PHP and JS development with Node.js, React.js, Symphony, Yii, Laravel.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="site-section testimonial-wrap" id="Projects-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Projects</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">      
              <blockquote class="mb-5">
                <p>&ldquo;<i><b>Tayara</b></i> It is a website where products are displayed by a merchant. If an Internet user wishes to buy one of these products, he will have to pay online using a banking platform or other means of payment (cheque, etc.).&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
              <!--Everydinar--> 
            <div class="testimonial">
              <blockquote class="mb-5">
                <p>&ldquo;<u><b>EveryDinar</b></u> est une application dédiée à la budgétisation, EveryDinar place automatiquement vos dépenses dans des catégories budgétaires personnalisées à fin de les estimer à la fin de chaque journée.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/img-profil.png" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>BEN SALAH K/NEJI H</p>
              </figure>
              
            </div>
          </div>

          <div>
              <!--Lorem ipsum --> 
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>
          <div>
            <!--Lorem ipsum --> 
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_5.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>
        </div> </section>
   
    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">
            <div class="row">
              <div class="col-12">
                <div class="text-left pb-1">
                  <h2 class="text-black h1 site-section-heading" >About Us</h2>
                </div>
              </div>
              <div class="col-12 mb-4">
                <p class="lead">Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</p>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-phonelink"></span></div>
                  <div>
                    <h3>Web &amp; Mobile Specialties</h3>
                    <p>Post your assignments and find the Freelancers that suit you.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
                  <div>
                    <h3>Intuitive Thinkers</h3>
                    <p>Apply to offers to increase your chances of success.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div> </div> </div>   </div> </div></div></div> </div>
               


    <section class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="text-black h1 site-section-heading">Contact Us</h2>
          </div></div>
        <div class="row">
          <div class="col-md-7 mb-5">
            <form action="#" class="p-5 bg-white">              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control"></div>                
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div></div>              
              <div class="row form-group">               
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div></div>              
              <div class="row form-group">               
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div></div>              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div></div>              
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div></div></form> </div>          
          
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Tunise , Sfax</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+216 20 000 000</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">Freelanci@freealnce.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    <a href="#" class="bg-primary py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div>
        </div>
      </div>  
    </a>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section">About Us</a></li>
                  <li><a href="#services-section">Services</a></li>
                  <li><a href="#Projects-section">Projects</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Web Apps"," WordPress"," Mobile Apps"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  


  </body>
</html>