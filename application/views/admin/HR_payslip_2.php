<script>
    function PrintElem(elem)
    {
       var dataHtml = $('#print_pay_div').html();
       
       Popup(dataHtml);
    }

    function Popup(data) 
    {
        
        var mywindow = window.open('', 'print_pay_slip', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        
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

<center>
<hr>	
<?php
$this->load->view('admin/HR_menu');
?>
<hr>
        
        
<font color="red" size="4" face="times new roman">Employee PaySlip</font><hr>
<input type='button' class="propertyBtn propertyBtn-blue"  name='print'  id='print_pay_slip' value='Print pay slip' onclick="PrintElem()"> | 
<a href=<?php echo base_url("index.php/payslip_pdf/".$emp_no);  ?>><input type='button' class="propertyBtn propertyBtn-blue"  name=''  id='print_pay_slip' value='Generate PDF'></a>


<div id="print_pay_div">
<table width="75%" cellpadding=8 border=1 >
<tr>
<td colspan=3 align="center"><b>Earning</b> </td>

<td colspan=2 align="center"><b>Deduction</b></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">Basic Pay</font></td>
<td><b><font color="#000" size="3" face="times new roman"><?php echo $emp_salary; ?></font></b></td>
<td></td>
<td><font color="#000" size="3" face="times new roman">E.S.I.C.</font></td>
<td></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">HRA</font></td>
<td></td>
<td></td>
<td><font color="#000" size="3" face="times new roman">Loan</font></td>
<td></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">Convenyance</font> </td>
<td></td>
<td></td>
<td><font color="#000" size="3" face="times new roman">Professional Tax</font></td>
<td><font color="#000" size="3" face="times new roman"><b><?php echo $professional_tax; ?></b></font></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">other Allowance</font></td>
<td></td>
<td></td>
<td><font color="#000" size="3" face="times new roman">TDS/IT</font></td>
<td></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">Commission</font></td>
<td></td>
<td></td>
<td><font color="#000" size="3" face="times new roman">others</font></td>
<td></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">Incentive</font></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">others</font></td>
<td></td>
<td></td>
<td></td>
<td></td>


</tr>
<tr>
    <td><b><font color="#000" size="3" face="times new roman">Total Earning</font></b></td>
<td></td>
<td></td>
<td><b><font color="#000" size="3" face="times new roman">Total Deduction</font></b></td>
<td><font color="#000" size="3" face="times new roman"><b><?php echo $deduction; ?></b></font></td>

</tr>
<tr>
    <td colspan=5><font color="#000" size="3" face="times new roman">Current Salary : Rs</font> 
<font color="#000" size="3" face="times new roman"><b><?php echo $net_salary; ?></b></font>
</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">Particulars</font></td>
<td><font color="#000" size="3" face="times new roman">B/F Leaves</font></td>
<td><font color="#000" size="3" face="times new roman">Earned  Leaves</font></td>
<td><font color="#000" size="3" face="times new roman">Utilised Leaves</font></td>
<td><font color="#000" size="3" face="times new roman">C/F Leaves</font></td>
</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">Paid Leaves</font></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">comp Off</font></td>

</tr>
</table>
</div>

<br><br></center>
<b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee signature: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Director Signature :</b><br><br>

</html>