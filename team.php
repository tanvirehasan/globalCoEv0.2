 <?php require_once "inc/header.php" ?>
 <!-- breadcrumb-area -->
 <div class="divider"></div>
 <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb-content">
                     <h2 class="title">Our Team</h2>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Team</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
     <div class="breadcrumb-shape-wrap">
         <img src="assets/img/images/breadcrumb_shape01.png" alt="">
         <img src="assets/img/images/breadcrumb_shape02.png" alt="">
     </div>
 </section>
 <!-- breadcrumb-area-end -->

 <section class="team-area-two">
     <div class="team-shape">
         <img src="assets/img/team/team_shape.png" alt="" data-aos="fade-right" data-aos-delay="200">
     </div>
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title-two mb-45 tg-heading-subheading animation-style3">
                     <span class="sub-title">Expert People</span>
                     <h2 class="title tg-element-title">Our Team </h2>
                 </div>
             </div>
             <div class="col-lg-6 col-md-10">
                 <div class="section-top-content mb-30">
                     <p>Our skilled team, experts in diverse fields, collaborates seamlessly to deliver top-notch solutions. Committed to excellence, we're dedicated to achieving your success with unwavering determination.</p>
                 </div>
             </div>
         </div>

         <div class="row justify-content-center">

             <?php
                $team_data = SelectData('our_team', "");
                while ($teams = $team_data->fetch_object()) { ?>
                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                     <div class="team-item-two">
                         <div class="team-thumb-two">
                             <a href="team-details.php?id=<?= $teams->tname ?>"><img src="assets/img/team/<?= $teams->profile_photos ?>" alt=""></a>
                             <div class="team-social-two">
                                 <ul class="list-wrap">
                                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                     <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="team-content-two">
                             <h2 class="title"><a href="team-details.php?id=<?= $teams->tname ?>"><?= $teams->tname ?></a></h2>
                             <span><?= $teams->dasinaton ?></span>
                         </div>
                     </div>
                 </div>
             <?php } ?>

         </div>
     </div>
 </section>
 <!-- team-area-end -->


 <!-- Cours-area-end -->
 <?php require_once "inc/footer.php" ?>