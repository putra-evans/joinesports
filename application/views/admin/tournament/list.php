<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="page-wrapper">
            <br>
            <h3>
                <center>Data Tournament</center>
            </h3> <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-4">
                        <div class="card-header" style="margin-left: 30px">
                            <a class="btn btn-info" style="width: 150px" href="<?php echo site_url('admin/tournament/add') ?>"> <i class="glyphicon glyphicon-plus"></i> Add New</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-header">
                            <table class="table-bordered">
                                <tr>
                                    <td>
                                        <select class="btn btn-info" name="game1" id="game1">
                                            <option value="">--Silahkan Pilih--</option>
                                            <option value="pb">POINT BLANK</option>
                                            <option value="ml">MOBILE LEGEND</option>
                                            <option value="pubgmobile">PUBG MOBILE</option>
                                            <option value="pubg">PUBG</option>
                                            <option value="dota">DOTA</option>
                                            <option value="ff">FREE FIRE</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body no-padding">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #000">
                                <th>Jenis</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Participan</th>
                                <th>Mode</th>
                                <th>Lokasi</th>
                                <th>Rules</th>
                                <th>Prize Koin</th>
                                <th>Prize Uang</th>
                                <th>Fee</th>
                                <th>Region</th>
                                <th>Format</th>
                                <th>Organizer</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="game">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/footer.php") ?>


    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js') ?>"></script>
    <!-- <script type="text/javascript">
        $(function() {
            $("#datatables").DataTable();
        });
    </script> -->

    <script>
        $("#game1").change(function() {
            var game1 = $('#game1').val();
            $.ajax({
                url: "<?= base_url('tampilApi') ?>",
                type: 'POST',
                data: {
                    'game': game1
                },
                dataType: 'HTML',
                success: function(data) {
                    $('#game').html(data)
                }
            });
        });
    </script>

</body>

</html>