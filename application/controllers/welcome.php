<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function index()
         {
            /*$this->load->library('encrypt');
             $string='Talha';
            $result=$this->encrypt->encode($string);
            echo $result."<br/>";
            $result=$this->encrypt->decode($result);
            
            echo $result;
            exit();*/
            
            
            $this->load->library('pagination');
            $config['base_url'] = base_url().'welcome/index/';

            $config['total_rows']=$this->db->count_all('tbl_product');      
            $config['per_page'] = '6';
            $config['full_tag_open'] = '<p>';
            $config['full_tag_close'] = '</p>';
            $this->pagination->initialize($config);

            $this->load->model("admin_model");
            $data['products'] = $this->admin_model->selectProduct($config['per_page'],$this->uri->segment(3));  
        
            //$this->load->model('admin_model');
            //$data['products']=$this->admin_model->selectAllProduct();
            $this->load->model('welcome_model');
            $data['catagory']=$this->welcome_model->selectCatagory();
            $data['maincontent']=$this->load->view('home_product',$data,true);      
            $this->load->view('home',$data); 
        }
        
        public function aboutUs()
        {
            $data=array();
            $this->load->model('welcome_model');
            $result=$this->welcome_model->selectAboutContent();
            $data['title']=$result->title;
            $data['maincontent']=$result->description;
            $data['catagory']=$this->welcome_model->selectCatagory();
            $this->load->view('home',$data);
        }
        
        
//        public function selectProduct()
//         {
//        
//            $this->load->model('admin_model');
//            $data['products']=$this->admin_model->selectAllProduct();
//            $this->load->model('welcome_model');
//            $data['catagory']=$this->welcome_model->selectCatagory();
//            $data['maincontent']=$this->load->view('feature_product',$data,true);      
//            $this->load->view('home',$data); 
//        }
        
        public function showProductBycategory($category_id)
        {
            $data=array();
            $this->load->model('welcome_model');
            $data['result']=$this->welcome_model->selectProductByCategoryId($category_id);            
            $data['maincontent']=$this->load->view('view_product_by_category',$data,TRUE);                    
            $data['catagory']=$this->welcome_model->selectCatagory();
            $this->load->view('home',$data);
        }
        
       public function viewProductDetailsById ($product_id)
        {
            $data=array();
            $this->load->model('admin_model');
            //$data['check_editor']=$this->data;
            $this->load->model('welcome_model');
            //$data['products']=$this->admin_model->selectAllProduct();
            $data['result']=$this->admin_model->selectProductViewDetails($product_id) ;
            $data['maincontent']=$this->load->view('view_product_details',$data,true);
            $data['catagory']=$this->welcome_model->selectCatagory();
            $this->load->view('home',$data); 
       
        }
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */