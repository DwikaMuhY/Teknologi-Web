<?php
class Calon extends CI_Controller {
	public function index() {
		$this->load->library("table");
		$this->load->model('CalonModel','','TRUE');
		$data['calon'] = $this->CalonModel->getCalon();
		if ($this->session->userdata('Admin')) {
			$this->load->view("admin/calon", $data);
		} else {
			$this->load->view("Admin");
		}
	}
	public function __construct() {
		parent::__construct();
		$this->load->model("CalonModel","",TRUE);
	}
	public function tambah() {
		$this->load->model('CalonModel');
		$data['calon'] = $this->CalonModel->getCalon();
		$this->load->view("admin/tambah",$data);
	}
	public function prosesTambah() {
		if($this->CalonModel->insertCalon()) {
			redirect(site_url("admin/calon"));
		} else {
			redirect(site_url("admin/calon/tambah"));
		}
	}
	public function update($id) {
		$this->load->model('CalonModel');
		$data['calon'] = $this->CalonModel->getCalonById($id)->row();
		$this->load->view("update_calon",$data);
	}
	public function prosesUpdate($id) {
		if($this->CalonModel->updateCalon($id)) {
			redirect(site_url("calon"));
		} else {
			redirect(site_url("calon/update/$id"));
		}
	}
	public function hapus($id) {
		$this->CalonModel->deleteCalon($id);
		redirect(site_url("calon"));
	}
}
?>