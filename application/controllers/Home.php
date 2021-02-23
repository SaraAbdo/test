<?php

class Home extends CI_Controller {

	public function index()
	{
		if(($this->session->userdata('logged_in')==true))
		{
			$data['persons'] = $this->home_model->get_persons();
			$data['person_books'] = $this->home_model->get_person_books();
			$this->load->view('home',$data);
		}
		else
		{
			$this->load->view('login');
		}
	
	}

	public function add_new_person()
	{
		
		$name = $this->input->post('name');
		$number=$this->input->post('number');

		 $data = array(
        	'name' => $name,
			'number' => $number
		);

		 $this->home_model->add_person($data);
		 echo json_encode(array('flag' => 1 ));
	}



	public function user_login()
	{
			// $config['upload_path']="./assets/cv"; 
   //      $config['allowed_types']='jpg';
   //      $this->load->library('upload',$config);
   //      $this->upload->initialize($config);
   //      $this->upload->do_upload("image_file");
   //      $data = array('upload_data' => $this->upload->data());

		// 'cv_file' => $data['upload_data']['file_name'],

		$name = $this->input->post('name');
		$password=$this->input->post('password');

		$result=$this->home_model->login_user_info($name,$password);
		$this->session->set_flashdata('login_failed','You are not logged in');
	    echo"true";

		
	}

	//==============================================================================	
    //Logout functionality
	public function logout() {

		$this->session->sess_destroy();
		redirect('home');

	}

	public function delete_person()
	{
		$id = $this->input->post('id');
		$this->home_model->delete_person($id);
		 echo json_encode(array('flag' => 1 ));
	}


	public function update_person()
		{
			$id = $this->input->post('id');
			$name = $this->input->post('name');
		    $number=$this->input->post('number');
			$this->home_model->update_person($id,$name,$number);
			echo json_encode(array('flag' => 1 ));
		}

	

   
}
?>