<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author common
 */
class Admin_Model extends CI_Model {
    //put your code here
    public function adminLoginCheckInfo($admin_email_address,$admin_password)
    {
       $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address',$admin_email_address);
        $this->db->where('admin_password',md5($admin_password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result; 
    }
    public function savePages($data)
    {
        $this->db->insert('tbl_pages',$data);
    }
    public function saveCategory($data)
    {
        $this->db->insert('tbl_category',$data);
    }
    public function saveProduct($data)
    {
        $this->db->insert('tbl_product',$data);
    }
    
    
    public function selectProduct( $per_page, $offset)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $query=$this->db->get('',$per_page, $offset);
        foreach ($query->result() as $row)
        $data[]=$row;
        
        return $data;       
    }
   
    public function selectAllProduct()
     {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result; 
    }
    
   
    
     public function selectCategory($num,$offset)
    {
        $q = $this->db
                  ->get('tbl_category', $num, $offset)
                  ->result();
        return $q;

    }
    
    
    public function deleteProduct($product_id)
    {
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_product');
    }
    public function selectProductByProductId($product_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result; 
        
        
    }
    public function updateProduct($data)
    {
//         echo '<pre>';
//            print_r($_FILES);
//            print_r($data);
//           exit();
        $this->db->where('product_id',$data['product_id']);
        $this->db->update('tbl_product',$data);
    }
    
    public function updateCategory($data)
    {
//           echo '<pre>';
//           print_r($data);
//           exit();
        $this->db->where('category_id',$data['category_id']);
        $this->db->update('tbl_category',$data);
    }
    
     public function selectProductViewDetails($product_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result; 
        
        
    }
    
    public function selectCategoryByCategoryId($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result; 
        
        
    }
  
}

?>
