<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		/*$this->load-model("welcome_model","model");
		$profile=$this->model->getdata("siva");
		$data['name']=$profile;
		$this->load->view('one',$data);*/
                $this->login();
	}
        
        public function login()
        {
            $this->load->view('login');
            
        }
        public function logout() {
            $this->session->sess_destroy();
           // echo "logout";
            $this->session->set_userdata(array('email' => '', 'is_logged_in' => ''));

            redirect('main/login');
            //$this->login();
            
        }
        public function signup() {
            
        }
        public function members() {
            if($this->session->userdata('is_logged_in')){
            $this->load->view('members');
            }  else {
            redirect('main/restricted');    
            }
            
        }
        
        public function restricted()
        {
            $this->load->view('restricted');
            
        }
        
        public function validate_credentials(){
            
            $this->load->model('user_model');
            if($this->user_model->can_log_in())
            {
                return TRUE;
            }
            else{
                
                $this->form_validation->set_message('validate credentials','Incorrect username/passowrd');
                return FALSE;
            }
            
            
        }


        public function login_validation(){
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_credentials');
            $this->form_validation->set_rules('password','Password','required|md5|trim');
            
            if($this->form_validation->run())
            {
                $data=array(
                    'email' => $this->input->post('email'),
                    'is_logged_in' => 1
                );
                    
            
                $this->session->set_userdata($data);
                redirect('main/members');
            }else{
                $this->load->view('login');
            }
                     
        }


}