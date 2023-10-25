<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Study_model');
	}

	public function index()
	{
		$data['pelajar'] = $this->Study_model->get_pelajar();
		$this->load->view('top');
		$this->load->view('table', $data);
		$this->load->view('bottom');
	}

	public function tambah() {
		$this->load->view('top');
		$this->load->view('tambah');
		$this->load->view('bottom');
	}

	public function add() {
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jurusan' => $this->input->post('jurusan'),
			'email' => $this->input->post('email')
		);
		
		if($this->db->insert('tbl_pelajar', $data)) {
			$this->session->set_flashdata("success","Berhasil menambahkan Data");
			echo "<script>window.location.href='".base_url()."Study"."';</script>";
		}else{ 
			$this->session->set_flashdata("error","Gagal menambahkan Data");
			echo "<script>window.location.href='".base_url()."Study"."';</script>";
		}
	}

	public function edit($nis="") {
		$data['pelajar'] = $this->db->get_where('tbl_pelajar', array('nis'=>$nis),1)->row();
		$this->load->view('top');
		$this->load->view('edit', $data);
		$this->load->view('bottom');
	}

	public function update() {
		$data = array(
			
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jurusan' => $this->input->post('jurusan'),
			'email' => $this->input->post('email')
		);
			$this->db->where('nis', $this->input->post('nis'));
		if($this->db->update('tbl_pelajar', $data)) {
			$this->session->set_flashdata("success","Berhasil mengubah Data");
			echo "<script>window.location.href='".base_url()."Study"."';</script>";
		}else{ 
			$this->session->set_flashdata("error","Gagal mengubah Data");
			echo "<script>window.location.href='".base_url()."Study"."';</script>";
		}
	}

	public function hapus($nis){
		if($this->db->delete('tbl_pelajar', array('nis'=>$nis))){
			$this->session->set_flashdata("success","Berhasil menghapus Data");
			echo "<script>window.location.href='".base_url()."Study"."';</script>";
		}
	}
}