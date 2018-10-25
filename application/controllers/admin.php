<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author common
 */
class Admin extends CI_Controller {
    //put your code here
    public function __construct()
    {
            parent::__construct();
            $this->load->helper('ckeditor');
            $this->data['ckeditor'] = array(
            //ID of the textarea that will be replaced
                'id' => 'ck_editor',
                'path' => 'scripts/ckeditor',
                'config' => array(
                    'toolbar' => "Full", //Using the Full toolbar
                    'width' => "450px", //Setting a custom width
                    'height' => '300px', //Setting a custom height
                ),
            );
    }
    
    public function index()
	{
            $this->load->view('admin/admin_login');
	}
   public function adminLoginCheck()
   {
       $admin_email_address=$this->input->post('admin_email_address',true);
       $admin_password=$this->input->post('admin_password',true); 
       $this->load->model('admin_model');
       $result=$this->admin_model->adminLoginCheckInfo($admin_email_address,$admin_password);
       if($result)
       {
           $data=array();
           $data['admin_maincontent']=$this->load->view('admin/dashbord','',true);
           $this->load->view('admin/admin_home',$data);
       }
       else{
           $msg=array();
           $msg['exception']="Email Or password Invalide!";
           $this->session->set_userdata($msg);
           redirect("admin/index");
           
       }
   }
   
   public function adminLogOut ()
   {
        $this->session->unset_userdata('id','is_login');
        $meg['message']="You are successfully Logeout!";
        $this->session->set_userdata($meg);
        // $this->showSignUp();
        redirect("admin/index");
   }
   
   public function showPagesForm()
   {
      $data=array();
      $data['check_editor']=$this->data;
      $data['admin_maincontent']=$this->load->view('admin/add_pages',$data,true);
      $this->load->view('admin/admin_home',$data);
   }
   function savePages()
   {
       $this->load->model('admin_model');
       $this->admin_model->savePages($_POST);
       echo "Page Added";
   }
    public function showAddCategoryForm()
   {
      $data=array();
      $data['check_editor']=$this->data;
      $data['admin_maincontent']=$this->load->view('admin/add_category',$data,true);
      $this->load->view('admin/admin_home',$data);
   }
   function saveCategory()
   {
       $this->load->model('admin_model');
       $this->admin_model->saveCategory($_POST);
       $msg=array();
       $msg['message']="Save Category Successfully!";
       $this->session->set_userdata($msg);
       redirect("admin/showAddCategoryForm");
       
   }
   public function showAddProductForm()
   {
      $data=array();
      $data['check_editor']=$this->data;
      $this->load->model('welcome_model');
      $data['category']=$this->welcome_model->selectCatagory();
      
      $data['admin_maincontent']=$this->load->view('admin/add_product',$data,true);
      
      $this->load->view('admin/admin_home',$data); 
   }
   
    function saveProduct()
   {
       $config['upload_path'] = './images/product_images/';
       $config['allowed_types'] = 'gif|jpg|png';
//       $config['max_size']	= '200';
       $this->upload->initialize($config);
       
      /* echo '<pre>';
       print_r($_FILES);
       //exit();
       */
       $this->upload->do_upload('product_image');
       
       $image_des=$this->upload->data();
       /*echo '<pre>';
       print_r($image_des);
       exit();
       */
       
       $file_name = $image_des['file_name'];


       $data['product_name']=$this->input->post('product_name');
       $data['product_price']=$this->input->post('product_price');
       $data['product_quantity']=$this->input->post('product_quantity');
       $data['product_description']=$this->input->post('product_description');
       $data['category_id']=$this->input->post('category_id');
       $data['add_date']=$this->input->post('add_date');
       $data['product_image']=$file_name; // Image File Name
       
       $this->load->model('admin_model');
       $this->admin_model->saveProduct($data);
       
       $msg=array();       
       $msg['message']="Save Product Successfully!";
       $this->session->set_userdata($msg);
       redirect("admin/showAddProductForm");
       
   }
   
   
   public function selectProduct()
   {
       
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/selectProduct/';
        
        $config['total_rows']=$this->db->count_all('tbl_product');      
        $config['per_page'] = '4';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);

