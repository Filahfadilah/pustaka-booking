<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }
    
    public function cetak()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'program_studi' => $this->input->post('program_studi'),
            'semester' => $this->input->post('semester'),
            'ipk' => $this->input->post('ipk'),
        ];
        $this->load->view('view-data-mahasiswa', $data);
    }
}
?>
