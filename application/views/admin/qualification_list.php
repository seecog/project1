<?php

/*echo "<body bgcolor='brown'><font color='white' size='5'><b><center>Here will be there a list of students<center></b><br><br>";


echo "<table border='1'><th><font color='white'>Student Name</th><th><font color='white'>Student std</th><th><font color='white'>Student age</th><th><font color='white'>Student Visibility Status</th></font>";
foreach($student_record as $row)
{
echo "<tr><td><font color='yellow'>".$row['student_first_name']."  ".$row['student_last_name']." "."</td><td><font color='yellow'>".$row['student_std']." "."</td><td><font color='yellow'>".$row['student_age']." "."</td><td><font color='yellow'>".$row['student_visibility_status']."</td></tr>";

}
echo "</table></body>";
?>
*/
<?php

echo "<table BORDER=0 width='70%'>
<tr><td><font color='red' face='times new roman' size='3'>Employee Qualification</font></td></tr>
	<tr>
		<th>
			<font color='#000' size='3' face='times new roman'>Sr.No.</font>
		</th>
		
	    <th>
			<font color='#000' size='3' face='times new roman'>Qualification</font>
		</th>
		
		
	
	    <th>
			<font color='#000' size='3' face='times new roman'>Description</font>
		</th>
		
	</tr>
	";
	foreach($emp_qualification_record as $row)
{
echo"
	<tr>
		<td>
		<font color='#000' size='3' face='times new roman'>";
			.$row['emp_qualification_id'].
echo"		</font>	
		</td>
		<td>
		<font color='#000' size='3' face='times new roman'>";
			.$row['emp_qual'].
echo"		</font>	
		</td>
		<td>
		<font color='#000' size='3' face='times new roman'>";
			.$row['desc'].
echo"		</font>	
		</td>
	</tr>";
	/*<tr>
		<td>
		<font color='#000' size='3' face='times new roman'>
			2
		</font>	
		</td>
		<td>
		<font color='#000' size='3' face='times new roman'>
			HSC
		</font>	
		</td>
		<td>
		<font color='#000' size='3' face='times new roman'>
			Passed in 1992
		</font>	
		</td>
		
	</tr>*/
}
echo "</table>";
?>


