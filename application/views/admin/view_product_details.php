<h3>Product Details</h3>
<form name="view_product" action=" " method="POST" enctype="multipart/form-data">
<table width="400" height="34" border="0" cellspacing="2" cellpadding="2">
<tr height="34">
    <td width="100">Product Image  :</td>
    <td>
            <img src="<?php echo base_url();?>images/product_images/<?php echo $result->product_image;?>" alt="Category Image" width="150" height="120"/>
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
            <?php echo $result->product_quantity;?>
    </td>
</tr>


</table>
    
    
</form>

