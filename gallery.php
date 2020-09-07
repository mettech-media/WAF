<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WAF</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
    </div>
  </nav>


      <h1 style="text-align:center;margin-top:100px;color:#5ac8a5;font-family: 'Staatliches', cursive;font-size: 7rem;">WAF<span class="purple"> Gallery</span> </h1>

      <div class="container gallery-container">

        <div class="row">
          <?php
          include_once 'includes/dbh.inc.php';
          $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $i=0;
            $r=0;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($i%2 == 0){
                if ($r == 0){
                  echo '<div class="col-lg-8">
                  <a href="#">
                    <div class="gallery-image" style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                    <div class="inner-gallery">
                    <h3>'.$row["titleGallery"].'</h3>
                    <p>'.$row["descGallery"].'</p>
                    </div>
                  </a>
                  </div> ';
                  $r=1;
                        }
                else{
                echo '<div class="col-lg-4">
                <a href="#">
                  <div class="gallery-image" style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <div class="inner-gallery">
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                  </div>
                </a>
                </div> ';
                $r=0;
                      }
                }
                else {
                  if ($r == 0){
                    echo '<div class="col-lg-8">
                    <a href="#">
                      <div class="gallery-image" style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                      <div class="inner-gallery">
                      <h3>'.$row["titleGallery"].'</h3>
                      <p>'.$row["descGallery"].'</p>
                      </div>
                    </a>
                    </div> ';
                    $r=0;
                          }
                  else{
                  echo '<div class="col-lg-4">
                  <a href="#">
                    <div class="gallery-image" style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                    <div class="inner-gallery">
                    <h3>'.$row["titleGallery"].'</h3>
                    <p>'.$row["descGallery"].'</p>
                    </div>
                  </a>
                  </div> ';
                  $r=1;
                        }
              }
                $i++;
                }
              }
          ?>
        </div>
      </div>

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

          <section class="contact">
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
                  <p class="grey">Please feel free to contact and scheduke an appointment</p>
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
              <center>Copyright © 2020 womens association Forum Inc, Barakah Welfare Program - All Rights Reserved. <br>Developed and Powered by mettech media<a href="login.php">Login</a></center>
            </div>
          </footer>

  </body>
</html>
