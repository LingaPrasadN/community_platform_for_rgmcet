<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
    </style>
    <title>Welcome</title>
  </head>
  <body>
    <?php
      include_once("header.php");
      include_once("dbconnect.php");
      $mailaddr=$_POST['mail'];
      $result=$conn->query("select * from students where mail='$mailaddr'");
     
      if($result->num_rows>0) { 
        
   




        require '/usr/share/php/libphp-phpmailer/src/PHPMailer.php';

        require '/usr/share/php/libphp-phpmailer/src/SMTP.php';


/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer\PHPMailer\PHPMailer();

/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom('nlprasad50@gmail.com', 'RGMCETCommunity');
   
   /* Add a recipient. */
   $mail->addAddress($mailaddr);//

   /* Set the subject. */
   $mail->Subject = 'OTP to reset your password.';//
   $otp=rand(1111,9999);
   session_start();
   $_SESSION['otp']=$otp; 
   /* Set the mail message body. */
   $mail->Body = 'OTP is '.$otp;//

   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'smtp.gmail.com';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'nlprasad50@gmail.com';
   
   /* SMTP authentication password. */
   $mail->Password = 'plxjbybvytigtlor';
   
   /* Set the SMTP port. */
   $mail->Port = 587;

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   // PHPMailer exception. 
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   // PHP exception (note the backslash to select the global namespace Exception class). 
   echo $e->getMessage();
}
        print '
        <section class="vh-100 bg-image"
        style="background-image: url("https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp");">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Forgot Password !</h2>
      
                    <form method="post" action="forgotpassword3.php">
      
                      
      
                      <div class="form-outline mb-4">
                        <input type="number" id="form3Example3cg" name="otp" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example3cg">Enter Otp sent to your mail</label>
                      </div>
      
                    
      
                     
      
      
                      <div class="d-flex justify-content-center">
                        <button type="submit"
                          class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Next</button>
                      </div>
      
                      <p class="text-center text-muted mt-5 mb-0">Remember password ? <a href="index.php"
                          class="fw-bold text-body"><u>Login here</u></a></p>
      
                    </form>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
        ';
      }
      else {
          print '
          <section class="vh-100 bg-image"
          style="background-image: url("https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp");">
          <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                      <h2 class="text-uppercase text-center mb-5">Mail wasn\'t verified with college database!</h2>
                       
                     
          ';

      }
    /*    print '
        <section class="vh-100 bg-image"
  style="background-image: url("https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp");">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post" action="checkmail.php">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg"  class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

               

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>


                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="index.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        ';
      }
      else {
        print '
        <section class="vh-100 bg-image"
        style="background-image: url("https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp");">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                    Mail not found in College Database. <a href="registerA.php">Try Again...</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        ';
      }*/
    ?>
  
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>