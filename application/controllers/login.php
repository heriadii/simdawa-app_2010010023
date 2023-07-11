<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }
    public function index()
    {
        /*
- Jika button btn_login diklik
- Panggil fungsi cek_login di LoginModel untuk mengambil nilai array $return yang berisi status
- Jika status cek_login benar, maka login berhasil
- Buat array data login yang menampung nilai id, peran dan nama
- Buat session dari array data login, kemudian arahkan ke controller home
- Tetapi jika status cek_login tidak bernilai benar
- Tampilkan status pesan cek login dan kembalikan ke controller login
- Tetapi jika button btn_login tidak diklik
- Tampilkan halaman login
*/
        if (isset($_POST['btn_login'])) {
            $cek_login = $this->LoginModel->cek_login();
            if ($cek_login['status'] == True) {
                $data = [
                    'id' => $cek_login['data_login']->id,
                    'peran' => $cek_login['data_login']->peran,
                    'nama' => $cek_login['nama_lengkap']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('pesan', $cek_login['pesan']);
                $this->session->set_flashdata('status', False);
                redirect('login');
            }
        } else {
            $data['title'] = "Halaman Login | SIMDAWA-APP";
            $this->load->view('login/login_view', $data);
        }
    }
}
