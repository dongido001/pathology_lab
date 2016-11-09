<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
   

    public function __contsruct()
    {
      parent::__construct();
    }

	public function index()
	{
		$this->login_model->check_access();
		$this->load->view('user/index.php');
	}


	public function unitTest()
	{
		$this->load->library('unit_test');
		///////////////////////////////////////////////////////////////////////
		$test_name = "Tests if the function returns a boalean";
		$table = "admin";
		$username = "username";
		$val = "ddd@hhdd.com";
		$expected_result = false;
        $this->unit->run($this->login_model->check_exists($table, $username, $val), $expected_result, $test_name);
        ///////////////////////////////////////////////////////////////////////


        ///////////////////////////////////////////////////////////////////////
        $test_name = "Tests if the function returns array";
		$val = "ddd@hhdd.com";
		$expected_result = 'is_array';
        $this->unit->run($this->patient_model->get_patient_data($val), $expected_result, $test_name);
        ///////////////////////////////////////////////////////////////////////


        ///////////////////////////////////////////////////////////////////////
        echo $this->unit->report();

	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect( base_url(),'refresh' );
	}//End of logout function.

	public function search_username($q = "")
	{
		if( isset($_GET['term']) AND @$_GET['term'] != "") // make a search ...
		{
		  $q = $_GET['term'];
		  $sql= "SELECT patient_username FROM patients WHERE patient_username LIKE '%$q%'";
          $result=$this->db->query( $sql )->result_array();

          $json = [];

          foreach ($result as $key => $value) {
          	  array_push($json, $value['patient_username']);
          }
          echo json_encode($json);
		}
	}
}