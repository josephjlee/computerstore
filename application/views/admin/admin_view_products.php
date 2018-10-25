<h1>Product List</h1>
<hr/>
<table>
    <tr>
        <td><strong>Product Image</strong></td>
        <td><strong>Product name</strong></td>
        <td><strong>Product Price</strong></td>
        <td><strong>Product Quantity</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    <?php
        foreach($rows as $aproducts)
        {
    ?>
    <tr>
        <td><img height="60px" src="<?php echo base_url()?>images/product_images/<?php echo $aproducts->product_image;?>"/></td>
    
        <td><a href="<?php echo base_url()?>admin/viewProductDetails/<?php echo $aproducts->product_id; ?>">
            <?php echo $aproducts->product_name;?>
            </a></td>
        <td><?php echo $aproducts->product_price;?></td>
        <td><?php echo $aproducts->product_quantity;?></td>
 
        <td>
            <a href="<?php echo base_url()?>admin/editProduct/<?php echo $aproducts->product_id; ?>">Edit</a>&nbsp;|
            <a href="<?php echo base_url()?>admin/deleteProduct/<?php echo $aproducts->product_id; ?>" onclick=" return checkDelete();">Delete</a>&nbsp;
        </td>
    </tr>
    <?php } ?>
    
    
</table>
<br />
<div id="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
$('tr:odd').css('background','#e3e3e3');
</script>


