<?php include "layout/header.php"; ?>


<div class="row">
    <div class="col-12">
        <h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> Newsletter</h3>
    </div>
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
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    $client_data = SelectData('newsletter', "");
                    while ($client_datas = $client_data->fetch_object()) { ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $client_datas->email ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "layout/footer.php"; ?>