<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WAF</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="styles/master.css">

  <link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Staatliches&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="app.js" charset="utf-8"></script>
</head>

<body>
  <nav>
    <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
    </div>
    <div class="logo">
        <img src="logo.png">
    </div>
    <div class="menu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a class="donny" href="#donation">Donation</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators ci">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-block w-100 first">
          <div class="inner-donate">
            <h3>A NON PROFIT ORGANIZATION <br>
              TO PROTECT HUMANITY <br>
              LET'S HELP OTHERS</h3>
            <a href="#donation"><button href="#donation" type="button" class="btn btn-donate">SUPPORT US</button></a>
          </div>

        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/17.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/10.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>







  <section id="about" class="about">
    <h1>About <span class="purple"> Us</span> </h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h2><span class="purple">Our</span><br> Mission</h2>
        </div>
        <div class="col-lg-9">
          <p>
              WAF is a non profit foundation which works to support the community by providing the best of knowledge to make the difference in the lives of people.
          </p>
        </div>
        <div class="col-lg-9">
          <p>
            To provide the underprivileged families and children with the basic necessities of day to day life.
          </p>
        </div>
        <div class="col-lg-3">
          <h2><span class="purple">Our</span> <br>Cause</h2>
        </div>



      </div>

    </div>
  </section>

  <section id="gallery" class="gallery">
    <h1  >WAF <span class="purple" > GALLERY</span> </h1>

    <div class="container">

    <div class="row">
        <div class="col-12 pb-5">
            <section class="row">
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                            <li data-target="#featured" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner home-carousel-inner">
                            <div class="carousel-item h-100 active">
                                <div class="card h-100 border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative h-100">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper h-100">

                                                <img class="img-fluid w-100" src="images/1.png" alt="Bootstrap news template"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item h-100">
                                <div class="card h-100 border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative h-100">
                                        <div class="ratio_left-cover-1 image-wrapper h-100">
                                                <img class="img-fluid w-100" src="images/2.png" alt="Bootstrap news theme"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item h-100">
                                <div class="card h-100 border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative h-100">
                                        <div class="ratio_left-cover-1 image-wrapper h-100">
                                                <img class="img-fluid w-100" src="images/3.png"  alt="Bootstrap blog template">  </div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item h-100">
                                <div class="card h-100 border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative h-100">
                                        <div class="ratio_left-cover-1 image-wrapper h-100">
                                                <img class="img-fluid w-100" src="images/4.png" alt="Bootstrap portal template"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                        <div class="col-6 pb-1 pt-0 pr-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <div class="ratio_right-cover-2 image-wrapper">
                                            <img class="img-fluid" src="images/12.png" alt="simple blog template bootstrap">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-1 pl-1 pt-0">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <div class="ratio_right-cover-2 image-wrapper">
                                            <img class="img-fluid" src="images/13.png" alt="bootstrap templates for blog"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-1 pr-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">

                                    <div class="ratio_right-cover-2 image-wrapper">
                                            <img class="img-fluid" src="images/9.png" alt="bootstrap blog wordpress theme">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pb-1 pl-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <div class="ratio_right-cover-2 image-wrapper">
                                            <img class="img-fluid" src="images/8.png" alt="blog website templates bootstrap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <h4 class="view-more"><a href="gallery.php">View <span class="purple">More</span> </a></h4>
  </section>










  <section  id="donation" class="donate">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <h1>HELP <br> <span class="purple">OUR</span> <br> CAUSE</h1>
        </div>
        <div class="col-lg-6">
          <h3>Your generous donation will fund our missions.</h3>
          <form aria-live="polite" data-ux="Form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="edit_selector" data-aid="EDIT_PANEL_EDIT_PAYMENT_ICON"/>
            <input type="hidden" name="business" value="womensassociationforum@yahoo.com"/>
            <input type="hidden" name="cmd" value="_donations"/>
            <input type="hidden" name="item_name" value="womens association Forum Inc, Barakah Welfare Society "/>
            <input type="hidden" name="item_number"/>
            <input type="hidden" name="amount" value="0.00" data-aid="PAYMENT_HIDDEN_AMOUNT"/>
            <input type="hidden" name="shipping" value="0.00"/><input type="hidden" name="currency_code" value="USD" data-aid="PAYMENT_HIDDEN_CURRENCY"/>
            <input type="hidden" name="rm" value="0"/>
            <input type="hidden" name="return" value="http://wafchicago.org/"/>
            <input type="hidden" name="cancel_return" value="http://wafchicago.org/"/>
            <input type="hidden" name="cbt" value="Return to womens association Forum Inc, Barakah Welfare Program"/>
            <div data-ux="Block" >
              <button class="btn btn-donate" data-ux="Button" name="submit" data-aid="PAYMENT_PAYPALBUTTON_RENDERED" icon="[object Object]" data-typography="ButtonAlpha"  data-tccl="ux2.PAYMENT.payment3.Form.Default.Button.Spotlight.103850.click,click">
                <span data-ux="Element" >
                  <span data-ux="Element" >
                  SUPPORT US
                  </span>
                </span>
              </button>
            </div>
          </form>
          <img src="img/cards.png" alt="">
        </div>

      </div>

    </div>
  </section>

