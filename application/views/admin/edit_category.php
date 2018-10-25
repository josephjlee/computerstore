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

<form name="update_category" action="<?php echo base_url();?>admin/updateCategory" method="POST" >

        <table cellspacing="5">
    
    <tr>
        <td>Category Name : </td>
        
        <td>
            <input type="text" name="category_name" value="<?php echo $product_info->category_name; ?>" >
            <input type="hidden" name="category_id" value="<?php echo $product_info->category_id; ?>" >
        </td>
    </tr>
    
    <tr>
        <td>Category Description : </td>
        <td>
            <textarea name="category_description" id="ck_editor" cols="30" rows="10" class="bangla"><?php echo $product_info->category_description; ?></textarea><?php echo display_ckeditor($check_editor['ckeditor']); ?>
        </td>
    </tr>
    
    
    
    <tr>
        <td>  </td>
        <td><input type="submit"  value="Save">  </td>
    </tr>
        
</table>
        
    
    </form>
        
<!--        <script type="text/javascript">
            document.forms['update_product'].elements['category_id'].value ='<?php //echo $product_info->category_id;?>';
        </script>-->
        
</body>
</html>
