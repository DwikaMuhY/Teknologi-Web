<?php
class CalonModel extends CI_Model {
	function getCalon() {
		return $this->db->get("calon");
	}
	function insertCalon() {
		$calon = array(
			"nama_calon" => $this->input->post("nama"),
			"foto" => $this->input->post("fotoo"),
			"visi" => $this->input->post("visii"),
			"misi" => $this->input->post("misii")
		);
		return $this->db->insert('Calon',$calon);
	}
	function getCalonById($id) {
		$this->db->where("id_calon",$id);
		return $this->db->get('Calon');
	}
	function updateCalon($id) {
		$calon = array(
			"nama_calon" => $this->input->post("nama"),
			"foto" => $this->input->post("fotoo"),
			"visi" => $this->input->post("visii"),
			"misi" => $this->input->post("misii")
		);
		$this->db->where("id_calon",$id);
		return $this->db->update("Calon",$calon);
	}
	function deleteCalon($id) {
		$this->db->where("id_calon",$id);
		return $this->db->delete("Calon");
	}
}
?>