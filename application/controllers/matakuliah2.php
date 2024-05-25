<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {

        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode matakuliah',
        'required|min_length[3]', [
                    'required' => 'Kode matakuliah Harus diisi',
                    'min_lenght' => 'Kode terlalu pendek'
                ]);
        
                $this->form_validation->set_rules('nama', 'Nama matakuliah',
        'required|min_length[3]', [
                    'required' => 'Nama matakuliah Harus diisi',
                    'min_lenght' => 'Nama terlalu pendek'
                ]);
        
                if ($this->form_validation->run() != true) {
                    $this->load->view('view-form-matakuliah');
                } else {
                    $data = [
                        'nama' => $this->input->post('nama'),
                        'nim' => $this->input->post('kode'),
                        'tanggallahir' => $this->input->post('date'),
                        'tempatlahir' => $this->input->post('tempat'),
                        'alamat' => $this->input->post('alamat'),
                        'jeniskelamin' => $this->input->post('jeniskelamin'),
                        'agama' => $this->input->post('agama')
                    ];
        
                    $this->load->view('view-data-matakuliah', $data);
                }
            }
        }