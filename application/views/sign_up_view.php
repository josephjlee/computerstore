
<h2>Sign Up</h2>
<div>
    <h3>
    <?php
        $message=$this->session->userdata('message');
        if(isset($message))
        {
            echo $message;
            $this->session->unset_userdata('message');
        }
    ?>
    </h3>
</div>
<form action="<?php echo base_url();?>login_controller/saveUser" method="post" onsubmit="return validateStandard(this)">
<table>
    <tr>
        <td>First Name  </td>
        <td><input type="text" name="first_name" maxlenght="25" required="1" err="Enter First Name" regexp="JSVAL_RX_ALPHA"><span class="required">*</span>  </td>
    </tr>
    
    <tr>
        <td>Last Name  </td>
        <td><input type="text" name="last_name" maxlenght="25" required="1" err="Enter Last Name" regexp="JSVAL_RX_ALPHA"><span class="required">*</span>  </td>
    </tr>
    
    <tr>
        <td>Email  Address </td>
        <td><input type="text" name="email_address" id="email_address" maxlength="100" required="1" err="Enter Email Address" regexp="JSVAL_RX_EMAIL"><span class="required">*</span>  </td>
    </tr>
    <tr>
        <td>Confirm Email  Address </td>
        <td><input type="text" name="confirm_email_address" equals="email_address" err="Email address and confirm email address mustbe same" maxlength="100" ><span class="required">*</span>  </td>
    </tr>
    
    <tr>
        <td>Password  </td>
        <td><input type="password" name="password" maxlenght="50" required="1" err="Enter Password" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" ><span class="required">*</span>  </td>
    </tr>
    <tr>
        <td>Password  </td>
        <td><input type="password" name="confirm_password" equals="password" maxlenght="50"  err="Confirm password mustbe same as password"  ><span class="required">*</span>  </td>
    </tr>
    
    <tr>
        <td>Address  </td>
        <td>
            <textarea name="address" rows="4" cols="15"></textarea>
        </td>
    </tr>
    
    <tr>
        <td>Company  </td>
        <td><input type="text" name="company" maxlenght="50">  </td>
    </tr>
    
    <tr>
        <td>City  </td>
        <td><input type="text" name="city" maxlenght="50">  </td>
    </tr>
    
    <tr>
        <td>Country  </td>
        <td>
                <select name="country" required="1" exclude=" ">
                    <option value=" ">--- Select Country ---  </option>
                    <script type="text/javascript">
                        printCountryOptions();
                    </script>
                </select><span class="required">*</span>
        </td>
    </tr>
    
    <tr>
        <td>Zip Code  </td>
        <td><input type="text" name="zip_code" maxlenght="4">  </td>
    </tr>
    
    <tr>
        <td>  </td>
        <td><input type="submit"  value="Register">  </td>
    </tr>
    
    
</table>
    
    </form>

