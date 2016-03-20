<script languege='javascript'>
    $(document).ready(function(){
       $('#atten_list').dataTable(); 
    });
</script>    
    <center>
        <hr>
        <?php
        $this->load->view('admin/SRS/SRS_menu');
        ?>
        <hr>  
    </center>

 <a href="<?php echo base_url('index.php/course_record'); ?>" class='propertyBtn propertyBtn-blue' style='align:right'>Add New Course</a><br>
<center>
       
        <div style="width:800px;height:500px;">
            
            
            
            <table  cellpadding=0 width='100%' id='atten_list'>
                <thead>
                <tr>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Course name.</font></td>
                    <td align='center'><font color='blue' face='times new roman' size='3'>Fee</font></td>                    
                    <td align='center'><font color='blue' face='times new roman' size='3'>Action</font>&nbsp;&nbsp;&nbsp;&nbsp;<font size='4' face='Times new Roman' color='#fff'>
                </tr>
                </thead>
                
                <tbody>
                <?php
                foreach ($course_record as $row) {
                   
                echo "<tr><td align='center'><font face='times new roman' size=3>".$row['course_name']."</font></td>"
                        . "<td align='center'><font face='times new roman' size=3>".$row['course_fee']."</font></td>"
                        . ""
                        ."<td align='center'><a href='" . base_url('index.php/course_record/'.$row['id'])."' class='propertyBtn propertyBtn-blue'>Edit</a>"
                        . "<font face='times new roman' size=3>|</font> <a href='" . base_url('')."' class='propertyBtn propertyBtn-blue'>Delete</a>"
                        . "<font face='times new roman' size=3>|</font> <a href='" . base_url('index.php/graph_course_record/'.$row['id'])."' class='propertyBtn propertyBtn-blue'>Enquiry Graph</a>"
                        . "</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
</center>