<?php 
/**
 * 
 */
class auth_model extends CI_Model
{

	

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

    function getuser($username,$password,$uniq){
		$dml="SELECT * FROM user WHERE username='$username' and password='$password' and unique_code='$uniq'";
		$query=$this->db->query($dml);
		return $query;        
    }



	

}
 ?>