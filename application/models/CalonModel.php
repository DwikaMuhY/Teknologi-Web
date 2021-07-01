<?php
class CalonModel extends CI_Model {
	function getCalon() {
		return $this->db->get("calon");
	}
	function insertCalon($calon) {
		return $this->db->insert('Calon',$calon);
	}
	function getCalonById($id) {
		$this->db->where("id_calon",$id);
		return $this->db->get('Calon');
	}
	function updateCalon($calon) {
		$update = array(
			"nama_calon" => $calon['nama_calon'],
			"foto" => $calon['foto'],
			"visi" => $calon['visi'],
			"misi" => $calon["misi"]
		);
		$this->db->where("id_calon",$calon['id_calon']);
		return $this->db->update("Calon",$update);
	}
	function deleteCalon($id) {
		$this->db->where("id_calon",$id);
		return $this->db->delete("Calon");
	}
}
?>