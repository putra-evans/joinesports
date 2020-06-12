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
        <!-- <img src="<?php echo base_url('frontend/img/games/dota.png') ?>" alt="" height="30px" class="mr-2 mb-3"> -->
        <h4 class="font-weight-bold portal-title">TOURNAMENT</h4>
        <div class="portal-nav ml-auto">
            <a href="<?php echo base_url() ?>pubgm/player" class="mr-2 ">PLAYERS</a>
            <a href="<?php echo base_url() ?>pubgm/team" class="mr-2">TEAMS</a>
            <a href="<?php echo base_url() ?>pubgm/tournaments" class="active">TOURNAMENTS</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <div class="card bg-dark text-white mb-3">
                <img src="<?php echo base_url('frontend/img/pubg.jpeg') ?> " class="card-img" style="width: 633px; height: 280px">
                <div class="card-img-overlay d-flex flex-column" align="center">
                    <!-- <h5 class="font-weight-bold" style="margin-top: 150px">CREATE YOUR OWN TOURNAMENTS!</h5> -->
                    <?php

                    $_SESSION['jenis'] = "pubgm";
                    ?>
                    <!-- <a href="<?php echo base_url() ?>buattournaments" class="btn btn-primary btn-block" style="width: 300px; margin-left: 150px;">CREATE TOURNAMENTS</a> -->
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card bg-black mb-3">
                <div class="container">
                    <h6 class="text-lg-right text-primary font-weight-bold mt-3">ONGOING TOURNAMENTS</h6>
                    <?php
                    $now = date('Y-m-d');
                    // $koneksi = mysqli_connect('localhost', 'joinesports_root', 'egova13081996', 'joinesports_database');
                    $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');
                    $ambil = $koneksi->query("SELECT * FROM tb_tournament  where tournament_status='mulai' AND tournament_jenis='pubgm'");

                    while ($pecah = $ambil->fetch_object()) {
                    ?>
                        <a href="<?php echo site_url('pubgm/detailtournament/' . $pecah->tournament_id) ?>">
                            <div class="card bg-dark text-white mb-3 game-card">
                                <img src="<?php echo base_url('frontend/img/placeholder.jpg') ?>" class="card-img">
                                <div class="card-img-overlay d-flex flex-column">

                                    <h5 class="card-title mt-auto"><?php echo $pecah->tournament_nama ?></h5>
                                </div>
                            </div>
                        </a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="card bg-black mb-3" style="overflow-x:auto">
    <div class="container">
        <table class="table table-borderless table-esport">
            <thead class="bg-black">
                <tr>
                    <th colspan="2" class="mt-3 text-primary">UPCOMING TOURNAMENTS</th>
                    <th>SLOTS</th>
                    <th>MODE</th>
                    <th>LOCATION</th>
                    <th>START</th>
                    <th>FINISH</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // $koneksi = mysqli_connect('localhost', 'joinesports_root', 'egova13081996', 'joinesports_database');
                $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');
                $now = date('Y-m-d');
                $ambil = $koneksi->query("SELECT * FROM tb_tournament LEFT JOIN tb_achievement on tb_tournament.tournament_id=tb_achievement.achievement_idtournament where tournament_status='segera' AND tournament_jenis='pubgm' ORDER BY tournament_tglmulai DESC");
                while ($satu = $ambil->fetch_object()) {
                    $jml = $koneksi->query("SELECT COUNT(*) AS jumlah FROM tb_daftartournament  LEFT JOIN  tb_tournament on tb_tournament.tournament_id = tb_daftartournament.tournamentid WHERE tb_daftartournament.tournamentid= $satu->tournament_id");
                    $total = mysqli_fetch_array($jml);
                    if (($satu->tournament_status == 'segera') && ($satu->tournament_id != $satu->achievement_idtournament)) {
                ?>
                        <tr>
                            <td></td>
                            <td style="color: #e0b403"><a href="<?php echo site_url('pubgm/detailtournament/' . $satu->tournament_id) ?>"> <?php echo $satu->tournament_nama ?></a> </td>
                            <td><?php echo "{$total['jumlah']}";  ?>/<?php echo $satu->tournament_participan ?> </td>
                            <td><?php echo $satu->tournament_mode ?></td>
                            <td><?php echo $satu->tournament_lokasi ?></td>
                            <td><?php echo $satu->tournament_tglmulai ?></td>
                            <td><?php echo $satu->tournament_tglakhir ?></td>
                            <?php
                            if ($satu->tournament_participan == $total['jumlah']) {  ?>
                                <td class="text-danger"> <b><?php echo "FULL TOURNAMENT";
                                                        } else { ?>
                                <td class="text-primary">
                                    <a href="<?php echo site_url('pubgm/detailtournament/' . $satu->tournament_id) ?>">OPEN FOR REGISTRATION</a>
                                </td> <?php } ?>
                        </tr>
                <?php }
                } ?>

    </div>

    <!-- <?php foreach ($tournament as $tournament) : ?>
                    <?php
                    // $koneksi = mysqli_connect('localhost', 'joinesports_root', 'egova13081996', 'joinesports_database');
                    $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');
                    $now = date('Y-m-d');
                    $jml = $koneksi->query("SELECT COUNT(*) AS jumlah FROM tb_daftartournament  LEFT JOIN  tb_tournament on tb_tournament.tournament_id = tb_daftartournament.tournamentid WHERE tb_daftartournament.tournamentid= $tournament->tournament_id");
                    $total = mysqli_fetch_array($jml);
                    echo $tournament->tournament_tglmulai . "<br>";
                    echo $tournament->tournament_id . "<br>";
                    echo $tournament->achievement_idtournament . "<br>";

                    if (($tournament->tournament_status == 'segera') && ($tournament->tournament_id != $tournament->achievement_idtournament)) {
                    ?>
                        <tr>
                            <td></td>
                            <td><?php echo $tournament->tournament_nama ?> </td>
                            <td><?php echo "{$total['jumlah']}";  ?>/<?php echo $tournament->tournament_participan ?> </td>
                            <td><?php echo $tournament->tournament_mode ?></td>
                            <td><?php echo $tournament->tournament_lokasi ?></td>
                            <td><?php echo $tournament->tournament_tglmulai ?></td>
                            <?php
                            if ($tournament->tournament_participan == $total['jumlah']) {  ?>
                                <td class="text-danger"> <b><?php echo "FULL TOURNAMENT";
                                                        } else { ?>
                                <td class="text-primary">
                                    <a href="<?php echo site_url('tournaments/detail/' . $tournament->tournament_id) ?>">OPEN FOR REGISTRATION</a>
                                </td> <?php } ?>
                        </tr>
                <?php }
                endforeach; ?> -->

    </tbody>
    </table>
</div>
</div>
<div class="card bg-black mb-3" style="overflow-x:auto">
    <div class="container">
        <table class="table table-borderless table-esport">
            <thead class="bg-black">
                <tr>
                    <th colspan="2" class="mt-3 text-primary">PAST TOURNAMENTS</th>
                    <th>SLOTS</th>
                    <th>MODE</th>
                    <th>LOCATION</th>
                    <th>START</th>
                    <th>FINISH</th>
                    <th>WINNER</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tour as $tournament) :
                    if (($tournament->tournament_status == 'selesai') && ($tournament->tournament_id == $tournament->achievement_idtournament)) {  ?>

                        <tr>
                            <td></td>
                            <td style="color: #e0b403"><a href="<?php echo site_url('pubgm/detailtournament/' . $tournament->tournament_id) ?>"><?php echo $tournament->tournament_nama ?></a></td>
                            <td><?php echo $tournament->tournament_participan ?> </td>
                            <td><?php echo $tournament->tournament_mode ?></td>
                            <td><?php echo $tournament->tournament_lokasi ?></td>
                            <td><?php echo $tournament->tournament_tglmulai ?></td>
                            <td><?php echo $tournament->tournament_tglakhir ?></td>
                            <td class="text-primary"><img src="<?php echo base_url('upload/tim/' . $tournament->tim_image) ?>" style="width: 40px;height: 40px" />&nbsp; <a href="<?php echo site_url('pubgm/detailtim/' . $tournament->tim_id) ?>"><?php echo $tournament->tim_nama ?></a></td>
                        </tr>
                <?php }
                endforeach; ?>
            </tbody>
        </table>
    </div>
</div>