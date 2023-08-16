<?php
include "layout/header.php";

if (isset($_POST['add_blog'])) {

    $title      = htmlspecialchars($_POST['title']);
    $fulltext   = htmlspecialchars($_POST['full_text']);
    $catg_id   = htmlspecialchars($_POST['catg_id']);

    $target_dir = "../assets/img/blog/";
    $image      = $_FILES["image"]["name"];
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    InsertData('blog', "blog_title, blog_image, blog_text, blog_catagory", "'$title', '$image','$fulltext','$catg_id'");
}

if (isset($_POST['update_service'])) {
    $fulltext = htmlspecialchars($_POST['full_text']);
    UpdateData('blog', "blog_title='{$_POST['title']}', Icon='{$_POST['Icon']}', blog_text='$fulltext' WHERE blog_id='{$_GET['service_id']}'");
    Reconect('services.php');
}

if (isset($_GET['delete_id'])) {
    mysqli_query($conn, "DELETE FROM blog WHERE blog_id='{$_GET['delete_id']}'");
    Reconect('blog.php');
}
?>


<div class="row">
    <div class="col-10">
        <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> Course</h3>
    </div>
    <div class="col-2">
        <h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="popup()" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3>
    </div>
</div>


<div class="card p-5 mb-2">
    <form method="POST" action="" enctype="multipart/form-data">
        <?php
        if (isset($_GET['service_id'])) {
            $teab_data = SelectData('aa_our_services', "WHERE service_id='{$_GET['service_id']}' ");
            while ($service = $teab_data->fetch_object()) {
        ?>
                <label for="categoryname" class=" form-label" style="font-weight:700;">Service Name</label>
                <input type="text" class="form-control mb-4 " name="title" value="<?= $service->title ?>" require>
                <label for="categoryname" class=" form-label" style="font-weight:700;">Service Icon</label>
                <input type="text" class="form-control mb-4 " name="Icon" value="<?= $service->Icon ?>" require>
                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text & Link</label>
                <textarea class="form-control" id="texteditro" name="full_text" require> <?= html_entity_decode($service->full_text) ?> </textarea>
                <div class="float-right my-3">
                    <button type="submit" name="update_service" class="btn btn-primary"> Update</button>
                </div>

            <?PHP }
        } else { ?>
            <div class="newservices">
                <label for="categoryname" class=" form-label" style="font-weight:700;">Title</label>
                <input type="text" class="form-control mb-4 " name="title" require>

                <label for="categoryname" class=" form-label" style="font-weight:700;">Blog Image</label>
                <input type="file" class="form-control mb-4 " name="image" require>

                <label for="categoryname" class=" form-label" style="font-weight:700;">Blog Catagory</label>
                <select class="form-control mb-4 " name="catg_id" id="">
                    <option>Select</option>
                    <?php
                    $teab_data = SelectData('blog_catagory', "");
                    while ($catagorys = $teab_data->fetch_object()) { ?>
                        <option value="<?= $catagorys->blog_cata_id ?>"><?= $catagorys->blog_cate_title ?></option>
                    <?php } ?>
                </select>

                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text & Link</label>
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
            <table id="data_table" class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
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
                            <td> <img src="../upload/blog/<?= $blogs->blog_image ?>" alt="" width="20%"> </td>
                            <td>
                                <a href="blog.php?id=<?=$blogs->id?>" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="blog.php?delete_id=<?=$blogs->id?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>
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