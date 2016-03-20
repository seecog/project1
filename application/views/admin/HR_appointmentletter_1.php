<html>
    <script>
        $(document).ready(function () {


            //employee no list start

            $.post("<?php echo base_url('index.php/get_employee_no_record'); ?>",
                    {
                    }, function (data, stt) {

                $('#employee_no_list').html(data);
            });
            //employee_no_list end

            //validation check for HR employee appointmrnt letter start

            $('#error_emp_appointment_letter').hide();
            $('#error_HR_appointment_letter').hide();
            $('#emp_appointment_letter_button').click(function () {
                $('#error_HR_appointment_letter').hide();
                $('#error_emp_appointment_letter').hide();
                //collect form values start

                var emp_appointmentletter = $('#emp_appointmentletter').val();
                //collect form values end
                //check form values start
                var error_count = 0;
                if (emp_appointmentletter == '')
                {
                    error_count++;
                    $('#error_emp_appointment_letter').show();
                }
                //check form values end
                if (error_count == 0)
                {

                    //jquery start
                    var emp_no = $('#emp_no').val();
                    $.post("<?php echo base_url('index.php/HR_appointmentletter_2'); ?>",
                            {
                                emp_no: emp_no
                            }, function (data, stt)
                    {
                        $('#appointmentletter_div').html(data);
                        //document.frm.action = "/HRMS/index.php/HR_appointmentletter_2";
                        //document.frm.submit();
                    });
                    //jquery end

                }
                else
                {
                    $('#error_HR_appointment_letter').show();
                }
            });
            //validation check for HR employee appointmrnt letter end
        });
    </script>

    <div id="appointmentletter_div">
        <center>

            <?php
            $this->load->view('admin/HR_menu');
            ?>
            <hr>


            <form method='post' name='frm'>                 
                <div><font color='red' size='3' face='times new roman'>Employee Appointment Letter</font></div><br><br>
                <table BORDER=0  FRAME='BOX' cellpadding=12><tr><td>

                            <font color='#000' size='3' face='times new roman'>Employee No. </font>
                            <div class="dropdown dropdown-dark inputWH" id="employee_no_list">
                            </div>
                            <br><br>
                            <input type='button' class="propertyBtn propertyBtn-blue" name='emp_appointment_letter_button' id='emp_appointment_letter_button' value='Ok'>
                            <input type='button' class="propertyBtn propertyBtn-blue" name='close' value='close'>	
                        </td></tr>
                </table>
            </form>
        </center>
    </div>	
    <br><br>
</html>