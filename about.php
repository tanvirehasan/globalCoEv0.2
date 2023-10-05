<?php require_once 'inc/header.php' ?>

<!-- breadcrumb-area -->
<div class="divider"></div>
<section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">About us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
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

<!-- about-area -->
<section class="about-area-eight pt-120 pb-120">
    <div class="container">
        <?php echo $postcontent = html_entity_decode(About_Us('about_text')); ?>
    </div>
</section>
<!-- about-area-end -->

<!-- choose-area -->
<section class="choose-area-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-content-three">
                    <div class="section-title-two white-title mb-30">
                        <span class="sub-title">What Specialty</span>
                        <h2 class="title">Our Values, Vision & Mission</h2>
                    </div>

                    <div class="accordion-wrap-two">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Our Values
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            <strong>1. Excellence</strong> <br>
                                            <strong>2. Integrity</strong><br>
                                            <strong>3. Innovation</strong><br>
                                            <strong>4. Teamwork</strong><br>
                                            <strong>5. Global Perspective</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Our Vision
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>The Global Center of Excellence envisions a world where individuals and organizations thrive through continuous learning and development. As a beacon of knowledge and innovation, we serve as the pinnacle of excellence, offering a diverse range of cutting-edge programs and certifications.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Our Mission
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Our mission is to empower learners worldwide, fostering a culture of growth, adaptability, and mastery. Through collaborative partnerships, we cultivate a community of experts, driving forward the frontiers of human potential. Together, we shape the future by equipping individuals and organizations with the skills, knowledge, and certifications they need to excel in an ever-evolving global landscape.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-img-three">
                    <img src="assets/img/images/inner_choose_img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose-area-end -->


<!-- brand-area -->
<div class="brand-area-six pt-80 pb-80">
    <div class="container">

        <h2 class="text-center py-5">Clients served by our CEO:</h2>
        <div class="row brand-active">
            <?php
            $data = SelectData('our_clients', '');
            while ($row = $data->fetch_object()) { ?>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="assets/img/brand/<?= $row->client_logo ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- brand-area-end -->





<!-- Our Vision, Mission and Values full  -->
<section class="team-area team-bg" data-background="assets/img/bg/team_bg.jpg">
    <div class="container">
        <div class="row">


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-5">
                <div class="Values p-5">
                    <h2>Our Values</h2>
                    <ol>
                        <li><strong>Excellence:</strong>We are committed to upholding the highest standards of quality, and our certifications reflect a true mastery of skills and knowledge.</li>
                        <li><strong>Integrity:</strong>We operate with honesty, transparency, and fairness in all our processes, ensuring trust in our certifications and maintaining the reputation of our organization.</li>
                        <li><strong>Innovation:</strong>We continuously strive to stay ahead of industry trends and technological advancements, ensuring that our certifications remain relevant and aligned with the evolving needs of professionals and industries.</li>
                        <li><strong>Teamwork:</strong>We foster a culture of collaboration and partnership, working closely with industry experts, employers, and professionals to co-create certifications that meet the ever-changing demands of the job market.</li>
                        <li><strong>Global Perspective:</strong>We recognize the interconnectedness of today's professional landscape and strive to offer certifications that have a global perspective, enabling professionals to thrive in international markets.</li>
                    </ol>
                </div>
            </div>


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 equal-height-cols">
                <div class="vision p-5" style="background-color: #00BFFF;">
                    <h2>Our Vision</h2>
                    <P>The Global Center of Excellence envisions a world where individuals and organizations thrive through continuous learning and development. As a beacon of knowledge and innovation, we serve as the pinnacle of excellence, offering a diverse range of cutting-edge programs and certifications.</P>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 equal-height-cols">
                <div class="mission p-5" style="background-color: #F7D358;">
                    <h2>Our Mission</h2>
                    <p>Our mission is to empower learners worldwide, fostering a culture of growth, adaptability, and mastery. Through collaborative partnerships, we cultivate a community of experts, driving forward the frontiers of human potential. Together, we shape the future by equipping individuals and organizations with the skills, knowledge, and certifications they need to excel in an ever-evolving global landscape.</p>
                </div>
            </div>

        </div>

    </div>
</section>





<!-- team-area -->
<section class="team-area team-bg" data-background="assets/img/bg/team_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Meet Our CEO</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <?php
            $team_data = SelectData('our_team', "ORDER BY tid DESC;");
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


<!-- testimonial-area -->
<!-- <section class="testimonial-area-three testimonial-area-six pt-120">
    <div class="container">
        <div class="row g-0 align-items-end">
            <div class="col-37">
                <div class="testimonial-img-three">
                    <img src="assets/img/images/h3_testimonial_img.jpg" alt="">
                </div>
            </div>
            <div class="col-63">
                <div class="testimonial-item-wrap-three" data-background="assets/img/bg/h3_testimonial_bg.png">
                    <div class="testimonial-active-three">
                        <div class="testimonial-item-three">
                            <div class="testimonial-content-three">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                <div class="testimonial-info">
                                    <h2 class="title">Mr.Robey Alexa</h2>
                                    <span>CEO, Gerow Agency</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item-three">
                            <div class="testimonial-content-three">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing.</p>
                                <div class="testimonial-info">
                                    <h2 class="title">Guy Hawkins</h2>
                                    <span>CEO, Gerow Agency</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-nav-three"></div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- testimonial-area-end -->


<?php require_once 'inc/footer.php' ?>