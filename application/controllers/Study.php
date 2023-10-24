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
}
