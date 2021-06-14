<?php
class Admin extends CI_Controller{
    public function index(){
        $this->load->model('UserModel',"",TRUE);
        $data['user'] = $this->UserModel->getUser();
        $this->load->view("konfirmasi",$data);
    }
}
?>