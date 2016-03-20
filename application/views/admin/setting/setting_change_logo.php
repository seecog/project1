<!-- error div start -->
<script language='javascript'>
$(document).ready(function(){
    $('#setting_change_logo_form').validationEngine();
});
</script>
<center>
    <?php
    $this->load->view('admin/setting/setting_menu');
    ?>
    <hr><br>
<?php

echo $this->session->flashdata('image_change_message');

?>
    <form method='post' action='<?php echo base_url("index.php/setting_change_logo"); ?>' id="setting_change_logo_form" enctype="multipart/form-data">
        <table BORDER=0  cellpadding=12>
            <tr>
                <td>
                    <b><font face='times new roman' size='3'>Upload Image</font></b><br>
                    <?php
                    echo $this->session->flashdata('message1');
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <font face='times new roman' size='3'>Upload pic : </font>
                </td>
                <td>
                    <input type='file' class='text-input inputWH validate[required]' data-errormessage-value-missing='Image is required!' name='site_logo' id='site_logo'>
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
