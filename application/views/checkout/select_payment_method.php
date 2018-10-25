<h2>Select Your payment Method</h2>
<form action="<?php echo secure_base_url();?>checkout/confirmOrder" method="post">
    <input type="radio" name="payment_status" value="cash on delevary"/> Cash On Dalevary<br/>
    <input type="radio" name="payment_status" value="paypal"/> Paypal Payment<br/>
    <input type="submit" value="Confirm Order"/>
</form>