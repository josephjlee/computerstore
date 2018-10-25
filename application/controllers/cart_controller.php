<?php

/**
 * This is cart controller.
 * This Shopping Cart controller is made by using CodeIgniter' Cart class
 * This controller allows user to add a product to cart, shows cart, update cart and remove cart
 * @author Md. Nazmul Hosan
 * date --- 18/09/2012 (dd/mm/yyyy)
 */
class Cart_Controller extends CI_Controller {

    public function add() { // adds a product to cart 
        $this->load->model('cart_model');
        $result = $this->cart_model->viewProductInfoByProduct_id($this->input->post('product_id', true));
        //$qty=$this->input->post('qty',true);
        /*echo '------'.$qty;
        echo '<pre>';
        print_r($result);
        exit();*/
        $insert = array(
            'id' => $this->input->post('product_id',true),
            'qty' => $this->input->post('qty',true),
            'price' => $result->product_price,
            'name' => $result->product_name
        );

        $this->cart->insert($insert);
        redirect("cart_controller/showCart");
    }

    public function showCart() { // shows cart 
        $data = array();
        $this->load->model('welcome_model');
        //$cart = $this->cart->contents();
        $data['maincontent'] = $this->load->view('cart_view', $data, true);
        //$this->load->model('application_model');
        //$data['home_slider'] = $this->load->view('slider', $data, true);
        $data['catagory']=$this->welcome_model->selectCatagory();
        //$data['category_tree'] = $this->application_model->selectSubCategoriesHierarchy();
        $this->load->view('home', $data);
    }

    public function update($rowid) { // update cart by changing product quantity
        $cart = array
            (
            'rowid' => $rowid,
            'qty' => $this->input->post('qty')
        );
        $this->cart->update($cart);
        redirect("cart_controller/showCart");
    }

    public function remove($rowid) { // removes a product from cart 
        $cart = array
            (
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($cart);
        redirect("cart_controller/showCart");
    }

}

?>
