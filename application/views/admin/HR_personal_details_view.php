<br>
<?php
$this->load->view('admin/HR_menu');
?>
<hr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--    <img src="<?php // base_url() . 'hrms/images/personal_details.png';       ?>"> <img src="<?php // base_url() . 'hrms/images/qualification.png';       ?>">
    <br><br>
    <input type='file'  name='emp_image' id='emp_image' value='Choose File'>

    <input type='submit' id='emp_image_upload_button' class='propertyBtn propertyBtn-blue' value='Upload'>-->


<!-- error div end -->
<center id='print_employee_record'>

    <table border='0'  cellpadding='5' cellspacing='0' width='50%'  align='center'>
        <th>
            <font color='red' face='times new roman' size='3'>Personal Details</font>
        </th>



        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Image
                </font>
            </td><td>
                <?php if (!empty($employee_register_record["emp_image"])) { ?>
                    <img src='<?php echo base_url('/hrms/images/emp_image/' . $employee_register_record["emp_image"]); ?> ' width=100 height=100>
                    <?php
                } else {
                    ?>
                    <img src='<?php echo base_url('/hrms/images/emp_image/no_image.jpg'); ?> ' width=100 height=100>
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
                <font color='#000' face='times new roman' size='3'>
                <?php echo isset($employee_register_record["emp_name"]) ? ucwords($employee_register_record["emp_name"]) : ""; ?>
                </font>                        
            </td>
        </tr>


        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Department
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>                
                <?php
                $department = $this->model_department->get_department_record_by_id($employee_register_record["emp_dept"]);
                echo $department[0]['department_name'];
                ?>
                </font>
            </td>
        </tr>

        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Designation:
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
                <?php
                $designation = $this->model_designation->get_designation_record_by_id($employee_register_record['emp_designation']);
                echo $designation[0]['designation_name'];
                ?>
                </font>
            </td>

            <td>
                <font color='#000' face='times new roman' size='3'>
                Salary :  Rs                   
<?php echo isset($employee_register_record["emp_salary"]) ? $employee_register_record["emp_salary"] : ""; ?>
                </font>
            </td>
        </tr>
        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Date of Birth:
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
<?php echo isset($employee_register_record["emp_dob"]) ? $employee_register_record["emp_dob"] : ""; ?>
                </font>
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
                <font color='#000' face='times new roman' size='3'>
<?php echo trim($emp_address); ?>
                </font>
            </td>
        </tr>
        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Contact No(RESI):
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
<?php echo isset($employee_register_record["emp_contact_no"]) ? $employee_register_record["emp_contact_no"] : ""; ?>
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Office:                    
<?php echo isset($employee_register_record["emp_contact_no_office"]) ? $employee_register_record["emp_contact_no_office"] : ""; ?>
                </font>
            </td>	
        </tr>
        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Mobile: 
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
<?php echo isset($employee_register_record["emp_contact_mobile_no"]) ? $employee_register_record["emp_contact_mobile_no"] : ""; ?>
                </font>
            </td>
        </tr>
        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Email-Id:
                </font>		
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
<?php echo isset($employee_register_record["emp_emailId"]) ? $employee_register_record["emp_emailId"] : ""; ?>
                </font>
            </td>
        </tr>
        <tr>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Join Date: 
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
<?php echo isset($employee_register_record["emp_join_date"]) ? $employee_register_record["emp_join_date"] : ""; ?>
                </font>
            </td>
            <td>
                <font color='#000' face='times new roman' size='3'>
                Left Date :                     
<?php echo isset($employee_register_record["emp_left_date"]) ? $employee_register_record["emp_left_date"] : ""; ?>
                </font>
            </td>
        </tr>

        <tr>
            <td></td><td><input type='button' class="propertyBtn propertyBtn-blue" onclick="PrintElem('#print_employee_record')" value='Print'>
            </td>
        </tr>
    </table>        

</center>


<script language='javascript'>
    function PrintElem(elem)
    {

       Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'print_appointment_letter', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

    $(document).ready(function(){
        $('#hr_personal_details_button').click(function(){
            
        });
    });
    </script>