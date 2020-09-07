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
<footer>
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
</footer>

</body>
</html>
