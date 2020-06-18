<div class="container top-section" style=" margin-top: 120px">
    <div class=" d-flex flex-row mb-2 portal-nav">
        <!-- <img src="<?php echo base_url('frontend/img/games/pubg.png') ?>" alt="" height="30px" class="mr-2 mb-3">
        <h4 class="font-weight-bold portal-title">PLAYER PROFILE</h4>
        <div class="portal-nav ml-auto" style="display: none">
            <a href="<?php echo base_url() ?>player" class="mr-2 active">PLAYERS</a>
            <a href="<?php echo base_url() ?>team" class="mr-2">TEAMS</a>
            <a href="<?php echo base_url() ?>tournaments">TOURNAMENTS</a>
        </div> -->
    </div>
</div>

<div class="card bg-black mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column">
                <div class="d-flex flex-row" style="margin-top: 10px">
                    <img src="<?php echo base_url('upload/player/' . $player->registrasi_image) ?>" alt="" style="width: 100px;height: 100px" class="">
                    <div class="d-flex flex-column ml-4">
                        <h4></h4>
                        <h4 class="text-secondary mt-n2"><?php echo $player->registrasi_nama ?></h4>
                        <div class="d-flex flex-row mt-3">
                            <?php if ($player->registrasi_yt == '') { ?>
                            <?php } else { ?>
                                <a href="https://youtube.com/<?php echo $player->registrasi_yt ?>" class="mr-3">
                                    <h3><i class="fab fa-youtube"></i></h3>
                                </a>
                            <?php } ?>
                            <?php if ($player->registrasi_fb == '') {
                            } else { ?>
                                <a href="https://www.facebook.com/<?php echo $player->registrasi_fb ?>/" class="mr-3">
                                    <h3><i class="fab fa-facebook-f"></i></h3>
                                </a>
                            <?php } ?>
                            <?php if ($player->registrasi_ig == '') {
                            } else { ?>
                                <a href="https://www.instagram.com/<?php echo $player->registrasi_ig ?>/">
                                    <h3><i class="fab fa-instagram"></i>
                                    </h3>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row text-secondary mt-2 mb-1 profile-details">
                    <small class="mr-3"><i class="fa fa-map-marker-alt"></i> <?php echo $player->registrasi_alamat ?></small>

                    <small class="mr-3"><i class="fa fa-user"></i><?php
                                                                    $tanggal = new DateTime($player->registrasi_tgllahir);
                                                                    $today = new DateTime('today');
                                                                    $y = $today->diff($tanggal)->y;
                                                                    echo  " " . $y ?> tahun</small>

                </div>
            </div>
            <div class="col-lg-6 d-flex flex-lg-column align-items-lg-end align-items-sm-start mt-3">
                <div class="text-lg-right">
                    <a href="<?php echo base_url('overview/edituser/' . $player->registrasi_id) ?>" class="btn btn-primary btn-block" style="padding: 10px">Edit</a>
                </div>

            </div>
        </div>
        <div>
            <table class="table table-borderless table-esport">
                <thead class="bg-black">
                    <tr>
                        <th scope="col" width="10px"></th>
                        <th scope="col">ID GAME</th>
                        <th scope="col">NICKNAME GAME</th>
                        <th scope="col">JENIS GAME</th>
                        <th scope="col"></th>
                        <th scope="col">TEAM</th>
                        <th scope="col" width="10px">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($players as $player) : ?>
                        <tr>
                            <td> <img src="<?php echo base_url('frontend/img/id.png') ?>" style="width: 20px;height: 20px">
                            </td>
                            <td> <?php echo $player->player_id ?> </td>
                            <td style="color: #e0b403"><a href="<?php
                                                                echo site_url($player->player_jenis . '/detailplayer/' . $player->player_id) ?>"><?php echo $player->player_nickname ?>
                                    <?php if ($player->player_cek == 'yes') { ?>
                                        <img src="<?php echo base_url('frontend/img/centang.png') ?>" style="width: 20px"><?php  } ?></a></td>
                            <td> <?php echo $player->player_jenis ?> </td>
                            <td> <img src="<?php echo base_url('upload/tim/' . $player->tim_image) ?>" style="width: 40px;height: 40px" /></td>
                            <td> <?php echo $player->tim_nama ?></td>
                            <td> <a href="<?php echo base_url('overview/edit/' . $player->player_id) ?>" class="btn btn-primary btn-block" style="padding: 10px">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php
                    foreach ($playerss as $player) : ?>
                        <tr>
                            <td> <img src="<?php echo base_url('frontend/img/id.png') ?>" style="width: 20px;height: 20px">
                            </td>
                            <td> <?php echo $player->player_id ?> </td>
                            <td style="color: #e0b403"><a href="<?php
                                                                echo site_url($player->player_jenis . '/detailplayer/' . $player->player_id) ?>"><?php echo $player->player_nickname ?>
                                    <?php if ($player->player_cek == 'yes') { ?>
                                        <img src="<?php echo base_url('frontend/img/centang.png') ?>" style="width: 20px"><?php  } ?></a></td>
                            <td> <?php echo $player->player_jenis ?> </td>
                            <td></td>
                            <td> Tidak Ada Tim</td>
                            <td> <a href="<?php echo base_url('overview/edit/' . $player->player_id) ?>" class="btn btn-primary btn-block" style="padding: 10px">Edit</a></td>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="card bg-black mb-5">
            <div class="container p-4">
                <h6>ACHIEVEMENTS</h6>
                <?php
                // $koneksi = mysqli_connect('localhost', 'joinesports_root', 'egova13081996', 'joinesports_database');
                $regis = $this->uri->segment(3);
                $koneksi = mysqli_connect('localhost', 'root', '', 'db_join');
                $ambilPlayer = $koneksi->query("SELECT player_id FROM tb_player WHERE player_registrasi = '$regis'")->fetch_assoc();
                // var_dump($ambilPlayer);
                $cekTim = $koneksi->query("SELECT * FROM `tb_posisi` WHERE posisi_playerid='$ambilPlayer[player_id]'")->fetch_assoc();
                $aciev = $koneksi->query("SELECT * FROM tb_achievement where achievement_idtim='$cekTim[posisi_timid]'");
                while ($pecah1 = $aciev->fetch_object()) {
                    if ($pecah1->achievement_idtim == $cekTim['posisi_timid']) {
                        $ambil = $koneksi->query("SELECT * FROM tb_player LEFT JOIN tb_posisi ON tb_player.player_id = tb_posisi.posisi_playerid LEFT JOIN tb_tim ON tb_tim.tim_id= tb_posisi.posisi_timid LEFT JOIN tb_achievement ON tb_tim.tim_id=tb_achievement.achievement_idtim LEFT JOIN tb_tournament ON tb_achievement.achievement_idtournament=tb_tournament.tournament_id where tb_achievement.achievement_idtim='$cekTim[posisi_timid]' AND tb_player.player_id='$ambilPlayer[player_id]'");
                        while ($pecah = $ambil->fetch_object()) {
                            $no = 1;
                            ?>
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
                                            <small class="text-secondary">team</small>
                                            <h6><?php echo $pecah->tim_nama ?></h6>
                                        </div>
                                        <div>
                                            <small class="text-secondary">prize</small>
                                            <h6>IDR. <?php echo $pecah->tournament_prize ?></h6>
                                        </div>
                                        <div style="background: #e0b403;border-radius: 10px; height: 100%; width: 100px;padding: 0px">
                                            <h6 style="color:#000000;text-align: center;margin-top: 15px"><?php echo $pecah->achievement_peringkat ?> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php }
                    } else {
                        $kosong = 'Tidak Ada';
                    }
                }
                if ($no != 1) {
                    echo 'Tidak Ada achivement';
                }
                ?>

            </div>
        </div>
    </div>

</div>