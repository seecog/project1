<script>
    function PrintElem(elem)
    {

       Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'print_offer_letter', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>



<?php
$this->load->view('admin/HR_menu');
?>
<hr><br>

<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;padding-left:200px;floatLeft: 200px;
	border-radius:10px;width:800px;height:auto;background-position:top-center;'>
<input type='button' class="propertyBtn propertyBtn-blue"  name='print'  id='print_id_card' value='Print Offer Letter' onclick="PrintElem('#print_offer_letter')">
</div>

<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;padding-left:200px;floatLeft: 200px;
	border-radius:10px;width:800px;height:auto;background-position:top-center;' id='print_offer_letter'>
    

<?php
foreach($employee_register_record as $row)
{
?>


<center>
    <font color="red" size="4" face="times new roman">Offer Letter</font>
</center>
<pre>
<font size='3' face='times new roman'>

To,										Date: <b><?php echo date('Y,d M',  strtotime(date('y-m-d'))); ?></b>

<b><?php echo $row['emp_name']; ?></b>


Sub: Job offer for the position of <b><?php  $designation=$this->model_designation->get_designation_record_by_id($employee_register_record[0]['emp_designation']);
    echo $designation[0]['designation_name'];
    ?>
</b>



Ref: Your application for the position of  <b><?php echo $designation[0]['designation_name']; ?></b>
	
Dear Mr/Mrs/Ms. <b><?php echo $row['emp_name']; ?></b>,

With the reference to your application and interview with us, we are pleased to offer you the position of<br> 
<b><?php echo $designation[0]['designation_name']; ?></b> in 'Council of Education & Development Programmes Pvt. Ltd. (CEDP Pvt. Ltd.) ' on the 
terms and conditions mutually discussed and agreed upon.<br>

Your Gross emoluments will be ' <b><?php echo $row['emp_salary']; ?></b>/- per month. This payment is made to your as dictated by
<br> the Indian Tax Authorities and is subject to change if the India Tax Laws changes. You will be issued with 
<br>a detailed Appointment Letter on your joining day.

You will be posted at, CEDP Pvt. Ltd. Office No. 3, Sai Classic, Gavanpada, Mulund (E) Mumbai, at<br>
 present, but can be transferred to any office of CEDP Pvt. Ltd. as may be deemed appropriate by the<br>
 Management. You are requested to report on duty on <b><?php echo $row['emp_join_date']; ?></b>, at 10 am at Mulund (E) branch. In case
 you fail to report for duty on this date, unless and otherwise agreed in written, the offer shall stand 
automatically withdrawn.


Confirm and accept : _____________________________

You are required to submit the copy of following documents, self attested, before/on the day of joining;

1.	Proof of Identity, Birth and Address,
2.	Two references from your current organization, which has to be completed before you’re joining Continuum systems.
3.	Relevant Academic attainment certificates,
4.	Appointment letter, details of salary, TDS certificate No due certificate and relieving letter from last employer.
5.	Four Passport size colored photographs.

If on verification, before or after appointment date, it is found that you have furnished wrong 
information; in such case, your service with the company will be liable for termination. You need to
adhere to Policies and Procedures as will be mentioned in your Appointment letter.

Please sign below as a token of your acceptance of this Offer Letter.
With best wishes,

Yours truly,
 
Ms. Shaheen Khan, Director, 
Council of Education & Development Programmes Pvt. Ltd.
Date:

I, __________________, confirm that I have read and understand the terms and conditions of this Letter
and accept the offer of employment.
Thank You

___________________								Date:     

</font>								
</pre>
<?php

}
?>

</div>