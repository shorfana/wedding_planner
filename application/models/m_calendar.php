<?php 
/**
 * 
 */
class m_calendar extends CI_Model
{

	

	function cardAdd($data,$table){
		$this->db->insert($table,$data);
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	function updateCard($data,$table,$where,$value){
		$this->db->where($where,$value);
		$this->db->update($table,$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	function listAdd($data,$table){
		$this->db->insert($table,$data);
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	function getCard(){
		$sess = $this->session->userdata('username');
		$query = "SELECT * FROM kalender where id_user = '$sess' ORDER BY monthh DESC";
		return $this->db->query($query)->result();
	}

	function get_list_card(){
		$query = "SELECT * FROM kalender_detail";
		return $this->db->query($query)->result();
	}



	

}
 ?>