<?php
	
	class M_register extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function add_account($data)
		{
            $this->load->database();
			$this->db->insert('tbl_user',$data);
			
			return  mysql_insert_id();
		}
		
		function changeActiveState($key)
		{
			$this->load->database();
			$data = array(
               'active' => 1
            );

			$this->db->where('md5(id)', $key);
			$this->db->update('tbl_user', $data);

			return true;
		}
	}
?>