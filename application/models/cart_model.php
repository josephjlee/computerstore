<?php

/**
 * This is cart_model Model.
 * This model retrieves product informatin by product id to add the product to shopping cart
 * @author Md. Nazmul Hosan
 * date --- 12/04/2009 (mm/dd/yyyy  )
 */
class Cart_Model extends CI_Model {

    public function viewProductInfoByProduct_id($id) { //retrieves product informatin by product id from tbl_product table
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $id);
        $resultSet = $this->db->get();
        $result = $resultSet->row();
        return $result;
    }

}

?>
