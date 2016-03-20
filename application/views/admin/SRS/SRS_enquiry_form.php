<html>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('hrms/css/style.css'); ?>" />

    <script src="<?php echo base_url('assets/js/ckeditor/ckeditor.js'); ?>" type="text/javascript" ></script>
    <script src="<?php echo base_url('assets/js/ckeditor/adapters/jquery.js'); ?>" type="text/javascript" ></script>
    <script src="<?php echo base_url('assets/js/jquery.ptTimeSelect.js'); ?>" type="text/javascript" ></script>



<!--<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<input value="someone@nowhere.com" class="validate[required,custom[email]]" type="text" name="email" id="email" />
<input value="2010-12-01" class="validate[required,custom[date]]" type="text" name="date" id="date" />
<inpu-->


    <!-- DATEPICKER LIBRARY FILES END -->


    <script>
        $(document).ready(function () {

            $('#srs_enquiry_form').validationEngine();

            //datepicker start
            $('#enquiry_student_dob').datepicker();
            //datepicker end

            $('#SRS_enquiry_form_button').click(function () {

                var enquiry_student_name = $('#enquiry_student_name').val();

                var enquiry_student_address = $('#enquiry_student_address').val();

                var enquiry_student_pin_no = $('#enquiry_student_pin_no').val();

                var enquiry_student_residence_no = $('#enquiry_student_residence_no').val();

                var enquiry_student_office_no = $('#enquiry_student_office_no').val();

                var enquiry_student_mobile_no = $('#enquiry_student_mobile_no').val();

                var enquiry_student_dob = $('#enquiry_student_dob').val();

                var enquiry_student_age = $('#enquiry_student_age').val();

                var enquiry_student_email = $('#enquiry_student_email').val();

                var enquiry_student_ssc = $('#enquiry_student_ssc').val();

                var enquiry_student_ssc_percent = $('#enquiry_student_ssc_percent').val();

                var enquiry_student_hsc = $('#enquiry_student_hsc').val();

                var enquiry_student_hsc_percent = $('#enquiry_student_hsc_percent').val();

                var enquiry_student_family_income = $('#enquiry_student_family_income').val();

                var enquiry_student_field_of_interest = $("input[name=enquiry_student_field_of_interest]:checked").val();

                var enquiry_student_father_name = $('#enquiry_student_father_name').val();

                var enquiry_student_father_age = $('#enquiry_student_father_age').val();

                var enquiry_student_father_edu = $('#enquiry_student_father_edu').val();

                var enquiry_student_father_occ = $('#enquiry_student_father_occ').val();

                var enquiry_student_father_contact = $('#enquiry_student_father_contact').val();

                var enquiry_student_brother_sister_name = $('#enquiry_student_brother_sister_name').val();

                var enquiry_student_brother_sister_age = $('#enquiry_student_brother_sister_age').val();

                var enquiry_student_brother_sister_edu = $('#enquiry_student_brother_sister_edu').val();

                var enquiry_student_brother_sister_occ = $('#enquiry_student_brother_sister_occ').val();

                var enquiry_student_brother_sister_contact = $('#enquiry_student_brother_sister_contact').val();

                var enquiry_student_uncle_name = $('#enquiry_student_uncle_name').val();

                var enquiry_student_uncle_age = $('#enquiry_student_uncle_age').val();

                var enquiry_student_uncle_edu = $('#enquiry_student_uncle_edu').val();

                var enquiry_student_uncle_occ = $('#enquiry_student_uncle_occ').val();

                var enquiry_student_uncle_contact = $('#enquiry_student_uncle_contact').val();

                var enquiry_student_aunty_name = $('#enquiry_student_aunty_name').val();

                var enquiry_student_aunty_age = $('#enquiry_student_aunty_age').val();

                var enquiry_student_aunty_edu = $('#enquiry_student_aunty_edu').val();

                var enquiry_student_aunty_occ = $('#enquiry_student_aunty_occ').val();

                var enquiry_student_aunty_contact = $('#enquiry_student_aunty_contact').val();

                var enquiry_student_ref_1_name = $('#enquiry_student_ref_1_name').val();

                var enquiry_student_ref_1_quali = $('#enquiry_student_ref_1_quali').val();

                var enquiry_student_ref_1_contact = $('#enquiry_student_ref_1_contact').val();

                var enquiry_student_ref_2_name = $('#enquiry_student_ref_2_name').val();

                var enquiry_student_ref_2_quali = $('#enquiry_student_ref_2_quali').val();

                var enquiry_student_ref_2_contact = $('#enquiry_student_ref_2_contact').val();

                var enquiry_Remarks = $('#enquiry_Remarks').val();

                var enquiry_counsellers_name = $('#enquiry_counsellers_name').val();

                //connect to server start
                $.post('/HRMS/index.php/insert_student_enquiry_record',
                        {
                            enquiry_student_name: enquiry_student_name,
                            enquiry_student_address: enquiry_student_address,
                            enquiry_student_pin_no: enquiry_student_pin_no,
                            enquiry_student_residence_no: enquiry_student_residence_no,
                            enquiry_student_office_no: enquiry_student_office_no,
                            enquiry_student_mobile_no: enquiry_student_mobile_no,
                            enquiry_student_dob: enquiry_student_dob,
                            enquiry_student_age: enquiry_student_age,
                            enquiry_student_email: enquiry_student_email,
                            enquiry_student_ssc: enquiry_student_ssc,
                            enquiry_student_ssc_percent: enquiry_student_ssc_percent,
                            enquiry_student_hsc: enquiry_student_hsc,
                            enquiry_student_hsc_percent: enquiry_student_hsc_percent,
                            enquiry_student_family_income: enquiry_student_family_income,
                            enquiry_student_field_of_interest: enquiry_student_field_of_interest,
                            enquiry_student_father_name: enquiry_student_father_name,
                            enquiry_student_father_age: enquiry_student_father_age,
                            enquiry_student_father_edu: enquiry_student_father_edu,
                            enquiry_student_father_occ: enquiry_student_father_occ,
                            enquiry_student_father_contact: enquiry_student_father_contact,
                            enquiry_student_brother_sister_name: enquiry_student_brother_sister_name,
                            enquiry_student_brother_sister_age: enquiry_student_brother_sister_age,
                            enquiry_student_brother_sister_edu: enquiry_student_brother_sister_edu,
                            enquiry_student_brother_sister_occ: enquiry_student_brother_sister_occ,
                            enquiry_student_brother_sister_contact: enquiry_student_brother_sister_contact,
                            enquiry_student_uncle_name: enquiry_student_uncle_name,
                            enquiry_student_uncle_age: enquiry_student_uncle_age,
                            enquiry_student_uncle_edu: enquiry_student_uncle_edu,
                            enquiry_student_uncle_occ: enquiry_student_uncle_occ,
                            enquiry_student_uncle_contact: enquiry_student_uncle_contact,
                            enquiry_student_aunty_name: enquiry_student_aunty_name,
                            enquiry_student_aunty_age: enquiry_student_aunty_age,
                            enquiry_student_aunty_edu: enquiry_student_aunty_edu,
                            enquiry_student_aunty_occ: enquiry_student_aunty_occ,
                            enquiry_student_aunty_contact: enquiry_student_aunty_contact,
                            enquiry_student_ref_1_name: enquiry_student_ref_1_name,
                            enquiry_student_ref_1_quali: enquiry_student_ref_1_quali,
                            enquiry_student_ref_1_contact: enquiry_student_ref_1_contact,
                            enquiry_student_ref_2_name: enquiry_student_ref_2_name,
                            enquiry_student_ref_2_quali: enquiry_student_ref_2_quali,
                            enquiry_student_ref_2_contact: enquiry_student_ref_2_contact,
                            enquiry_Remarks: enquiry_Remarks,
                            enquiry_counsellers_name: enquiry_counsellers_name

                        }, function (data, stt)
                {
                    alert('Query Submission Successfull');
                });
                //connect to server end
            });

        });
    </script>


    <hr>	
    <?php
    $this->load->view('admin/SRS/SRS_menu');
    ?>
    <hr>


    <center>
        <div>
            <form id='srs_enquiry_form' method='post' action="<?php echo base_url('index.php/SRS_enquiry_form'); ?>">
                <table cellpadding=3 width='75%'>

                    <tr>
                        <td align='center' colspan=3><font size=3 face='Times new Roman'>CEDP VOCATIONAL INSTITUTE</font></td>
                    </tr>
                    <tr><td colspan='2'>
                            <font face='times new roman' size='3'><a href='' class='propertyBtn propertyBtn-blue'>Basic Info</a></font> 
                        </td></tr>
                    <tr>
                        <td align='left' colspan='4'><font size=3 face='Times new Roman'>ENQUIRY FORM</font><hr></td>
                    </tr>


                    <tr>
                        <td align='left'><font size='3' face='Times new Roman'>Full Name : </td>
                        <td>
                            <input type='hidden' name='enquiry_id' class="text-input inputWH validate[required]" 
                                   value="<?php echo isset($student_enquiry_record['enquiry_id']) ? $student_enquiry_record['enquiry_id'] : ''; ?>">
                            <input type='text' name='enquiry_student_name' class="text-input inputWH validate[required]" 
                                   data-errormessage-value-missing="Full name is required!" id='enquiry_student_name' 
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_name']) ? $student_enquiry_record['enquiry_student_name'] : ''; ?>"></td>
                    </tr><br>

                    <tr>
                        <td align='left'><font size='3' face='Times new Roman'>Address : </font></td>
                        <td><textarea id='enquiry_student_address' name='enquiry_student_address' class='inputWHTextarea' rows="5" cols="32"><?php echo isset($student_enquiry_record['enquiry_student_address']) ? $student_enquiry_record['enquiry_student_address'] : ''; ?></textarea></td>
                    </tr><br>

                    <tr>		
                        <td align='left' ><font size='3' face='Times new Roman'>Pin :  </font></td>
                        <td><input type='text' name='enquiry_student_pin_no' id='enquiry_student_pin_no' class='text-input inputWH' value="<?php echo isset($student_enquiry_record['enquiry_student_pin_no']) ? $student_enquiry_record['enquiry_student_pin_no'] : ''; ?>"></td>
                    </tr><br>


                    <tr>
                        <td align='left'><font size='3' face='Times new Roman'>Tel(R): </font></td>
                        <td><input type='text' name='enquiry_student_residence_no' id='enquiry_student_residence_no' class='text-input inputWH' 
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_residence_no']) ? $student_enquiry_record['enquiry_student_residence_no'] : ''; ?>"></td>
                        <td align='left'><font size='3' face='Times new Roman'>(O)  :</font></td>
                        <td><input type='text' name='enquiry_student_office_no' id='enquiry_student_office_no' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_office_no']) ? $student_enquiry_record['enquiry_student_office_no'] : ''; ?>"></td>

                    </tr>

                    <tr>
                        <td align='left'><font size='3' face='Times new Roman'>(M)  :</font></td>
                        <td><input type='text' name='enquiry_student_mobile_no' id='enquiry_student_mobile_no' class="text-input inputWH inputWH validate[required]" data-errormessage-value-missing="Mobile number is required!"
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_mobile_no']) ? $student_enquiry_record['enquiry_student_mobile_no'] : ''; ?>"></td>
                    </tr><br>

                    <tr>
                        <td align='left'><font size='3' face='Times new Roman'>Date Of Birth :</font></td>
                        <td><input type='text' name='enquiry_student_dob' id='enquiry_student_dob' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_dob']) ? $student_enquiry_record['enquiry_student_dob'] : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td align='left'><font size='3' face='Times new Roman'>Age : </font></td>
                        <td><input type='text' name='enquiry_student_age' id='enquiry_student_age' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_age']) ? $student_enquiry_record['enquiry_student_age'] : ''; ?>"></td>

                        <td align='left'><font size='3' face='Times new Roman'>Email : </font></td>
                        <td><input type='email' name='enquiry_student_email' id='enquiry_student_email' class="text-input inputWH inputWH validate[required]" data-errormessage-value-missing="Email is required!"
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_email']) ? $student_enquiry_record['enquiry_student_email'] : ''; ?>"></td>
                    </tr>

                    <br>
                    <tr>
                        <td><font size='3' face='Times new Roman'>Educational Qualification :</font></td>
                        <td>
                            <!--<input type='checkbox' name='enquiry_student_ssc' id='enquiry_student_ssc'  >-->
                            <font size='3' face='Times new Roman'>SSC Passing Year :</font>
                        </td>
                        <td>
                            <input type='text' name='enquiry_student_ssc' id='enquiry_student_ssc' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ssc']) ? $student_enquiry_record['enquiry_student_ssc'] : ''; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>                            
                            <font size='3' face='Times new Roman'>SSC marks obtained (%) :</font>
                        </td>
                        <td>
                            <input type='text' name='enquiry_student_ssc_percent' id='enquiry_student_ssc_percent' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ssc_percent']) ? $student_enquiry_record['enquiry_student_ssc_percent'] : ''; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>
                            <font size='3' face='Times new Roman'>HSC Passing Year </font>:
                        </td>
                        <td>
                            <input type='text' name='enquiry_student_hsc' id='enquiry_student_hsc' class='text-input inputWH'
                            value="<?php echo isset($student_enquiry_record['enquiry_student_hsc']) ? $student_enquiry_record['enquiry_student_hsc'] : ''; ?>">
                        </td>                        
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>
                            <font size='3' face='Times new Roman'>HSC Marks Obtained (%) : </font>:
                        </td>
                        <td>
                            <input type='text' name='enquiry_student_hsc_percent' id='enquiry_student_hsc_percent' class='text-input inputWH'
                            value="<?php echo isset($student_enquiry_record['enquiry_student_hsc_percent']) ? $student_enquiry_record['enquiry_student_hsc_percent'] : ''; ?>">
                        </td>                        
                    </tr>
                    
                    <br>
                    <tr>
                        <td><font size='3' face='Times new Roman'>Average Family Yearly Income(Rs.)</font></td>
                        <td>
                         <div <div class="dropdown dropdown-dark inputWH">
                                    <select class="dropdown-select" name="enquiry_student_family_income">
                                        <?php
                                        foreach ($family_incomegroup_record as $row) {
                                            if (isset($student_enquiry_record['enquiry_student_family_income'])) {
                                                if($student_enquiry_record['enquiry_student_family_income']==$row['id'])
                                                {
                                                echo "<option value='" . $row['id'] . "' selected>" . $row['family_incomegroup_name'] . "</option>";
                                                }
                                                else
                                                {
                                                echo "<option value='" . $row['id'] . "'>" . $row['family_incomegroup_name'] . "</option>";    
                                                }
                                            } else {
                                                echo "<option value='" . $row['id'] . "'>" . $row['family_incomegroup_name'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>                  
                        </td></tr>
                    <br>
                    <tr>
                        <td align='left'>
                            <font size='3' face='Times new Roman'>Field Of interest :</font>
                        </td>

                        <td>
                            <div <div class="dropdown dropdown-dark inputWH">
                                    <select class="dropdown-select" name="enquiry_student_field_of_interest">
                                        <?php
                                        foreach ($course_record as $row) {
                                            if (isset($student_enquiry_record['enquiry_student_field_of_interest'])) {
                                                if($student_enquiry_record['enquiry_student_field_of_interest']==$row['id'])
                                                {
                                                echo "<option value='" . $row['id'] . "' selected>" . $row['course_name'] . "</option>";
                                                }
                                                else
                                                {
                                                echo "<option value='" . $row['id'] . "'>" . $row['course_name'] . "</option>";    
                                                }
                                            } else {
                                                echo "<option value='" . $row['id'] . "'>" . $row['course_name'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                        </td>
                    </tr>


                    <tr>
                        <td><font size='3' face='Times new Roman'>Information About Family: </font></td>

                    </tr>
                    <tr>
                        <td colspan=3>
                            <table border=0 width='95%'>
                                <tr>
                                    <td></td>
                                    <td><font size='3' face='Times new Roman'>Name</font></td>
                                    <td><font size='3' face='Times new Roman'>Age</font></td>
                                    <td><font size='3' face='Times new Roman'>Education</font></td>
                                    <td><font size='3' face='Times new Roman'>Occupation</font></td>
                                    <td><font size='3' face='Times new Roman'>Office phone no.</font></td>
                                </tr>

                                <tr>
                                    <td><font size='3' face='Times new Roman'>FATHER</font></td>
                                    <td><input type='text' name='enquiry_student_father_name' id='enquiry_student_father_name' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_father_name']) ? $student_enquiry_record['enquiry_student_father_name'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_father_age' id='enquiry_student_father_age' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_father_age']) ? $student_enquiry_record['enquiry_student_father_age'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_father_edu' id='enquiry_student_father_edu' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_father_edu']) ? $student_enquiry_record['enquiry_student_father_edu'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_father_occ' id='enquiry_student_father_occ' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_father_occ']) ? $student_enquiry_record['enquiry_student_father_occ'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_father_contact' id='enquiry_student_father_contact' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_father_contact']) ? $student_enquiry_record['enquiry_student_father_contact'] : ''; ?>"></td>
                                </tr>
                                <tr>
                                    <td><font size='3' face='Times new Roman'>BROTHER/SISTER</font></td>
                                    <td><input type='text' name='enquiry_student_brother_sister_name' id='enquiry_student_brother_sister_name' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_brother_sister_name']) ? $student_enquiry_record['enquiry_student_brother_sister_name'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_brother_sister_age' id='enquiry_student_brother_sister_age' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_brother_sister_age']) ? $student_enquiry_record['enquiry_student_brother_sister_age'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_brother_sister_edu' id='enquiry_student_brother_sister_edu' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_brother_sister_edu']) ? $student_enquiry_record['enquiry_student_brother_sister_edu'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_brother_sister_occ' id='enquiry_student_brother_sister_occ' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_brother_sister_occ']) ? $student_enquiry_record['enquiry_student_brother_sister_occ'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_brother_sister_contact' id='enquiry_student_brother_sister_contact' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_brother_sister_contact']) ? $student_enquiry_record['enquiry_student_brother_sister_contact'] : ''; ?>"></td>
                                </tr>
                                <tr>
                                    <td><font size='3' face='Times new Roman'>UNCLE</font></td>
                                    <td><input type='text' name='enquiry_student_uncle_name' id='enquiry_student_uncle_name' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_uncle_name']) ? $student_enquiry_record['enquiry_student_uncle_name'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_uncle_age' id='enquiry_student_uncle_age' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_uncle_age']) ? $student_enquiry_record['enquiry_student_uncle_age'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_uncle_edu' id='enquiry_student_uncle_edu' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_uncle_edu']) ? $student_enquiry_record['enquiry_student_uncle_edu'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_uncle_occ' id='enquiry_student_uncle_occ' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_uncle_occ']) ? $student_enquiry_record['enquiry_student_uncle_occ'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_uncle_contact' id='enquiry_student_uncle_contact' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_uncle_contact']) ? $student_enquiry_record['enquiry_student_uncle_contact'] : ''; ?>"></td>
                                </tr>
                                <tr>
                                    <td><font size='3' face='Times new Roman'>AUNTY</font></td>
                                    <td><input type='text' name='enquiry_student_aunty_name' id='enquiry_student_aunty_name' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_aunty_name']) ? $student_enquiry_record['enquiry_student_aunty_name'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_aunty_age' id='enquiry_student_aunty_age' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_aunty_age']) ? $student_enquiry_record['enquiry_student_aunty_age'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_aunty_edu' id='enquiry_student_aunty_edu' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_aunty_edu']) ? $student_enquiry_record['enquiry_student_aunty_edu'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_aunty_occ' id='enquiry_student_aunty_occ' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_father_contact']) ? $student_enquiry_record['enquiry_student_father_contact'] : ''; ?>"></td>
                                    <td><input type='text' name='enquiry_student_aunty_contact' id='enquiry_student_aunty_contact' class='text-input inputWH_small'
                                               value="<?php echo isset($student_enquiry_record['enquiry_student_aunty_contact']) ? $student_enquiry_record['enquiry_student_aunty_contact'] : ''; ?>"></td>
                                </tr>
                            </table>

                        </td>



                    </tr>
                    <tr>
                        <td><font size='3' face='Times new Roman'>would you like to refer us to friends/relatives :</font></td>
                    </tr>
                    <tr>
                        <td><font size='3' face='Times new Roman'>Name :</font>
                            <input type='text' name='enquiry_student_ref_1_name' id='enquiry_student_ref_1_name'  class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ref_1_name']) ? $student_enquiry_record['enquiry_student_ref_1_name'] : ''; ?>"></td>
                        <td><font size='3' face='Times new Roman'>Qualification :</font>
                            <input type='text' name='enquiry_student_ref_1_quali' id='enquiry_student_ref_1_quali' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ref_1_quali']) ? $student_enquiry_record['enquiry_student_ref_1_quali'] : ''; ?>"></td>
                        <td><font size='3' face='Times new Roman'>Tel :</font>
                            <input type='text' name='enquiry_student_ref_1_contact' id='enquiry_student_ref_1_contact' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ref_1_contact']) ? $student_enquiry_record['enquiry_student_ref_1_contact'] : ''; ?>"></td>
                    </tr>

                    <tr>
                        <td><font size='3' face='Times new Roman'>Name :</font>
                            <input type='text' name='enquiry_student_ref_2_name' id='enquiry_student_ref_2_name' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ref_2_name']) ? $student_enquiry_record['enquiry_student_ref_2_name'] : ''; ?>"></td>
                        <td><font size='3' face='Times new Roman'>Qualification :</font>
                            <input type='text' name='enquiry_student_ref_2_quali' id='enquiry_student_ref_2_quali' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ref_2_quali']) ? $student_enquiry_record['enquiry_student_ref_2_quali'] : ''; ?>"></td>
                        <td><font size='3' face='Times new Roman'>Tel :</font>
                            <input type='text' name='enquiry_student_ref_2_contact' id='enquiry_student_ref_2_contact' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_student_ref_2_contact']) ? $student_enquiry_record['enquiry_student_ref_2_contact'] : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><font size='3' face='Times new Roman'>Applicant signature :</font></td>
                        <td colspan='2'><font size='3' face='Times new Roman'>
                            __________________________________________________________________
                        </td>

                    </tr>
                    <tr>
                        <td><font size='3' face='Times new Roman'>Remarks : </font></td>
                        <td><textarea name='enquiry_Remarks' id='enquiry_Remarks' class='inputWH_area'>                            
<?php echo isset($student_enquiry_record['enquiry_Remarks']) ? $student_enquiry_record['enquiry_Remarks'] : ''; ?>
                            </textarea></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><font size='3' face='Times new Roman'>Date : <b><?php echo date('Y-m-d h:i:sa'); ?></b></font></td>
                        <td><font size='3' face='Times new Roman'>Counsellor Name :</font></td><td>
                            <input type='text' id='enquiry_counsellers_name' name='enquiry_counsellers_name' class='text-input inputWH'
                                   value="<?php echo isset($student_enquiry_record['enquiry_counsellers_name']) ? $student_enquiry_record['enquiry_counsellers_name'] : ''; ?>"></td>
                        <td></td>	
                    </tr>
                    <tr>
                        <td><input type='submit' value="<?php echo $btnText; ?>" class='propertyBtn propertyBtn-blue' id='SRS_enquiry_form_button'
                                   name="SRS_enquiry_form_button"></td>

                    </tr>
                </table>
            </form>
        </div>
        </font>
