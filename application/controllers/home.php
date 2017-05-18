<?php
	/**
	* 
	*/
	class Home extends CI_controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('person');
			 
		 }
		public function form(){
			$this->load->view('home');
		}
		public function list(){
			$data['person'] = $this->person->get_person();
			$this->load->view('listPerson',$data);
		}
		public function create(){
			$newPerson['name'] = $_POST['name'];
			$newPerson['sex'] = $_POST['sex'];
			$newPerson['address'] = $_POST['address'];
			if(isset($_POST['name'])){
				 $this->person->insert($newPerson);
				
			}
			$this->list();
		}
		public function edit($id){
			
			$result = $this->person->edit($id);
			$data = array('value'=>$result);
			$this->load->view('formEdit',$data);
		}
		public function updatePerson(){
			$id = $_POST['id'];
			$update['name'] = $_POST['name'];
			$update['sex'] = $_POST['sex'];
			$update['address'] = $_POST['address'];
			if(isset($id)){
				$this->person->update($id,$update);
				$this->list();
			}
			return "Fail";
		}
		public function remove($id){
			if(isset($id)){
				$this->person->delete($id);
				$this->list();
			}
			return "fail";
		}
		public function test(){
			echo base_url('test');
		}

	}
?>