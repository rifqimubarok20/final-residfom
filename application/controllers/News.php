<?php

class News extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		$this->data['CI'] = &get_instance();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_Admin');
		$this->load->model('m_news');
		if ($this->session->userdata('laman') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
	}

	public function detail($slug)
	{
		$this->load->model('m_news');
		$data["news_item"] = $this->m_news->get_news($slug);
		$this->data['idbo'] = $this->session->userdata('ses_id');
		$this->data['title_web'] = 'Detail News ';

		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('news/detail', $data);
		$this->load->view('footer_view', $this->data);
	}

	public function tambah()
	{
		$this->data['idbo'] = $this->session->userdata('ses_id');

		$this->data['title_web'] = 'Tambah Berita ';
		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('news/tambah_view', $this->data);
		$this->load->view('footer_view', $this->data);
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['news'] = $this->m_news->edit_news($where, 'tb_news')->result();
		$this->data['idbo'] = $this->session->userdata('ses_id');
		$this->load->view('header_view', $this->data);
		$this->load->view('sidebar_view', $this->data);
		$this->load->view('news/update', $data);
		$this->load->view('footer_view', $this->data);
	}


	public function create()
	{
		$title = $this->input->post('title');
		$body = $this->input->post('body');

		$data = array(
			'title'	=> $title,
			'body'	=> $body
		);
		$this->m_news->save_news($data, 'tb_news');
		redirect('dashboard');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_news->delete_news($where, 'tb_news');
		redirect('dashboard');
	}


	public function update()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$body = $this->input->post('body');

		$data = array(
			'title'	=> $title,
			'body'	=> $body
		);

		$where = array(
			'id'	=> $id
		);

		$this->m_news->update_news($where, $data, 'tb_news');
		redirect('dashboard');
	}
}
