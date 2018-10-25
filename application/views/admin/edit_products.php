<html>
    <head>
        <title> Update Product </title>
        
    </head>
    <body>
<div>
    <?php
        $message=$this->session->userdata('message');
        if(isset($message))
        {
            echo $message;
            $this->session->unset_userdata('message');
        }
    ?>
    
</div>

<form name="update_product" action="<?php echo base_url();?>admin/updateProduct" method="POST" enctype="multipart/form-data">

        <table cellspacing="5">
    
    <tr>
        <td>Product Name : </td>
        
        <td>
            <input type="text" name="product_name" value="<?php echo $product_info->product_name; ?>" >
            <input type="hidden" name="product_id" value="<?php echo $product_info->product_id; ?>" >
        </td>
    </tr>
    
    <tr>
        <td>Product Price : </td>
        <td><input type="text" name="product_price" value="<?php echo $product_info->product_price; ?>" >  </td>
    </tr>
    
    <tr>
        <td>Product Quantity  </td>
        <td><input type="text" name="product_quantity" value="<?php echo $product_info->product_quantity; ?>" >  </td>
    </tr>
    
    <tr>
        <td>Product Description :</td>
        <td>
            <textarea name="product_description" id="ck_editor" cols="30" rows="10" class="bangla"><?php echo $product_info->product_description; ?></textarea><?php echo display_ckeditor($check_editor['ckeditor']); ?>
    </tr>
    
    <tr>
        <td>Product Category : </td>
        <td>
            
            <select name="category_id" id="category_id" value="<?php echo $product_info->category_id; ?>">
                <option value="">Select category....</option>
                <?php
                
          
                
                foreach($category as $values)
                    {
                ?>
                <option value="<?php echo $values->category_id?>"><?php echo $values->category_name;?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Product Image : </td>
         <td><input type="hidden" name="product_image" value="<?php echo $product_info->product_image; ?>">
             <input type="file" name="product_image" >                
                <img src="<?php echo base_url()?>images/product_images/<?php echo $product_info->product_image; ?>"  width="100" height="100">
         </td>
         
    </tr>
    <tr>
        <td>Add Date : </td>
        <td><input type="date" name="add_date" value="<?php echo $product_info->add_date; ?>" >  </td>
    </tr>
    
    <tr>
        <td>  </td>
        <td><input type="submit"  value="Save">  </td>
    </tr>
        
</table>
        
    
    </form>
        <script type="text/javascript">
            document.forms['update_product'].elements['category_id'].value ='<?php echo $product_info->category_id;?>';
        </script>
</body>
</html>
