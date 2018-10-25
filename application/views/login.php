
<h3>
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
    </h3>
<form action="<?php echo base_url();?>login_controller/loginCheck" method="POST">
<table>
    <tr>
        <td>Email  </td>
        <td><input type="text" name="email_address">  </td>
    </tr>
    
    <tr>
        <td>Password</td>
        <td><input type="password" name="password">  </td>
    </tr>
<tr>
        <td>  </td>
        <td><input type="submit" name="submit" value="Login">  </td>
    </tr>
    
    
</table>
    
    </form>
    
