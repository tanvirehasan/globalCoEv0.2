
<?php include "layout/header.php"; ?>

<div class="row">
  <div class="col-md-6">
    <!-- -=========== Header ========== -- -->
    <div class="card border-0 bg-light rounded-0 mb-3">
      <div class="card-header"><h5 class="text-uppercase" >Header</h5></div>
      <div class="card-body">      
        <h5 class="h5 mb-3">Logo</h5>
          <form action="/logoupdate" method="POST"  enctype="multipart/form-data">

            <div class="d-flex">
              <input type="file" name="image_file" class='form-control' >
              <button class="btn btn-success ms-2" >Update</button>
            </div>
          </form>
      </div>
    </div>
  </div>
   

  <div class="col-md-6">
    <!-- -- About us -- -->
    <div class="card border-0 bg-light rounded-0 mb-5 ">
      <div class="card-header"><h5 class="text-uppercase" >About us</h5></div>
      <form action="/aboutupdate" method="POST"  enctype="multipart/form-data">
        <div class="card-body">    
              <input type="text" name="about_title" class="form-control mb-3" value="{{about_us()->about_title}}" >
              <textarea name="about"  rows="8" class="form-control mb-3"></textarea>
              <input type="file" name="bg_image" class='form-control mb-3'>
              <input type="hidden" name="bg_image2" class='form-control mb-3'  value="{{about_us()->bg_image}}">                
        </div>
        <div class="card-footer text-end border-0">
          <button class="btn btn-success rounded-0" >Update</button>
        </div>
      </form>
    </div>   

  </div>

</div>


<?php include "layout/footer.php"; ?>


