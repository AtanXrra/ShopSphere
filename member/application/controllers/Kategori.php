<?php
class Kategori extends CI_Controller {
    function __construct() {
        parent::__construct();
        
        if(!$this->session->userdata("id_member")) {
            redirect('/', 'refresh');
        }
    }

    function index() {
        $this->load->model("Mkategori");

        $data["kategori"] = $this->Mkategori->tampil();


        $this ->load->view("header");
        $this ->load->view("kategori_tampil", $data);
        $this ->load->view("footer");
    }

    
}
?>