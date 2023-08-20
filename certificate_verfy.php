 <?php require_once "inc/header.php" ?>
 <!-- breadcrumb-area -->
 <div class="divider"></div>

 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb-content">
                     <h2 class="title">VERIFICATION</h2>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Verification</li>
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

 <!-- blog-area -->
 <section class="blog-area pt-120 pb-120">
     <div class="container">
         <?php
            if (!isset($_REQUEST['cid'])) { ?>
             <div class="">
                 <form action="" method="post">
                     <div class="text-center">
                         <input class="form-control p-3 rounded-pill text-center" name="cid" placeholder="Enter your certificate number Ex: PGD20230845" type="text">
                         <button class="btn btn-success mt-5">Check</button>
                     </div>
                 </form>
             </div>

             <?php } else {

                $certi_id = htmlspecialchars($_REQUEST['cid']);
                $certifiacte_data = SelectData('certificat_info', "where certificate_id='$certi_id' || full_name='$certi_id' ");
                if (mysqli_num_rows($certifiacte_data) > 0) {
                    while ($blogs = $certifiacte_data->fetch_object()) { ?>

                     <!-- resuelt  -->
                     <div class="row d-flex justify-content-center">
                         <div class="col-md-7">
                             <h3 class="text-uppercase">Certification Information</h3>
                             <table class="table mt-4">
                                 <tr>
                                     <td> <strong>Name:</strong> </td>
                                     <td> <strong>Md Tanvir Hasan <i class="fas fa-check-circle text-success"></i></strong></td>
                                 </tr>
                                 <tr>
                                     <td><strong>ID:</strong></td>
                                     <td>PGD20230856</td>
                                 </tr>
                                 <tr>
                                     <td><strong>Course:</strong></td>
                                     <td>Post Graduate Diploma in Soft Skills</td>
                                 </tr>
                                 <tr>
                                     <td><strong>Facilitator:</strong></td>
                                     <td>Quazi M. Ahmed</td>
                                 </tr>
                                 <tr>
                                     <td><strong>Date:</strong></td>
                                     <td>Aguest 16, 2023</td>
                                 </tr>
                             </table>
                             <a style="color:#687799;" href="certificate_verfy.php"><i class="fas fa-angle-left"></i> Back</a>
                         </div>


                         <div class="col-md-4 opacity-50">
                             <img class="mt-5" src="assets/img/icons/verfied.webp" width="70%" alt="">
                         </div>
                     </div>



         <?php  }
                } else {

                    echo "<div class='text-center'>Data Not found</div> <br> ";
                    echo "<a style='color:#687799;' href='certificate_verfy.php'><i class='fas fa-angle-left mt-5'></i> Back</a>";
                }
            }

            ?>











     </div>
 </section>
 <!-- blog-area-end -->

 <?php require_once "inc/footer.php" ?>