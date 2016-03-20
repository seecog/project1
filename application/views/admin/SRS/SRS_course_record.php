<script languege='javascript'>
    $(document).ready(function(){
      CKEDITOR.replace('course_des', {
                uiColor: '#9AB8F3'

            });
    });
</script>    
    <center>
        <hr>
        <?php
        $this->load->view('admin/SRS/SRS_menu');
        ?>
        <hr>  
    </center>

 
<center>
       
        <div style="width:800px;height:500px;">
            
            
            <form action='<?php echo base_url("index.php/course_record"); ?>' name='frm' id='frm' method='post'>
            <table  cellpadding=0 width='100%'>
                <tr><td><font face='times new roman' size=3>Course Name : </font></td><td>
                    <input type='hidden' name='id' id='id' class='text-input inputWH'
                    value='<?php echo isset($course_record["id"]) ? $course_record["id"] : ""; ?>'>   
                    
                    <input type='text' name='course_name' id='course_name' class='text-input inputWH'
                    value='<?php echo isset($course_record["course_name"]) ? $course_record["course_name"] : ""; ?>'>                        
                    </td></tr>
                <tr><td><font face='times new roman' size=3>Course Fee : </font></td><td>
                    <input type='text' name='course_fee' id='course_fee' class='text-input inputWH'
                    value='<?php echo isset($course_record["course_fee"]) ? $course_record["course_fee"] : ""; ?>'></td></tr>
                <tr><td><font face='times new roman' size=3>Description : </font></td><td></td></tr>
                <tr><td colspan="2"><textarea name='course_des' id='course_des'/>
                        <?php echo isset($course_record["course_des"]) ? $course_record["course_des"] : ""; ?>
                        </textarea></td></tr>
                <tr><td><input type='submit' class="propertyBtn propertyBtn-blue" name='submit_button' value='<?php echo $btnText;  ?>'> 
                <input type='reset' class="propertyBtn propertyBtn-blue" value='Cancel'></td>
                </tr>
            </table>
            </form>
        </div>
</center>