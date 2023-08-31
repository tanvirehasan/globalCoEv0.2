<?php
include "layout/header.php";
if (isset($_POST['add_team'])) {
    $fulltext = htmlspecialchars($_POST['profile_text']);
    InsertData('our_team', "tname, dasinaton, profile_text, profile_photos", "'{$_POST['tname']}', '{$_POST['dasinaton']}','$fulltext','{$_FILES['profile_photos']['name']}'");
}

if (isset($_POST['update_team'])) {
    $fulltext = htmlspecialchars($_POST['profile_text']);
    UpdateData('our_team', "tname='{$_POST['tname']}', dasinaton='{$_POST['dasinaton']}', profile_text='$fulltext' WHERE tid='{$_GET['tid']}'");
    Reconect('team.php');
}

if (isset($_GET['delete_id'])) {
    mysqli_query($conn, "DELETE FROM our_team WHERE tid='{$_GET['delete_id']}'");
    Reconect('team.php');
}
?>


<div class="row">
    <div class="col-10">
        <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> OUR SERVICES</h3>
    </div>
    <div class="col-2">
        <h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="popup()" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3>
    </div>
</div>


<div class="card p-5 mb-2">
    <form method="POST" action="" enctype="multipart/form-data">
        <?php
        if (isset($_GET['tid'])) {
            $teab_data = SelectData('our_team', "WHERE tid='{$_GET['tid']}' ");
            while ($team_data = $teab_data->fetch_object()) {
        ?>
                <label for="categoryname" class=" form-label" style="font-weight:700;">Name</label>
                <input type="text" class="form-control mb-4 " name="tname" value="<?= $team_data->tname ?>">

                <label for="categoryname" class=" form-label" style="font-weight:700;">Designation</label>
                <input type="text" class="form-control mb-4 " name="dasinaton" value="<?= $team_data->dasinaton ?>">

                <label for="categoryname" class=" form-label" style="font-weight:700;">Profile Photo</label>
                <input type="file" class="form-control mb-4 " name="profile_photos" value="<?= $team_data->profile_photos ?>">

                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text & Link</label>
                <textarea class="form-control" id="texteditro" name="profile_text"><?= $team_data->profile_text ?></textarea>

                <div class="float-right my-3"><button type="submit" name="update_team" class="btn btn-primary"> Submit</button></div>

            <?PHP }
        } else { ?>
            <div class="newservices">

                <label for="categoryname" class=" form-label" style="font-weight:700;">Name</label>
                <input type="text" class="form-control mb-4 " name="tname" require>

                <label for="categoryname" class=" form-label" style="font-weight:700;">Designation</label>
                <input type="text" class="form-control mb-4 " name="dasinaton" require>

                <label for="categoryname" class=" form-label" style="font-weight:700;">Profile Photo</label>
                <input type="file" class="form-control mb-4 " name="profile_photos" require>

                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text & Link</label>
                <textarea class="form-control" id="texteditro" name="profile_text" require></textarea>

                <div class="float-right my-3"><button type="submit" name="add_team" class="btn btn-primary"> Submit</button></div>


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
                        <th>icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    $teab_data = SelectData('our_team', "");
                    while ($team_datas = $teab_data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $team_datas->tname ?></td>
                            <td><?= $team_datas->dasinaton ?></td>
                            <td>
                                <a href="team.php?tid=<?= $team_datas->tid ?>" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="team.php?delete_id=<?= $team_datas->tid ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>
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