<?php require 'includes/dbh.inc.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/vendor/autoload.php';


if(isset($_POST) && !empty($_POST)){
  $email = $_POST['email'];
if(!isset($email) || empty($email)){
  $error[]="Name is required";
}
if(!isset($error) || empty($error)){
  $to = "mzamza1100@gmail.com";
  $headers = "From: " . $email ;
  $message = "You have subscribed to our newsletter";
  $subject = "Thankyou for subscribing to newsletter | wafchicago.org";

  $mail = new PHPMailer(true);
  $id=0;
  try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = '84a744a1b7992f';                     // SMTP username
      $mail->Password   = '6968038d604ad8';                               // SMTP password
      $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

      //Recipients
      $mail->setFrom('mzmza48910@gmail.com', 'Mailer');
      $mail->addAddress($email);     // Add a recipient              // Name is optional
      $mail->addReplyTo('mzamza48910@gmail.com', 'Information');
      $mail->addCC('mzamza48910@gmail.com');
      $mail->addBCC('mzamza48910@gmail.com');

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'subscribing newsletter of wafchicago';
      $mailContent = "<h1>Thank you for subscribing to WAF Chicago Newsletter</h1>
      <p>This is to inform you that you have Subscribed to the Newsletter</p>";
      $mail->Body = $mailContent;

      $mail->send();
       $sql = "INSERT INTO `newsletter`(`id`, `email`) VALUES ('value-1','$email')";
       if(mysqli_query($conn,$sql)){
         // echo 'message has been recorded';
      }else{
        // echo 'cud not be recorded';
      }
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }




  // if(mail($to,$subject,$message,$headers)){
  //   $sql = "INSERT INTO 'newsletter' (email) VALUES ('$email') ' ";
  //   if(mysqli_querry($conn,$sql)){
  //       "message received";
  //   }else{
  //     echo "subscription failed";
  //   }
  // }else{
  //   echo "mail not sent";
  // }
}
  }

?>

  <section id="contact" class="contact">
    <h1>Contact <span class="purple">Us</span></h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <ul class="soc">
            <li><a href="#" class="twitter" data-abc="true"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" class="twitter" data-abc="true"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="twitter" data-abc="true"><i class="fa fa-envelope"></i></a></li>
          </ul>
          <p class="green">Womens Association Forum</p>
          <p class="grey">2653 West Pratt Boulevard, <br>
            Chicago, Illinois 60645, <br>
            United States <br>
            877-263-7711 Ex #t2 <br>
            Womensassociationforum@yahoo.com <br>
            Hours of operation <br>
            Open today</p>
          <p class="purple">09:00 am – 09:00 pm</p>
          <p class="green">Womens Association Forum Inc welcomes you all</p>
          <p class="grey">Please feel free to contact and schedule an appointment</p>
        </div>
        <div class="col-lg-8">
          <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=2653%20West%20Pratt%20Boulevard,+(WAF)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
          <h6>Sign up to hear from us about our upcoming programs and events.</h6>
          <form method="post">
            <div class="form-group row">
              <div class="col-lg-10 col-sm-8">
                <input  type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="col-lg-2 col-sm-4">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>


      </div>

    </div>

  </section>




  <footer>
    <div class="container">
      <center>Copyright © 2020 womens association Forum Inc, Barakah Welfare Program - All Rights Reserved. <br> Powered by mettech media <a href="login.php"> Login </a></center>
    </div>
  </footer>
</body>

</html>
