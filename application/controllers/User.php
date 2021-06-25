<?php
class User extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect('Home');
        }
        $this->load->view('User/user');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Home');
    }
}
?>