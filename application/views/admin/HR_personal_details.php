<html>
    <!--   jquery start             -->
    <script>
        $(document).ready(function () {

            $('#emp_department').change(function () {
                var department_id = $('#emp_department').val();

                $.post("<?php echo base_url('index.php/get_designation_record'); ?>",
                        {
                            department_id: department_id
                        }, function (data, stt)
                {

                    $('#emp_designation').html(data);
                });

            });

            //designation list start
            var department_id = $('#emp_departmentm').val();
            if (department_id)
            {
                $.post("<?php echo base_url('index.php/get_designation_record'); ?>",
                        {
                            department_id: department_id
                        }, function (data, stt)
                {
                    var emp_designationm = $('#emp_designationm').val();
                    var search_item = "value='" + emp_designationm + "'";
                    var replace_item = "value='" + emp_designationm + "' selected";
                    var newdata = data.replace(search_item, replace_item);
//                    alert(newdata);
                    $('#emp_designation').html(newdata);
                });
            }
            //designation list end

            //department list start
            $.post("<?php echo base_url('index.php/get_department_record'); ?>",
                    {
                    }, function (data, stt) {
                var emp_departmentm = $('#emp_departmentm').val();
                if (emp_departmentm)
                {
                    var search_item = "value='" + emp_departmentm + "'";
                    var replace_item = "value='" + emp_departmentm + "' selected";
                    var newdata = data.replace(search_item, replace_item);
                    data = newdata;
                }
                $('#emp_department').html(data);

            });
            //department list end

            //image upload start

            $("#emp_image_upload").on('submit', (function (e) {


                e.preventDefault();

                $.ajax({
                    url: "<?php echo base_url('index.php/emp_image_upload'); ?>",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        //alert(data);
                        $("#emp_image_upload_div").empty();
                        $("#emp_image_upload_div").html(data);
                    },
                    error: function () {
                    }
                });

            }));



            //image upload end

            $('#error_hr_personal_details').hide();
            $('#emp_left_date').datepicker({
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy-mm-dd'
            });

            $('#emp_join_date').datepicker({
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy-mm-dd'
            });
            $('#emp_dob').datepicker({
                yearRange: "1950:2021",
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy-mm-dd'
            });

        });



    </script>
    <!--   jquery end             -->
    <br>
    <?php
    $this->load->view('admin/HR_menu');
    ?>
    <hr>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--    <img src="<?php // base_url() . 'hrms/images/personal_details.png';     ?>"> <img src="<?php // base_url() . 'hrms/images/qualification.png';     ?>">
    <br><br>
    <input type='file'  name='emp_image' id='emp_image' value='Choose File'>

    <input type='submit' id='emp_image_upload_button' class='propertyBtn propertyBtn-blue' value='Upload'>-->


    <!-- error div end -->
    <center>
        <?php
