<html>
    <script language='javascript'>
    $(document).ready(function(){
       $('#student_enquiry_list').DataTable();
    });
    
    </script>
    <hr>	
    <?php
    $this->load->view('admin/SRS/SRS_menu');
    ?>
    <hr>


    <center>
        <?php
        echo $this->session->flashdata('deleted');
        ?>
        <div style='width:800px;height:500px;'>
            <table  width='100%' id='student_enquiry_list'>
                <thead>
                <tr>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Student name</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Mobile no</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Email</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Course interested</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Action</font>&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' face='Times new Roman' color='#fff'>
                        <a href='<?php echo base_url("index.php/SRS_enquiry_form"); ?>'>[+]</a></font></td>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($student_enquiry_record as $row) {
                    echo "	<tr>
                <td align='center'>
	       <font face='times new roman' size='3'>" . ucwords($row['enquiry_student_name']) . "</font> 
               </td>
	       <td align='center'>
	       <font face='times new roman' size='3'>" . $row['enquiry_student_mobile_no'] . "</font> 
               </td>
                 <td align='center'>
	       <font face='times new roman' size='3'>" . $row['enquiry_student_email'] . "</font> 
               </td>
               <td align='center'>
	       <font face='times new roman' size='3'>";
                  
                    $course_record = $this->model_course->get_course_record($row['enquiry_student_field_of_interest']);
                    echo $course_record['course_name'];
                    echo "</font> 
               </td>
               <td align='center'>
               <font face='times new roman' size='3'>
               <a title='Edit Record' href='" . base_url("index.php/SRS_enquiry_form/" . $row['enquiry_id']) . "'><img src=".base_url('hrms/images/edit.png')." width=30 height=30></a>   ";
echo "<a title='Delete Record' href='" . base_url("index.php/SRS_enquiry_form_delete/" . $row['enquiry_id']) . "'><img src=".base_url('hrms/images/delete1.png')." width=30 height=30></a>   ";
echo "<a title='Send Email' href=".base_url('index.php/SRS_enquiry_form_sendemail/'.$row['enquiry_id'])."><img src=".base_url('hrms/images/email.png')." width=30 height=30></a>";
echo "<a title='Print Certificate' href='" . base_url("index.php/SRS_enquiry_form_certificate/" . $row['enquiry_id']) . "'><img src=".base_url('hrms/images/certificate.png')." width=30 height=30></a>";
                    echo "</font></td>
               </td>
               </tr>";
                }
                echo "<tr></tr>";
//                echo "<tr><td></td><td></td><td></td><td></td><td align='center'><h4>".$links."</h4></td></tr>";
                ?>
                </tbody>
            </table>
        </div>
    </center>
