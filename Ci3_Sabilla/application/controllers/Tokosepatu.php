<?php
class Tokosepatu extends CI_Controller
    {
    function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Ludz_model');
        }

    public function index ()
        {
            $this->load->view('sepatu/view-tokosepatu');
            $this->load->library('form_validation');
        }

    public function cetak()
        {
        $this->form_validation->set_rules('np', 'Nama Pembeli', 'required',
            ['required' => 'Nama tidak boleh kosong']);

        $this->form_validation->set_rules('nohp', 'No Handphone', 'required',
            ['required' => 'No Handphone tidak boleh kosong']);

        $this->form_validation->set_rules('sepatu', 'Merk Sepatu', 'required',
            ['required' => 'Merk Sepatu harus di pilih']);
    
        $this->form_validation->set_rules('uk', 'Ukuran Sepatu', 'required',
            ['required' => 'Ukuran Sepatu harus di pilih']);
    
        if ($this->form_validation->run() != true)
            {
                $this->load->view('sepatu/view-tokosepatu');
            }

        else
            {
                $data = [
                    'np' => $this->input->post('np'),
                    'nohp' => $this->input->post('nohp'),
                    'sepatu' => $this->input->post('sepatu'),
                    'uk' => $this->input->post('uk'),
                    'harga' => $this->Ludz_model->proses($this->input->post('ms'))
                ];
    
                $this->load->view('sepatu/v_output', $data);
            }
        }

        
    }