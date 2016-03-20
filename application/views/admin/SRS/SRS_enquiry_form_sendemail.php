<html>

    <!--   jquery start             -->
    <script>
        //image upload end

        $(document).ready(function () {

            CKEDITOR.replace('mail_content', {
                uiColor: '#9AB8F3'

            });

            $('#send_email').click(function () {
                $('#email_stt').html('<font face="times new roman" size="3" color="red">Sending..</font>');
                var mail_content = CKEDITOR.instances['mail_content'].getData();
                var email_to = $('#email_to').html();
                alert(email_to);
                $.post("<?php echo base_url('index.php/HR_personal_details_sendemail2'); ?>",
                        {
                            mail_content: mail_content,
                            email_to : email_to
                        }, function (data, stt)
                {
                    
                    CKEDITOR.instances['mail_content'].setData('');
                    $('#email_stt').html('<font face="times new roman" size="3" color="green">Email sent</font>');
                });


            });

        });

    </script>
    <!--   jquery end             -->



    <br>
    <?php
    $this->load->view('admin/SRS/SRS_menu');
    ?>
    <hr>
    <!--	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    -->
    <div style="width:800px;height:auto;margin-left: 300px;margin-top: 50px;">
    <div style='width:600px;height:500px;float:center;'>
        
        <!-- background-color:#F6CECE; -->
<?php
    echo "<font face='times new roman' size='3'>Email To : <b id='email_to'>" . $emp_emailId . "</b></font><font color='green' size='3' face='georgia' id='email_status'></font>";
    ?>
            <img src='<?php echo base_url("hrms/images/email.png"); ?>'>
            <textarea name='mail_content' id='mail_content'/></textarea>
            
<br><input type='button' class="propertyBtn propertyBtn-blue" name='send_email'  id='send_email' value='Send Email'>
<span id='email_stt'></span>
    </div></div>
