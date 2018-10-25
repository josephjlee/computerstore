<!DOCTYPE html>
<html>
    <head>
        <title>E-commerce
            <?php
                /*if(isset($title))
                 {
                     echo $title;
                 }*/
            ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="computer source, csl bd, computer source bd, computer price bangladesh, price bd, computer product price, laptop price bangladesh" > <meta name="description" content="Computer Source Ltd (CSL) is the largest technology distributor of Bangladesh with wide range of IT Products including Dell, Fujitsu, Prolink, Norton, Samsung, Apple, HP, Intel, Logitec Cisco etc. Learn about the latest computer price bangladesh, laptop price bangladesh" > 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/country.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jsval.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery-func.js"></script>
    </head>
    <body>
        <div id="header">
            <div class="shell">
                <h1 id="logo"><a href="#">Computer Shop</a></h1>
                <div id="navigation">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>cart_controller/showCart.aspx"><span>Show Cart <?php echo '( ' .$this->cart->total_items() . ' )';?></span></a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/index.aspx"><span>Home</span></a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/aboutUs.aspx"><span>About Us</span></a></li>
                                                
                        <?php 
                        if($this->session->userdata('user_id'))
                           {                 
                        ?>
                        <li class="menuitem"><a href="<?php echo base_url();?>login_controller/logOut">Logout</a></li>
                        <?php } else {?>
                        <li class="menuitem"><a href="<?php echo base_url();?>login_controller/showSignUp">Sign Up</a></li>
                        <li class="menuitem"><a href="<?php echo base_url();?>login_controller/showLogin">Login</a></li>
                        <?php } ?>
                        
                        
                        <li><a href="#"><span>Laptop</span></a>
                            <ul >
                                <li><span><a href="#"> Apple Laptop</a></span></li>
                                <li><span><a href="#" > Hp Laptop</a></span></li>
                                <li><span><a href="#" >Dell Laptop</a></span></li>
                                <li><span><a href="#" >Acer Laptop</a></span></li>
                                <li><span><a href="#" >Asus Laptop</a></span></li>
                                <li><span><a href="#" >Samsung Laptop </a></span></li>
                                <li><span><a href="#" >Toshiba Laptop</a></span></li>
                                <li><span> <a href="#" > <img src="<?php echo base_url(); ?>images/arrow.png" alt="arrow"/></a></span></li>

                            </ul>
                        </li>
                        <li><a href="#"><span>Desktop</span></a>
                            <ul >
                                <li><span><a href="#"> Apple Brand</a></span></li>
                                <li><span><a href="#" > Hp Brand</a></span></li>
                                <li><span><a href="#" >Dell Brand</a></span></li>

                                <li><span><a href="#" >Asus Barnd</a></span></li>
                                <li><span><a href="#" >Samsung Brand </a></span></li>

                                <li><span> <a href="#" > <img src="<?php echo base_url(); ?>images/arrow.png" alt="arrow"/></a></span></li>

                            </ul>

                        </li>
                        
                        

                </div>
                <div id="main">
                    <div class="shell">

                        <div class="intro">

                            <div class="slider-carousel"> 
                                <ul>						
                                    <li> 
                                        <a href="#"><img src="<?php echo base_url(); ?>images/desktop.png" alt="slide image" /></a>
                                        <div class="entry">
                                            <h2>BUY OUR SPECIAL PRODUCT</h2>
                                            <p>One of the Web's leading destinations for computer shopper is your source for labs-based reviews of laptop computers, desktop computers and related computers and related computer products.</p>
                                            <ul>
                                                <li>Our ratings, ranking and princing help you find the Top Computer Products.</li>
                                                <li>Online Shopping from Our Biggest Collection of electronics, Computer software.</li>
                                                <li>Easy shopping system, Cheap Rate and Best Computer deals. </li>
                                                <li>Find Out More Latest Product from this Web Site</li>
                                            </ul>

                                            <span class="promo">&nbsp;</span>
                                        </div>

                                        <a class="but" href="#">FIND OUT MORE</a>
                                    </li> 

                                    <li> 
                                        <a href="#"><img src="<?php echo base_url(); ?>images/laptop.png" alt="slide image" /></a>
                                        <div class="entry">
                                            <h2>BUY OUR SPECIAL PRODUCT</h2>
                                            <p>One of the Web's leading destinations for computer shopper is your source for labs-based reviews of laptop computers, desktop computers and related computers and related computer products.</p>
                                            <ul>
                                                <li>Our ratings, ranking and princing help you find the Top Computer Products.</li>
                                                <li>Online Shopping from Our Biggest Collection of electronics, Computer software.</li>
                                                <li>Easy shopping system, Cheap Rate and Best Computer deals. </li>
                                                <li>Find Out More Latest Product from this Web Site</li>
                                            </ul>
                                            <a class="but" href="#">FIND OUT MORE</a>
                                            <span class="promo">&nbsp;</span>
                                        </div>

                                    </li> 
                                    <li> 
                                        <a href="#"><img src="<?php echo base_url(); ?>images/tablet.png" alt="slide image" /></a>
                                        <div class="entry">
                                            <h2>BUY OUR SPECIAL PRODUCT</h2>
                                            <p>One of the Web's leading destinations for computer shopper is your source for labs-based reviews of laptop computers, desktop computers and related computers and related computer products.</p>
                                            <ul>
                                                <li>Our ratings, ranking and princing help you find the Top Computer Products.</li>
                                                <li>Online Shopping from Our Biggest Collection of electronics, Computer software.</li>
                                                <li>Easy shopping system, Cheap Rate and Best Computer deals. </li>
                                                <li>Find Out More Latest Product from this Web Site</li>
                                            </ul>
                                            <a class="but" href="#">FIND OUT MORE</a>
                                            <span class="promo">&nbsp;</span>
                                        </div>

                                    </li> 

                                    <li> 
                                        <a href="#"><img src="<?php echo base_url(); ?>images/iphone.png" alt="slide image" /></a>
                                        <div class="entry">
                                            <h2>BUY OUR SPECIAL PRODUCT</h2>
                                            <p>One of the Web's leading destinations for computer shopper is your source for labs-based reviews of laptop computers, desktop computers and related computers and related computer products.</p>
                                            <ul>
                                                <li>Our ratings, ranking and princing help you find the Top Computer Products.</li>
                                                <li>Online Shopping from Our Biggest Collection of electronics, Computer software.</li>
                                                <li>Easy shopping system, Cheap Rate and Best Computer deals. </li>
                                                <li>Find Out More Latest Product from this Web Site</li>
                                            </ul>
                                            <a class="but" href="#">FIND OUT MORE</a>
                                            <span class="promo">&nbsp;</span>
                                        </div>

                                    </li> 

                                    <li> 
                                        <a href="#"><img src="<?php echo base_url(); ?>images/printer.png" alt="slide image" /></a>
                                        <div class="entry">
                                            <h2>BUY OUR SPECIAL PRODUCT</h2>
                                            <p>One of the Web's leading destinations for computer shopper is your source for labs-based reviews of laptop computers, desktop computers and related computers and related computer products.</p>
                                            <ul>
                                                <li>Our ratings, ranking and princing help you find the Top Computer Products.</li>
                                                <li>Online Shopping from Our Biggest Collection of electronics, Computer software.</li>
                                                <li>Easy shopping system, Cheap Rate and Best Computer deals. </li>
                                                <li>Find Out More Latest Product from this Web Site</li>
                                            </ul>
                                            <a class="but" href="#">FIND OUT MORE</a>
                                            <span class="promo">&nbsp;</span>
                                        </div>

                                    </li> 
                                </ul>
                                <div class="slider-navigation"> 
                                    <ul> 
                                        <li class="first"><a class="active" href="#"><span class="hidden-id">1</span><span class="button1"></span><em>DeskTop</em>Find Out More Latest Product from this site</a></li> 
                                        <li><a href="#"><span class="hidden-id">2</span><span class="button2"></span><em>Laptop PC</em>Find Out More Latest Product from this site</a></li> 
                                        <li><a  href="#"><span class="hidden-id">3</span><span class="button3"></span><em>Tablet PC</em>Find Out More Latest Product from this site</a></li> 
                                        <li><a  href="#"><span class="hidden-id">4</span><span class="button4"></span><em> Mobile</em>Find Out More Latest Product from this site</a></li> 
                                        <li><a href="#"><span class="hidden-id">5</span><span class="button5"></span><em>Printing</em>Find Out More Latest Product from this site</a></li> 
                                    </ul>
                                </div>	
                                <div class="cl">&nbsp;</div>
                            </div> 


                        </div>


                    </div>

                </div>  



                <div id="leftnav"> 
                    
                    
                    <br/>
                    <section>
                        <div class="ptext"><h2 >Product Category</h2></div>
                        <nav>
                            <ul id="vertical">
                               <?php
                    
                                    foreach($catagory as $values)
                                        {
                           
                                    //echo   "<li><a href=\"#\">".$values->category_name."</a></li>";
                                ?>
                                <li><a href="<?php echo base_url();?>welcome/showProductBycategory/<?php echo $values->category_id;?>"><?php echo $values->category_name;?> &nbsp;&nbsp; (<?php echo $values->product_quantity; ?>)</a>                                       
                                    </li>
                                <?php      
                                         } 
                                 ?> 
                                    
                                    
                                    <?php
                    
                                    //foreach($category as $values)
                                        {                          
                                    
                                ?>
                                    <li><a href="<?php //echo base_url();?>welcome/selectProduct/<?php //echo $values->product_id;?>"><?php //echo $values->product_quantity;?></a></li>
                                <?php      
                                         } 
                                 ?>

                            </ul>
                        </nav>
                    </section>
                </div>
                <div id="leftcont"> 
                    <div id="leftcont">                                              
                    
                        <?php echo $maincontent; ?>                   
     

                    </div>
                </div>

                <div class="finalf"><div class="ftext"> <a href="#">Home</a> |<a href="#"> About Us</a> | <a href="#">Contact Us </a> | <a href="#">Help Line</a> </div>
                    <p class="ftext1">&COPY; This templete design by <a href="#">ShahSami</a></p>
                </div>
            </div> 

        </div>

    </body>
</html>