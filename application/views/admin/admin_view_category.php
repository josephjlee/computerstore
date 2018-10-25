<h1>Category List</h1>
<hr/>
<table>
    <tr>
        <td><strong>Category name</strong></td>
        <td><strong>Category Description</strong></td>
        
    </tr>
    <?php
        foreach($products as $aproducts)
        {
    ?>
    <tr>
        <td><?php echo $aproducts->category_name;?></td>
        <td><?php echo $aproducts->category_description; ?></td>
       
        <td>
            <a href="<?php echo base_url()?>admin/editCategory/<?php echo $aproducts->category_id; ?>">Edit</a>&nbsp;|
            <a href="<?php echo base_url()?>admin/deleteCategory/<?php echo $aproducts->category_description; ?>" onclick=" return checkDelete();">Delete</a>&nbsp;
        </td>
    </tr>
    <?php } ?>
    
    
</table>
<br />

<div id="pagination"><?php echo $this->pagination->create_links(); ?> </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
$('tr:odd').css('background','#e3e3e3');
</script>
