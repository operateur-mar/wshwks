<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
            <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Contact Details</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
           <!-- add font -->
           <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>
        
          <!-- Navigation -->
          <nav id="navbarExample" class="navbar navbar-expand-lg navbar-dark" aria-label="Main navigation">
                <div class="container">
    
                    <!-- Image Logo -->
                    <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.png" alt="alternative"></a> 
    
                    <!-- Text Logo - Use this if you don't have a graphic logo -->
                    <!-- <a class="navbar-brand logo-text" href="index.html">Name</a> -->
    
                  
    
                    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        
                            <li class="nav-item">
                                <a class="nav-link" href="#services">????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">??????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact.php">??????????</a>
                            </li>
                           
                        </ul>
                        
                    </div> <!-- end of navbar-collapse -->
                    <div class="navcontentitems">
                        <span class="nav-item social-icons">
                            <a class="lang" href="../en/index.html">English</a> 
                            <!-- <a class="lang" href=""><img src="../web/images/united-kingdom.png" alt="" srcset="">EN</a>-->
                        </span>
                        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div> <!-- end of container -->
            </nav> <!-- end of navbar -->
            <!-- end of navigation -->


        <!-- Header -->
        <header class="ex-header mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1>?????????? ????????</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->

        <!-- Handling Email Details  -->

        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        require 'vendor/autoload.php';


       if(isset($_POST['submit'])) {

        // Replace sender@example.com with your "From" address.
        // This address must be verified with Amazon SES.
        $sender = 'the.dr.rida@gmail.com';
        $senderName = 'Sender Name';

        // Replace recipient@example.com with a "To" address. If your account
        // is still in the sandbox, this address must be verified.
        $recipient = 'the.dr.rida@gmail.com';

        // Replace smtp_username with your Amazon SES SMTP user name.
        $usernameSmtp = 'AKIAZ2WXQK76WURZENKN';

        // Replace smtp_password with your Amazon SES SMTP password.
        $passwordSmtp = 'IDwNZ7idjvNSnAa25prT0U5an6hlbX9g8Nt';

        // Specify a configuration set. If you do not want to use a configuration
        // set, comment or remove the next line.
        $configurationSet = 'ConfigSet';

        // If you're using Amazon SES in a region other than US West (Oregon),
        // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
        // endpoint in the appropriate region.
        $host = 'email-smtp.us-west-2.amazonaws.com'; //email-smtp.us-west-2.amazonaws.com
        $port = 587;

        // The subject line of the email
        $subject = 'Amazon SES test (SMTP interface accessed using PHP)';

        // The plain-text body of the email
        $bodyText =  "Email Test\r\nThis email was sent through the
            Amazon SES SMTP interface using the PHPMailer class.";

        // The HTML-formatted body of the email
        $bodyHtml = '<h1>Email Test</h1>
            <p>This email was sent through the
            <a href="https://aws.amazon.com/ses">Amazon SES</a> SMTP
            interface using the <a href="https://github.com/PHPMailer/PHPMailer">
            PHPMailer</a> class.</p>';

        $mail = new PHPMailer(true);

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';
            $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

            // Specify the message recipients.
            $mail->addAddress($recipient);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $bodyHtml;
            $mail->AltBody    = $bodyText;
            $mail->Send();
            echo "Email sent!" , PHP_EOL;
        } catch (phpmailerException $e) {
            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
        }

       }
           
        ?>
        <!-- Form -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <p class="mb-5">
                            ?????????? ???????? ?????????????? ?????????????? ???????????????????? ???????????? ?????????????? ?????? ?????? ?????????????????? ???????????????? ?????????????? ???? ???????????? ???? ???????? ?????? ???????? :
                        </p>
                        
                        <!-- Contact Form -->
                        <form action="/contact.php" method="POST">
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" name= "fname" id="floatingInput4" placeholder="Name">
                                <label for="floatingInput4">??????????</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="floatingInput5" name="femail" placeholder="name@example.com">
                                <label for="floatingInput5">???????????? ????????????????????</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <textarea class="form-control" name="fmessage" id="floatingTextarea1" placeholder="Your message here" rows="6"></textarea>
                                <label for="floatingTextarea1">???????? ???????????? ??????</label>
                            </div>
                           <!-- <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Quis varius quam quisque id diam enim facilisis <a href="privacy.html">Privacy Policy</a> sine <a href="terms.html">Terms & Conditions</a></label>
                            </div> -->
                            <button type="submit" class="form-control-submit-button" id="submit" name="submit">????????</button>
                        </form>
                        <!-- end of contact form -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-form-1 -->
        <!-- end of form -->


        <!-- Basic
        <div class="ex-basic-1 pt-4 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h2 class="mb-4">Office location</h2>
                        <p class="mb-5">Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Eget magna fermentum iaculis eu non diam. Faucibus nisl tincidunt eget nullam non. Erat velit scelerisque in dictum non consectetur a. Imperdiet dui accumsan sit amet nulla facilisi. Sem et tortor consequat id porta nibh. Velit aliquet sagittis id consecteur des mamo lica ter.</p>
                            
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1241.5303553091994!2d-0.14076024298621118!3d51.51210217963597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d502268421%3A0x6a7d62889992f993!2sRegent+St%2C+Soho%2C+London+W1B+5TH%2C+UK!5e0!3m2!1sen!2sro!4v1476174541049" allowfullscreen></iframe>
                        </div>
                            
                        <p class="mb-5">Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Eget magna fermentum iaculis eu non diam. Faucibus nisl tincidunt eget nullam non. Erat velit scelerisque in dictum non consectetur a. Imperdiet dui accumsan sit amet nulla facilisi. Sem et tortor consequat id porta nibh. Velit aliquet sagittis id consecteur des mamo lica ter.</p>
                        <a class="btn-solid-reg mb-5" href="index.html">Download</a>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
       <!-- </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->


          <!-- Footer -->
          <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footerpart">
                        <div class="first-sandbox">
                            <h5>?????? ????????????</h5>
                            <p class="p-small">?????? ?????? ?????????? ?????? ?????? ?????????????? ???? ?????? ?????????????? ???? ???????????????? ???????? ?????????? ?????? ???????? ?????????? ?????? ???????????? ???? ???????? ???????????? ???? ?????????? ???????? ??????????.
                            </p>
                            <div class="links">
                                <ul>
                                    <li><a href="">???????? ??????????????????</a></li>
                                    <li><a href="">?????????? ??????????????????</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footerpart">
                        <div class="second-sandbox">
                            <h5>??????????????</h5>
                            <ul>
                                <li><a href="">???????????? ?????????? ??????</a></li>
                                <li><a href="">???????????? ????????????</a></li>
                                <li><a href="">???????? ?????? ??????????</a></li>
                                <li><a href="">???????? ????????</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 footerpart">
                        <div class="third-sandbox footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-tiktok fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>

                            <p class="footer-contact">???????????? ?????? <span><a href="../contact.html">?????????? ??????????????</a></span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end of footer -->  
    <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright bg-dark-blue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright ?? <a href="#your-link">Your name</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>