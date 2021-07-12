<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Dento - Dentist &amp; Medical HTML Template</title>

  <!-- Favicon -->
 {{--  <link rel="icon" href="{{ url('/cliente/img/core-img/favicon.ico"> --}}
  <link rel="icon" href="{{ url('/cliente/img/core-img/favicon.ico') }}"> 
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="{{ url('/cliente/style.css') }}" type="text/css">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <!-- Top Content -->
          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="28 Jackson Street, Chicago, 7788569 USA"><i class="fa fa-map-marker"></i> <span>San Juan</span></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="info.dento@gmail.com"><i class="fa fa-envelope"></i> <span>dentalcoes@gmail.com</span></a>
            </div>
          </div>
          <!-- Top Header Social Info -->
          <div class="col-6 col-md-3 col-lg-4">
            <div class="top-header-social-info text-right">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Header End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Classy Menu -->
          <nav class="classy-navbar justify-content-between" id="dentoNav">

            <!-- Logo -->
            <a class="nav-brand" href="index.html"><img src="{{ url('/cliente/img/core-img/logo.png') }}" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul id="nav">
                  <li><a href="{{ url('home') }}">Home</a></li>
                  <li><a href="#">Secciones</a>
                    <ul class="dropdown">
                      <li><a href="{{ url('home') }}">- Home</a></li>
                      <li><a href="{{ url('about') }}">- Sobre Nosotros</a></li>
                      <li><a href="{{ url('service') }}">- Servicios</a></li>
                      <li><a href="{{ url('pricing') }}">- Precios</a></li>
                     <!--  <li><a href="blog.blade.php">- Blog</a></li> -->
                <!--       <li><a href="blog-details.blade.php">- Blog Details</a></li> -->
                      <li><a href="{{ url('contact') }}">- Contactanos</a></li>
                     <!--  <li><a href="#">- Dropdown</a>
                        <ul class="dropdown">
                          <li><a href="#">- Dropdown Item</a></li>
                          <li><a href="#">- Dropdown Item</a>
                            <ul class="dropdown">
                              <li><a href="#">- Even Dropdown</a></li>
                              <li><a href="#">- Even Dropdown</a></li>
                              <li><a href="#">- Even Dropdown</a></li>
                              <li><a href="#">- Even Dropdown</a></li>
                            </ul>
                          </li>
                          <li><a href="#">- Dropdown Item</a></li>
                          <li><a href="#">- Dropdown Item</a></li>
                        </ul>
                      </li> -->
                    </ul>
                  </li>
                  <li><a href="{{ url('about') }}">Sobre Nosotros</a></li>
                  <li><a href="{{ url('service') }}">Servicios</a></li>
                  <li><a href="{{ url('pricing') }}">Precios</a></li>
                  <!-- <li><a href="#">Blog</a> -->
                   <!--  <ul class="dropdown">
                      <li><a href="blog.html">- Blog</a></li>
                      <li><a href="blog-details.html">- Blog Details</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{ url('contact') }}">Contactanos</a></li>
                </ul>
              </div>
              <!-- Nav End -->
            </div>

            <!-- Booking Now Button -->
            <!-- <a href="#" class="btn dento-btn booking-btn">Booking Now</a> -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">
      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image:  url('{{ url('/cliente/img/bg-img/1.jpg') }}');">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">Creemos que todos deberían tener fácil acceso a una excelente atención dental</h2>
                <p data-animation="fadeInUp" data-delay="300ms">Como innovador líder en la industria, Dento está abriendo nuevas y emocionantes oportunidades para los profesionales de la odontología, inversores, empleados y proveedores. Contáctanos para saber qué tenemos que hacer
                   ofrecerte.</p>
                <div class="welcome-btn-group">
                  <a href="#" class="btn dento-btn mx-2" data-animation="fadeInUp" data-delay="500ms">Get Started</a>
                  <a href="#" class="btn dento-btn mx-2 active" data-animation="fadeInUp" data-delay="700ms">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url('{{ url('/cliente/img/bg-img/2.jpg') }}');";>
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text text-center">
                <h2 data-animation="fadeInDown" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Dental Care</h2>
                <p data-animation="fadeInDown" data-delay="300ms">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to
                  offer you.</p>
                <div class="welcome-btn-group">
                  <a href="#" class="btn dento-btn mx-2" data-animation="fadeInDown" data-delay="500ms">Get Started</a>
                  <a href="#" class="btn dento-btn mx-2 active" data-animation="fadeInDown" data-delay="700ms">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ****** About Us Area Start ******* -->
  <section class="dento-about-us-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <!-- About Us Thumbnail -->
        <div class="col-12 col-md-6">
          <div class="about-us-thumbnail mb-50">
            <img src="{{ url('/cliente/img/bg-img/15.jpg') }}" alt="">
          </div>
        </div>
        <!-- About Content -->
        <div class="col-12 col-md-6">
          <div class="about-us-content mb-50">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2>About Us</h2>
              <div class="line"></div>
            </div>
            <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel. Pellentesque ultrices nisl quam iaculis, nec pulvinar
              augue.</p>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Experience Dentist</h6>
              <div id="bar1" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="80"></span>
              </div>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Modern Equipment</h6>
              <div id="bar2" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="65"></span>
              </div>
            </div>

            <!-- Single Skills Area -->
            <div class="single-skills-area mt-30">
              <h6>Friendly Staff</h6>
              <div id="bar3" class="barfiller">
                <span class="tip"></span>
                <span class="fill" data-percentage="85"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ****** About Us Area End ****** -->

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  <!-- Cool Facts Area Start -->
  <section class="dento-cta-area">
    <div class="container">
      <div class="row">
        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_genius"></i>
            <h2><span class="counter">20</span></h2>
            <h5>Years Of Experience</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_heart_alt"></i>
            <h2><span class="counter">700</span>+</h2>
            <h5>Happy Patients</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_book_alt"></i>
            <h2><span class="counter">120</span></h2>
            <h5>Certificate</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_id"></i>
            <h2><span class="counter">40</span>+</h2>
            <h5>Dentist</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Cool Facts Area End -->

  <!-- Dento Service Area Start -->
  <section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('{{ url('cliente/img/bg-img/13.jpg') }}');">
    <div class="container">
      <div class="row align-items-center">
        <!-- Service Content -->
        <div class="col-12 col-lg-6">
          <div class="service-content mb-30">
            <!-- Section Heading -->
            <div class="section-heading white">
              <h2>Our Services</h2>
              <div class="line"></div>
            </div>

            <div class="row">
              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="{{ url('/cliente/img/core-img/s1.png') }}"') }}" alt="">
                  <h6>Teeth Whitening</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="{{ url('/cliente/img/core-img/s2.png') }}"') }}" alt="">
                  <h6>Missing Teeth</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="{{ url('/cliente/img/core-img/s3.png') }}"') }}" alt="">
                  <h6>Teeth Whitening</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="{{ url('/cliente/img/core-img/s4.png') }}"" alt="">
                  <h6>Cosmetic Dentistry</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="{{ url('/cliente/img/core-img/s5.png') }}"" alt="">
                  <h6>Examination</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="{{ url('/cliente/img/core-img/s1.png') }}"" alt="">
                  <h6>Teeth Pain</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Video Area -->
        <div class="col-12 col-lg-6">
          <div class="dento-video-area mb-100">
            <img src="{{ url('/cliente/img/bg-img/14.jpg') }}" alt="">
            <!-- Play Button -->
            <a href="#" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dento Service Area End -->

  <!-- Dento Pricing Table Area Start -->
  <section class="dento-pricing-table-area section-padding-100">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Pricing</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="dento-price-table table-responsive">
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th scope="col">Service Names</th>
                  <th scope="col">Stage</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Teeth Whitening Service at home</th>
                  <td>1 times</td>
                  <td>$115.00</td>
                </tr>
                <tr>
                  <th scope="row">Teeth Whitening Service at Dental Clinic</th>
                  <td>1 times</td>
                  <td>$100.00</td>
                </tr>
                <tr>
                  <th scope="row">Ceramic crowns and fillings Dental porcelain</th>
                  <td>1 times</td>
                  <td>$99.00</td>
                </tr>
                <tr>
                  <th scope="row">Remove crowns, bridges Service</th>
                  <td>1 tooth</td>
                  <td>$50.00</td>
                </tr>
                <tr>
                  <th scope="row">Covering the recession of the gums</th>
                  <td>1 times</td>
                  <td>$400.00</td>
                </tr>
                <tr>
                  <th scope="row">Consultation, impressions and preparation of models</th>
                  <td>1 times</td>
                  <td>$35.00</td>
                </tr>
                <tr>
                  <th scope="row">Removal of an old inlay, old crown</th>
                  <td>1 times</td>
                  <td>$99.00</td>
                </tr>
                <tr>
                  <th scope="row">Overlay teeth whitening ( 2 arches)</th>
                  <td>1 times</td>
                  <td>$170.00</td>
                </tr>
                <tr>
                  <th scope="row">Standard porcelain and zirconium crown on implant</th>
                  <td>1 tooth</td>
                  <td>$499.00</td>
                </tr>
                <tr>
                  <th scope="row">Implantation of an implant (price depends on system used)</th>
                  <td>1 tooth</td>
                  <td>$600.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-12">
          <div class="more-btn text-center mt-50">
            <a href="#" class="btn dento-btn">Read More <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dento Pricing Table Area End -->

  <!-- Book An Oppointment Area Start -->
  <section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('{{ url('/cliente/img/bg-img/12.jpg') }}');">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Book An Apointment</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <!-- Appointment Form -->
          <div class="appointment-form">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="your-name" class="form-control" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="your-phone" class="form-control" placeholder="Your Phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="email" name="your-email" class="form-control" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="your-address" class="form-control" placeholder="Your Address">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <select name="your-scheldule" class="form-control">
                      <option value="Choose Your Scheldule">Choose Your Scheldule</option>
                      <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                      <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                      <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                      <option value="8 PM to 10 PM">8 PM to 10 PM</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <select name="your-time" class="form-control">
                      <option value="Choose Your Time">Choose Your Scheldule</option>
                      <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                      <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                      <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                      <option value="8 PM to 10 PM">8 PM to 10 PM</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group mb-30">
                    <textarea name="your-message" class="form-control" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn dento-btn">Booking Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Book An Oppointment Area End -->

  <!-- ***** Dento Dentist Area Start ***** -->
  <section class="dentist-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Our Dentist</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Dentist Area -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single-dentist-area mb-100">
            <img src="{{ url('/cliente/img/bg-img/9.png') }}"" alt="">
            <!-- Dentist Content -->
            <div class="dentist-content">
              <!-- Social Info -->
              <div class="dentist-social-info">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              <!-- Dentist Info -->
              <div class="dentist-info bg-gradient-overlay">
                <h5>Michael Barley</h5>
                <p>Implant Expert</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Dentist Area -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single-dentist-area mb-100">
            <img src="{{ url('/cliente/img/bg-img/10.png') }}"" alt="">
            <!-- Dentist Content -->
            <div class="dentist-content">
              <!-- Social Info -->
              <div class="dentist-social-info">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              <!-- Dentist Info -->
              <div class="dentist-info bg-gradient-overlay">
                <h5>Michael Barley</h5>
                <p>Implant Expert</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Dentist Area -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="single-dentist-area mb-100">
            <img src="{{ url('/cliente/img/bg-img/11.png') }}"" alt="">
            <!-- Dentist Content -->
            <div class="dentist-content">
              <!-- Social Info -->
              <div class="dentist-social-info">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              <!-- Dentist Info -->
              <div class="dentist-info bg-gradient-overlay">
                <h5>Michael Barley</h5>
                <p>Implant Expert</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Dento Dentist Area End ***** -->

  <!-- ***** Testimonials Area Start ***** -->
  <section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('{{ url('/cliente/img/bg-img/7.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Testimonials Slides -->
          <div class="testimonials-slides owl-carousel">
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide d-flex align-items-center">
              <!-- Thumbnail -->
              <div class="testimonial-thumb">
                <img src="{{ url('/cliente/img/bg-img/8.jpg') }}" alt="">
              </div>
              <!-- Content -->
              <div class="testimonial-content">
                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
                  very helpful. Excellent treatment and advice.”</h5>
                <h6>Arron Ramsey</h6>
                <p>Dental Patient</p>
              </div>
            </div>

            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide d-flex align-items-center">
              <!-- Thumbnail -->
              <div class="testimonial-thumb">
                <img src="{{ url('/cliente/img/bg-img/8.jpg') }}" alt="">
              </div>
              <!-- Content -->
              <div class="testimonial-content">
                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
                  very helpful. Excellent treatment and advice.”</h5>
                <h6>Arron Ramsey</h6>
                <p>Dental Patient</p>
              </div>
            </div>

            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide d-flex align-items-center">
              <!-- Thumbnail -->
              <div class="testimonial-thumb">
                <img src="{{ url('/cliente/img/bg-img/8.jpg') }}" alt="">
              </div>
              <!-- Content -->
              <div class="testimonial-content">
                <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
                  very helpful. Excellent treatment and advice.”</h5>
                <h6>Arron Ramsey</h6>
                <p>Dental Patient</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Testimonials Area End ***** -->

  <!-- ***** Blog Area Start ***** -->
  <section class="dento-blog-area section-padding-100-0 clearfix">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>The Latest News</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Blog Item -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-blog-item mb-100">
            <a href="./blog-details.html">
              <img src="{{ url('/cliente/img/bg-img/4.jpg') }}" alt="">
            </a>
            <!-- Blog Content -->
            <div class="blog-content">
              <a href="./blog-details.html" class="post-title">How your mouth bacteria can harm your lungs</a>
              <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
              <div class="post-meta">
                <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Blog Item -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-blog-item mb-100">
            <a href="./blog-details.html">
              <img src="{{ url('/cliente/img/bg-img/5.jpg') }}" alt="">
            </a>
            <!-- Blog Content -->
            <div class="blog-content">
              <a href="./blog-details.html" class="post-title">What is the best kind of toothpaste to use?</a>
              <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
              <div class="post-meta">
                <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Blog Item -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-blog-item mb-100">
            <a href="./blog-details.html">
              <img src="{{ url('/cliente/img/bg-img/6.jpg') }}" alt="">
            </a>
            <!-- Blog Content -->
            <div class="blog-content">
              <a href="./blog-details.html" class="post-title">Why you should avoid sipping your drinks</a>
              <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
              <div class="post-meta">
                <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Blog Area End ***** -->

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url('{{ url('/cliente/imgbg-img/3.jpg') }}');">
    <div class="container">
      <div class="row">
        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget">
            <a href="./index.html" class="d-block mb-4"><img src="{{ url('/cliente/img/core-img/logo.png') }}" alt=""></a>
            <p>Etiam sutor risus, dapibus act elefend katen, lacinia sitamet denim. Mauris sagittis kansa interdum dignissim.</p>
            <div class="footer-contact">
              <p><i class="icon_pin"></i> 28 Jackson Street, Chicago, 7788569 USA</p>
              <p><i class="icon_phone"></i> +84. 2252. 2250. 122</p>
              <p><i class="icon_mail"></i> info.dento@gmail.com</p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Opening Hours</h5>

            <!-- Opening Hours -->
            <ul class="opening-hours">
              <li><span>Mon-Wed</span> <span>8.00-18.00</span></li>
              <li><span>Thu-Fri</span> <span>8.00-17.00</span></li>
              <li><span>Sat</span> <span>9.00-17.00</span></li>
              <li><span>Sun</span> <span>10.00-17.00</span></li>
              <li><span>Holiday</span> <span>Closed</span></li>
            </ul>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Quick Link</h5>

            <!-- Quick Links Nav -->
            <nav>
              <ul class="quick-links">
                <li><a href="#">About</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Advisors</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Dentist</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Legals</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Newsletter</h5>

            <p>We will send out weekly newest article and some great offers</p>
            <!-- Newsletter Form -->
            <div class="footer-newsletter-form">
              <form action="#" method="post">
                <input type="email" name="nl-email" value="" placeholder="Email Address">
                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </form>
            </div>

            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="copywrite-content">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib --- Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="{{ url('/cliente/js/jquery.min.js') }}"></script>
  <!-- Popper js -->
  <script src="{{ url('/cliente/js/popper.min.js') }}"></script>
  <!-- Bootstrap js -->
  <script src="{{ url('/cliente/js/bootstrap.min.js') }}"></script>
  <!-- All js -->
  <script src="{{ url('/cliente/js/dento.bundle.js') }}"></script>
  <!-- Active js -->
  <script src="{{ url('/cliente/js/default-assets/active.js') }}"></script>

</body>

</html>