<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountController extends CI_Controller {
   


    public function __contsruct()
    {
      parent::__construct();
    }

    public function admin(){
        $this->login_model->check_access("admin");
        $params['patients'] = count($this->patient_model->patient_list(0, 0, true));
        $params['results']  = count($this->report_model->report_list()); 

        $this->load->view('admin/header.php');
        $this->load->view('admin/sidebar.php');
        $this->load->view('admin/index.php', (is_array($params)) ? $params : "");
    	$this->load->view('admin/footer.php');
    }

    /**
    * Renders List all Patients
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function admin_patients( $params = []){
        $this->login_model->check_access("admin");
        $params = ["params" => $this->patient_model->patient_list()]; 
        
        $this->load->view('admin/header.php');
        $this->load->view('admin/sidebar.php');
        $this->load->view('admin/patients.php', (is_array($params)) ? $params : "");
        $this->load->view('admin/footer.php');
    }

    /**
    * Renders View all Reports [admin access required]
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function admin_view_reports( $params = []){
        $this->login_model->check_access("admin");
        $params = ["params" => $this->report_model->report_list()]; 

        $this->load->view('admin/header.php');
        $this->load->view('admin/sidebar.php');
        $this->load->view('admin/reports.php', (is_array($params)) ? $params : "");
        $this->load->view('admin/footer.php');
    }

    /**
    * deletes a Patients
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function delete_patient( $id = "" ){
        $this->login_model->check_access("admin");
        $params = ["deleted" => $this->patient_model->patient_delete($id)];
        $this->load->view('admin/header.php');
        $this->load->view('admin/sidebar.php');
        $this->load->view('admin/patients.php', ($params['params']));
        $this->load->view('admin/footer.php');
    }

    /**
    * Renders Add Patient pages view
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function add_patient($params = ""){
        $this->login_model->check_access("admin");
        $this->load->view('admin/header.php');
        $this->load->view('admin/sidebar.php');
        $this->load->view('admin/add_patient.php' , (is_array($params)) ? $params : "");
        $this->load->view('admin/footer.php');
    }

    /**
    * Renders Add Report pages view
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function add_report($params = []){
        $this->login_model->check_access("admin");
        $params['patients'] = $this->patient_model->patient_list(0, 0, true);

        $this->load->view('admin/header.php');
        $this->load->view('admin/sidebar.php');
        $this->load->view('admin/add_report.php' , (is_array($params)) ? $params : []);
        $this->load->view('admin/footer.php');
    }

    /**
    * Process Add Report pages view
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function add_report_process($params = []){
        $this->login_model->check_access("admin");
        if($_SERVER['REQUEST_METHOD'] == "POST" AND isset($_POST['test_name']))
        {

         $test_name =  $this->input->post('test_name', TRUE); 
         $test_result = $this->input->post('test_result', TRUE); 

         $report_name = $this->input->post('reportname', TRUE); 
         $patient_id = $this->patient_model->get_patient_id($this->input->post('patient', TRUE))[0]->patient_id; 

            $reportData = [
                   "report_name" =>  $report_name, 
                   "patient_id" => $patient_id
                ];

          $this->db->insert( "reports",  $reportData );
          $report_id  = $this->db->insert_id();

         foreach( $test_name as $key => $n ) 
         {
            $testData = [
                   "report_id"      => $report_id ,
                   "test_name"      =>  $n,
                   "test_result"    =>  $test_result[$key]
               ];
            $this->db->insert( "patient_report",  $testData );
         }
           $param = ["message" => "Result added successfully", "code" => 1];
           $this->add_report($param);

        }
        else
        {
           redirect('admin/reports');
        }
    }

    /**
    * Renders Edit Report pages view
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @param $params:  sends information >> data to the view page ...
    * @version: 1.0.0
    */
    public function edit_report($report_id){
        $this->login_model->check_access("admin");
        $params['reports'] = $this->report_model->get_report_info($report_id);
        $params['patients'] = $this->patient_model->patient_list(0, 0, true);
       
       if(count($params['reports']) > 0 )
       {
          $this->load->view('admin/header.php');
          $this->load->view('admin/sidebar.php');
          $this->load->view('admin/edit_report.php' , (is_array($params)) ? $params : []);
          $this->load->view('admin/footer.php');
       }
       else
       {
         redirect('admin/add_report');
       }

    }

    /**
    * Edit Added Report 
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function edit_report_process($params = []){
        $this->login_model->check_access("admin");
        if($_SERVER['REQUEST_METHOD'] == "POST" AND isset($_POST['test_name']))
        {

         $test_name =  $this->input->post('test_name', TRUE); 
         $test_result = $this->input->post('test_result', TRUE); 
         $patient_report_id = $this->input->post('patient_report_id', TRUE); 

         $report_name = $this->input->post('reportname', TRUE); 
         $report_id = $this->input->post('reportid', TRUE); 
         $patient_id = $this->patient_model->get_patient_id($this->input->post('patient', TRUE))[0]->patient_id; 

            $reportData = [
                   "report_name" =>  $report_name, 
                   "patient_id" => $patient_id
                ];

          $this->db->where("report_id", $report_id);
          $this->db->update( "reports",  $reportData );

         foreach( $test_name as $key => $n ) 
         {
                $testData = [
                     "report_id"      => $report_id ,
                     "test_name"      =>  $n,
                     "test_result"    =>  $test_result[$key]
                   ];
            if(isset($patient_report_id[$key]) AND $patient_report_id[$key] != "" AND $patient_report_id[$key] != NULL)
            {
                 $this->db->where("id", $patient_report_id[$key]);
                 $this->db->update( "patient_report",  $testData );
            }
            else
            {
                $this->db->insert( "patient_report",  $testData );
            }

            
         }
           $param = ["message" => "Result Edited successfully", "code" => 1];
           $this->add_report($param);

        }
        else
        {
           redirect('admin/reports');
        }
    }

    /**
    * Add Patient to database
    * @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
    * @version: 1.0.0
    */
    public function add_patient_process(){
        $this->login_model->check_access("admin");
        if($_SERVER['REQUEST_METHOD'] == "POST" AND isset($_POST['username']) AND isset($_POST['fullname'])
              AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['phone']))
        {

            $fullname =  $this->input->post('fullname', TRUE);
            $username =  $this->input->post('username', TRUE);
            $passcode =  $this->input->post('password');
            $confirm_passcode =  $this->input->post('confirm_password');
            $email    =  $this->input->post('email', TRUE);
            $phone    =  $this->input->post('phone', TRUE);

            //prepare patient information and save it...
            $patientDate = [
                        "patient_username" => $username,
                        "patient_passcode" => $passcode,
                        "patient_fullname" => $fullname,
                        "email"            => $email,
                        "phone"            => $phone
                       ];
            if($this->login_model->check_exists("patients", "email", $email))
            {
                $param = ["message" => "Patient with that email Already exists", "code" => 0];
            }  
            else if( $passcode != $confirm_passcode)
            {
                $param = ["message" => "Sorry, Password do not match", "code" => 0];
            }
            else if($this->patient_model->save_patient($patientDate))
            {
               $param = ["message" => "Patient added successfully", "code" => 1];
            }
            else
            {
               $param = ["message" => "Failed adding patient", "code" => 0]; 
            }
              return $this->add_patient($param);
        }
        else
        {
           redirect('admin/add_patient');
        }
    }

    public function delete_patient_result($id){
        $this->login_model->check_access("admin");
        //this is going to use ajax for the call ---
        $this->db->where('id', $id);
        echo json_encode(["output" => $this->db->delete('patient_report')]);
        
    }

    public function list_patients(){

    }

    public function user(){
        $this->login_model->check_access();
        $params['patients'] = $this->patient_model->get_patient_details($_SESSION['logged_in']['username']);
        $patient_id = $this->patient_model->get_patient_id($_SESSION['logged_in']['username'])[0]->patient_id;
        $params['result_count'] = count($this->report_model->get_report_user_count($patient_id));

        $this->load->view('user/header.php');
        $this->load->view('user/sidebar.php');
        $this->load->view('user/index.php', (is_array($params)) ? $params : ["patients" => ""]);
        $this->load->view('user/footer.php');
    }

    public function user_report(){
        $this->login_model->check_access();
        $patient_id = $this->patient_model->get_patient_id($_SESSION['logged_in']['username'])[0]->patient_id;
        $params['reports'] = $this->report_model->get_report_user_count($patient_id);

        $this->load->view('user/header.php');
        $this->load->view('user/sidebar.php');
        $this->load->view('user/reports.php', (is_array($params)) ? $params : ["reports" => ""]);
        $this->load->view('user/footer.php');
    }

    public function user_report_view($id){
        $this->login_model->check_access();
        $params['report'] = $this->report_model->get_report_info($id);

        $this->load->view('user/header.php');
        $this->load->view('user/sidebar.php');
        $this->load->view('user/report_view.php', (is_array($params)) ? $params : ["report" => ""]);
        $this->load->view('user/footer.php');
    }

	public function index()
	{
        $this->login_model->check_access();
		$this->load->view('user/index.php');
	}

    function report()
     {
        //load mPDF library
        $patient_id = $this->patient_model->get_patient_id($_SESSION['logged_in']['username'])[0]->patient_id;
        $params['data'] = $this->report_model->get_patient_report($patient_id); 
        $this->load->library('m_pdf');
        //load mPDF library
     
        $html=$this->load->view('user/pdf_view',$params, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
     
        //this the the PDF filename that user will get to download
        $pdfFilePath ="mypdfName-".time()."-download.pdf";
      
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();
        //generate the PDF!
        $pdf->WriteHTML($html,2);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output($pdfFilePath, "D");
     }

	function logout()
	{
		$this->session->sess_destroy();
		redirect( base_url(),'refresh' );
	}//End of logout function.

}