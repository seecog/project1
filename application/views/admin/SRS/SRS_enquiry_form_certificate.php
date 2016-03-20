<script>
    var basePath = "<?php echo base_url(); ?>";

    function PrintElem(elem)
    {

       Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'print_appointment_letter', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }


$(document).ready(function(){

});

</script>


<hr>	
<?php
$this->load->view('admin/SRS/SRS_menu');
//print_r($student_record);
?>
<hr>

<center>
<div style='width:800px;height:50px;text-align: left;'>    
<input type='button' class="propertyBtn propertyBtn-blue"  name='print'  id='print_certificate' value='Print Student Certificate' onclick="PrintElem('#print_student_certificate')">
</div>    
    
<div style='width:800px;height:500px;text-align: left;' id='print_student_certificate'>
    <font color='#000' face='times new roman' size='3'>
    COURSE COMPLETION CERTIFICATE<br><br>


    This is to certify that <b><?php echo $student_record[0]['enquiry_student_name']; ?></b>  studying / studied in <b><?php
    $record=$this->model_course->get_course_record($student_record[0]['enquiry_student_field_of_interest']);
    echo $record['course_name']; ?></b> specialization has completed his course with regular attendance.<br>

    His / Her Character and Conduct is <b>good</b><br>




    Place	: <br>					      Signature of the Head of the Institute with seal<br>

    Date	: <?php echo date('Y,d M') ?><br>

    
    </font>
</div>
</center>