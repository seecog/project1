<div id="">
    <center>
        <?php
        $this->load->view('admin/setting/setting_menu');
        ?>
        <hr><br>

        <!--content start -->
        <table width='50%' align='center'>
            <tr>
                <td>
                    <a href="<?php echo base_url('index.php/setting_change_password'); ?>">
                        <img src="<?php echo base_url('hrms/images/change_password.png'); ?>">
                    </a>
                </td>

                <td>
                    <a href="<?php echo base_url('index.php/setting_change_logo'); ?>">
                        <img src="<?php echo base_url('hrms/images/change_logo.jpg'); ?>">
                    </a>
                </td>


            </tr>	
<!--

            <tr>
                <td>
                    <a href="<?php echo base_url('index.php/SRS_enquiry_form'); ?>">

                        <img src="<?php echo base_url('hrms/images/student.png'); ?>">
                    </a>
                </td>

                <td>         
                    <a href='<?php echo base_url('index.php/settingmain'); ?>'>
                        <img src='<?php echo base_url('hrms/images/setting.png'); ?>'>
                    </a>
                </td>


            </tr>	-->

        </table> 
        <!--content end -->

    </center>
</div>	
