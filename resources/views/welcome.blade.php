<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Juan</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel="stylesheet" href="css/tooplate-style.css"><!-- tooplate style -->
  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="css/magnific-popup.css">

      </head>

      <body>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-01.jpg">

          <h1><center>Data Pegawai</center></h1>
          <section class="container tm-page-1-content">
            <div class="row">
              <div class="col-md-6 ml-auto tm-text-white">
                <nav>
                  <h3><a href="/tentang">TENTANG</h3></a>
      			       <h3><a href="/kontak">KONTAK</h3></a>
      		</nav>
                <header><h2><a href="/tambah">Tambah Pegawai Baru</a> </h2></header>
                <table border="1">
  		<tr>
  			<th>Nama</th>
  			<th>Jabatan</th>
  			<th>Umur</th>
  			<th>Alamat</th>
  			<th>Opsi</th>
  		</tr>
  		@foreach($pegawai as $p)
  		<tr>
  			<td>{{ $p->pegawai_nama }}</td>
  			<td>{{ $p->pegawai_jabatan }}</td>
  			<td>{{ $p->pegawai_umur }}</td>
  			<td>{{ $p->pegawai_alamat }}</td>
  			<td>
  				<a href="/edit/{{ $p->pegawai_id }}">Edit</a>
  				|
  				<a href="/hapus/{{ $p->pegawai_id }}">Hapus</a>
  			</td>
  		</tr>
  		@endforeach
  	</table>

                  <a href="#tm-section-2" class="btn btn-danger">Explore...</a>
              </div>
            </div>

          </section>
        </div>

        <!-- bagian judul halaman blog -->
          <h3> @yield('tentang-judul_halaman') </h3>


          <!-- bagian konten blog -->
          @yield('tentang-konten')
        <div id="tm-section-2" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-02.jpg">
          <section class="container tm-page-1-content tm-page-2">

            <div class="row">
              <article class="col-md-6 tm-article tm-bg-white-transparent">
                <header><h2 >Left Side</h2></header>
                <b>Think left and think right and think low and think high. Oh, the thinks you can think up if only you try! -Dr. Seuss</b>
              </article>

              <article class="col-md-6 tm-article tm-bg-white-transparent">
                <header><h2>Right Side</h2></header>
                <b>There are times in politics when you must be on the right side and lose. -John Kenneth Galbraith</b>

                  <a href="#tm-section-3" class="btn btn-danger ml-auto mr-0 tm-btn-block">Details...</a>
              </article>
            </div>
          </section>
        </div>
        <div id="tm-section-3" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-03.jpg">
          <section class="container tm-page-1-content">
            <div class="row1">
              <div class="col-xl-6 col-md-8 ml-auto">
                <article class="tm-bg-white-transparent-page3">
                  <header><h5 class="tm-bg-white">FOOT ARE POWER !</h5></header>
                  <p class="tm-bg-white2">God grant that not only the love of liberty but a thorough knowledge of the rights of man may pervade all the nations of the earth, so that a philosopher may set his foot anywhere on its surface and say: 'This is my country.' -Benjamin Franklin</p>
                    <a href="#tm-section-4" class="btn btn-danger tm-btn-right">Read More</a>
                </article>
              </div>
            </div>
          </section>
        </div>
        <div id="tm-section-4" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-04.jpg">

          <div class="row tm-page-4-content">
            <article  class="col-xs-6 col-md-4 tm-bg-white-transparent">
              <header><h3>Sylvia Plath, The Bell Jar</h3></header>
              <p>“I felt my lungs inflate with the onrush of scenery—air, mountains, trees, people. I thought, "This is what it is to be happy.”</p>
            </article>
            <article class="col-xs-6 col-md-4 tm-bg-white-transparent">
              <header><h3>William Shakespeare</h3></header>
              <p>“I like this place and could willingly waste my time in it.”</p>
            </article>
            <article class="col-xs-6 col-md-4 tm-bg-white-transparent">
              <header><h3>Albert Einstein</h3></header>
              <p>“Our task must be to free ourselves... by widening our circle of compassion to embrace all living creatures and the whole of nature and it's beauty.”</p>
            </article>
          </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/semeru.jpg">
          <div class="container">
            <div class="row">
              <div class="tm-img-container">
                <div class="tm-img-slider">

                    <a class="image-link" href="img/gallery-img-01.jpg"><img src="img/gallery-img-01-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-02.jpg"><img src="img/gallery-img-02-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-03.jpg"><img src="img/gallery-img-03-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-04.jpg"><img src="img/gallery-img-04-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-05.jpg"><img src="img/gallery-img-05-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-06.jpg"><img src="img/gallery-img-06-tn.jpg" alt="Image" class="tm-slider-img"></a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="parallax-window tm-position-relative tm-form-section" data-parallax="scroll" data-image-src="img/bg-img-06.jpg">
          <div class="container ">
            <div class="row1 ">
              <div class="col-xs-12">
                <header><h5>Contact Us</h5></header>
              </div>
            </div>
            <div class="row tm-page-5-content">
              <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="contact_message">
                  <form action="#contact" method="post" class="contact-form">
                    <div class="form-group">
                      <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                    </div>
                    <div class="form-group">
                      <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                    </div>
                    <div class="form-group">
                      <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger tm-btn-submit">Submit</button>
                  </form>
                </div>
              </div>
              <div class="col-lg-8 col-md-6 col-xs-12">
                <div class="tm-address-box">
                  <p>Integer pretium volutpat tempor. Maecenas condimentum tincidunt leo. Paesent scelerisque erat placerat tempus laoreet. Vivamus pellentesque tempor congue. Vestibulum ac diam dui. Vivamus a fringilla velit.
                  </p>
                  <br>
                  <address>
                    <b>Our Address</b><br>
                    <br>
                    440-660 Proin mauris enim,<br>
                    dignissim sit amet ligula id,<br>
                    finibus tempus erat 10200
                  </address>
                </div>
              </div>
            </div>

            <div class="footer">
              <p>Copyright © 2018 Your Company
                . Design: Tooplate</p>
              </div>
            </div>

          </div>


          <!-- load JS files -->
          <script src="js/jquery-1.11.3.min.js"></script>        <!-- jQuery (https://jquery.com/download/) -->
          <script src="js/parallax.min.js"></script>

          <script type="text/javascript" src="slick/slick.min.js"></script>
          <!-- Slick Carousel -->

          <!-- Magnific Popup core JS file -->
          <script src="js/jquery.magnific-popup.min.js"></script>


          <script>

            function setCarousel() {

              var slider = $('.tm-img-slider');

              if (slider.hasClass('slick-initialized')) {
                slider.slick('destroy');
              }

              if($(window).width() > 991){
                  // Slick carousel
                  slider.slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1
                  });
                }
                else {
                 slider.slick({
                  dots: true,
                  infinite: true,
                  slidesToShow: 2,
                  slidesToScroll: 1
                });
               }
             }

             $(document).ready(function(){

              setCarousel();
              $('.tm-img-slider').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image'
                // other options

              });

              $(window).resize(function() {
                setCarousel();
              });
            });

          </script>
        </body>
        </html>
