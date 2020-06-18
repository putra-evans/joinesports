<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tournament extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tournament_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tournaments"] = $this->tournament_model->getAll();
        $this->load->view("admin/tournament/list", $data);
    }
    public function load_game()
    {
        $game = $_POST['game'];
        $data = $this->db->query("SELECT * FROM `tb_tournament` WHERE `tournament_jenis` = '$game'")->result();

        // $data = $this->db->get_where('tb_tournament', ['tournament_jenis' => $game])->result();
        foreach ($data as $tournament) {
            echo "
                <tr>
                    <td>
                        <font color='#000'>" . $tournament->tournament_jenis . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_nama . "</font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_status . "</font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_tglmulai . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_tglakhir . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_participan . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_mode . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_lokasi . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_rules . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_prize . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_prize1 . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_fee . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_region . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_format . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_organizer . " </font>
                    </td>
                    <td>
                        <font color='#000'>" . $tournament->tournament_detail . " </font>
                    </td>
                    <td width='150'>";
?>
            <a href="<?= site_url('admin/tournament/edit/' . $tournament->tournament_id) ?>" class='btn btn-small'>Edit</a>
            <a onclick="deleteConfirm(' <?= site_url('admin/tournament/delete/' . $tournament->tournament_id) ?>')" href='#!' class='btn btn-small text-danger'>Hapus</a>
<?php
            echo "
                    </td>
                </tr>
            ";
        }
    }
    public function add()
    {
        $tournament = $this->tournament_model;
        $validation = $this->form_validation;
        $validation->set_rules($tournament->rules());
        $data["pulau"] = $tournament->pulau();
        $this->load->view('admin/tournament/new_form', $data);

        if ($validation->run()) {
            $tournament->save();
            //$this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/tournament'));
        }

        //    $this->load->view("admin/tournament/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/tournament');

        $tournament = $this->tournament_model;
        $validation = $this->form_validation;
        $validation->set_rules($tournament->rules());

        if ($validation->run()) {
            $tournament->update();
            //  $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/tournament'));
        }

        $data["tournament"] = $tournament->getById($id);
        if (!$data["tournament"]) show_404();

        $this->load->view("admin/tournament/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->tournament_model->delete($id)) {
            redirect(site_url('admin/tournament'));
        }
    }
    public function ApiPulau()
    {
        $id = $_POST['pulau_id'];
        $data = $this->tournament_model->cariProvinsi($id);
        echo "<option value=''>-PILIH PROVINSI-</option>";
        foreach ($data as $a) {
            echo "
                <option value=" . $a->provinsi_id . ">" . $a->provinsi_nama . "</option>
            ";
        }
    }
    public function ApiKota()
    {
        $id = $_POST['kota_id'];
        $data = $this->tournament_model->cariKota($id);
        echo "<option value=''>-PILIH KOTA-</option>";
        foreach ($data as $a) {
            echo "
            <option value='" . $a->kota_nama . "'>" . $a->kota_nama . "</option>
        ";
        }
    }
}
