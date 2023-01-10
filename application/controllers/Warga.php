<?php

class Warga extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('Warga_model');
    }
    
    public function index() {

        $data['judul'] = 'Daftar Warga';
        $data['warga'] = $this->Warga_model->getAllWarga(5, 0);

        if ($this->input->post('keyword')) {
            $data['warga'] = $this->Warga_model->searchDataWarga();
        }

        
        //config
        $config['base_url'] = 'http://localhost/capstone/warga/index';
        $config['total_rows'] = $this->Warga_model->countAllWarga();
        $config['per-page'] = 1;

        //initialize
        $this->pagination->initialize($config);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('warga/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $data['judul'] = 'Tambah Data warga';

        $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[35]');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('warga/create');
            $this->load->view('templates/footer');            
        }else {
            $this->Warga_model->createDataWarga();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('warga');
        }
    }

    public function delete($id) {
        $this->Warga_model->deleteDataWarga($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('warga');
    }

    public function detail($id){
        $data['judul'] = 'Tambah Data warga';
        $data['warga'] = $this->Warga_model->getWargaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('warga/detail', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data['judul'] = 'Update Data warga';
        $data['warga'] = $this->Warga_model->getWargaById($id);
        $data['jk'] = ['L','P'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[35]');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('warga/update', $data);
            $this->load->view('templates/footer');            
        }else {
            $this->Warga_model->UpdateDataWarga();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('warga');
        }
    }
}