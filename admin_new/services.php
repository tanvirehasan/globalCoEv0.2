<?php
include "layout/header.php";

if (isset($_POST['add_service'])) {

    $title      = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $fulltext   = htmlspecialchars($_POST['full_text'], ENT_QUOTES);
    $catg_id    = htmlspecialchars($_POST['catg_id'], ENT_QUOTES);

    $target_dir  = "../assets/img/services/";
    $image       = $_FILES["image"]["name"];
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $featured_image  = $_FILES["featured_image"]["name"];
    $target_file     = $target_dir . basename($_FILES["featured_image"]["name"]);
    move_uploaded_file($_FILES["featured_image"]["tmp_name"], $target_file);

    InsertData('aa_our_services', "title, image, featured_image, full_text, catg_id", "'$title','$image', '$featured_image','$fulltext','$catg_id'");
}


//Update -------------------------
if (isset($_POST['update_service'])) {

    $title      = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $fulltext   = htmlspecialchars($_POST['full_text'], ENT_QUOTES);
    $catg_id    = htmlspecialchars($_POST['catg_id'], ENT_QUOTES);
    $target_dir  = "../assets/img/services/";

    if ($_FILES["image"]["name"]!='') {
        $image       = $_FILES["image"]["name"];
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    } else {
        $image = $_POST['image1'];
    }

    if ($_FILES["featured_image"]["name"]!='') {
        $featured_image  = $_FILES["featured_image"]["name"];
        $target_file2     = $target_dir . basename($_FILES["featured_image"]["name"]);
        move_uploaded_file($_FILES["featured_image"]["tmp_name"], $target_file2);
    } else {
        $featured_image = $_POST['image2'];
    }

    $update = UpdateData('aa_our_services', " title='$title', full_text='$fulltext', catg_id='$catg_id', image='$image', featured_image='$featured_image'   WHERE service_id='{$_GET['service_id']}'");
    // Reconect('services.php');

    if ($update==true) {
        echo "success";
    }else{
        echo "Error: " . $update . "<br>" . $conn->error;
    }
}


//Delete-------------------------
if (isset($_GET['delete_id'])) {
    mysqli_query($conn, "DELETE FROM aa_our_services WHERE service_id='{$_GET['delete_id']}'");
    Reconect('services.php');
} ?>


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
            while ($service = $teab_data->fetch_object()) { ?>
            
                <label for="categoryname" class=" form-label" style="font-weight:700;">Course Name</label>
                <input type="text" class="form-control mb-4 " name="title" value="<?= $service->title ?>">
                <div class="row">
                    <div class="col-md-12">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Course Catagory</label>
                        <select class="form-control mb-4 " name="catg_id" id="">
                            <option value="<?= $service->catg_id ?>"><?= cours_tcate('cat_title', $service->catg_id) ?></option>
                            <?php
                            $teab_data = SelectData('catagory', "");
                            while ($catagorys = $teab_data->fetch_object()) { ?>
                                <option value="<?= $catagorys->cat_id ?>"><?= $catagorys->cat_title ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Thumbnail</label><br>
                        <img src="../assets/img/services/<?= $service->image ?>" alt="">
                        <input type="file" class="form-control my-3 " name="image">
                        <input type="text" value="<?php echo $service->image?>" name="image1" hidden>
                    </div>
                    <div class="col-md-6">
                        <label for="categoryname" class=" form-label" style="font-weight:700;">Featured Image</label><br>
                        <img src="../assets/img/services/<?= $service->featured_image ?>" alt="" style="width: 100%;">
                        <input type="file" class="form-control mb-4 " name="featured_image">
                        <input type="text" value="<?php echo $service->featured_image?>" name="image2" hidden>

                    </div>
                </div>
                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text</label>
                <textarea class="form-control" id="texteditro" name="full_text"> <?= html_entity_decode($service->full_text) ?></textarea>
                <div class="float-right my-3">
                    <button type="submit" name="update_service" class="btn btn-primary"> Update</button>
                </div>        


<?PHP }
        } else { ?>
<div class="newservices">
    <label for="categoryname" class=" form-label" style="font-weight:700;">Course Name</label>
    <input type="text" class="form-control mb-4 " name="title" require>

    <div class="row">
        <div class="col-md-6">
            <label for="categoryname" class=" form-label" style="font-weight:700;">Course Catagory</label>
            <select class="form-control mb-4 " name="catg_id" id="">
                <option>Select</option>
                <?php
                $teab_data = SelectData('catagory', "");
                while ($catagorys = $teab_data->fetch_object()) { ?>
                    <option value="<?= $catagorys->cat_id ?>"><?= $catagorys->cat_title ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-3">
            <label for="categoryname" class=" form-label" style="font-weight:700;">Thumbnail</label>
            <input type="file" class="form-control mb-4 " name="image">
        </div>
        <div class="col-md-3">
            <label for="categoryname" class=" form-label" style="font-weight:700;">Featured Image</label>
            <input type="file" class="form-control mb-4 " name="featured_image">
        </div>
    </div>
    <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text</label>
    <textarea class="form-control" id="texteditro" name="full_text" require></textarea>

    <div class="float-right my-3"><button type="submit" name="add_service" class="btn btn-primary"> Submit</button></div>
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
                    $teab_data = SelectData('aa_our_services', "ORDER BY service_id DESC ");
                    while ($service = $teab_data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $service->title ?></td>
                            <td> <img src="../assets/img/services/<?= $service->image ?>" alt="" width="20%"> </td>
                            <td>
                                <a href="services.php?service_id=<?= $service->service_id ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="services.php?delete_id=<?= $service->service_id ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>
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