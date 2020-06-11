<?php
if (!isset($_SESSION['akun'])) {
  // var_dump($_SESSION['akun']);
  // exit;
  //header('location:login.php');
  echo (" <script>
    alert('Silahkan Login Terlebih Dahulu');
    window.location='" . base_url() . "'; 
  </script>");
}
echo $_SESSION['akun'] ?>
<div class="container top-section" style=" margin-top: 120px">
  <div class=" d-flex flex-row mb-2 portal-nav">
    <!-- <img src="<?php echo base_url('frontend/img/games/pubg.png') ?>" alt="" height="30px" class="mr-2 mb-3"> -->
    <h4 class="font-weight-bold portal-title">TEAM PROFILE</h4>
    <div class="portal-nav ml-auto" style="display: none">
      <a href="<?php echo base_url() ?>player" class="mr-2 ">PLAYERS</a>
      <a href="<?php echo base_url() ?>team" class="mr-2 active">TEAMS</a>
      <a href="<?php echo base_url() ?>tournaments">TOURNAMENTS</a>
    </div>
  </div>
</div>
<div class="container">
  <div class="card bg-black mb-3">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column">
          <div class="d-flex flex-row">
            <img src="<?php echo base_url('upload/tim/' . $tim->tim_image) ?>" alt="" style="height: 100px;width: 100px" class="">
            <div class="d-flex flex-column ml-4">
              <h4 class="font-weight-bold"><?php echo $tim->tim_nama ?>
                <?php if ($tim->tim_cek == 'yes') { ?>
                  <img src="<?php echo base_url('frontend/img/centang.png') ?>" style="width: 25px"><?php  } ?></h4>
              <h1></h1>
              <h6 class="text-secondary mt-n2"><i class="fa fa-map-marker-alt"></i> <?php echo $tim->tim_lokasi ?> &nbsp <i class="fa fa-sign-in-alt"></i> <?php echo $tim->tim_tahunmasuk ?></h6>
              <div class="d-flex flex-row mt-3">
                <?php if ($tim->tim_yt == "") { ?>
                <?php } else { ?>
                  <a href="https://youtube.com/<?php echo $tim->tim_yt ?>" class="mr-3">
                    <h3><i class="fab fa-youtube"></i></h3>
                  </a>
                <?php } ?>
                <?php if ($tim->tim_fb == "") {
                } else { ?>
                  <a href="https://www.facebook.com/<?php echo $tim->tim_fb ?>/" class="mr-3">
                    <h3><i class="fab fa-facebook-f"></i></h3>
                  </a>
                <?php } ?>
                <?php if ($tim->tim_ig == "") {
                } else { ?>
                  <a href="https://www.instagram.com/<?php echo $tim->tim_ig ?>/">
                    <h3><i class="fab fa-instagram"></i>
                    </h3>
                  </a>
                <?php } ?>
              </div>
              <?php
              if (!isset($_SESSION['akun'])) { ?>
                <a href="<?php echo base_url() ?>gabungtim" class="btn btn-primary btn-block">JOIN TIM</a>
                <?php } else {
                if ($cekid->posisi_timid == '') {
                  $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');
                  $hitung = $koneksi->query("SELECT COUNT(*)AS jumlah FROM tb_posisi where posisi_timid=$tim->tim_id AND posisi_nama NOT IN ('Cadangan')");
                  $total = mysqli_fetch_array($hitung);
                  $hitung1 = $koneksi->query("SELECT COUNT(*)AS jumlah1 FROM tb_posisi where posisi_timid=$tim->tim_id AND posisi_nama IN ('Cadangan')");
                  $total1 = mysqli_fetch_array($hitung1);
                  $regis = $_SESSION['id'];
                  $idr = $regis->registrasi_id;
                  $request = $koneksi->query("SELECT * FROM tb_player LEFT JOIN tb_request ON tb_player.player_id=tb_request.request_playerid WHERE player_registrasi=$idr AND tb_request.request_jenis='$tim->tim_jenis'");
                  while ($test = $request->fetch_object()) {
                    if ($test->request_id == '') {
                      $cek = 0;
                    } elseif ($test->request_id != '') {
                      $cek1 = 1;
                    }
                  }

                  if (($tim->tim_jenis == 'pubg') || ($tim->tim_jenis == 'ff') || ($tim->tim_jenis == 'pubgm')) {
                    if (($total['jumlah'] == 4)) {
                      echo "  <a href='#' class='btn btn-primary btn-block' style='padding:10px;'>TIM FULL</a> ";
                      if (($total1['jumlah1'] == 3)) {
                        echo "  <a href='#' class='btn btn-primary btn-block' style='padding:10px;'>CADANGAN FULL</a> ";
                      } else { ?>
                        <a onclick="gabungConfirm('<?php echo base_url('gabungtim/cadangan/' .  $tim->posisi_id) ?>')" href="#!" data-toggle="modal" data-target="#gabungModal" class="btn btn-primary btn-block" style="padding: 10px">CADANGAN</a>
                      <?php }
                    } else {
                      if ($cek1 == 1) { ?>
                        <a href="#" class="btn btn-primary btn-block">JOIN TIM</a>
                      <?php  } else {
                      ?>
                        <a href="<?php echo base_url() ?>gabungtim" class="btn btn-primary btn-block">JOIN TIM</a>
                    <?php }
                    } ?>
                    <?php  } elseif (($tim->tim_jenis == 'ml') || ($tim->tim_jenis == 'dota') || ($tim->tim_jenis == 'pb')) {
                    if (($total['jumlah'] >= 5)) {
                      echo "  <a href='#' class='btn btn-primary btn-block' style='padding:10px;'>TIM FULL</a> ";
                      if (($total1['jumlah1'] == 3)) {
                        echo "  <a href='#' class='btn btn-primary btn-block' style='padding:10px;'>CADANGAN FULL</a> ";
                      } else { ?>
                        <a onclick="gabungConfirm('<?php echo base_url('gabungtim/cadangan/' .  $tim->posisi_id) ?>')" href="#!" data-toggle="modal" data-target="#gabungModal" class="btn btn-primary btn-block" style="padding: 10px">CADANGAN</a>
                      <?php }
                    } else {
                      if ($cek1 == 1) { ?>
                        <a href="#" class="btn btn-primary btn-block">JOIN TIM</a>
                      <?php  } else {
                      ?>
                        <a href="<?php echo base_url() ?>gabungtim" class="btn btn-primary btn-block">JOIN TIM</a>
              <?php }
                    }
                  }
                }
              } ?>
            </div>

          </div>
        </div>
        <div class="col-lg-6 d-flex flex-lg-column align-items-lg-end align-items-sm-start mt-3">
          <div class="text-lg-right">
            <h4>About</h4>
          </div>
          <div>
            <p style="text-align: right"><?php echo $tim->tim_about ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card bg-black mb-3">
    <div class="container p-4">
      <h6>ROSTERS</h6>
      <div class="d-flex mt-3 pl-2" style="overflow-x:auto">
        <?php
        $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');
        $ambil = $koneksi->query("SELECT * FROM tb_posisi LEFT JOIN tb_player ON tb_posisi.posisi_playerid=tb_player.player_id LEFT JOIN tb_registrasi ON tb_player.player_registrasi =tb_registrasi.registrasi_id WHERE player_jenis='$tim->tim_jenis' and posisi_timid=$tim->tim_id AND posisi_nama NOT IN ('Cadangan') ORDER BY posisi_nama='Leader' DESC");
        if ($ambil) {
          while ($player = $ambil->fetch_object()) {  ?>
            <a href="<?php echo site_url(substr($player->player_jenis, 0, -1) . '/detailplayer/' . $player->player_id) ?>" class="text-white">
              <div class="card mx-2" style="background-color: #111111; width: 12rem;">
                <img src="<?php echo base_url('upload/player/' . $player->registrasi_image) ?>" alt="" style="height: 10rem; object-fit: cover;">
                <div class="card-body text-center">
                  <h6 class="font-weight-bold"><?php echo $player->player_nickname ?></h6>
                  <small class="text-secondary text-capitalize"><?php echo $player->registrasi_nama ?></small>
                  <hr>
                  <h6><?php echo $player->posisi_nama ?></h6>
                </div>
              </div>
            </a>
        <?php }
        } else {
          echo "<h6 class='mx-auto'>Belum Memiliki Anggota Tim</h6>";
        }
        ?>
      </div>
    </div>
  </div>

  <div class="card bg-black mb-5">
    <div class="container p-4">
      <h6>ACHIEVEMENTS</h6>
      <?php
      $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');
      $ambil = $koneksi->query("SELECT * FROM tb_tim LEFT JOIN tb_achievement ON tb_tim.tim_id=tb_achievement.achievement_idtim LEFT JOIN tb_tournament ON tb_achievement.achievement_idtournament=tb_tournament.tournament_id where tb_tim.tim_id=$tim->tim_id");
      while ($pecah = $ambil->fetch_object()) {
        if ($pecah->achievement_id == '') {
        } else { ?>
          <div class="card achievements p-2 mt-2">
            <div class="row">
              <div class="col-lg-6 d-flex flex-row justify-content-around align-items-center">
                <div>
                  <img src="<?php echo base_url('upload/tim/' . $pecah->tim_image) ?>" alt="" height="50vw">
                </div>
                <div>
                  <small class="text-secondary">event</small>
                  <h6><?php echo $pecah->tournament_nama ?></h6>
                </div>
                <div>
                  <small class="text-secondary">date</small>
                  <h6><?php echo $pecah->tournament_tglmulai ?></h6>
                </div>
              </div>
              <div class="col-lg-6 d-flex flex-row justify-content-around align-items-center">
                <div>
                  <small class="text-secondary">prize</small>
                  <h6>IDR. <?php echo $pecah->tournament_prize ?></h6>
                </div>
                <div>
                  <small class="text-secondary">position</small>
                  <h6 class="text-primary mt-2 font-weight-bold"><?php echo $pecah->achievement_peringkat ?>st</h6>
                </div>
              </div>
            </div>
          </div>
      <?php   }
      }
      ?>
    </div>
  </div>
</div>

<script>
  function gabungConfirm(url) {
    $('#btn-gabung').attr('href', url);
    $('#gabunhModal').modal();
  }
</script>