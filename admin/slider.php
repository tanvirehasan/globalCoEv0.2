<?php 

  include "layout/header.php";
  // Insert 
  if (isset($_POST['slider_save'])) {

  $slider_title = htmlspecialchars($_POST['slider_title']);
  $short_text   = htmlspecialchars($_POST['short_text']);
  $btn_text     = htmlspecialchars($_POST['btn_text']);
  $btn_url      = htmlspecialchars($_POST['btn_url']);

  $target_dir = "../assets/img/banner/";
  $image      = $_FILES["image_file"]["name"];
  $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
  move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file);
  InsertData('a_slider', "slider_title,short_text,btn_text,btn_url,image_file", "'$slider_title', '$short_text','$btn_text',' $btn_url','$image'" );

  }

  // Delete 
  if (isset($_GET['delete'])) { 
    mysqli_query($conn, "DELETE FROM a_slider WHERE slider_id='{$_GET['delete']}' ");
    Reconect('slider.php');
  }

?>



<div class="card border-0 bg-light rounded-0 mb-3">
      <div class="card-header"><h5 class="text-uppercase" >Slider</h5></div>
      <div class="card-body">     
  
        <form action="" method="POST"  enctype="multipart/form-data">
          <table class="" style="width: 100%;" >
            <tr>
              <td><input type="text" name="slider_title" placeholder="Slider Title" class='form-control'></td>
              <td><input type="text" name="short_text" placeholder="short text" class='form-control'></td>
              <td><input type="text" name="btn_text" placeholder="Button Text" class='form-control'></td>
              <td><input type="text" name="btn_url"  placeholder="Button Link" class='form-control'></td>
              <td><input type="file" name="image_file" class='form-control' ></td>
              <td><button type="submit" name="slider_save" class="btn btn-success ms-2" >Save</button></td>
            </tr>
          </table>
        </form>   
         <table class="table table-striped mt-3"  style="width: 100%;">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Short Text</th>
                  <th scope="col">Button Text</th>
                  <th scope="col">Button URL</th>
                  <th scope="col">Image</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
              <?php $i=1;
                  $data = SelectData('a_slider','');
                  while($row = $data->fetch_object()){?>                 
                    <tr>          
                      <td><?=$i++?></td>
                      <td><?=$row->slider_title?></td>
                      <td><?=$row->short_text?></td>
                      <td><?=$row->btn_text?></td>
                      <td><?=$row->btn_url?></td>        
                      <td> <img src="../upload/slider/<?=$row->image_file?>" alt="" width="100"> </td>
                      <td><a href="">Edit</a> | <a href="slider.php?delete=<?=$row->slider_id?>">Delete</a></td>
                    </tr>   
              <?php } ?>
              

          </table>
      </div>
    </div>

<?php include "layout/footer.php"; ?>
