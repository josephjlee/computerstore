<div style="padding: 20px;">

    <table >
        <tr>
            <td style="padding: 10px;">
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
                <h3>Returning user?</h3>
                <form class="processable_form"
                      action="<?php echo base_url()?>login_controller/loginCheck" 
                      method="post"
                      onsubmit="return validateStandard(this)">
                    <table>
                        <tr>
                            <td>Email</td>
                            <td ><input type="text" name="email_address"
                                        required="1" err="Please specify a correct Email address" regexp="JSVAL_RX_EMAIL"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"
                                       required="1" err="Please Enter a password"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">

                                <?php echo anchor('application_home/forgotPassword', 'Forgot Password? ', 'title="Send password reset link to your email"'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right"><input type="submit" value="login"
                                                     class="form_button" /></td>
                        </tr>
                    </table>

                </form>
            </td>
            <td style="padding: 10px;">

                <h3>New user?</h3>
                <form class="processable_form"
                      action="<?php echo site_url('application_home/saveNewUserShort') ?>" 
                      method="post"
                      onsubmit="return validateStandard(this)">
                    <table>
                        <tr>
                            <td colspan="2"><h3>User info</h3></td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td><input type="text" name="email_address" maxlength="200" 
                                       required="1" err="Please specify a correct Email Address" regexp="JSVAL_RX_EMAIL"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"
                                       required="1" err="Please specify a strong password" regexp="JSVAL_RX_RESTRICT_CHARACTER"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Re Type</td>
                            <td><input type="password" name="repassword" equals="password" err="Confirm password matches"/>				
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"><h3>Billing Info</h3></td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" name="first_name" maxlength="30" 
                                       required="1" err="Please specify a correct first name" regexp="JSVAL_RX_ALPHA"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="last_name" maxlength="30" 
                                       err="Please specify a correct last name" regexp="JSVAL_RX_ALPHA"/>
                            </td>

                        </tr>
                        <tr>
                            <td>Street Address</td>
                            <td><textarea rows="4" cols="30" name="address"></textarea></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><select name="city">
                                    <option value="dhk">Dhaka</option>
                                    <option value="cht">Chittagong</option>
                                    <option value="syl">Sylhet</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td><select name="country" id="countrydropdown">
                                    <option value="BD">Bangladesh</option>
                                </select></td>
                        </tr>
                        <tr>

                            <td>Zip Code</td>
                            <td><input type="text" name="zip_code" maxlength="4"
                                       err="Please specify a correct zip code" regexp="JSVAL_RX_ZIP" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right"><input id="register_button" type="submit" value="Sign Up!"
                                                     class="form_button" />
                            </td>
                        </tr>
                    </table>
                </form>


            </td>
        </tr>
    </table>


</div>
