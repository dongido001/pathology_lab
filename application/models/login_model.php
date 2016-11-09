<?php
class login_model extends CI_Model
{
    function Login_mod_new()
    {
		// Call the Model constructor
        //parent||CI_Model();
		parent::Model();
       	//$this->load->database();
    }

	//---------------------------------
	// Function: login
	//---------------------------------
     function admin_login($username, $password)
	 {
	   	$this->db-> select('*');
	   	$this->db-> from('admin');
	   	$this->db-> where('username', $username);
		$this->db-> where('password', $password);
	   	$this->db-> limit(1);
	   	$query = $this ->db->get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
		 	return false;
		}
	 }
	 
	 //---------------------------------
	// Function: login
	//---------------------------------
     function user_login($username, $password)
	 {
	   	$this -> db -> select('*');
	   	$this -> db -> from('patients');
	   	$this -> db -> where('patient_username', $username);
		$this -> db -> where('patient_passcode', $password);
	   	$this -> db -> limit(1);
	   	$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
		 	return false;
		}
	 }

	 function check_exists($table_name, $column_name, $value)
	 {
	 	$this -> db -> select($column_name);
	   	$this -> db -> from($table_name);
	   	$this -> db -> where($column_name, $value);
	   	$this -> db -> limit(1);
	   	$query = $this -> db -> get();

	   	if(($query -> num_rows() == 1))
		{
			foreach($query->result() as $row){
                if($row->$column_name == $value){
                	return true;
                }
			}
			
		}
		else
		{
		 	return false;
		}
	 }

	 public function check_access($type = "user")
	 {
		if($type == "user")
		{
		   if( !($this->session->userdata('logged_in')) OR @$_SESSION['logged_in']['usertype'] != 'user' )
	      	{
               redirect("user/login");
               exit();
	     	}
		}else //this must be admin check ... 
		{
		   if( !($this->session->userdata('logged_in')) OR @$_SESSION['logged_in']['usertype'] != 'admin' )
	      	{
               redirect("admin/login");
               exit();
	     	}
		}

	 }
}
?>