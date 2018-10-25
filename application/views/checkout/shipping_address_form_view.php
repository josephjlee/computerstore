<div>
    <h2>Shipping Address</h2>
</div>
<form action="<?php echo base_url();?>checkout/saveShippingInfo" method="post" onsubmit="return validateStandard(this)">
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
        <td>Address  </td>
        <td>
            <textarea name="address" rows="4" cols="15"></textarea>
        </td>
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
        <td>Cell No </td>
        <td><input type="text" name="cell_no" maxlenght="50">  </td>
    </tr>
    
    <tr>
        <td>  </td>
        <td><input type="submit"  value="Save">  </td>
    </tr>
    
    
</table>
    
    </form>