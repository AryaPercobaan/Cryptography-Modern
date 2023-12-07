<?php 
/**
 * 
 */
class User_model extends CI_Model
{
	public function login($username_user,$password_user){
		return $this->db->query("select * from login where 
							username='".$username_user."' 
							and password='".$password_user."'")->row();
	}

	public function insert($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function delete($id,$table,$idd)
	{
		$this->db->where($idd,$id);
		$this->db->delete($table);
	}

	public function update($id,$data,$table,$idd)
	{
		$this->db->where($idd,$id);
		$this->db->update($table,$data);
	}

	public function select($select)
	{
		return $this->db->get($select)->result();
	}
	// public function register($username_user,$email_user,$password_user){
	// 	return $this->db->query("insert into tib(	nama_user,email_user,password_user)
	// 		values ('$username_user','$email_user','$password_user')");
	// }
}
 ?>