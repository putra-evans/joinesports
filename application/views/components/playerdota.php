<div class="container top-section" style=" margin-top: 120px">
    <div class=" d-flex flex-row mb-2 portal-nav">
        <a class="" href="http://joinesports.net/dota">
        <img src="<?php echo base_url('frontend/img/games/dota.png') ?>" alt="" height="30px" class="mr-2 mb-3"></a>
        <h4 class="font-weight-bold portal-title">PLAYER LIST</h4>
        <div class="portal-nav ml-auto">
            <a href="<?php echo base_url() ?>dota/player" class="mr-2 active">PLAYERS</a>
            <a href="<?php echo base_url() ?>dota/team" class="mr-2">TEAMS</a>
            <a href="<?php echo base_url() ?>dota/tournaments">TOURNAMENTS</a>
        </div>
    </div>
</div>
<div class="container col-lg-2" style="margin-left: 110px">
    <?php
    $_SESSION['jenis'] = "dota";
    ?>
    <a href="<?php echo base_url() ?>daftarplayer" class="btn btn-primary btn-block">Daftar Player</a>
</div>
<div class="card bg-black" style="overflow-x:auto">
    <div class="container">
        <table class="table table-borderless table-esport">
            <thead class="bg-black">
                <tr>
                    <th scope="col" width=10px></th>
                    <th scope="col">ID</th>
                    <th scope="col">NICKNAME</th>
                    <th scope="col">NAME</th>
                    <th scope="col" width=10px></th>
                    <th scope="col">TEAM</th>
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
                                                            echo site_url('dota/detailplayer/' . $player->player_id) ?>"><?php echo $player->player_nickname ?></a></td>
                        <td> <?php echo $player->player_nama ?> </td>
                        <td> <img src="<?php echo base_url('upload/tim/' . $player->tim_image) ?>" style="width: 40px;height: 40px" /></td>
                        <td> <?php echo $player->tim_nama ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php
                foreach ($playerss as $player) : ?>
                    <tr>
                        <td> <img src="<?php echo base_url('frontend/img/id.png') ?>" style="width: 20px;height: 20px">
                        </td>
                        <td> <?php echo $player->player_id ?> </td>
                        <td style="color: #e0b403"><a href="<?php
                                                            echo site_url('dota/detailplayer/' . $player->player_id) ?>"><?php echo $player->player_nickname ?></a></td>
                        <td> <?php echo $player->player_nama ?> </td>
                        <td></td>
                        <td> Tidak Ada Tim</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>