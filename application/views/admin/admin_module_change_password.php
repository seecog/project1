<html><form><div>
  
  
  <center>
  <hr>	
<?php
$this->load->view('admin/HR_menu');
?>
<hr>

  
<div><font face='times new roman' size='3'><u><b>Please Enter The Following Details:-</b></u></font></div><br><br>
   
   

<table> 

  <tr><td><font face='times new roman' size='3'>Password Details:-</font></td></tr>
  
 <tr>
 <td><font face='times new roman' size='3'>Old Password : </font></td>
 <td><input type='password' class='text-input inputWH' name='staff_old_Password' id='staff_old_Password'></td>
 </tr>
 
 <tr>
 <td><font face='times new roman' size='3'>New Password : </font></td>
 <td><input type='password' class='text-input inputWH' name='staff_new_Password' id='staff_new_Password'></td>
 </tr>
 
 <tr>
 <td><font face='times new roman' size='3'> Confirm Password : </font></td>
 <td><input type='password' class='text-input inputWH' name='staff_confirm_Password' id='staff_confirm'></td>
 </tr>
 
 <tr><td></td><td><input type='submit' name='submit' class="propertyBtn propertyBtn-blue" value='submit'><input type='button' class="propertyBtn propertyBtn-blue" name='cancel' value='Cancel'><input type='reset' class="propertyBtn propertyBtn-blue" name='reset' value='Reset'></td></tr>
 
 
</table></center>

</div>
</form>
</html>