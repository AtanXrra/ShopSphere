<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->set_userdata("id_admin");
        $this->session->set_userdata("username");
        $this->session->set_userdata("nama");

		$this->session->set_flashdata('pesan_sukses', 'Anda telah Logout!');
        redirect('/', 'refresh');
	}
}
