<?php
class Checkout_Model extends CI_Model {
    //put your code here
    public function saveShippingAddress($data)
    {
        $this->db->insert('tbl_shipping_address',$data);
        $sdata['shipping_id']=$this->db->insert_id();
        $this->session->set_userdata($sdata);
    }
    
    public function saveOderInfo($data)
    {
        $this->db->insert('tbl_order',$data);
        $sdata['order_id']=$this->db->insert_id();
        $this->session->set_userdata($sdata);
        //$this->saveOderDetailInfo();
    }
    
    public function saveOderDetailInfo()
    {
        $data=array();
        $cart = $this->cart->contents();
        foreach($cart as $acart)
        {
            $data['order_id']=$this->session->userdata('order_id');
            $data['product_id']=$acart['id'];
            $data['product_name']=$acart['name'];
            $data['product_qty']=$acart['qty'];
            $data['product_price']=$acart['price'];
            $this->db->insert('tbl_order_details',$data);
        }
        $order_id = $this->session->userdata('order_id');
        $sql = "update tbl_product, tbl_order_details set tbl_product.product_quantity = tbl_product.product_quantity - tbl_order_details.product_qty where tbl_product.product_id = tbl_order_details.product_id and tbl_order_details.order_id = '$order_id' ";
        $this->db->query($sql);
        $this->cart->destroy();
    }
}

?>
