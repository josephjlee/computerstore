<br />
<br />
<form action="<?php echo base_url();?>cart_controller/add" method="post">
<table align="center" width="400" height="34" border="0" cellspacing="2" cellpadding="2">
<tr height="34">
    <td width="100">Product Image  :</td>
    <td>
            <img src="<?php echo base_url();?>images/product_images/<?php echo $result->product_image;?>" alt="Category Image" width="180" height="200"/>
    </td>
</tr>

<tr>
    <td>Product Name      :</td>
    <td>
          <?php echo $result->product_name; ?>  
    </td>
</tr>

<tr>
    <td>Product Price    :</td>
    <td>
        <?php echo $result->product_price; ?>
    </td>
</tr>

<tr>
    <td>Product Quantity     :</td>
    <td>
        <input type="text" name="qty" />
        <input type="hidden" name="product_id" value="<?php echo $result->product_id; ?>" />
    </td>
</tr>
<tr>
    <td colspan="2"><input type="submit" name="btn" value="Add To Cart"/> </td>
</tr>

            
    

</form>
</table>
   


