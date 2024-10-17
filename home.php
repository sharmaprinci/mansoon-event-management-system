<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

   <!-- chatbot code starts -->
   <script>(function(w, d) { w.CollectId = "646cabff19653d034b04edd4"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
   <!-- chatbot code ends -->


</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/holi.jpg) no-repeat">
            <div class="content">
               <h3>Holi celebration!</h3>
               <p>Holi is a popular and significant Hindu festival celebrated as the Festival of Colours, Love and Spring. It celebrates the eternal and divine love of the god Radha and Krishna. </p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/newyear.jpg) no-repeat">
            <div class="content">
               <h3>New Year Celebration!</h3>
               <p>New Year's Eve is a joyous festival celebrated all over the world. According to the Gregorian calendar, it marks the start of a new year (which contains 12 months and January 1 is counted as the first day of a new year). People all over the world begin making plans for new year's resolutions and preparations one month in advance.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>Definition of wedding planning Wedding planning is the process of coordinating all of the details involved in the making a wedding a remarkable event in accordance to the time schedule and budget of those responsible for the wedding. Objectives of wedding planning  Planning –This involves visualizing the wedding itself and then putting things in order for that vision to materialize. </p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/photography.jpg" alt="">
            <div class="content">
               <h3>photography</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/invitation.jpg" alt="">
            <div class="content">
               <h3>Invitation</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/guestlist.jpg" alt="">
            <div class="content">
               <h3>guest list</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/cake.jpg" alt="">
            <div class="content">
               <h3>Celebration cake</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-5.jpg" alt="">
            <div class="content">
               <h3>wedding ceremony</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-6.jpg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>