<!-- error div start -->
<script language='javascript'>
$(document).ready(function(){
    $('#change_password_form').validationEngine();
});
</script>
<center>
    <?php
    $this->load->view('admin/setting/setting_menu');
    ?>
    <hr><br>

    <form method='post' action='<?php echo base_url("index.php/setting_change_password"); ?>' id="change_password_form">
        <table BORDER=0  cellpadding=12>
            <tr>
                <td>
                    <b><font face='times new roman' size='3'>Password Details</font></b><br>
                    <?php
                    echo $this->session->flashdata('message1');
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <font face='times new roman' size='3'>Old Password : </font>
                </td>
                <td>
                    <input type='password' class='text-input inputWH validate[required]' data-errormessage-value-missing='Password is required!' name='old_password' id='old_password'>
                </td>
            </tr>
            <tr>
                <td>
                    <font face='times new roman' size='3'>New Password : </font>
                </td>
                <td>
                    <input type='password' class='text-input inputWH validate[required]' data-errormessage-value-missing='New password is required!' name='password' id='staff_new_Password'>
                </td>
            </tr>
            <tr>
                <td>
                    <font face='times new roman' size='3'>Confirm Password : </font>
                </td>
                <td>
                    <input type='password' class='text-input inputWH validate[required]' data-errormessage-value-missing='Confirm password is required!' name='re_password' id='staff_confirm_Password'>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type='submit' name='asset_change_password_button' id='asset_change_password_button'  value='submit' class='propertyBtn propertyBtn-blue'>
                </td>
            </tr>


        </table>
    </form>
</center>
