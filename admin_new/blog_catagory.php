<?php
    include "layout/header.php";

    // Insert 
    if (isset($_POST['add_blog_cat'])) {
        $title = htmlspecialchars($_POST['blog_cate_title'], ENT_QUOTES);
        InsertData('blog_catagory', "blog_cate_title", "'$title'");
    }

    // Update 
    if (isset($_POST['update_blog_cat'])) {
        $title= htmlspecialchars($_POST['blog_cate_title'], ENT_QUOTES);
        UpdateData('blog_catagory', "blog_cate_title='$title' WHERE blog_cata_id ='{$_GET['cata_id']}'");
        // Reconect('blog.php');
    }

    // Delete 
    if (isset($_GET['delete_id'])) {
        mysqli_query($conn, "DELETE FROM blog_catagory WHERE blog_cata_id ='{$_GET['delete_id']}'");
        Reconect('blog_catagory.php');
    }
?>


<div class="row">
    <div class="col-10">
        <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> Blog/Resource Catagory </h3>
    </div>
    <div class="col-2">
        <h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="popup()" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3>
    </div>
</div>


<!-- blog edit  -->
<div class="card p-5 mb-2">
    <form method="POST" action="" enctype="multipart/form-data">
        <?php
        if (isset($_GET['cata_id'])) {
            $cat_data = SelectData('blog_catagory', "WHERE blog_cata_id ='{$_GET['cata_id']}' ");
            while ($catagrys = $cat_data->fetch_object()) {        ?>
                <label for="categoryname" class=" form-label" style="font-weight:700;">Title</label>
                <input type="text" class="form-control mb-4 " name="blog_cate_title" value="<?= $catagrys->blog_cate_title ?>" require>
                <div class="float-right my-3">
                    <button type="submit" name="update_blog_cat" class="btn btn-primary"> Update</button>
                </div>
                <!-- blog cat add  -->
            <?php }
        } else { ?>
            <div class="newservices">
                <label for="categoryname" class=" form-label" style="font-weight:700;">Title</label>
                <input type="text" class="form-control mb-4 " name="blog_cate_title"  require>
                <div class="float-right my-3"><button type="submit" name="add_blog_cat" class="btn btn-primary"> Submit</button></div>
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
                        <th>Catagory</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    $blog_cat_data = SelectData('blog_catagory', "");
                    while ($cats = $blog_cat_data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $cats->blog_cate_title ?></td>
                            <td style="width: 150px;">
                                <a href="blog_catagory.php?cata_id=<?= $cats->blog_cata_id  ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="blog_catagory.php?delete_id=<?= $cats->blog_cata_id  ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>
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