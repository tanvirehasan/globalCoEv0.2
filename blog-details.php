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
                        <h2 class="title">
                            <?php
                            switch ($blogs->resources) {
                                case "0":
                                    echo "Blog";
                                    break;
                                case "1":
                                    echo "Resource";
                                    break;
                                case "2":
                                    echo "Project";
                                    break;
                                default:
                                    echo "Data Not Found";
                            }
                            ?> Details
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php
                                    switch ($blogs->resources) {
                                        case "0":
                                            echo "Blog";
                                            break;
                                        case "1":
                                            echo "Resource";
                                            break;
                                        case "2":
                                            echo "Projects";
                                            break;
                                        default:
                                            echo "Data Not Found";
                                    }
                                    ?>
                                    > <?= $blogs->blog_title ?> </li>
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
                                    <li><i class="far fa-calendar"></i><?= date('F d, Y', strtotime($blogs->blog_date_time)) ?></li>
                                    <li><img src="assets/img/blog/blog_avatar01.png" alt=""> by <a href="blog-details.html">Admin</a></li>
                                    <li><i class="fas fa-tags"></i> <a href="blog.php"><?= postcate('blog_cate_title', $blogs->blog_catagory) ?></a></li>
                                    <!-- <li><i class="flaticon-speech-bubble"></i><a href="blog-details.html">05 Comments</a></li> -->
                                </ul>
                            </div>

                            <div><?php echo html_entity_decode($blogs->blog_text); ?></div>
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
                                <h4 class="bw-title">Recent Posts</h4>
                                <div class="rc-post-wrap">
                                    <?php
                                    $datas = SelectData('blog', "limit 10");
                                    while ($recent_posts = $datas->fetch_object()) { ?>
                                        <div class="rc-post-item">
                                            <div class="thumb">
                                                <a href="blog-details.php?id=<?= $recent_posts->blog_title ?>"><img src="assets/img/blog/<?= $recent_posts->blog_image ?>" height="60px"></a>
                                            </div>
                                            <div class="content">
                                                <span class="date"><i class="far fa-calendar"></i><?= date('F d, Y', strtotime($recent_posts->blog_date_time)) ?></span>
                                                <h6 class="p-0 m-0"><a href="blog-details.php?id=<?= $recent_posts->blog_title ?>">
                                                        <?php
                                                        $rblog_content = html_entity_decode($recent_posts->blog_title);
                                                        $rblog_text = strip_tags($rblog_content);
                                                        echo mb_strimwidth($rblog_text, 0, 35, "..."); ?>
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                    <?php } ?>

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