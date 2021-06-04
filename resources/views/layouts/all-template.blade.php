<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Likalamu: Welcome</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{ URL::asset('spot/img/favicon.png')}}" rel="icon">
  <link href="{{ URL::asset('spot/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ URL::asset('spot/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Theme included stylesheets -->
  <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <!-- Theme included stylesheets -->
  <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('spot/lib/font-awesome/css/font-awesome.min.css ') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('spot/css/style.css ') }}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Spot
    Template URL: https://templatemag.com/spot-bootstrap-freelance-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">HOME<i class="fa fa-circle"></i>ASSIGNMENTS</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="services.html">SERVICES</a></li>
          <li class="active"><a href="works.html">WORKS</a></li>
          <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="blue">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>WELLCOME ADMIN @NAME</h4>
          <p>USE THE APPLICATION TO REDUCE MONOTONY AND INCREASE WORK ETHICS.</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!--  bluewrap -->


  <div class="container desc">
       @yield('content')
  </div>
  <!-- container -->

  <div id="r">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
          <p>We believe ideas come from everyone, everywhere. At OurCompany, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths
            drive us, motivate us, and ultimately help us redefine the power of design.</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>

  <!-- FOOTER -->
  <div id="f">
    <div class="container">
      <div class="row centered">
        <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>

      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- Footer -->

  <!-- MODAL FOR CONTACT -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">contact us</h4>
        </div>
        <div class="modal-body">
          <div class="row centered">
            <p>We are available 24/7, so don't hesitate to contact us.</p>
            <p>
              Somestreet Ave, 987<br/> London, UK.<br/> +44 8948-4343<br/> contact@example.com
            </p>

            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <label for="contact-name">Your Name</label>
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-email">Your Email</label>
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="contact-message">Your Message</label>
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large">Send Message</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Spot</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/spot-bootstrap-freelance-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Spot template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="{{ URL::asset('spot/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('spot/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('spot/lib/php-mail-form/validate.js')}}"></script>
  <script src="{{ URL::asset('spot/lib/chart/chart.js')}}"></script>
  <!-- Main Quill library -->
  <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script type="text/javascript">
    var editor = new Quill('.editor');  // First matching element will be used
  </script>

  <!-- Template Main Javascript File -->
  <script src="{{ URL::asset('spot/js/main.js')}}"></script>
  <script type="text/javascript">
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>

</body>
</html>