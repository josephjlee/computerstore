<html>
    <head>
        <title> Add Pages </title>
        
    </head>
    <body>


<form action="<?php echo base_url();?>admin/savePages" method="POST">

        <table cellspacing="5">
    
    <tr>
        <td>Title  </td>
        <td><input type="text" name="title" >  </td>
    </tr>
    
    <tr>
        <td>Description</td>
        <td>
            <textarea name="description" id="ck_editor" cols="30" rows="10" class="bangla"></textarea><?php echo display_ckeditor($check_editor['ckeditor']); ?>
    </tr>
    
    <tr>
        <td>  </td>
        <td><input type="submit"  value="Save">  </td>
    </tr>
        
</table>
        
    
    </form>

</body>
</html>
