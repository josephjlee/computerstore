<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('checkout_model','ck_model',TRUE);
    }
    
    public function customerIdentity()
    {
        $data=array();
        $this->load->model('welcome_model');
        $data['maincontent']=$this->load->view('checkout/quick_login','',true);
        $data['catagory']=$this->welcome_model->selectCatagory();
        $this->load->view('home',$data);
    }
    
    public function saveShippingInfo()
    {
        $data=array();
        $data['user_id']=$this->session->userdata('user_id');
        $data['first_name']=$this->input->post('first_name',true);
        $data['last_name']=$this->input->post('last_name',true);
        $data['address']=$this->input->post('address',true);
        $data['city']=$this->input->post('city',true);
        $data['country']=$this->input->post('country',true);
        $data['zip_code']=$this->input->post('zip_code',true);
        $data['cell_no']=$this->input->post('cell_no',true);
        
        $this->ck_model->saveShippingAddress($data);
        redirect("cart_controller/showCart");
        
    }
    
    public function confirmOrder()
    {
        $data=array();
        /*
         * Save Order in order table
         */
        $data['user_id']=$this->session->userdata('user_id');
        $data['shipping_id']=$this->session->userdata('shipping_id');
        $data['order_total']=$this->cart->total();
        $data['payment_status']=$this->input->post('payment_status',true);
        $this->ck_model->saveOderInfo($data);
        /*
         * End save order in order table
         * Start save order detail info in order detail table
         */
        $this->ck_model->saveOderDetailInfo();
        
        echo "Order Complete";
        
        
        
        //$this->ck_model->saveOderInfo($data);
        
        
    }
    
    
}

?>
