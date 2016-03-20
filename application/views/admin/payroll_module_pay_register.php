
<html>
<center>
<hr>
<?php
$this->load->view('admin/payroll_menu');
?>
<hr>  
<div><font color='RED' size='3' face='times new roman'>e-HRM Pay Slip</font><br><br>

<table BORDER=0  cellpadding=12>
	<tr>
		<td>
			<font color='#000' face='times new roman' size='3'>EMP NO.</font>
		</td>
		
	    <td>
			<font color='#000' face='times new roman' size='3'>EMPLOYEE NAME</font>
		</td>
		
		
	
	    <td>
			<font color='#000' face='times new roman' size='3'>SAL DATE</font>
		</td>
		
		<td>
			<font color='#000' face='times new roman' size='3'>GROSS </font>
		</td>
	
		<td>
			<font color='#000' face='times new roman' size='3'>DEDUCTION</font>
		</td>
		<td>
			<font color='#000' face='times new roman' size='3'>NET SAL</font>
		</td>
		
	</tr>
	<tr>
		<td>
			<font color='#000000' face='georgia' size='3'>1001</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>Atanu Maity</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>01-MAR-10</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>147.58</font>
		</td>
		
		<td>
			<font color='#000000' face='georgia' size='3'>30.19</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>117.30</font>
		</td>
	</tr>
	<tr>
		<td>
			<font color='#000000' face='georgia' size='3'>1002</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>Aditya</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>01-MAR-10</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>408.59</font>
		</td>
		
		<td>
			<font color='#000000' face='georgia' size='3'>16.39</font>
		</td>
		<td>
			<font color='#000000' face='georgia' size='3'>391.49</font>
		</td>
	</tr>
	
		
		
</table><br>
<font color='#000' face='times new roman' size='3'>Zoom :</font> <div class="dropdown dropdown-dark inputWH"><select class="dropdown-select">
			<option><font color='#000' face='times new roman' size='3'>100%</font></option>
			<option><font color='#000' face='times new roman' size='3'>200%</font></option>
			<option><font color='#000' face='times new roman' size='3'>250%</font></option>
			<option><font color='#000' face='times new roman' size='3'>300%</font></option>
		  </select></div>

	  <input type='button' class="propertyBtn propertyBtn-blue" name='print' id='print' value='Print'>
	  <input type='button' class="propertyBtn propertyBtn-blue" name='saveAs' id='saveAs' value='Save As'>
</center>
</html>