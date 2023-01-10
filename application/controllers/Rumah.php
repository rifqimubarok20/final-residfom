<?php

class Rumah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //validasi jika user belum login
        $this->data['CI'] = &get_instance();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_Admin');
        $this->load->model('M_gis');
        if ($this->session->userdata('laman') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['gis'] = $this->M_gis->get_data_gis('tbl_gis');

        $this->data['title_web'] = 'Data Lokasi ';
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('rumah/user_view', $this->data);
        $this->load->view('footer_view', $this->data);
    }

    public function tambah()
    {
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['user'] = $this->M_Admin->get_table('tbl_login');

        $this->data['title_web'] = 'Tambah Lokasi ';
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('rumah/tambah_view', $this->data);
        $this->load->view('footer_view', $this->data);
    }

    public function add()
    {
        // format tabel / kode baru 3 hurup / id tabel / order by limit ngambil data terakhir
        $id = htmlentities($this->input->post('id', TRUE));
        $kode = htmlentities($this->input->post('kode', TRUE));
        $wilayah = htmlentities($this->input->post('wilayah', TRUE));
        $kecamatan = (htmlentities($this->input->post('kecamatan', TRUE)));
        $nama = htmlentities($this->input->post('nama', TRUE));
        $lokasi = htmlentities($this->input->post('lokasi', TRUE));
        $latitude = htmlentities($this->input->post('latitude', TRUE));
        $longitude = htmlentities($this->input->post('longitude', TRUE));
        $data = array(
            'id' => $id,
            'kode' => $kode,
            'wilayah' => $wilayah,
            'kecamatan' => $kecamatan,
            'nama' => $nama,
            'lokasi' => $lokasi,
            'latitude' => $latitude,
            'longitude' => $longitude,
        );
        $this->M_gis->insertGis('tbl_gis', $data);

        $this->session->set_flashdata('pesan', '<div id="notifikasi"><div class="alert alert-success">
        <p> Daftar Lokasi telah berhasil !</p>
        </div></div>');
        redirect(base_url('rumah'));
    }


    public function edit()
    {
        if ($this->session->userdata('level') == 'Admin') {
            if ($this->uri->segment('3') == '') {
                echo '<script>alert("halaman tidak ditemukan");window.location="' . base_url('user') . '";</script>';
            }
            $this->data['idbo'] = $this->session->userdata('ses_id');
            $count = $this->M_gis->CountGisId('tbl_gis', 'id', $this->uri->segment('3'));
            if ($count > 0) {
                $this->data['gis'] = $this->M_gis->get_gisid_edit('tbl_gis', 'id', $this->uri->segment('3'));
            } else {
                echo '<script>alert("USER TIDAK DITEMUKAN");window.location="' . base_url('user') . '"</script>';
            }
        } elseif ($this->session->userdata('level') == 'Anggota') {
            $this->data['idbo'] = $this->session->userdata('ses_id');
            $count = $this->M_Admin->CountTableId('tbl_login', 'id_login', $this->uri->segment('3'));
            if ($count > 0) {
                $this->data['user'] = $this->M_Admin->get_tableid_edit('tbl_login', 'id_login', $this->session->userdata('ses_id'));
            } else {
                echo '<script>alert("USER TIDAK DITEMUKAN");window.location="' . base_url('user') . '"</script>';
            }
        }
        $this->data['title_web'] = 'Edit Lokasi ';
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('rumah/edit_view', $this->data);
        $this->load->view('footer_view', $this->data);
    }

    public function del()
    {
        if ($this->uri->segment('3') == '') {
            echo '<script>alert("halaman tidak ditemukan");window.location="' . base_url('rumah') . '";</script>';
        }

        $user = $this->M_gis->get_gisid_edit('tbl_gis', 'id', $this->uri->segment('3'));
        $this->M_gis->delete_gis('tbl_gis', 'id', $this->uri->segment('3'));

        $this->session->set_flashdata('pesan', '<div id="notifikasi"><div class="alert alert-warning">
		<p> Berhasil Hapus Lokasi !</p>
		</div></div>');
        redirect(base_url('rumah'));
    }
}
