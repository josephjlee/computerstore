<div id="leftcont"> 
    <div class="head"> <h2 class="inset"><b class="b">Featured Product</b></h2></div>
     
        <?php
    
        foreach($products as $aproducts)
        {
        ?>
    
        <div class="pd">
            
        <div class="content"> <span><img src="<?php echo base_url();?>images/product_images/<?php echo $aproducts->product_image;?>" alt="Category Image" width="150" height="120"/><i> <?php echo $aproducts->product_name;?> <br/>
            <?php echo $aproducts->product_price; ?> <br/> <?php echo $aproducts->product_description; ?>
            <a href="<?php echo base_url()?>welcome/viewProductDetailsById/<?php echo $aproducts->product_id; ?>">Product Details</a>

                </i></span></div>

        <div class="button green">
            
            <div class="title">Add2cart</div>
            <div class="price"><?php echo $aproducts->product_price; ?></div>
            
        </div>
        </div>
        <?php } ?>

    
</div>
<div id="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>