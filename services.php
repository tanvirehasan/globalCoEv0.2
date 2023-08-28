 <?php require_once "inc/header.php" ?>
 <!-- breadcrumb-area -->
 <div class="divider"></div>
 <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb-content">
                     <h2 class="title">Our Services</h2>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Services</li>
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




 <!-- services-area -->
 <?php if (!isset($_GET['id'])) { ?>
     <section class="services-area-six">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <div class="section-title-two mb-60">
                         <span class="sub-title">What We Do For You</span>
                         <h2 class="title">Our Services</h2>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="section-top-content mb-30">
                         <p>Discover excellence with Our Services. From expert consultations to seamless technical support, we cater to diverse needs across industries. Partner with us for transparent, innovative, and tailored solutions that drive your success forward.</p>
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
                                 <img src="assets/img/services/<?= $catagorys->thamnil ?>" alt="">
                                 <div class="item-shape">
                                     <img src="assets/img/services/services_item_shape.png" alt="">
                                 </div>
                             </div>
                             <div class="services-content-two">
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


     <!-- Cours-area -->
 <?php
    } else {
        $cat_data = SelectData('catagory', "WHERE cat_title='{$_GET['id']}'");
        $cata_datas = $cat_data->fetch_object(); ?>
     <section class="services-area-six">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <div class="section-title-two mb-60">
                         <span class="sub-title">What We Do For You</span>
                         <h2 class="title"><?= $cata_datas->cat_title ?></h2>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="section-top-content mb-30">
                         <p><?= html_entity_decode($cata_datas->short_text) ?></p>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                 <?php
                    $teab_data = SelectData('aa_our_services', "WHERE catg_id='{$cata_datas->cat_id}'");
                    while ($cours = $teab_data->fetch_object()) { ?>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                         <div class="services-item-two">
                             <div class="services-thumb-two">
                                 <img src="assets/img/services/<?= $cours->image ?>" alt="">
                                 <div class="item-shape">
                                     <img src="assets/img/services/services_item_shape.png" alt="">
                                 </div>
                             </div>
                             <div class="services-content-two">
                                 <h2 class="title"><a href="services-details.php?id=<?= $cours->title ?>"><?= $cours->title ?></a></h2>

                             </div>
                         </div>
                     </div>
                 <?php } ?>

             </div>
         </div>
     </section>
 <?php } ?>

 <!-- Cours-area-end -->
 <?php require_once "inc/footer.php" ?>