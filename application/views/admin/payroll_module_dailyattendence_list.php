<script languege='javascript'>
    $(document).ready(function(){
       $('#atten_list').dataTable(); 
    });
</script>    
    <center>
        <hr>
        <?php
        $this->load->view('admin/payroll_menu');
        ?>
        <hr>  


        <div style="width:800px;height:500px;">
            <table  cellpadding=0 width='100%' id='atten_list'>
                <thead>
                <tr>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Employee no.</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Date</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>LogIn</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Logout</font></td>
                    <!--<td align='center'><font color='blue' face='times new roman' size='3'>Hour's worked</font></td>-->
                    <td align='center'><font color='blue' face='times new roman' size='3'>Status</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Action</font>&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' face='Times new Roman' color='#fff'>
                </tr>
                </thead>
                
                <tbody>
                <?php
                foreach ($employee_attendance_record as $row) {
                    $emp_no = $row['emp_no'];
                    $date = $row['date'];
                echo "<tr><td align='center'><font face='times new roman' size=3>".$row['emp_no']."</font></td>"
                        . "<td align='center'><font face='times new roman' size=3>".$row['date']."</font></td>"
                        . "<td align='center'><font face='times new roman' size=3>".$row['logInTime']." ".$row['logInType']."</font></td>"
                        . "<td align='center'><font face='times new roman' size=3>".$row['logOutTime']." ".$row['logOutType']. "</font></td>"
                        . "<td align='center'><font face='times new roman' size=3>Present</font></td>"
                        . ""
                        ."<td align='center'><a href='" . base_url('index.php/payroll_module_dailyattendence/'.$emp_no.'/'.$date)."' class='propertyBtn propertyBtn-blue'>Edit</a>"
                        . "<font face='times new roman' size=3>|</font> <a href='" . base_url('index.php/SRS_enquiry_form_delete/'.$row['id'])."' class='propertyBtn propertyBtn-blue'>Delete</a></td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>