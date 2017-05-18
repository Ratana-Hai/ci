<?php

	/**
	* 
	*/
	class Person extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_person(){
			$query = $this->db->get('person');
			return $query->result_array();
		}
		public function insert($newPerson){
			$filed = array(
					'name' => $newPerson['name'],
					'sex' => $newPerson['sex'],
					'address' => $newPerson['address']
				);
			$this->db->insert('person',$filed);
		}
		public function edit($id){
			$query = $this->db->get_where('person',array('id'=> $id));
			return $query->row_array();
		}
		public function update($id,$update){
			$conditon = array('id' => $id);
			$filed = array(
					'name' => $update['name'],
					'sex' => $update['sex'],
					'address' => $update['address']);
			$query = $this->db->get_where('person',$conditon);
			$reult = $query->result_array();
			if(!empty($reult)){
				$this->db->where($conditon);
				$this->db->update('person',$filed);
			}
		}
		public function delete($id){
			if(isset($id)){
				$conditon = array('id' => $id);
				$this->db->delete('person',$conditon);
			}
		}
	}
?>