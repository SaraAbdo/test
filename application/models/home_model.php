<?php
class home_model extends CI_Model{


      public function add_person($data){  

          $query=$this->db->insert('person',$data);
          return true;
           
      } 

      public function get_persons(){

           // $data = array(
           // 	'id' => $id, 
           // 	'company_id' => $this->session->userdata('company_id')
           // );
           
           // $this->db->where($data);  
           $query = $this->db->get("person"); 
           return $query->result();  
           
      }


     public function delete_person($id)
     {
     	$where = array(
           	'id' => $id
           );
        $this->db->where($where); 	
     	$query = $this->db->delete("person");
     }


     public function update_person($id,$name,$number)
     {
     	$data = array(
	      'name' => $name,
	      'number'=>$number
	    );
	    $where = array(
           	'id' => $id
        );
        $this->db->where($where); 
	    $this->db->update('person', $data);
     }

      public function login_user_info($user_name,$password) {

			$this->db->where('user_name', $user_name);

			$query = $this->db->get('users');

			

			if ($query->num_rows()!=0)
			{
				$db_password = $query->row(0)->password;
				// if(password_verify($password,$db_password)) {
				if($password==$db_password) {

					$this->db->where('id',$query->row(0)->id);
					$quary_user_info = $this->db->get('users'); 
					$user_data = array(

							'user_id' => $query->row(0)->id,
							'name' => $quary_user_info->row(0)->name,
							'logged_in' => true
						);
					$this->session->set_userdata($user_data);
					return true;

				} else {
					return false;
				}
			}
			else
			{
				return false;
			}	
	}


	public function get_person_books()
    {

         // $this->db->where('company_id',$company_id);
         // $this->db->where('deleted_vacancy_status',1);

         $quary = $this->db->get('books');

            $all_persons_array = [];
            if($quary->num_rows() == 0)
            {
                return array(
                    'all_persons' => $all_persons_array,
                    'count' => 0
                );
            }

            else
            {
                

                foreach ($quary->result() as $book) 
                {
                    
                    $this->db->where('id',$book->user_id);
					$quary_user_info = $this->db->get('person');
					$name = $quary_user_info->row(0)->name;


                    $single_book = array(
                            'book_name' => $book->book_name,
                            'name' => $name
                        );
                    array_push($all_persons_array,$single_book);


                }
                return array(
                    'all_persons' => $all_persons_array,
                    'count' => $quary->num_rows()
                );
            }

        
    }


}
?>