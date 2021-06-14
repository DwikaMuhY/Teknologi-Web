<?php
class Home extends CI_Controller{

    public function index(){
        if($this->session->userdata('login')){
            $this->load->view("home");
        }else if($this->session->userdata('Admin')){
            redirect("Admin");
        }else{
            $this->load->view("login");
        }
    }

    public function login(){
        $this->load->view("login");
    }

    public function proseslogin(){
        $this->load->model('UserModel',"",TRUE);
        $email= $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->UserModel->getUser($email,$password);
        if($query->num_rows()>0){
            $row = $query->row();
            if($row->admin == 1){
                $arr = array(
                    "Admin" => True
                );
                $this->session->set_userdata($arr);
                redirect('Admin');
            }else{
                if($row->Akses == 0){
                    echo "Tidak Memiliki Akses";
                }else{
                    $arr = array(
                        "login" => True
                    );
                    $this->session->set_userdata($arr);
                    echo "Memiliki Akses";
                }
            }
        }else{
            redirect(site_url('home'));
        }
    }

    public function daftar(){
        $this->load->view('daftar');
    }

    public function prosesdaftar(){
        if($this->input->post('password') == $this->input->post('konfirmasi_password')){
            $user = array(
                "NIK" => $this->input->post('nik'),
                "Nama" => $this->input->post('nama'),
                "Email" => $this->input->post('email'),
                "Password" => $this->input->post('password'),
            );

            $this->load->model('UserModel',"",TRUE);
            
            $config['upload_path'] = './assets/image/ktp';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = $user['NIK']."_".$user['Nama'];

            if(!$this->UserModel->isNIKExist($user['NIK']) && !$this->UserModel->isEmailExist($user['Email'])){
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('file')){
                    redirect(site_url('home/message'));
                }else{
                    $upload_data = $this->upload->data();
                    $user['Foto'] = base_url('assets/image/').$upload_data['file_name'];
                    $user['admin'] = 0;
                    $user['Akses'] = 0;
                }

                $this->UserModel->insertUser($user);

                $session_data = array(
                    "Daftar" => true
                );
                $this->session->set_userdata($session_data);
                redirect(site_url('home/message'));
            }else{
                redirect(site_url('home/message'));
            }
        }else{
            $this->load->view('daftar');
        }
    }

    public function message(){
        if($this->session->userdata('Daftar')){
            $this->session->sess_destroy();
            $this->load->view("message/berhasildaftar");
        }else{
            $this->load->view("message/gagaldaftar");
        }
    }

    public function hapus($NIK){
        $this->load->model('UserModel',"",TRUE);
        $this->UserModel->deleteUser($NIK);
        $this->load->view("message/berhasiltolak");
    }

    public function terima($NIK){
        $this->load->model('UserModel',"",TRUE);
        $this->UserModel->updateAkses($NIK);
        $this->load->view("message/berhasilkonfirm");
    }
	
	public function pindahCalon(){
        $this->load->view("calon");
    }

    public function pindahKonfirm(){
        $this->load->model('UserModel',"",TRUE);
        $data['user'] = $this->UserModel->getUser();
        $this->load->view("konfirmasi",$data);
    }
    
}
?>
