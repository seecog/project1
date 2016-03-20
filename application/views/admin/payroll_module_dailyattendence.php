<html>
    <!--<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/redmond/jquery-ui.css" />-->
    <script>
        $(document).ready(function () {
            $('#employee_attendance_form').validationEngine();
        });
    </script>




    <center>
        <hr>
        <?php
        $this->load->view('admin/payroll_menu');
        ?>
        <hr>  
        <?php
        if (isset($status)) {
            if ($status == 1) {
                echo "<font size='3' face='times new roman' color='green'>Record Inserted sucessfully</font>";
            } else if ($status == 2) {
                echo "<font size='3' face='times new roman' color='green'>Record Updated sucessfully</font>";
            } else if ($status == 3) {
                echo "<font size='3' face='times new roman' color='red'>Attendance already taken,try next day</font>";
            }
        }
        ?>
        <form id='employee_attendance_form' action='<?php echo base_url("index.php/payroll_module_dailyattendence/0"); ?>' method='post'>
            <table BORDER=0 cellpadding=12 width='50%'>
                <tr>

                    <td>
                        <font face='times new roman' size='3'>Employee No : </font>
                    </td>
                    <td>
                        <?php
                        echo "<select name='emp_no' id='emp_no' class='validate[required] dropdown-select' data-errormessage-value-missing='Select employee!'>";
                        echo "<option value=''>Select Employee</option>";
                        foreach ($employee_no_record as $row) {
                            if ($row['emp_no'] == $employee_record['emp_no']) {
                                echo "<option value='" . $row['emp_no'] . "' selected>" . $row['emp_no'] . " (" . $row['emp_name'] . ") </option>";
                            } else {
                                echo "<option value='" . $row['emp_no'] . "'>" . $row['emp_no'] . " (" . $row['emp_name'] . ") </option>";
                            }
                        }
                        echo "</select>";
                        ?>
                        <!--</div>-->

                    </td>
                </tr>

                <tr>
                    <td>
                        <font face='times new roman' size='3'>
                        Log-In (Date ):
                        </font>
                    </td>
                    <td>
                        <?php echo "<font face='times new roman' size='3'>" . date('y-m-d') . "</font>"; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face='times new roman' size='3'>
                        Log-In (Time ):
                        </font>
                    </td>
                    <td>

                        <select name='logInTime' id='logInTime' class='validate[required] dropdown-select-small'>
                            <?php
                            echo "<option value=''>Select LogIn Time</option>";
                            for ($i = 1; $i <= 12; $i++) {
                                if ($employee_record['logInTime'] == $i) {
                                    echo '<option value=' . $i . ' selected>' . $i . '</option>';
                                } else {
                                    echo '<option value=' . $i . '>' . $i . '</option>';
                                }
                            }
                            ?>                            
                        </select>
                        <select name='logInType' id='logInType' class='validate[required] dropdown-select-medium'>
                            <?php
                            echo "<option value=''>Select AM/PM</option>";
                            if ($employee_record["logInType"] == 'AM') {
                                echo '<option value="AM" selected>AM</option>';
                                echo '<option value="PM">PM</option>';
                            } else {
                                echo '<option value="AM">AM</option>';
                                echo '<option value="PM" selected>PM</option>';
                            }
                            ?>                            
                        </select>

                    </td>

                </tr>
                <tr>
                    <td>
                        <font face='times new roman' size='3'>
                        Log-Out (Time ):
                        </font></td>
                    <td>
                        <select name='logOutTime' id='logOutTime' class='validate[required] dropdown-select-small'>
                            <?php
                            echo "<option value=''>Select LogOut Time</option>";
                            for ($i = 1; $i <= 12; $i++) {
                                if ($employee_record['logOutTime'] == $i) {
                                    echo '<option value=' . $i . ' selected>' . $i . '</option>';
                                } else {
                                    echo '<option value=' . $i . '>' . $i . '</option>';
                                }
                            }
                            ?>                            
                        </select>

                        <select name='logOutType' id='logOutType' class='validate[required] dropdown-select-medium'>
                            <?php
                            echo "<option value=''>Select AM/PM</option>";
                            if ($employee_record["logOutType"] == 'AM') {
                                echo '<option value="AM" selected>AM</option>';
                                echo '<option value="PM">PM</option>';
                            } else {
                                echo '<option value="AM">AM</option>';
                                echo '<option value="PM" selected>PM</option>';
                            }
                            ?>                            
                        </select>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td><br>
                        <input type='submit' class="propertyBtn propertyBtn-blue"  value='<?php echo $buttonText; ?>' name='buttonText' id='saveAttendance'>

                    </td>
                </tr>


            </table>
        </form>
    </center>
</html>
