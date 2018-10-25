<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Admin Login</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/admin_style.css" />
        
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				background: #e1c192 url(<?php echo base_url();?>images/wood_pattern.jpg);
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			
			
			<section class="main">
                            <form class="form-2" action="<?php echo base_url();?>admin/adminLoginCheck" method="post">
					<h1><span class="log-in">Log in</span> or <span class="sign-up">
                                              <?php
                                                $exception=$this->session->userdata('exception');
                                                if(isset($exception))
                                                {
                                                    echo $exception;
                                                    $this->session->unset_userdata('exception');
                                                }
                                                
                                                $message=$this->session->userdata('message');
                                                if(isset($message))
                                                    {
                                                    echo $message;
                                                    $this->session->unset_userdata('message');
                                                    }
                                              ?>
                                                
                                                
                                            </span></h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Username</label>
						<input type="text" name="admin_email_address" placeholder="Username or email">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="admin_password" placeholder="Password" class="showpassword">
					</p>
					<p class="clearfix"> 
						<a href="#" class="log-twitter">Log in with Twitter</a>    
						<input type="submit" name="submit" value="Login">
					</p>
				</form>​​
			</section>
			
        </div>
		
    </body>
</html>