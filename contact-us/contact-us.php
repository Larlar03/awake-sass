<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>Awake Birmingham - Contact Us</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!-- Place favicon.ico in the root directory -->
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!--Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!-- Stylesheer -->
  <link rel="stylesheet" href="../sass/pages.css">

  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>
  <header>
    <nav id="mobnav" class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="../img/logo.png" alt="Awake Birmingham logo">Awake Birmingham</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="../index.php">Home</a>
          <a class="nav-item nav-link" href="../who-we-are.php">Who We Are</a>
          <a class="nav-item nav-link" href="../what-we-do.php">What We Do</a>
          <a class="nav-item nav-link active" href="contact-us.php">Contact Us <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="p-content">
      <div class="p-left" id="contact-left"></div>
      <div class="p-text">
        <h1>Contact Us</h1>
        <p class="contactp">Don’t leave it too late to seek advice or support from Jalika and Imani. We will get back to you as soon as possible.</p>

        <img class="p-img" src="../img/contact-us.png" alt="boy with his hand in the air">

        <!-- Contact Form-->
        <div id="form-container">
          <form id="contact-form" method="post" action="contact.php" role="form">

            <div class="messages"></div>

            <div class="controls">

              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input id="form_number" type="tel" name="number" class="form-control" placeholder="Phone Number" <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Type your message here..." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col" id="submit-container">
              <div class="g-recaptcha" data-sitekey="6LeBeZAUAAAAAMHkscvG-D77JpZ583Khlnie32QG"></div><br>
              <div class="col form-button">
                <input type="submit" id="send-button" class="btn btn-success btn-send" value="Send message">
              </div>
            </div>
            </div>

        </div>

        </form>
      </div>
      </div>
    </section>
  </main>


  <footer>
    <a href="mailto:infoawake16@gmail.com">infoawake16@gmail.com</a>
    <p>Jalika: <a class="phonenum" href="tel:+447702018595">(+44) 7702 018595</a>   |   Imani: <a class="phonenum"  href="tel:+447877400646">(+44) 7877 400646</p>

    <a href="https://www.facebook.com/awa.ke.31"><i class="fab fa-facebook-square"></i></span></a>

    <a href="https://www.instagram.com/bhamawake/"><i class="fab fa-instagram"></i></span></a>

      <a href="https://www.linkedin.com/in/awake-birmingham-5a9849174"><i class="fab fa-linkedin"></i></span></a>

    <p>&copy; <?php echo date("Y");?> Awake</p>
  </footer>


  <!--Bootstrap JS-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
  <script src="contact.js"></script>

</body>

</html>
