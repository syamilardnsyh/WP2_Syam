<?php
class Project extends CI_Controller {
    public function halaman_web() {
        // Load form helper and view
        $this->load->helper('url');
        $this->load->view('v_home');
    }
    
    public function home() {
        // Proses halaman website
        // Simpan data siswa ke database atau tempat penyimpanan lainnya

        // Tampilkan hasil submit
        $data['result'] = $_POST; // Anda dapat mengubah ini sesuai dengan metodenya

        $this->load->view('v_home', $data);
        $this->load->view('login_view', $data);
    }
}
?>