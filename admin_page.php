<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!--Bootstrap CSS ------------->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

   <!--------------- Style CSS --------------->
   <link rel="stylesheet" href="css/style-3.css" type="text/css">

   <!------- ------ Google Font	------------------------>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,400;1,500;1,600;1,800;1,900&display=swap"
      rel="stylesheet">


   <!--============================= Fonts  =========================-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

   <script src="https://kit.fontawesome.com/1cfaab80c2.js" crossorigin="anonymous"></script>





   <!-- <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a> -->

</head>

<body>
   <!--  Start Header-->
   <header>
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
               <img src="images/logo1.png " alt="company name">
               <!-- <img src="images/logo.png" alt="company name"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Home </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">About</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="#">Service</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                     <a href="logout.php" class="btn"> <i class="fa-regular fa-user"></i> </a>
                  </li>

               </ul>

            </div>
         </nav>
      </div>
   </header>
   <!--  End Header-->



   <!--Start Banner section	-->
   <section class="banner-section">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <div class="banner-text">
                  <h1>Pet Daycare And Veterinary Service</h1>
                  <p> Best online safe & reliable Pet Care Service</p>

                  <div class="btn-main">
                     <a href="" class="btn btn-blue">Contact Us</a>
                     <a href="" class="btn btn-outline-light">Our Service</a>
                  </div>
               </div>
            </div>

            <div class="col-md-6">
               <div class="banner-img">
                  <img src="images/dog.png" alt="">
               </div>
            </div>

         </div>
      </div>
   </section>
   <!--End Banner section	-->


   <!--Start Section	-->
   <section class="text-section">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <div class="text-col">
                  <h2> Medical care for Dogs & Cats</h2>
                  <p>We receive almost all kind of medical request service for all kinds of Cats & Dogs. Sometime we
                     also provide medical service to other kinds of animals depending on the situation.</p>


                  <!--========================
  
                                   button ta remove kore dis nicher ta
                                                                                        ============-->

                  <!-- <a href="" class="btn btn-primary">Our Service</a> -->



               </div>
            </div>

            <div class="col-md-6">
               <div class="right-img">
                  <img src="images/dog1.jpg" alt="">
               </div>
            </div>


         </div>
      </div>
   </section>
   <!--End Section	-->



   <!--Start Section	-->
   <section class="services-section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h2 class="section-title">Veterinary Services</h2>
               <p class="mb-4"> We provide our veterinary services with expert medical care.</p>
            </div>


            <div class="col-lg-4">
               <div class="services-box">
                  <div class="services-img">
                     <img class="" src="images/services3.jpg" alt="">
                  </div>
                  <h3>Veterinarian</h3>
                  <p>Your beloved pet is suffering from any kind of diseases or illness? contact with a professional
                     Vet.</p>
                  <button class="service-btn"> Book Service </button>
               </div>
            </div>


            <div class="col-lg-4">
               <div class="services-box">
                  <div class="services-img">
                     <img src="images/services1.jpg" alt="">
                  </div>
                  <h3>Vaccination Care</h3>
                  <p>Your pets need to be Vaccinated once or more. Try our Vaccine service for beloved pets.</p>
                  <button class="service-btn"> Book Service </button>
               </div>
            </div>



            <div class="col-lg-4">
               <div class="services-box">
                  <div class="services-img">
                     <img src="images/services.jpg" alt="">
                  </div>
                  <h3>Neuter Service</h3>
                  <p> By Neutering you can make your pet a lot less aggressive. It protects them against certain illness
                     and increase their lifespan.</p>
                  <button class="service-btn"> Book Service </button>
               </div>
            </div>




         </div>
      </div>
   </section>
   <!--End Section	-->


   <!--Start Section	-->
   <section class="text-section animal-section">
      <div class="container">
         <div class="row align-items-center">

            <div class="col-md-6">
               <div class="right-img">
                  <img src="images/dog2.png" alt="">
               </div>
            </div>


            <div class="col-md-6">
               <div class="text-col">
                  <h2> The Perfect Pet Hotel</h2>
                  <p>We know just how important your pet is to you, which is why our highly experienced pet handlers do
                     everything they can to keep your pets safe and happy while they stay with us.

                     With no cage boarding and very competitive rates, you'll feel comfortable turning to our Daycare at any time you need to find a place for you loved one to stay. We've even been featured on Yelp.com??? due to the excellent reviews regarding our service!</p>

                     <!-- 
                        button remove kori dis eita mone koire madari

                      -->

                  <!-- <a href="" class="btn btn-primary">Our Service</a> -->

               </div>
            </div>



         </div>
      </div>
   </section>
   <!--End Section	-->


   <!--================= adopt section	==========================================-->

   <section class="adopt-section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="intro-main">
                  <h2 class="section-title">Adoption </h2>
                  <p> If you are looking to adopt pets. Feel free to check here.</p>

               </div>
            </div>


            <div class="col-md-4">
               <div class="adopt-box">
                  <div class="adopt-img">
                     <img src="images/cat3a.jpg" alt="">
                  </div>
                  <div class="adopt-info">
                     <div class="name-tag">
                        <span class="">Name:</span>
                        <span class="offer-name-tag2">Lucy</span>
                     </div>
                     <a href="" class="btn btn-blue">Adopt Now</a>
                  </div>
               </div>
            </div>


            <div class="col-md-4">
               <div class="adopt-box">
                  <div class="adopt-img">
                     <img src="images/cat1.jpg" alt="">
                  </div>
                  <div class="adopt-info">
                     <div class="name-tag">
                        <span class="">Name:</span>
                        <span class="offer-name-tag2">Cookie</span>
                     </div>
                     <a href="" class="btn btn-blue">Adopt Now</a>
                  </div>
               </div>
            </div>


            <div class="col-md-4">
               <div class="adopt-box">
                  <div class="adopt-img">
                     <img src="images/dog5.jpg" alt="">
                  </div>
                  <div class="adopt-info">
                     <div class="name-tag">
                        <span class="">Name:</span>
                        <span class="offer-name-tag2">Tucker</span>
                     </div>
                     <a href="" class="btn btn-blue">Adopt Now</a>
                  </div>
               </div>
            </div>


         </div>
      </div>
   </section>
   <!--Start adopt section	-->



   <!--Start Section	-->
   <section class="team-section">
      <div class="container">
         <div class="row">

            <div class="col-md-12">
               <div class="intro-main">
                  <h2 class="section-title">The Head Vet Care team</h2>
                  <p> Lorem Ipsum available, but the majority have
                     suffered alteration in some form.</p>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="team-box">
                  <div class="team-img">
                     <img src="images/team1.jpg" alt="">
                  </div>
                  <div class="team-info">
                     <h3>Emma Sano</h3>
                     <p>SENIOR VETERINARY</p>
                     <ul class="team-social">
                        <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                        <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li> <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="team-box">
                  <div class="team-img">
                     <img src="images/team2.jpg" alt="">
                  </div>
                  <div class="team-info">
                     <h3>Flora Sopa</h3>
                     <p>SENIOR VETERINARY</p>
                     <ul class="team-social">
                        <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                        <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li> <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="team-box">
                  <div class="team-img">
                     <img src="images/team3.jpg" alt="">
                  </div>
                  <div class="team-info">
                     <h3>Mikasa Ackerman</h3>
                     <p>SENIOR VETERINARY</p>
                     <ul class="team-social">
                        <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                        <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li> <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                     </ul>
                  </div>
               </div>
            </div>


         </div>
      </div>
   </section>
   <!--End Section	-->



   <!--Start Section	-->
   <section class="stats-section">
      <div class="container">
         <div class="row">

            <div class="col-lg-4">
               <div class="stats-box">
                  <img src="images/icon1.png" alt="">
                  <h2>+34793</h2>
                  <h3>Happy Clients</h3>
               </div>
            </div>


            <div class="col-lg-4">
               <div class="stats-box">
                  <img src="images/icon2.png" alt="">
                  <h2>+45382</h2>
                  <h3>Departament</h3>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="stats-box">
                  <img src="images/icon3.png" alt="">
                  <h2>+54762</h2>
                  <h3>Vaccinations</h3>
               </div>
            </div>


         </div>
      </div>
   </section>
   <!--End Section	-->


   <!-- ===============    recent post   ============================= -->

   <!--Start Section	-->
   <section class="blog-section">
      <div class="container">
         <div class="row">

            <div class="col-md-12">
               <div class="intro-main text-center">
                  <h2>Service Feedback From Clients</h2>
                  <p> Leave a feedback how was your experience with us.</p>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="blog-box">
                  <div class="blog-img">
                     <img src="images/blog1.jpg" alt="">
                  </div>
                  <div class="blog-info">
                     <h3>Hanma Shuji Wrote</h3>
                     <span class="post-date">FEBRUARY 09, 2023</span>
                     <p> I really liked your daycare service. My cat was safe and sound when you guys returned it to me. Its in good mood too, i guess he had some friends to play with. Looking forward to use your service again.</p>
                     <a href="" class="link-more">Read More+</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="blog-box">
                  <div class="blog-img">
                     <img src="images/blog2.jpg" alt="">
                  </div>
                  <div class="blog-info">
                     <h3>Hanagaki Takemichi Wrote</h3>
                     <span class="post-date">FEBRUARY 09, 2023</span>
                     <p> Thanks to your good Vet's my dog is felling better and started to play like before. He was in really bad condition when i asked advice from your doctors.But now he is all good again. Thank You.</p>
                     <a href="" class="link-more">Read More+</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="blog-box">
                  <div class="blog-img">
                     <img src="images/blog3.jpg" alt="">
                  </div>
                  <div class="blog-info">
                     <h3>Ken Ryuguji Wrote</h3>
                     <span class="post-date">FEBRUARY 09, 2023</span>
                     <p>My cat is got Vaccinated properly thanks to your doctors. They complete the whole things with such good care, which was really wonderful.</p>
                     <a href="" class="link-more">Read More+</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!--==========================================         End Section	========================================================-->


   <!---==================================     Start Footer	       ===========================================================-->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="footer-col footer-menu">
                  <h3>About</h3>
                  <ul>
                     <li> <a href="">History</a> </li>
                     <li> <a href="">Our Team</a> </li>
                     <li> <a href="">Brand Guidelines</a> </li>
                     <li> <a href="">Terms & Condition</a> </li>
                     <li> <a href="">Privacy Policy</a> </li>
                  </ul>

               </div>
            </div>


            <div class="col-md-3">
               <div class="footer-col footer-menu">
                  <h3>Services</h3>
                  <ul>
                     <li> <a href="">How to Order</a> </li>
                     <!-- <li> <a href="">Our Product</a> </li> -->
                     <li> <a href="">Order Status</a> </li>
                     <li> <a href="">Promo</a> </li>
                     <li> <a href="">Payment Method</a> </li>
                  </ul>

               </div>
            </div>

            <div class="col-md-6">
               <div class="subscribe-form">
                  <h3>Subscribe </h3>
                  <p> Lorem Ipsum available, but the majorit </p>
                  <form>
                     <div class="input-group">
                        <input type="email" class="form-control">
                        <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                     </div>
                  </form>
                  <ul class="footer-social">
                     <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                     <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                     <li> <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                  </ul>
               </div>
            </div>



         </div>
      </div>
   </footer>
   <!--End Footer	-->


   <!--Jquery	-->

   <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>