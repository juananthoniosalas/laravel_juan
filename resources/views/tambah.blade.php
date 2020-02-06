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
          <h1><center>Tambah Pegawai</center></h1>
          <section class="container tm-page-1-content">
            <div class="row">
              <div class="col-md-6 ml-auto tm-text-white">
                <header><h2><a href="/pegawai"> Kembali</a> </h2></header>


  	<br/>
  	<br/>

  	<form action="/store" method="post">
  		{{ csrf_field() }}
  		Nama <input type="text" name="nama" required="required"> <br/>
  		Jabatan <input type="text" name="jabatan" required="required"> <br/>
  		Umur <input type="number" name="umur" required="required"> <br/>
  		Alamat <textarea name="alamat" required="required"></textarea> <br/>
  		<input type="submit" value="Simpan Data">
  	</form>

                  <a href="#tm-section-2" class="btn btn-danger">Explore...</a>
              </div>
            </div>

          </section>
        </div>
      </body>
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

    </head>
    </html>
