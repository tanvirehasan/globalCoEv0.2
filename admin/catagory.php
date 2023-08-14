<?php
include "layout/header.php";

if (isset($_POST['add_catagory'])) {

    $title      = htmlspecialchars($_POST['title']);
    $fulltext   = htmlspecialchars($_POST['full_text']);

    $target_dir = "../assets/img/services/";
    $image      = $_FILES["image"]["name"];
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    InsertData('catagory', "cat_title, thamnil, short_text", "'$title', '$image','$fulltext'");
}

if (isset($_POST['update_service'])) {
    $fulltext = htmlspecialchars($_POST['full_text']);
    UpdateData('catagory', "cat_title='{$_POST['title']}', thamnil='{$_FILES["image"]["name"]}', full_text='$fulltext' WHERE service_id='{$_GET['service_id']}'");
    Reconect('catagory.php');
}

if (isset($_GET['delete_id'])) {
    mysqli_query($conn, "DELETE FROM catagory WHERE cat_id='{$_GET['delete_id']}'");
    Reconect('catagory.php');
}
?>


<div class="row">
    <div class="col-10">
        <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> Catagory</h3>
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
                    <button type="submit" name="update_catagory" class="btn btn-primary"> Update</button>
                </div>

            <?PHP }
        } else { ?>
            <div class="newservices">
                <label for="categoryname" class=" form-label" style="font-weight:700;">Catagory Name</label>
                <input type="text" class="form-control mb-4 " name="title" require>
                <label for="categoryname" class=" form-label" style="font-weight:700;">Thumbnail</label>
                <input type="file" class="form-control mb-4 " name="image" require>
                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text</label>
                <textarea class="form-control" id="texteditro" name="full_text" require></textarea>
                <div class="float-right my-3"><button type="submit" name="add_catagory" class="btn btn-primary"> Submit</button></div>
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
                    $teab_data = SelectData('catagory', "");
                    while ($catagory = $teab_data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $catagory->cat_title ?></td>
                            <td> <img src="../assets/img/services/<?= $catagory->thamnil ?>" alt="" width="20%"> </td>
                            <td>
                                <a href="catagory.php?catagory_id=<?= $catagory->cat_id ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="catagory.php?delete_id=<?= $catagory->cat_id ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>
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