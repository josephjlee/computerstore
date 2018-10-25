<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome_model
 *
 * @author common
 */
class Welcome_Model extends CI_Model {
    
    //put your code here
    public function selectHomeContent()
    {
        $this->db->select('*');
        $this->db->from('tbl_pages');
        $this->db->where('id',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result; 
    }
    
     public function selectAboutContent()
    {
        $this->db->select('*');
        $this->db->from('tbl_pages');
        $this->db->where('id',2);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result; 
    }
    
    
//    public function selectCatagory()
//    {
//        $this->db->select('*');
//        $this->db->from('tbl_category');
//        
//        $query_result=$this->db->get();
//        $result=$query_result->result();
//        return $result;  
//    }
    
    public function selectCatagory()
    {
        $sql = 'select tbl_category.category_id,tbl_category.category_name,count(tbl_product.category_id) as product_quantity from tbl_product right join tbl_category on tbl_product.category_id = tbl_category.category_id group by tbl_category.category_name,tbl_category.category_id';
        return $this->db->query($sql)->result();
    }
    
    public function selectProductByCategoryId($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
     public function selectProductQuantity($product_id)
     {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result; 
    }
}

?>
