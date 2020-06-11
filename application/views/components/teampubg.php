<?php
if (!isset($_SESSION['akun'])) {
    //header('location:login.php');
    echo (" <script>
    alert('Silahkan Login Terlebih Dahulu');
    window.location='" . base_url() . "';
  </script>");
} ?>
<div class="container top-section" style=" margin-top: 120px">
    <div class=" d-flex flex-row mb-2 portal-nav">
        <a class="" href="http://joinesports.net/pubg">
            <img src="<?php echo base_url('frontend/img/games/pubg.png') ?>" alt="" height="30px" class="mr-2 mb-3"></a>
        <h4 class="font-weight-bold portal-title">TEAM LIST</h4>
        <div class="portal-nav ml-auto">
            <a href="<?php echo base_url() ?>pubg/player" class="mr-2 ">PLAYERS</a>
            <a href="<?php echo base_url() ?>pubg/team" class="mr-2 active">TEAMS</a>
            <a href="<?php echo base_url() ?>pubg/tournaments">TOURNAMENTS</a>
        </div>
    </div>
</div>
<div class="container col-lg-2 embed-responsive">
    <?php
    $regis = $_SESSION['id'];
    $id = $regis->registrasi_id;
    $koneksi =     $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');

    $player = $koneksi->query("SELECT * FROM tb_player LEFT JOIN tb_posisi ON tb_player.player_id= tb_posisi.posisi_playerid WHERE player_registrasi='$id' AND player_jenis='pubg'");
    $nmplayer = $player->fetch_object();
    // elseif ($nmplayer->player_timid != '') { 
    //      } 
    $_SESSION['jenis'] = "pubg";

    if (isset($_SESSION['akun'])) {
        if ($nmplayer->posisi_timid != '') {
        } else { ?>
            <a href="<?php echo base_url() ?>daftarteam" class="btn btn-primary btn-block">Daftar Tim</a>
        <?php  } ?>
    <?php
    } else { ?>
        <a href="<?php echo base_url() ?>daftarteam" class="btn btn-primary btn-block">Daftar Tim</a>

    <?php }
    ?>
</div>
<!-- <div class="container col-lg-2 embed-responsive">
    <?php

    $_SESSION['jenis'] = "pubg";
    ?>
    <a href="<?php echo base_url() ?>daftarteam" class="btn btn-primary btn-block">Daftar Tim</a>

</div> -->
<div class="container mt-2">
    <div class="card bg-black mb-5" style="overflow-x:auto">
        <div class="container">
            <div class="row mt-3">
                <?php
                foreach ($team as $a) {
                    echo "
                <div class='col-lg-4'>
                    <a href=" . site_url('pubg/detailtim/' . $a->tim_id) . ">
                        <div class='card bg-dark text-white mb-3' style='height: 100px;'>
                            <div class='card-body d-flex align-items-center'>
                                <div class='col-4 col-md-3 p-1 d-flex'>
                                    <img src='" . base_url('upload/tim/' . $a->tim_image) . "' class='img-fluid mx-auto'
                                        style='max-height: 50px;'>
                                </div>
                                <div class='col-8 col-md-9'>
                                    <h6>" . $a->tim_nama . "</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                ";
                }

                ?>
            </div>
        </div>
    </div>
</div>