<h1 align="center">Your Shopping Cart</h1>
<div>
    <?php
        /*echo "IN Cart";
        $cart = $this->cart->contents();
        echo '<pre>';
        print_r($cart);
        exit();*/
        
        ?>
</div>
<table  border="0" cellpadding="5px" cellspacing="1px"  width="100%">
    <tr >
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Update</th>
        <th>Subtotal</th>
        <th>Remove</th>
    </tr>
<!--   <tr>
        
    </tr>-->



    <?php if ($cart = $this->cart->contents()) ; ?>
    <?php foreach ($cart as $items) { ?>
    <form action="<?php echo base_url()?>cart_controller/update/<?php echo $items['rowid'];?>" method="post">
        <tr >
            <td><?php echo $items['name'] ?></td>
            <td><b>$</b><?php echo $items['price'] ?></td>
            <td><input type="text" name="qty" value="<?php echo $items['qty'] ?>"/></td>
            <td><input type="submit" name="update" value="Update"></td> 
            <td><b>$</b><?php echo $items['subtotal'] ?></td>
            <td><?php echo anchor("cart_controller/remove/" . $items['rowid'], "Remove") ?></td>
        </tr>
        </form>
    <?php }; ?>
    <tr  >
        <td colspan="6" >&nbsp;</td>
    </tr>
    <tr >
        <td colspan="3">&nbsp;</td>
        <td><a href="<?php echo base_url(); ?>welcome/index">Continue Shopping</a></td>
        <td ><b>Total: $</b><?php echo $this->cart->total(); ?></td>
        <td><a href="<?php echo base_url(); ?>checkout/customerIdentity">Checkout</a></td>
    </tr>
    <tr >
        
    </tr>
</table>
<?php
    if($this->session->userdata('user_id')&& $this->session->userdata('shipping_id')==NULL)
    {
        $this->load->view('checkout/shipping_address_form_view');
    }
    if($this->session->userdata('user_id')&& $this->session->userdata('shipping_id'))
    {
         $this->load->view('checkout/select_payment_method');
    }

?>