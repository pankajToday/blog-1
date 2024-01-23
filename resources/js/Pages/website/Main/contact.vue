<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

   @yield('title','United State Celebrities - Contact')
  <meta content="my contact page" name="description">
  <meta content="contact,us" name="keywords">

  @include('zenBlog.layout.head')

</head>

<body>

  <!-- ======= Header ======= -->
  <!-- =======NAV Header ======= -->
  @include('zenBlog.layout.nav-header')
  <!-- End Header -->

  <main id="main">


    <section id="contact" class="contact mb-5">

      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Contact us</h1>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Dhanbad , Jharkhand ,IN</address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 90312512**">+91 90312512**</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:ankuprsdpkp@gmail.com">ankuprsdpkp@gmail.com</a></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="form mt-5">
          <form  id="contact-frm" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required maxlength="80">
                  <div class="error" id="name">{{ $errors->first('name') }}</div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required maxlength="80">
                  <div class="error"  id="email">{{ $errors->first('email') }}</div>

              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required maxlength="120">
                <div class="error" id="subject">{{ $errors->first('subject') }}</div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required maxlength="200"></textarea>

              <div class="error" id="message">{{ $errors->first('message') }}</div>

            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message" id="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center">
              <input type="submit" name="Next" value="Submit" class="forms">
            </div>
          </form>
        </div>

        <!-- End Contact Form -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('zenBlog.layout.footer')
  @include('zenBlog.layout.js')
  <script>
    let errors=[];
   $("#contact-frm").submit(function ( e) {
       e.preventDefault();
       $('.loading').show();
       $('.sent-message').hide();

       reset();

       $.ajax({
           url: "api/contact-us",
           type: 'post',
           data: {
               name: $("#name").val(),
               email: $("#email").val(),
               subject: $("#subject").val(),
               message: $("#message").val(),
               '_token': '{{csrf_token()}}'
           },
           success: function (res) {
               $('.loading').hide();

               if (res.status === 200) {
                   $('.sent-message').show();
                   reset();
               }
               else {
                   $('#error-message').html(res.message);
               }
           },
           error(e) {
               $('.loading').hide();
               errors=e.responseJSON.errors;

               if(errors.name && errors.name[0]){ $("#name").html(errors.name[0]) }
               if(errors.email && errors.email[0]){ $("#email").html(errors.email[0]) }
               if(errors.subject && errors.subject[0]){ $("#subject").html(errors.subject[0]) }
               if(errors.message && errors.message[0]){ $("#message").html(errors.message[0]) }

               $('#error-message').html(e.responseJSON.message);
           }
       })
   });

   function reset() {
       errors =[];
        $("#name").html("") ;
        $("#email").html("") ;
        $("#subject").html("") ;
        $("#message").html("") ;
       $('#error-message').html("");
       $('.sent-message').hide();
   }



  </script>
</body>

</html>