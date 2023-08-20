 <?php

    require_once "inc/header.php";
    $teab_data = SelectData('aa_our_services', "WHERE title='{$_GET['id']}'");
    $cours = $teab_data->fetch_object();
    ?>
 <!-- breadcrumb-area -->
 <div class="divider"></div>
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb-content">
                     <h2 class="title">Course Details</h2>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?= $cours->title ?></li>
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


 <!-- services-details-area -->
 <section class="services-details-area pt-120 pb-120">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-71 order-0 order-lg-2">
                 <div class="services-details-wrap">
                     <div class="services-details-content">
                         <h2 class="title"><?= $cours->title?></h2>
                         <img class="py-5" src="assets/img/services/<?= $cours->featured_image?>" alt="" width="100%">
                         <div class="ervices_details">
                             <?php echo html_entity_decode($cours->full_text) ?>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-29">
                 <aside class="services-sidebar">
                     <div class="services-widget">
                         <h4 class="sw-title">Our Services</h4>
                         <div class="services-cat-list">
                             <ul class="list-wrap">

                                 <?php
                                    $cat_data = SelectData('catagory', "");
                                    while ($catas = $cat_data->fetch_object()) { ?>
                                     <li class="<?= ($catas->cat_id == $cours->catg_id) ? 'active' : ''; ?>"><a href="services.php?id=<?= $catas->cat_title ?>"><?= $catas->cat_title ?> <i class="flaticon-right-arrow"></i></a></li>
                                 <?php } ?>

                             </ul>
                         </div>
                     </div>
                     <div class="services-widget">
                         <h4 class="sw-title">Brochure</h4>
                         <div class="services-brochure-wrap">
                             <p>when an unknown printer took ga lley offer typey anddey.</p>
                             <a href="<?= $cours->doc_pdf_url ?>" target="_blank" download class="download-btn"><i class="far fa-file-pdf"></i>PDF. Download</a>
                         </div>
                     </div>
                     <!-- <div class="services-widget services-sidebar-contact">
                         <h4 class="title">If You Need Any Help Contact With Us</h4>
                         <a href="tel:0123456789"><i class="flaticon-phone-call"></i> +91 705 2101 786</a>
                     </div> -->
                     <div class="services-widget">
                         <h4 class="sw-title">Get a Free Quote</h4>
                         <div class="services-widget-form">
                             <form action="#">
                                 <div class="form-grp">
                                     <input type="text" placeholder="Your Name">
                                 </div>
                                 <div class="form-grp">
                                     <input type="email" placeholder="E-mail Address">
                                 </div>
                                 <div class="form-grp">
                                     <textarea name="message" placeholder="Type Your Message"></textarea>
                                 </div>
                                 <button type="submit" class="submit-btn">Send Message</button>
                             </form>
                         </div>
                     </div>
                 </aside>
             </div>
         </div>
     </div>
 </section>
 <!-- services-details-area-end --> 

 <?php require_once "inc/footer.php" ?>