        $this->load->model("admin_model");
        $data['rows'] = $this->admin_model->selectProduct($config['per_page'],$this->uri->segment(3));       
        
       
       //$data['products']=$this->admin_model->selectProduct();      
       
       $data['admin_maincontent']=$this->load->view('admin/admin_view_products',$data,true);      
       $this->load->view('admin/admin_home',$data); 
   }
   
   public function selectCategory($offset=0)
   {
            $config['base_url'] = base_url('admin/selectCategory');
            $config['total_rows'] = $this->db->count_all('tbl_category');
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Prev';
            $config['num_links']=4;
            $config['per_page'] = '4';
    
            $this->pagination->initialize($config);
            
       $this->load->model('admin_model');
       $data['products']=$this->admin_model->selectCategory($config['per_page'],$offset);
       $data['admin_maincontent']=$this->load->view('admin/admin_view_category',$data,true);
      
       $this->load->view('admin/admin_home',$data); 
   }
   
   
   
   
   public function deleteProduct($product_id)
   {
      $this->load->model('admin_model');
      $this->admin_model->deleteProduct($product_id);
      redirect("admin/selectProduct");
       
   }
   
   public function editProduct($product_id)
   {
      $this->load->model('admin_model');
      $data['check_editor']=$this->data;
      $this->load->model('welcome_model');
      $data['category']=$this->welcome_model->selectCatagory();
      $data['product_info']=$this->admin_model->selectProductByProductId($product_id);
      $data['admin_maincontent']=$this->load->view('admin/edit_products',$data,true);
      $this->load->view('admin/admin_home',$data); 
       
   }
   
    public function updateProduct()
   {
       $config['upload_path'] = './images/product_images/';
       $config['allowed_types'] = 'gif|jpg|png';
//       $config['max_size']	= '200';
       $this->upload->initialize($config);
       
      /* echo '<pre>';
       print_r($_FILES);
       //exit();
       */
       $this->upload->do_upload('product_image');       
       $image_des=$this->upload->data();
       
       /*echo '<pre>';
       print_r($image_des);
       exit(); */
       
       
       $file_name = $image_des['file_name'];


       $data['product_name']=$this->input->post('product_name');
       $data['product_price']=$this->input->post('product_price');
       $data['product_quantity']=$this->input->post('product_quantity');
       $data['product_description']=$this->input->post('product_description');
       $data['product_id']=$this->input->post('product_id');
       $data['add_date']=$this->input->post('add_date');
       $data['product_image']=$file_name; // Image File Name
       
       /*echo '<pre>';
       print_r($data);
       exit(); */
       
       $this->load->model('admin_model');
       $this->admin_model->updateProduct($data);
       
       $msg=array();       
       $msg['message']="Save Product Successfully!";
       $this->session->set_userdata($msg);
       redirect("admin/showAddProductForm");
       
   }
   
   public function editCategory($category_id)
   {
       $this->load->model('admin_model');
      $data['check_editor']=$this->data;
      $this->load->model('welcome_model');
      $data['category']=$this->welcome_model->selectCatagory();
      $data['product_info']=$this->admin_model->selectCategoryByCategoryId($category_id);
      $data['admin_maincontent']=$this->load->view('admin/edit_category',$data,true);
      $this->load->view('admin/admin_home',$data);
   }
   
   public function updateCategory()
   {
       //$data=array();
       $data['category_id']=$this->input->post('category_id');
       $data['category_name']=$this->input->post('category_name');
       $data['category_description']=$this->input->post('category_description');
       
       
       /*echo '<pre>';
       print_r($data);
       exit(); */
       
       $this->load->model('admin_model');
       $this->admin_model->updateCategory($data);
       
       $msg=array();       
       $msg['message']="Save Product Successfully!";
       $this->session->set_userdata($msg);
       redirect("admin/showAddCategoryForm");
   }
   
   public function viewProductDetails ($product_id)
   {
       $data=array();
       $this->load->model('admin_model');
      //$data['check_editor']=$this->data;
      $this->load->model('welcome_model');
      //$data['products']=$this->admin_model->selectAllProduct();
      $data['result']=$this->admin_model->selectProductViewDetails($product_id) ;
      $data['admin_maincontent']=$this->load->view('admin/view_product_details',$data,true);
      $this->load->view('admin/admin_home',$data); 
       
   }
   
   
  
}

?>
