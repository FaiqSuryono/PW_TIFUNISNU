<?php

class ahad extends CI_Controller
{
	function index()
	{
		$data = array('judul' => 'welcome' );
		$this->load->view('tabel_v', $data);
	}
}