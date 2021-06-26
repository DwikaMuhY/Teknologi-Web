<?php
class Vote extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->view("User/vote");
    }
}
?>