<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin_Search extends CI_Controller {
    
    public function __construct() 
            {
                parent::__construct();
                $this->load->model('product_search_model');
             }
             
              public function index()
	{
		$data['title'] = "Code Igniter Sample Application";
		$data['extraHeadContent'] = '<script type="text/javascript" src="' . base_url() . 'js/function_search.js"></script>';

       // exit();
      //  $this->load->view('header', $data);		
               $this->load->view('admin/_search/index', $data);
	}

        public function ajaxsearch()
	{
		$function_name = $this->input->post('function_name');
		$description = $this->input->post('description');
		echo $this->afunction_model->getSearchResults($function_name, $description);
	}

        public function search()
	{
		$data['title'] = "Code Igniter Search Results";
		$function_name = $this->input->post('function_name');
		$data['search_results'] = $this->afunction_model->getSearchResults($function_name);
		$this->load->view('admin_search/search', $data);
	}
    
}
?>
