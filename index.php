 <?php require_once "inc/header.php" ?>
 <!-- slider-area -->
 <section class="slider-area">
     <div class="slider-active">
         <?php
            $data = SelectData('a_slider', '');
            while ($row = $data->fetch_object()) { ?>

             <div class="single-slider slider-bg" data-background="assets/img/banner/<?= $row->image_file ?>">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-7">
                             <div class="slider-content">
                                 <!-- <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">We Are Expert In This Field</span> -->
                                 <h3 class="title" data-animation="fadeInUp" data-delay=".4s"><?= $row->slider_title ?></h3>
                                 <p class="text-dark" data-animation="fadeInUp" data-delay=".6s"><?= $row->short_text ?></p>
                                 <a href="<?= $row->btn_url ?>" class="btn" data-animation="fadeInUp" data-delay=".8s"><?= $row->btn_text ?></a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="slider-shape">
                     <img src="assets/img/banner/banner_shape.png" alt="<?= $row->slider_title ?>" data-animation="zoomIn" data-delay=".8s">
                 </div>
             </div>
         <?php } ?>
     </div>
 </section>
 <!-- slider-area-end -->

 <!-- about-area -->
 <section class="about-area-three">
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-lg-6 col-md-9">
                 <div class="about-img-wrap-three">
                     <img src="assets/img/images/h2_about_img01.jpg" alt="about us" data-aos="fade-down-right" data-aos-delay="0">
                     <img src="assets/img/images/h2_about_img02.jpg" alt="about us" data-aos="fade-left" data-aos-delay="400">
                     <div class="experience-wrap" data-aos="fade-up" data-aos-delay="300">
                         <!-- <h2 class="title">18 <span>Years</span></h2>
                         <p>of International Experience in Learning & Development Sector.</p> -->
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="about-content-three">
                     <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                         <h2>About Us</h2>
                     </div>

                     <p class="p">
                         <?php
                            $postcontent = html_entity_decode(About_Us('about_text'));
                            $content = strip_tags($postcontent);
                            echo mb_strimwidth($content, 0, 406, "...");
                            ?>
                     </p>
                     <a href="about.php" class="btn mt-4" data-animation="fadeInUp" data-delay=".8s">Read More</a>
                 </div>
             </div>
         </div>
     </div>
     <div class="about-shape-wrap-two">
         <img src="assets/img/images/h2_about_shape01.png" alt="about us">
         <img src="assets/img/images/h2_about_shape02.png" alt="about us">
         <img src="assets/img/images/h2_about_shape03.png" alt="about us" data-aos="fade-left" data-aos-delay="500">
     </div>
 </section>
 <!-- about-area-end -->



 <!-- brand-area -->
 <div class="brand-aera-two pb-80">
     <div class="container">

         <h2 class="text-center py-5">Clients served by our CEO:</h2>
         <div class="row brand-active">
             <?php
                $data = SelectData('our_clients', 'limit 7');
                while ($row = $data->fetch_object()) { ?>
                 <div class="col-lg-12">
                     <div class="brand-item">
                         <img src="assets/img/brand/<?= $row->client_logo ?>" alt="<?= $row->client_name ?>">
                     </div>
                 </div>
             <?php } ?>
         </div>


     </div>
 </div>
 <!-- brand-area-end -->


 <!-- services-area -->
 <section class="services-area-two services-bg-two" data-background="assets/img/bg/services_bg02.jpg">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 col-md-8">
                 <div class="section-title-two mb-60 tg-heading-subheading animation-style3">
                     <span class="sub-title">What We Do For You</span>
                     <h2 class="title tg-element-title">Our Services</h2>
                 </div>
             </div>
             <div class="col-lg-6 col-md-4">
                 <div class="view-all-btn text-end mb-30">
                     <a href="services.php" class="btn">See All Services</a>
                 </div>
             </div>
         </div>

         <div class="row justify-content-center">

             <?php
                $teab_data = SelectData('catagory', "");
                while ($catagorys = $teab_data->fetch_object()) { ?>
                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                     <div class="services-item-two">
                         <div class="services-thumb-two">
                             <img src="assets/img/services/<?= $catagorys->thamnil ?>" alt="<?= $catagorys->cat_title ?>">
                             <div class="item-shape">
                                 <img src="assets/img/services/services_item_shape.png" alt="<?= $catagorys->cat_title ?>">
                             </div>
                         </div>
                         <div class="services-content-two">
                             <!-- <div class="icon">
                                 <i class="flaticon-piggy-bank"></i>
                             </div> -->
                             <h2 class="title"><a href="services.php?id=<?= $catagorys->cat_title ?>"><?= $catagorys->cat_title ?></a></h2>
                             <p><?php echo html_entity_decode($catagorys->short_text) ?></p>
                         </div>
                     </div>
                 </div>
             <?php } ?>

         </div>
     </div>
 </section>
 <!-- services-area-end -->



 <!-- overview-area -->
 <section class="overview-area pt-120 pb-120">
     <div class="overview-shape" data-aos="fade-left" data-aos-delay="200" data-background="assets/img/images/overview_shape.png"></div>
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-lg-6 col-md-10">
                 <div class="overview-img-wrap">
                     <img src="assets/img/images/overview_img01.jpg" alt="Why Training Matters">
                     <!-- <img src="assets/img/images/overview_img02.jpg" alt="" data-parallax='{"x" : 50 }'> -->
                     <img src="assets/img/images/overview_img_shape.png" alt="Why Training Matters">
                     <div class="icon">
                         <i class="flaticon-report-1"></i>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="overview-content">
                     <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                         <!-- <span class="sub-title">Certification</span> -->
                         <h2 class="title tg-element-title">Why Training Matters?</h2>
                     </div>

                     <p class="info-two">
                         Training matters because it ignites potential, fuels growth, and shapes excellence. It's the compass guiding ordinary individuals towards extraordinary achievements, fostering adaptability in a rapidly evolving world. Just as a blacksmith refines raw metal into a sharp blade, training hones minds and skills into tools for success.
                     </p>
                     <a href="why_training.php" class="btn mt-3" data-animation="fadeInUp" data-delay=".8s">Read More</a>

                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- overview-area-end -->

 <!-- choose-area -->
 <!-- <section class="choose-area jarallax choose-bg" data-background="assets/img/bg/choose_bg.jpg">
     <div class="choose-shape">
         <img src="assets/img/images/choose_shape.png" alt="" data-aos="fade-right" data-aos-delay="0">
     </div>
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6">
                 <div class="choose-content">
                     <div class="section-title-two white-title mb-20 tg-heading-subheading animation-style3">
                         <h2 class="title tg-element-title">We’ll Ensure You Always Get the Best Guidance.</h2>
                     </div>
                     <p>Morem ipsum dolor sit amet, consectetur adipiscing elita florai psum dolor sit amet, consecteture.Borem.</p>
                     <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="play-btn popup-video"><i class="fas fa-play"></i>Watch Video</a>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="skill-wrap wow fadeInRight" data-wow-delay=".2s">
                     <div class="section-title-two mb-15">
                         <span class="sub-title">Why We are The Best</span>
                         <h2 class="title">Smart & Great Finance For you Solutions</h2>
                     </div>
                     <p>Morem ipsum dolor sit amet consectedipiscing elita florai psum dolor sit amonsectet Borem ipsum consectetur.</p>
                     <div class="progress-wrap">
                         <div class="progress-item">
                             <h6 class="title">Consulting</h6>
                             <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                 <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: 85%"><span>85%</span></div>
                             </div>
                         </div>
                         <div class="progress-item">
                             <h6 class="title">Investment</h6>
                             <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                 <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 76%"><span>76%</span></div>
                             </div>
                         </div>
                         <div class="progress-item">
                             <h6 class="title">Business</h6>
                             <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                 <div class="progress-bar wow slideInLeft" data-wow-delay=".3s" style="width: 90%"><span>90%</span></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section> -->
 <!-- choose-area-end -->

 <!-- project-area -->
 <section class="project-area-two project-bg-two" data-background="assets/img/bg/project_bg02.jpg">
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title-two mb-40 tg-heading-subheading animation-style3">
                     <!-- <span class="sub-title">Complete Projects</span> -->
                     <h2 class="title tg-element-title">Some of our recently completed projects</h2>
                 </div>
             </div>
             <div class="col-lg-6 col-md-4">
                 <div class="view-all-btn text-end mb-30">
                     <a href="project.php" class="btn">See All Project</a>
                 </div>
             </div>
         </div>
     </div>
     <div class="container custom-container">
         <div class="row justify-content-center ">

             <?php
                $blog_data = SelectData('blog', "WHERE resources='2' ORDER BY blog_id DESC limit 3");
                while ($blogs = $blog_data->fetch_object()) { ?>

                 <div class="col-lg-4 col-md-6 col-sm-10">
                     <div class="blog-post-item-two">
                         <div class="blog-post-thumb-two">
                             <a href="blog-details.php?id=<?= $blogs->blog_title ?>"><img src="assets/img/blog/<?= $blogs->blog_image ?>" alt="<?= $blogs->blog_title ?>"></a>
                             <a href="blog.php" class="tag"><?= postcate('blog_cate_title', $blogs->blog_catagory) ?></a>
                         </div>
                         <div class="blog-post-content-two">
                             <h2 class="title"><a href="blog-details.php?id=<?= $blogs->blog_title ?>"><?php echo $blogs->blog_title ?></a></h2>
                             <p>
                                 <?php
                                    $blog_content = html_entity_decode($blogs->blog_text);
                                    $blog_text = strip_tags($blog_content);
                                    // echo mb_strimwidth($blog_text, 0, 70, ".");
                                    echo substrwords($blog_text, 100);  ?>
                             </p>
                         </div>
                     </div>
                 </div>

             <?php } ?>




         </div>
     </div>
 </section>
 <!-- project-area-end -->

 <!-- cta-area -->
 <section class="cta-area">
     <div class="container py-5 ">
         <div class="cta-inner-wrap" data-background="assets/img/bg/cta_bg.jpg">
             <div class="row align-items-center">
                 <div class="col-lg-9">
                     <div class="cta-content">
                         <div class="cta-info-wrap">
                             <div class="icon">
                                 <i class="flaticon-phone-call"></i>
                             </div>
                             <div class="content">
                                 <span>Call For More Info</span>
                                 <a href="tel:+13478561274">+13478561274</a>
                             </div>
                         </div>
                         <h2 class="title">Request a schedule to know more</h2>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="cta-btn text-end">
                         <a href="contact.php" class="btn">Contact Us</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- cta-area-end -->

 <!-- team-area -->
 <!-- <section class="team-area-two">
     <div class="team-shape">
         <img src="assets/img/team/team_shape.png" alt="" data-aos="fade-right" data-aos-delay="200">
     </div>
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title-two mb-45 tg-heading-subheading animation-style3">
                     <span class="sub-title">Expert People</span>
                     <h2 class="title tg-element-title">Our Dedicated Team <br> Members</h2>
                 </div>
             </div>
             <div class="col-lg-6 col-md-10">
                 <div class="section-top-content mb-30">
                     <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                 <div class="team-item-two">
                     <div class="team-thumb-two">
                         <a href="team-details.php"><img src="assets/img/team/h2_team_img01.jpg" alt=""></a>
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
                         <h2 class="title"><a href="team-details.php">Brooklyn Simmons</a></h2>
                         <span>Finance Advisor</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                 <div class="team-item-two">
                     <div class="team-thumb-two">
                         <a href="team-details.php"><img src="assets/img/team/h2_team_img02.jpg" alt=""></a>
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
                         <h2 class="title"><a href="team-details.php">Jenny Wilson</a></h2>
                         <span>Finance Advisor</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                 <div class="team-item-two">
                     <div class="team-thumb-two">
                         <a href="team-details.php"><img src="assets/img/team/h2_team_img03.jpg" alt=""></a>
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
                         <h2 class="title"><a href="team-details.php">Wade Warren</a></h2>
                         <span>Finance Advisor</span>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                 <div class="team-item-two">
                     <div class="team-thumb-two">
                         <a href="team-details.php"><img src="assets/img/team/h2_team_img04.jpg" alt=""></a>
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
                         <h2 class="title"><a href="team-details.php">Marvin McKinney</a></h2>
                         <span>Finance Advisor</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section> -->
 <!-- team-area-end -->

 <!-- testimonial-area -->
 <!-- <section class="testimonial-area-two testimonial-bg-two" data-background="assets/img/bg/h2_testimonial_bg.jpg">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-7">
                 <div class="section-title-two white-title text-center mb-50 tg-heading-subheading animation-style3">
                     <span class="sub-title">Our Testimonials</span>
                     <h2 class="title tg-element-title">What Customers Say’s About Our Gerow Services</h2>
                 </div>
             </div>
         </div>
         <div class="testimonial-item-wrap-two">
             <div class="row testimonial-active-two">
                 <div class="col-lg-6">
                     <div class="testimonial-item-two">
                         <div class="testimonial-content-two">
                             <div class="rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                             </div>
                             <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur.</p>
                             <div class="testimonial-avatar">
                                 <div class="avatar-thumb">
                                     <img src="assets/img/images/testi_avatar01.png" alt="">
                                 </div>
                                 <div class="avatar-info">
                                     <h2 class="title">Mr.Robey Alexa</h2>
                                     <span>CEO, Gerow Agency</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="testimonial-item-two">
                         <div class="testimonial-content-two">
                             <div class="rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                             </div>
                             <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur.</p>
                             <div class="testimonial-avatar">
                                 <div class="avatar-thumb">
                                     <img src="assets/img/images/testi_avatar02.png" alt="">
                                 </div>
                                 <div class="avatar-info">
                                     <h2 class="title">Robert Fox</h2>
                                     <span>CEO, Gerow Agency</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="testimonial-item-two">
                         <div class="testimonial-content-two">
                             <div class="rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                             </div>
                             <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur.</p>
                             <div class="testimonial-avatar">
                                 <div class="avatar-thumb">
                                     <img src="assets/img/images/testi_avatar01.png" alt="">
                                 </div>
                                 <div class="avatar-info">
                                     <h2 class="title">Mr.Robey Alexa</h2>
                                     <span>CEO, Gerow Agency</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="testimonial-nav-two"></div>
         </div>
     </div>
 </section> -->
 <!-- testimonial-area-end -->


 <!-- blog-area -->
 <section class="blog-area-two blog-bg-two" data-background="assets/img/bg/h2_blog_bg.jpg">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style3">
                     <span class="sub-title">News & Blogs</span>
                     <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                     <p>Stay in the loop with our freshest news and advancements. Dive into our latest updates to uncover insights into our ongoing journey of progress and innovation.</p>
                 </div>
             </div>
         </div>

         <div class="row justify-content-center">

             <?php
                $blog_data = SelectData('blog', "WHERE resources='0' ORDER BY blog_id DESC limit 3");
                while ($blogs = $blog_data->fetch_object()) { ?>

                 <div class="col-lg-4 col-md-6 col-sm-10">
                     <div class="blog-post-item-two">
                         <div class="blog-post-thumb-two">
                             <a href="blog-details.php?id=<?= $blogs->blog_title ?>"><img src="assets/img/blog/<?= $blogs->blog_image ?>" alt="<?= $blogs->blog_title ?>"></a>
                             <a href="blog.php" class="tag"><?= postcate('blog_cate_title', $blogs->blog_catagory) ?></a>
                         </div>
                         <div class="blog-post-content-two">
                             <h2 class="title"><a href="blog-details.php?id=<?= $blogs->blog_title ?>"><?php  echo substrwords($blogs->blog_title, 60); ?></a></h2>
                             <p>
                                 <?php
                                    $blog_content = html_entity_decode($blogs->blog_text);
                                    $blog_text = strip_tags($blog_content);
                                    // echo mb_strimwidth($blog_text, 0, 70, ".");
                                    echo substrwords($blog_text, 100);?>
                             </p>
                             <div class="blog-meta">
                                 <ul class="list-wrap">
                                     <li>
                                         <a href="blog-details.php?id=<?= $blogs->blog_title ?>"><img src="assets/img/blog/blog_avatar01.png" alt="User">Admin</a>
                                     </li>
                                     <li><i class="far fa-calendar"></i><?= date('F d, Y', strtotime($blogs->blog_date_time)) ?></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>

             <?php } ?>


         </div>
     </div>
 </section>
 <!-- blog-area-end -->



 <!-- Footer  -->
 <?php require_once "inc/footer.php" ?>