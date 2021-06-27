<?php
class Live extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->view("User/live");
    }
}
?>