<html>
    <head>
        <title> Add Pages </title>
        
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

<form action="<?php echo base_url();?>admin/saveCategory" method="POST">

        <table cellspacing="5">
    
    <tr>
        <td>Category Name  </td>
        <td><input type="text" name="category_name" >  </td>
    </tr>
    
    <tr>
        <td>Category Description</td>
        <td>
            <textarea name="category_description" id="ck_editor" cols="30" rows="10" class="bangla"></textarea><?php echo display_ckeditor($check_editor['ckeditor']); ?>
    </tr>
    
    <tr>
        <td>  </td>
        <td><input type="submit"  value="Save">  </td>
    </tr>
        
</table>
        
    
    </form>

</body>
</html>
