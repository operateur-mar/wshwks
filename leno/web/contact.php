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
                                <a class="nav-link" href="#services">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">الخدمات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">المنتجات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact.php">تواصل</a>
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
        <header class="ex-header bg-dark-blue mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1>تواصل معنا</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->

        <!-- Handling Email Details  -->

        <?php
        if(isset($_POST['submit'])) {
            $mailto = "the.dr.rida@gmail.com";  //My email address
            //getting customer data
            $name = $_POST['floatingInput4']; //getting customer name
            $fromEmail = $_POST['floatingInput5']; //getting customer email
            $subject = "رسالة جديدة من مستخدم واش وركس";
            $message = $_POST['floatingTextarea1']; //getting customer Phome number   
            
            //Email body I will receive
            $message = "From: " . $name . "\n"
            . "Email: " . $fromEmail . "\n\n"
            . " Message: " . "\n" . $message;
            
            //Email headers
            $headers = "From: " . $fromEmail; // Client email, I will receive
            $headers2 = "From: " . $mailto; // This will receive client
            
            //PHP mailer function
             $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
            // $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client        
             //Checking if Mails sent successfully
            
             if ($result1) {
               $success = "تم إرسال الرسالة بنجاح";
             } else {
               $failed = "خطأ في إرسال الرسالة";
             }
            
           }
      ?>
        <!-- Form -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <p class="mb-5">
                            تواصل معنا وراسلنا بردودك، اقتراحاتك، أسئلتك والمزيد عبر ملأ الاستمارة التالية، وسنتأكد من إجابتك في أقرب وقت ممكن :
                        </p>
                        
                        <!-- Contact Form -->
                        <form>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="floatingInput4" placeholder="Name">
                                <label for="floatingInput4">الاسم</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="floatingInput5" placeholder="name@example.com">
                                <label for="floatingInput5">البريد الإلكتروني</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <textarea class="form-control" id="floatingTextarea1" placeholder="Your message here" rows="6"></textarea>
                                <label for="floatingTextarea1">اكتب رسالتك هنا</label>
                            </div>
                           <!-- <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Quis varius quam quisque id diam enim facilisis <a href="privacy.html">Privacy Policy</a> sine <a href="terms.html">Terms & Conditions</a></label>
                            </div> -->
                            <button type="submit" class="form-control-submit-button">أرسل</button>
                        </form>
                        <!-- end of contact form -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-form-1 -->
        <!-- end of form -->


        <!-- Basic -->
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
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->


          <!-- Footer -->
          <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footerpart">
                        <div class="first-sandbox">
                            <h5>حول الموقع</h5>
                            <p class="p-small">هنا يتم اضافة وصف خاص بالموقع من أجل التعريف به بالموقع، يمكن تغيير هذا النص لاحقا بما يتناسب مع صاحب الموقع أو خصائص موقع الويب.
                            </p>
                            <div class="links">
                                <ul>
                                    <li><a href="">شروط الاستخدام</a></li>
                                    <li><a href="">سياسة الاستخدام</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footerpart">
                        <div class="second-sandbox">
                            <h5>الروابط</h5>
                            <ul>
                                <li><a href="">الرابط الأول هنا</a></li>
                                <li><a href="">الرابط الثاني</a></li>
                                <li><a href="">انقر هنا مجددا</a></li>
                                <li><a href="">رابط أخير</a></li>
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

                            <p class="footer-contact">راسلنا عبر <span><a href="../contact.html">نموذج الإتصال</a></span></p>
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
                        <p class="p-small">Copyright © <a href="#your-link">Your name</a></p>
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