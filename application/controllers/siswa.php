<?php
class siswa extends CI_Controller
{

    public function index()
{

        $this->load->view('view-form-mahasiswa2');
}

    public function cetak()
{
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'tanggallahir' => $this->input->post('tanggallahir'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'agama' => $this->input->post('agama')
];

        $this->load->view('view-data-mahasiswa', $data);
    }
}