<?php
class User extends CI_Model{

		function __construct() {
			parent::__construct();
		}
		
		function login($username, $password)
		{
			$this->db->select('User_name,Password');
			$this->db->from('domain');
			$array=array('User_name'=>$username, 'Password'=>$password);
			$this->db -> where($array);
			
			$this->db->limit(1);
			
			$query = $this -> db -> get();
			if($query -> num_rows() == 1){
				return $query->result();
			}
			else 
			return FALSE;
			$this->db->close();
		}
}