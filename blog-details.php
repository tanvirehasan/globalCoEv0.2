<?php
require_once "inc/header.php";
if (isset($_GET['id'])) {
    $b_id = htmlspecialchars($_GET['id']);
    $id = html_entity_decode($b_id);
    $blog_data = SelectData('blog', "where blog_title='{$id}' ");
    $blogs = $blog_data->fetch_object();
?>

    <!-- breadcrumb-area -->
    <div class="divider"></div>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title"><?= ($blogs->resources == '1') ? 'Resource' : 'Blog'; ?> Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= ($blogs->resources == '1') ? 'Resources' : 'Blog'; ?> > <?= $blogs->blog_title?> </li>
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

    <!-- blog-details-area -->
    <section class="blog-details-area pt-120 pb-120">
        <div class="container">
            <div class="blog-details-wrap">
                <div class="row justify-content-center">
                    <div class="col-71">
                        <div class="blog-details-thumb">
                            <img src="assets/img/blog/<?= $blogs->blog_image ?>" alt="" width="100%">
                        </div>
                        <div class="blog-details-content">
                            <h2 class="title"><?= $blogs->blog_title ?></h2>
                            <div class="blog-meta-three">
                                <ul class="list-wrap">
                                    <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                    <li><img src="assets/img/blog/blog_avatar01.png" alt=""> by <a href="blog-details.html">Kat Doven</a></li>
                                    <li><i class="fas fa-tags"></i> <a href="blog.html">Finance,</a><a href="blog.html">Business</a></li>
                                    <li><i class="flaticon-speech-bubble"></i><a href="blog-details.html">05 Comments</a></li>
                                </ul>
                            </div>

                            <div><?php echo html_entity_decode($blogs->blog_text); ?></div>

                            <div class="bd-content-bottom">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="post-tags">
                                            <h5 class="title">Tags:</h5>
                                            <ul class="list-wrap">
                                                <li><a href="#">Finance</a></li>
                                                <li><a href="#">Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="blog-post-share">
                                            <h5 class="title">Share:</h5>
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-avatar-wrap mb-65">
                            <div class="blog-avatar-img">
                                <a href="#"><img src="assets/img/blog/avatar.png" alt="img"></a>
                            </div>
                            <div class="blog-avatar-info">
                                <span class="designation">Author</span>
                                <h4 class="name"><a href="#">Parker Willy</a></h4>
                                <p>Finanappreciate your trust greatly Our clients choose dentace ducts because know we are the best area Awaitingare really.</p>
                            </div>
                        </div>
                        <div class="comments-wrap">
                            <h3 class="comments-wrap-title">02 Comments</h3>
                            <div class="latest-comments">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/blog/comment01.png" alt="img">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h6 class="name">Jessica Rose</h6>
                                                    <span class="date">December 27, 2023</span>
                                                </div>
                                                <p>Finanappreciate your trust greatly Our clients choose dentace ducts because know we are the best area Awaitingare really.</p>
                                                <a href="#" class="reply-btn">Reply</a>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comment02.png" alt="img">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h6 class="name">Parker Willy</h6>
                                                            <span class="date">December 28, 2023</span>
                                                        </div>
                                                        <p>Finanappreciate your trust greatly Our clients choose dentace ducts because know we are the best area Awaitingare really.</p>
                                                        <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Post a comment</h3>
                            <form action="#" class="comment-form">
                                <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
                                <div class="form-grp">
                                    <textarea name="comment" placeholder="Comment"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="url" placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp checkbox-grp">
                                    <input type="checkbox" id="checkbox">
                                    <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                </div>
                                <button type="submit" class="submit-btn">Submit Post</button>
                            </form>
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
                                        <?php
                                        $teab_data = SelectData('blog_catagory', "limit 10");
                                        while ($catagorys = $teab_data->fetch_object()) { ?>
                                            <li><a href="<?= $catagorys->blog_cata_id ?>"><?= $catagorys->blog_cate_title ?> <span>
                                                        <?= rowcount('blog', "where blog_catagory='{$catagorys->blog_cata_id}'") ?>
                                                    </span></a></li>
                                        <?php } ?>
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
    <!-- blog-details-area-end -->
<?php } ?>

<?php require_once "inc/footer.php" ?>