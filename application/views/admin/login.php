<center>
    <img src='hrms/images/cepd.jpg'>
</center>
<script language='javascript'>
$(document).ready(function(){
    $('#login_form').validationEngine();
});
</script>
<center><div style="">

        <form action='<?php echo base_url("index.php/HR_check_login"); ?>' name='login_form' id='login_form' method='post' enctype='multipart/form-data'>
            <table border='0'  cellpadding='5' cellspacing='0' width='80%'  align='center'>
                <tr>
                    <td><font color='#000' face='times new roman' size='3'><b>Admin Login</b></font></td>                    
                </tr>

                <tr><td colspan='2'>
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo "<br><b>" . $this->session->flashdata('message')."</b>";
                    }
                    ?>
                    </td></tr>

                <tr>
                    <td><font color='#000' face='times new roman' size='3'>Username : </font></td>
                    <td><input type='text' name='admin_user' class='text-input inputWH validate[required]' data-errormessage-value-missing='Username is required!'></td>
                </tr>

                <tr>
                    <td><font color='#000' face='times new roman' size='3'>Password : </font></td>
                    <td><input type='password' name='admin_pass' class='text-input inputWH validate[required]' data-errormessage-value-missing='Password is required!'></td>
                </tr>
                <tr><td></td><td><input type='submit' class='propertyBtn propertyBtn-blue'> 
                        <font color='#000' face='times new roman' size='3'> | </font>
                        <input type='reset' class='propertyBtn propertyBtn-blue'></td>
                </tr>
            </table>
        </form></div>

    <br><br><br><br><br><br><hr>
</center>