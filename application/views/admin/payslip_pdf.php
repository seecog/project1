<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    // we can have any view part here like HTML, PHP etc
    $content = '
        <div id="print_pay_div">
<table width="75" cellpadding=8 border=1 >
<tr>
<td colspan=3 align="center"><b>Earning</b> </td>

<td colspan=2 align="center"><b>Deduction</b></td>

</tr>
<tr>
    <td><font color="#000" size="3" face="times new roman">Basic Pay</font></td>
<td><b><font color="#000" size="3" face="times new roman">'.$emp_salary.'</font></b></td>
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
<td><font color="#000" size="3" face="times new roman"><b>'.$professional_tax.'</b></font></td>

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
<td><font color="#000" size="3" face="times new roman"><b>'.$deduction.'</b></font></td>

</tr>
<tr>
    <td colspan=5><font color="#000" size="3" face="times new roman">Current Salary : Rs</font> 
<font color="#000" size="3" face="times new roman"><b>'.$net_salary.'</b></font>
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

          ';
            
            
            
            
            
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('output.pdf', 'I');