<?php
class User extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect('Home');
        }
    }
}
?>