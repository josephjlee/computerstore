<html>
    <head>
        <title> Add Product </title>
        
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

<form action="<?php echo base_url();?>admin/saveProduct" method="POST"  enctype="multipart/form-data">

        <table cellspacing="5">
    
    <tr>
        <td>Product Name : </td>
        <td><input type="text" name="product_name" >  </td>
    </tr>
    
    <tr>
        <td>Product Price : </td>
        <td><input type="text" name="product_price" >  </td>
    </tr>
    
    <tr>
        <td>Product Quantity  </td>
        <td><input type="text" name="product_quantity" >  </td>
    </tr>
    
    <tr>
        <td>Product Description :</td>
        <td>
            <textarea name="product_description" id="ck_editor" cols="30" rows="10" class="bangla"></textarea><?php echo display_ckeditor($check_editor['ckeditor']); ?>
    </tr>
    
    <tr>
        <td>Product Category : </td>
        <td>
            
            <select name="category_id">
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
        <td><input type="file" name="product_image" >  </td>
    </tr>
    
    <tr>
        <td>Add Date : </td>
        <td><input type="date" name="add_date" >  </td>
    </tr>
    <tr>
        <td>  </td>
        <td><input type="submit"  value="Save">  </td>
    </tr>
        
</table>
        
    
    </form>

</body>
</html>
