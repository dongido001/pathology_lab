<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
   


    public function __contsruct()
    {
      parent::__construct();
    }

    public function admin_login($params = ""){
    	$this->load->view('admin/login_header.php');
    	$this->load->view('admin/login.php', (is_array($params)) ? $params : "");
    	$this->load->view('admin/login_footer.php');
    }

    public function admin_login_process(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['username']) AND isset($_POST['password']))
            {
    		     $strUserName = strtolower(trim(strip_tags($this->input->post('username'))));
			     $strPassword = md5($this->input->post('password'));
			     $result = $this->login_model->admin_login($strUserName, $strPassword);
			     if($result){
			     	 $sess_array = [];

			     	 foreach($result as $row){
					   $sess_array = 
					      [
						    'id' => $row->id,
						    'username' => $row->username,
						    'usertype' => 'admin',
						    'email' => $row->email
					      ];
                       }
					   $this->session->set_userdata('logged_in', $sess_array);
					   redirect('admin');
			     }else{
			     	 $param = ["message" => "invalid login"];
			     	 return $this->admin_login($param);
			     }
            }
            else
             {
			     	 $param = ["message" => "Login attempt failed completely"];
			     	 return $this->user_login($param);
             }
        }else{
        	return $this->admin_login();
        }
    }

    public function user_login($params = ""){
    	$this->load->view('user/login_header.php');
    	$this->load->view('user/login.php', (is_array($params)) ? $params : "");
    	$this->load->view('user/login_footer.php');    
    }

    public function user_login_process(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['username']) AND isset($_POST['password']))
            {
    		     $strUserName = strtolower(trim(strip_tags($this->input->post('username'))));
			     $strPassword = trim(strip_tags($this->input->post('password')));
			     $result = $this->login_model->user_login($strUserName, $strPassword);
			     if($result){
			     	 $sess_array = [];

			     	 foreach($result as $row){
					   $sess_array = 
					      [
						    'id' => $row->patient_id,
						    'username' => $row->patient_username,
						    'usertype' => 'user',
						    'email' => $row->email
					      ];
                       }
					   $this->session->set_userdata('logged_in', $sess_array);
					   redirect('user');
			     }else{
			     	 $param = ["message" => "invalid login"];
			     	 return $this->user_login($param);
			     }
            }
            else
             {
			     	 $param = ["message" => "Login attempt failed completely"];
			     	 return $this->user_login($param);
             }
        }else{
        	return $this->user_login();
        }
    }


	public function index()
	{
		$this->load->view('users/index.php');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect( base_url(),'refresh' );
	}//End of logout function.

}