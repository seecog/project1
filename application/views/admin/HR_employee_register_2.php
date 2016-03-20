<script>
    $(document).ready(function(){
       
      
    
    $('#employee_information').DataTable();
    
    
    });
    
    function PrintElem(elem)
    {

       Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'print_employee_register_list', 'height=700,width=1000');
        mywindow.document.write('<html><head><title></title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>
  <center>
<hr>
<?php
$this->load->view('admin/HR_menu');
?>
<hr>  
<?php// echo base_url().'hrms/flash/swf/copy_csv_xls.swf'; ?>
<?php

echo $this->session->flashdata('message');
?>
	<font face='times new roman' size='3'>
	<div id='print_employee_register_list'><font color='RED' size='3' face='times new roman'>e-HRM Employee Register </font><br><br>

            
            <div style='width:1100px;height:500px;'>       
    <table border=0 width='100%' id="employee_information" class='display'>
        <thead>
		<tr >
		    <!--<td ><b><font color='blue' face='times new roman' size='3'>Emp No.</font></b></td>-->
                    <!--<td> <input type="checkbox" name="" id=""></td>-->
		    <td ><b><font color='blue' face='times new roman' size='3'>Emp Image.</font></b></td>			
			<td><b><font color='blue' face='times new roman' size='3'>Employee Name</font></b></td>			
			<td><b><font color='blue' face='times new roman' size='3'>Department</font></b></td>
			<td><b><font color='blue' face='times new roman' size='3'>Designation</font></b></td>
			<td><b><font color='blue' face='times new roman' size='3'>Joining date</font></b></td>
			<td><b><font color='blue' face='times new roman' size='3'>Email Id</font></b></td>
			<td><b><font color='blue' face='times new roman' size='3'>Action</font></b></td>
        </tr>
        </thead>
        
        <tbody>
		<?php
		
		foreach($employee_register_record as $row)
		{
		?>
		
       <tr>
        
           
	   <font color='#000' face='times new roman' size='3'>
	        <!--<td><?php //echo $row['emp_no']; ?></td>-->
<!--	        <td>
                <input type="checkbox" name="" id="">
                </td>-->
                <td>
                <?php 
                $emp_image=$row['emp_image'];
                
                if(empty($emp_image))
                {
                $emp_image = base_url().'hrms/images/emp_image/no_image.jpg';    
                }
                else
                {
                $emp_image = base_url().'hrms/images/emp_image/'.$emp_image;    
                }
                
                ?>
                
                <img src="<?php echo $emp_image; ?>" width="60" height="60"></td>
			
			<td><?php echo $row['emp_name']; ?></td>
			
			<td>
                        <?php                        
                        $department_record=$this->model_department->get_department_record_by_id($row['emp_dept']); 
                        echo $department_record[0]['department_name'];
                        ?>
                        </td>
			<td>
                        <?php
                        $designation_record=$this->model_designation->get_designation_record_by_id($row['emp_designation']); 
                        
                        echo $designation_record[0]['designation_name'];
                        ?></td>
			
			<td><?php echo $row['emp_join_date']; ?></td>
			<td><?php echo "<a href='mailto:".$row['emp_emailId']."?Subject=Imp message'>".$row['emp_emailId']."</a>"; ?></td>
			<?php
                        echo "<td><a title='View Record' href=".base_url('index.php/HR_personal_details_view/'.$row['emp_no'])."><img src=".base_url('hrms/images/view.png')." width=30 height=30></a> ";
			echo "<a title='Edit Record' href=".base_url('index.php/HR_personal_details/'.$row['emp_no'])."><img src=".base_url('hrms/images/edit.png')." width=30 height=30></a> ";
			echo "<a title='Delete Record' href=".base_url('index.php/HR_personal_details_delete/'.$row['emp_no'])."><img src=".base_url('hrms/images/delete1.png')." width=30 height=30></a> ";
		        echo "<a title='Send Email' href=".base_url('index.php/HR_personal_details_sendemail/'.$row['emp_no'])."><img src=".base_url('hrms/images/email.png')." width=30 height=30></a></td>";

                        ?>
		</font>	
	   </tr>
       
	   <?php
	   }
	   ?>
    </tbody>
    </table></div>
   </div>
   <br><br>

<!--
		Zoom : <div class="dropdown dropdown-dark inputWH"><select class="dropdown-select">
			<option>100%</option>
			<option>200%</option>
			<option>250%</option>
			<option>300%</option>
		  </select></div>
-->
	  <!--
<!--
	  <input type='button' class="propertyBtn propertyBtn-blue" name='saveAs' id='saveAs' value='Save As'>
  -->
  </center></font>
 <br><br>
 