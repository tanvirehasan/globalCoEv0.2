  <?php
    require_once "inc/header.php";
    $teams_data = SelectData('our_team', "WHERE tname='{$_GET['id']}'");
    $team = $teams_data->fetch_object();
    ?>
  <!-- breadcrumb-area -->
  <div class="divider"></div>

  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-content">
                      <h2 class="title">Our Team</h2>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Team Details > <?= $team->tname ?></li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div class="breadcrumb-shape-wrap">
          <img src="assets/img/images/breadcrumb_shape01.png" alt="">
          <img src="assets/img/images/breadcrumb_shape02.png" alt="">
      </div>
  </section>
  <!-- breadcrumb-area-end -->

  <!-- team-details-area -->
  <section class="team-details-area pt-120 pb-120">
      <div class="container">
          <div class="row">
              <div class="col-lg-5">
                  <div class="team-details-info-wrap">
                      <div class="team-details-thumb">
                          <img src="assets/img/team/<?= $team->profile_photos ?>" width="100%">
                      </div>
                      <div class="team-details-info">
                          <ul class="list-wrap">
                              <li><i class="flaticon-phone-call"></i><?= $team->phone_no ?></li>
                              <li><i class="flaticon-mail"></i><?= $team->email_addres ?></li>
                              <li><i class="flaticon-location"></i><?= $team->address_s ?></li>
                          </ul>
                          <div class="td-info-bottom">
                              <a href="https://api.whatsapp.com/send?phone=<?= $team->phone_no ?>" class="btn btn-three">Contact With Me</a>
                              <a href="#" class="share-btn"><img src="assets/img/icons/share.svg" alt="">Share</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-7">
                  <div class="team-details-content">
                      <h2 class="title"><?= $team->tname ?></h2>
                      <span><?= $team->dasinaton ?></span>
                      <div><?php echo html_entity_decode($team->profile_text) ?></div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- team-details-area-end -->

  <?php require_once "inc/footer.php" ?>