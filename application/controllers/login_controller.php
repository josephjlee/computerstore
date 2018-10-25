<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_controller
 *
 * @author common
 */
class Login_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('mailer_model');
    }
    public function showSignUp()
        {
            $data=array();
            $this->load->model('welcome_model');
            $data['catagory']=$this->welcome_model->selectCatagory();
            $data['maincontent']=$this->load->view('sign_up_view','',TRUE);
            
            $this->load->view('home',$data);
        }
        public function saveUser()
        {
            $data=array();
            
            //$data['first_name']=$_POST['first_name'];
            $data['first_name']=$this->input->post('first_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['email_address']=$this->input->post('email_address',true);
            $password=md5($this->input->post('password',true));
            $data['password']=$password;
            $data['address']=$this->input->post('address',true);
            $data['company']=$this->input->post('company',true);
            $data['city']=$this->input->post('city',true);
            $data['country']=$this->input->post('country',true);
            $data['zip_code']=$this->input->post('zip_code',true);
            
            if(!$this->login_model->checkDuplicateEmail($data['email_address']))
            {
                
                $this->login_model->saveUserInfo($data);
                
                /*
                 * Start Activation Email Send
                 */
                    $mailData=array();
                    $mailData['from_address']="admin@site.com";
                    $mailData['admin_full_name']="Md. Shafiul Alam";
                    $mailData['to_address']=$data['email_address'];
                    
                    $mailData['subject']="Activation Email";
                    $mailData['last_name']=$data['last_name'];
                    $this->mailer_model->sendeEmail($mailData,'activation_email');
                    
                
                
                
                /*
                 * End  
                 */
                
                //$this->load->model('welcome_model');
                //$data['catagory']=$this->welcome_model->selectCatagory();

                $data['maincontent']=$this->load->view('successfull_message','',TRUE);

                $this->load->view('home',$data);
            }
            else{
                $meg['message']="alrady registered!";
                $this->session->set_userdata($meg);
               // $this->showSignUp();
               redirect("login_controller/showSignUp");
            }
            
        }
        public function showLogin()
        {
            $data=array();
            $this->load->model('welcome_model');
            $data['catagory']=$this->welcome_model->selectCatagory();
            $data['maincontent']=$this->load->view('login','',TRUE);
            
            $this->load->view('home',$data);
        }
        
        public function loginCheck()
        {
           $email_address=$this->input->post('email_address',true);
           $password=$this->input->post('password',true); 
           $result=$this->login_model->userLoginCheck($email_address,$password);
           //echo '<pre>';
          // print_r($result);
           
           if($result)
           {
               $data=array();
               $data['full_name']=$result->first_name.' '.$result->last_name;
               $sessiondata=array();
               $sessiondata['user_id']=$result->user_id;
               $sessiondata['is_login']=TRUE;
               $this->session->set_userdata($sessiondata);
               $this->load->model('welcome_model');
               $data['catagory']=$this->welcome_model->selectCatagory();
               if($this->cart->total_items()>0)
               {
                   redirect("cart_controller/showCart");
               }
               else{
               $data['maincontent']=$this->load->view('welcome',$data,TRUE);
               }
               $this->load->view('home',$data);
           }
           else{
               $meg['exception']="User Id Or password Invalide!";
                $this->session->set_userdata($meg);
               // $this->showSignUp();
                if($this->cart->total_items()>0)
               {
                   redirect("checkout/customerIdentity");
               }
               else{
               redirect("login_controller/showLogin");
               }
           }
        }
        
        public function logOut()
        {
            $this->session->unset_userdata('user_id','is_login');
            $meg['message']="You are successfully Logeout!";
            $this->session->set_userdata($meg);
               // $this->showSignUp();
            if($this->cart->total_items()>0)
               {
                   redirect("checkout/customerIdentity");
               }
               else{
            redirect("login_controller/showLogin");
               }
        }
        
        
        
}

?>
