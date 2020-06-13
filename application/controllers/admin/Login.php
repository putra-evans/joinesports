<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index()
    {
        // check_already_login();
        $is_login = $this->session->userdata("status");
        if ($is_login == NULL) {
            $this->load->view('admin/login');
        } else {
            redirect("admin/overview");
        }
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->user_model->cek_login("users", $where)->num_rows();
        if ($cek == 1) {
            $data_session = array(
                'nama' => $username,
                'status' => true
            );
            $this->session->set_userdata($data_session);

            redirect(base_url('admin/overview'));
        } else {
            //     echo "<script>
            //     alert('Userename atau Password salah');
            //     window.location=;
            //   </script>";
            redirect(base_url('admin/login'));
        }
    }

    function logout()
    {

        $params = array('nama', 'status');
        $this->session->unset_userdata($params);
        // session_destroy();
        redirect('login');
    }
}
