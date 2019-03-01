<?php 
	defined('BASEPATH') OR exit ('No direct script acces allowed');

	/**
	 * 
	 */
	class m_makanan extends CI_Model
	{
		
		public function get_data()
		{
			# code...
			return $this->db->get('makanan');
		}
		
			# code...
		public function inputdata($data, $table)
		{
			# code...
			$this->db->insert($table,$data);
		}
		
	}

 ?>