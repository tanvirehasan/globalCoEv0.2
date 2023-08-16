 <?php require_once "inc/header.php" ?>
 <!-- breadcrumb-area -->
 <div class="divider" style="margin-top: 140px;"></div>

 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb-content">
                     <h2 class="title">Latest Blog</h2>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
         <div class="inner-blog-wrap">
             <div class="row justify-content-center">
                 <div class="col-71">
                     <div class="blog-post-wrap">
                         <div class="row">

                             <?php
                                $i = 1;
                                $blog_data = SelectData('blog', "limit 3");
                                while ($blogs = $blog_data->fetch_object()) { ?>

                                 <div class="col-md-6">
                                     <div class="blog-post-item-two">
                                         <div class="blog-post-thumb-two">
                                             <a href="blog-details.php?id=<?= $blogs->blog_title ?>"><img src="assets/img/blog/<?= $blogs->blog_image ?>" alt=""></a>
                                             <a href="blog.php?id=<?= $blogs->blog_title ?>" class="tag tag-two"><?= postcate('blog_cate_title', $blogs->blog_catagory) ?></a>
                                         </div>
                                         <div class="blog-post-content-two">
                                             <h2 class="title"><a href="blog-details.php?id=<?= $blogs->blog_title ?>"><?= $blogs->blog_title ?></a></h2>
                                             <p>
                                                 <?php
                                                    $blog_content = html_entity_decode($blogs->blog_text);
                                                    $blog_text = strip_tags($blog_content);
                                                    echo mb_strimwidth($blog_text, 0, 70, "."); ?>
                                             </p>
                                             <div class="blog-meta">
                                                 <ul class="list-wrap">
                                                     <li>
                                                         <a href="blog-details.php?id=<?= $blogs->blog_title ?>"><img src="assets/img/blog/blog_avatar01.png" alt="">Admin</a>
                                                     </li>
                                                     <li><i class="far fa-calendar"></i><?= date('F d, Y', strtotime($blogs->blog_date_time)) ?></li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             <?php } ?>



                         </div>
                         <div class="pagination-wrap mt-30">
                             <nav aria-label="Page navigation example">
                                 <ul class="pagination list-wrap">
                                     <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                     <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                                     <li class="page-item"><a class="page-link" href="#">4</a></li>
                                     <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                 </div>
                 <div class="col-29">
                     <aside class="blog-sidebar">
                         <div class="sidebar-search">
                             <form action="#">
                                 <input type="text" placeholder="Search Here . . .">
                                 <button type="submit"><i class="flaticon-search"></i></button>
                             </form>
                         </div>
                         <div class="blog-widget">
                             <h4 class="bw-title">Categories</h4>
                             <div class="bs-cat-list">
                                 <ul class="list-wrap">
                                     <li><a href="#">Business <span>(02)</span></a></li>
                                     <li><a href="#">Consulting <span>(08)</span></a></li>
                                     <li><a href="#">Corporate <span>(05)</span></a></li>
                                     <li><a href="#">Design <span>(02)</span></a></li>
                                     <li><a href="#">Fashion <span>(11)</span></a></li>
                                     <li><a href="#">Marketing <span>(12)</span></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="blog-widget">
                             <h4 class="bw-title">Recent Posts</h4>
                             <div class="rc-post-wrap">
                                 <div class="rc-post-item">
                                     <div class="thumb">
                                         <a href="blog-details.html"><img src="assets/img/blog/rc_post01.jpg" alt=""></a>
                                     </div>
                                     <div class="content">
                                         <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                         <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                     </div>
                                 </div>
                                 <div class="rc-post-item">
                                     <div class="thumb">
                                         <a href="blog-details.html"><img src="assets/img/blog/rc_post02.jpg" alt=""></a>
                                     </div>
                                     <div class="content">
                                         <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                         <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                     </div>
                                 </div>
                                 <div class="rc-post-item">
                                     <div class="thumb">
                                         <a href="blog-details.html"><img src="assets/img/blog/rc_post03.jpg" alt=""></a>
                                     </div>
                                     <div class="content">
                                         <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                         <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                     </div>
                                 </div>
                                 <div class="rc-post-item">
                                     <div class="thumb">
                                         <a href="blog-details.html"><img src="assets/img/blog/rc_post04.jpg" alt=""></a>
                                     </div>
                                     <div class="content">
                                         <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                         <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="blog-widget">
                             <h4 class="bw-title">Tags</h4>
                             <div class="bs-tag-list">
                                 <ul class="list-wrap">
                                     <li><a href="#">Finance</a></li>
                                     <li><a href="#">Consultancy</a></li>
                                     <li><a href="#">Data</a></li>
                                     <li><a href="#">Agency</a></li>
                                     <li><a href="#">Travel</a></li>
                                 </ul>
                             </div>
                         </div>
                     </aside>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- blog-area-end -->

 <?php require_once "inc/footer.php" ?>