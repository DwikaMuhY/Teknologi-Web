<?php
class UserModel extends CI_Model{
    public function insertUser($user){
		return $this->db->insert('user',$user);
    }

	function getUser($email = null, $password = null){
		if(!empty($email) && !empty($password)){
			$this->db->where("Email",$email);
			$this->db->where("Password",$password);
			return $this->db->get("user");
		}
		return $this->db->get("user");
	}

	function isNIKExist($nik){
		$this->db->where("NIK",$nik);
		if($this->db->get("user")->num_rows()>0){
			return true;
		}
		return false;
	}

	function isEmailExist($email){
		$this->db->where("Email",$email);
		if($this->db->get("user")->num_rows()>0){
			return true;
		}
		return false;
	}

	function deleteUser($NIK){
		$this->db->where('NIK',$NIK);
		return $this->db->delete('user');
	}

	function updateAkses($NIK){
		$data = array('Akses' => 1 );
		$this->db->where('NIK', $NIK);
		$this->db->update('user', $data);
	}
}
?>