//    echo $this->session->flashdata('message');
        ?>
        <form action='<?php echo base_url("index.php/HR_personal_details"); ?>' name='frm' id='frm' method='post' enctype='multipart/form-data'>
            <table border='0'  cellpadding='5' cellspacing='0' width='80%'  align='center'>
                <th>
                    <font color='red' face='times new roman' size='3'>Personal Details</font>
                </th>



                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Image
                        </font>
                    </td><td><input type='file'  name='emp_image' id='emp_image' value='<?php echo isset($employee_register_record["emp_image"]) ? $employee_register_record["emp_image"] : ""; ?>'>
                        <?php if (!empty($employee_register_record["emp_image"])) { ?>
                            <img src='<?php echo base_url('/hrms/images/emp_image/' . $employee_register_record["emp_image"]); ?> ' width=50 height=50>
                            <?php
                        } else {
                            ?>
                            <img src='<?php echo base_url('/hrms/images/emp_image/no_image.jpg'); ?> ' width=50 height=50>
                            <?php
                        }
                        ?>

                    </td>                   
                </tr>


                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Emp Name :
                        </font>  
                    </td>
                    <td>
                        <input type='hidden' class='text-input inputWH' name='emp_no' id='emp_no' 
                               value='<?php echo isset($employee_register_record["emp_no"]) ? $employee_register_record["emp_no"] : ""; ?>'>

                        <input type='text' class='text-input inputWH' name='emp_name' id='emp_name' 
                               value='<?php echo isset($employee_register_record["emp_name"]) ? $employee_register_record["emp_name"] : ""; ?>'>
                    </td>
                </tr>


                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Department
                        </font>
                    </td>
                    <td>
                        <input type='hidden' name='emp_departmentm' id='emp_departmentm'
                               value='<?php echo isset($employee_register_record["emp_dept"]) ? $employee_register_record["emp_dept"] : ""; ?>'>

                        <div class="dropdown dropdown-dark inputWH" id='department_list'>
                            <select name='emp_dept' id='emp_department' class='dropdown-select'>

                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Designation:
                        </font>
                    </td>
                    <td>
                        <input type='hidden' name='emp_designationm' id='emp_designationm'
                               value='<?php echo isset($employee_register_record["emp_designation"]) ? $employee_register_record["emp_designation"] : ""; ?>'>
                        <div class="dropdown dropdown-dark inputWH" id='designation_list'>
                            <select name='emp_designation' id='emp_designation' class='dropdown-select'>

                            </select>
                        </div>
                    </td>

                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Salary :
                        </font>
                        <input type='text' class='text-input inputWH' name='emp_salary' id='emp_salary' 
                               value='<?php echo isset($employee_register_record["emp_salary"]) ? $employee_register_record["emp_salary"] : ""; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Date of Birth:
                        </font>
                    </td>
                    <td>
                        <input type='text' class='text-input inputWH' name='emp_dob' id='emp_dob' 
                               value='<?php echo isset($employee_register_record["emp_dob"]) ? $employee_register_record["emp_dob"] : ""; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Address:
                        </font>
                    </td>
                    <td>
<?php $emp_address = isset($employee_register_record["emp_address"]) ? $employee_register_record["emp_address"] : ""; ?>
                        <textarea name='emp_address' id='emp_address' class='inputWHTextarea' rows='4' cols='32'><?php echo trim($emp_address); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Contact No(RESI):
                        </font>
                    </td>
                    <td>
                        <input type='text' class='text-input inputWH' name='emp_contact_no' id='emp_contact_no' 
                               value='<?php echo isset($employee_register_record["emp_contact_no"]) ? $employee_register_record["emp_contact_no"] : ""; ?>'>
                    </td>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Office:
                        </font>


                        <input type='text' class='text-input inputWH' name='emp_contact_no_office' id='emp_contact_no_office' 
                               value='<?php echo isset($employee_register_record["emp_contact_no_office"]) ? $employee_register_record["emp_contact_no_office"] : ""; ?>'>
                    </td>	
                </tr>
                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Mobile: 
                        </font>
                    </td>
                    <td>
                        <input type='text' class='text-input inputWH' name='emp_contact_mobile_no' id='emp_contact_mobile_no' 
                               value='<?php echo isset($employee_register_record["emp_contact_mobile_no"]) ? $employee_register_record["emp_contact_mobile_no"] : ""; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Email-Id:
                        </font>		
                    </td>
                    <td>
                        <input type='text' class='text-input inputWH' name='emp_emailId' id='emp_emailId' 
                               value='<?php echo isset($employee_register_record["emp_emailId"]) ? $employee_register_record["emp_emailId"] : ""; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Join Date: 
                        </font>
                    </td>
                    <td>
                        <input type='text' class='text-input inputWH' id='emp_join_date' name="emp_join_date" 
                               value='<?php echo isset($employee_register_record["emp_join_date"]) ? $employee_register_record["emp_join_date"] : ""; ?>'></input>
                    </td>
                    <td>
                        <font color='#000' face='times new roman' size='3'>
                        Left Date:
                        </font>
                        <input type='text' class='text-input inputWH' name='emp_left_date' id='emp_left_date' 
                               value='<?php echo isset($employee_register_record["emp_left_date"]) ? $employee_register_record["emp_left_date"] : ""; ?>'>
                    </td>
                </tr>

                <tr>
                    <td><input type='submit' class="propertyBtn propertyBtn-blue" name='hr_personal_details_button'  id='hr_personal_details_button' value='<?php echo $btnText; ?>'></td>
                    <td><input type='reset' class="propertyBtn propertyBtn-blue"  name='reset' value='Reset'></td>
                </tr>
            </table>        
        </form>
    </center>
</form>



</html>