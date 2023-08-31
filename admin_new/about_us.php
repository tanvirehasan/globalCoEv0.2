<?php

include "layout/header.php";

$data = SelectData('about_us', "");
$row = $data->fetch_object();

// Insert 
if (isset($_POST['save'])) {
  $fulltext = htmlspecialchars($_POST['about_text']);
  UpdateData('about_us', "about_title='{$_POST['about_title']}', about_text='$fulltext', about_image='{$_FILES['about_image']['name']}'");
  Reconect('about_us.php');
}
?>



<div class="card border-0 bg-light rounded-0 mb-3">
  <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="text" name="about_title" value="<?= $row->about_title ?>" class='form-control mb-4'>
      <textarea name="about_text" id="texteditro"><?= $row->about_text ?></textarea>
      <input type="file" name="about_image" id="" class='form-control my-4'>
      <button name="save" type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</div>

<?php include "layout/footer.php"; ?>