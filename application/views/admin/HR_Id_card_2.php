<script>
    function PrintElem(elem)
    {

       Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'myDiv', 'height=400,width=600');
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

<div id='myDiv' style="width:400px;height:300px;text-align: left;">
    <font face='times new roman' size='3' color='red'><i><b>I-Card</b></i></font><br><br><hr>
<?php
foreach($employee_register_record as $row)
{
?>

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
                
                <img src="<?php echo $emp_image; ?>" width="100" height="100">

<br><br>
				<font color='#000' face='times new roman' size='3'> <b>Employee No:</b> <?php echo $row['emp_no']; ?></font>
				 <br>
				 <font color='#000' face='times new roman' size='3'><b>Employee Name: </b><?php echo $row['emp_name']; ?></font>
				 <br>
				 <font color='#000' face='times new roman' size='3'><b>Designation :</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                     
                                     
                                     <?php  $designation=$this->model_designation->get_designation_record_by_id($employee_register_record[0]['emp_designation']);
    echo $designation[0]['designation_name'];
                                     ?>
                                     
                                     
                                 
                                 </font>
				 <br>
                                 <font color='#000' face='times new roman' size='3'><b>Validity :</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '2015-10-01'; ?></font>
	<?php
	}
	?>
                                 <hr>
</div>	

	  <input type='button' class="propertyBtn propertyBtn-blue"  name='print'  id='print_id_card' value='Print' onclick="PrintElem('#myDiv')">
          <a href='<?php echo base_url("index.php/icard_pdf/".$employee_register_record[0]['emp_no']);  ?>'><input type='button' class="propertyBtn propertyBtn-blue"  name=''  id='' value='Generate PDF'></a>
	  
	
</center>
<br><br>