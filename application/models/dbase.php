<?php
class Dbase extends CI_Model{

		function __construct() {
			parent::__construct();
		}
		
		function form_insert($database){
			// Inserting in Table(domain)
			$this->db->insert('domain', $database);
		}
		
		function form_retrieve(){
			//
			$query = $this->db->get('domain'); // Produces: SELECT * FROM domain
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			return array();
		}
	}
	?>