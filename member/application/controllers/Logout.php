<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->set_userdata("id_member");
        $this->session->set_userdata("email_member");
        $this->session->set_userdata("nama_member");
        $this->session->set_userdata("alamat_member");
        $this->session->set_userdata("wa_member");
        $this->session->set_userdata("kode_distrik_member");
        $this->session->set_userdata("nama_distrik_member");

		$this->session->set_flashdata('pesan_sukses', 'Anda telah Logout!');
        redirect('/', 'refresh');
	}
}
