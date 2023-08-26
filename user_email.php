 <?php require_once "inc/header.php" ?>
 <!-- breadcrumb-area -->
 <div class="divider"></div>
 <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb-content">
                     <h2 class="title">Subscribe to Our Monthly Newsletter</h2>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Subscribe to Our Monthly Newsletter</li>
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

 <section>
     <?php
        if (isset($_POST['customer_email'])) {

            $news_email = htmlspecialchars($_POST['news_email']);
            $insert = InsertData('newsletter', "email", "'$news_email'");
            if ($insert == TRUE) {
                $mess = "Thank You! <br> Your Email Successfuly Listed";
            } else {
                $mess = "SORRY";
            } ?>

         <div class="row justify-content-center">
             <div class="col-md-6 text-center p-5">
                 <h3><?php if (isset($mess)) {
                            echo $mess;
                        } ?></h3>
             </div>
         </div>

     <?php } else {
            Reconect('index.php');
        } ?>


 </section>
 <!-- team-area-end -->


 <!-- Cours-area-end -->
 <?php require_once "inc/footer.php" ?>