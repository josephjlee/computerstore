<div id="leftcont"> 
    <div class="head"> <h2 class="inset"><b class="b">Category Product</b></h2></div>
     
        
    
    <?php foreach($result as $aresult): ?>
    <div class="pd">
        <div class="content"> <span><img src="<?php echo base_url();?>images/product_images/<?php echo $aresult->product_image;?>" alt="Category Image" width="150" height="120"/><i> <?php echo $aresult->product_name;?> <br/>
            <?php echo $aresult->product_price; ?> <br/> <?php echo $aresult->product_description; ?>
            <a href="<?php echo base_url()?>welcome/viewProductDetailsById/<?php echo $aresult->product_id; ?>">Product Details</a>
                </i></span></div>

        <div class="button green">
            <div class="title">Add2cart</div>
            <div class="price"><?php echo $aresult->product_price; ?></div>
        </div>
        </div>
    <?php endforeach;?>
    
</div>