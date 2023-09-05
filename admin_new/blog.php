<?php
include "layout/header.php";

if (isset($_POST['add_blog'])) {

    $title      = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $fulltext   = htmlspecialchars($_POST['full_text'], ENT_QUOTES);
    $catg_id    = htmlspecialchars($_POST['catg_id'], ENT_QUOTES);
    $resouce    = htmlspecialchars($_POST['resouce_active'], ENT_QUOTES);

    $target_dir = "../assets/img/blog/";
    $image      = $_FILES["image"]["name"];
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    InsertData('blog', "blog_title, blog_image, blog_text, blog_catagory,resources", "'$title', '$image','$fulltext','$catg_id',$resouce ");
}

if (isset($_POST['update_blog'])) {
    $title    = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $fulltext = htmlspecialchars($_POST['full_text'], ENT_QUOTES);
    UpdateData('blog', "blog_title='$title', blog_catagory='{$_POST['catg_id']}', blog_text='$fulltext', resources='{$_POST['resouce_active']}' WHERE blog_id='{$_GET['blogs_id']}'");
    // Reconect('blog.php');
}

if (isset($_GET['delete_id'])) {
    mysqli_query($conn, "DELETE FROM blog WHERE blog_id='{$_GET['delete_id']}'");
    Reconect('blog.php');
}
?>


<div class="row">
    <div class="col-10">
        <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> Blog/Resource</h3>
    </div>
    <div class="col-2">
        <h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="popup()" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3>
    </div>
</div>


<!-- blog edit  -->
<div class="card p-5 mb-2">
    <form method="POST" action="" enctype="multipart/form-data">
        <?php
        if (isset($_GET['blogs_id'])) {
            $teab_data = SelectData('blog', "WHERE blog_id='{$_GET['blogs_id']}' ");
            while ($service = $teab_data->fetch_object()) {
        ?>
                <label for="categoryname" class=" form-label" style="font-weight:700;">Title</label>
                <input type="text" class="form-control mb-4 " name="title" value="<?= $service->blog_title ?>" require>

                <div class="row">
                    <div class="col-6">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Catagory</label>
                        <select class="form-control mb-4 " name="catg_id" id="">
                            <option value="<?= $service->blog_catagory ?>"><?= postcate('blog_cate_title', $service->blog_catagory) ?></option>
                            <?php
                            $teab_data = SelectData('blog_catagory', "");
                            while ($catagorys = $teab_data->fetch_object()) { ?>
                                <option value="<?= $catagorys->blog_cata_id ?>"><?= $catagorys->blog_cate_title ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="resouce" class=" form-label" style="font-weight:700;">Blog/Resource</label>
                        <select class="form-control mb-4 " name="resouce_active" id="resouce">
                            <option value="<?= $service->resources ?>">
                                <?php
                                switch ($service->resources) {
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


                            </option>
                            <option value="0">Blog</option>
                            <option value="1">Resource</option>
                            <option value="2">Projects</option>
                        </select>
                    </div>
                </div>

                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Details</label>
                <textarea class="form-control" id="texteditro" name="full_text" require> <?= html_entity_decode($service->blog_text) ?> </textarea>
                <div class="float-right my-3">
                    <button type="submit" name="update_blog" class="btn btn-primary"> Update</button>
                </div>


                <!-- new blog  -->
            <?php }
        } else { ?>
            <div class="newservices">
                <label for="categoryname" class=" form-label" style="font-weight:700;">Title</label>
                <input type="text" class="form-control mb-4 " name="title" require>

                <label for="categoryname" class=" form-label" style="font-weight:700;">Image</label>
                <input type="file" class="form-control mb-4 " name="image" require>

                <div class="row">
                    <div class="col-6">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Catagory</label>
                        <select class="form-control mb-4 " name="catg_id" id="">
                            <option>Select</option>
                            <?php
                            $teab_data = SelectData('blog_catagory', "");
                            while ($catagorys = $teab_data->fetch_object()) { ?>
                                <option value="<?= $catagorys->blog_cata_id ?>"><?= $catagorys->blog_cate_title ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="resouce" class=" form-label" style="font-weight:700;">Blog/Resource</label>
                        <select class="form-control mb-4 " name="resouce_active" id="resouce">
                            <option selected value="0">Blog</option>
                            <option value="1">Resource</option>
                            <option value="2">Projects</option>
                        </select>
                    </div>
                </div>

                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Details</label>
                <textarea class="form-control" id="texteditro" name="full_text" require></textarea>

                <div class="float-right my-3"><button type="submit" name="add_blog" class="btn btn-primary"> Submit</button></div>
            </div>
        <?php } ?>
    </form>
</div>


<div class="card">
    <div class="card-body">
        <div class="row align-items-center m-l-0">
            <div class="col-sm-6">
            </div>
        </div>
        <div class="table-responsive">
            <table id="data_table" class="table table-bordered table-striped mb-0" style="width: 100%;">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Catagory</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    $blog_data = SelectData('blog', "");
                    while ($blogs = $blog_data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $blogs->blog_title ?></td>
                            <td><?= postcate('blog_cate_title', $blogs->blog_catagory) ?></td>
                            <td style="width: 100px;"> <img src="../assets/img/blog/<?= $blogs->blog_image ?>" alt="" width="100%"> </td>
                            <td style="width: 150px;">
                                <a href="blog.php?blogs_id=<?= $blogs->blog_id ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="blog.php?delete_id=<?= $blogs->blog_id ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function popup() {
        $(".newservices").toggle();
    }
</script>

<?php include "layout/footer.php"; ?>