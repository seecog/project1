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
$content = "
        <div id='myDiv' style='width:400px;height:300px;text-align: left;'>
    <font face='times new roman' size='3' color='red'><i><b>I-Card</b></i></font><br><br>";

foreach ($employee_register_record as $row) {

    $emp_image = $row['emp_image'];

    if (empty($emp_image)) {
        $emp_image = base_url() . 'hrms/images/emp_image/no_image.jpg';
    } else {
        $emp_image = 'c:/xampp/htdocs/ERPS/hrms/images/emp_image/' . $emp_image;
        
    }
    $content .= "<img src=" . $emp_image . " width='100' height='100'>

<br><br>
				<font color='#000' face='times new roman' size='3'> <b>Employee No:</b>" . $row['emp_no'] . "</font>
				 <br>
				 <font color='#000' face='times new roman' size='3'><b>Employee Name: </b>" . $row['emp_name'] . "</font>
				 <br>
				 <font color='#000' face='times new roman' size='3'><b>Designation :</b>&nbsp;&nbsp;&nbsp;&nbsp;";


    $designation = $this->model_designation->get_designation_record_by_id($employee_register_record[0]['emp_designation']);
    $content .= $designation[0]['designation_name'];

    $content .= "</font><br><font color='#000' face='times new roman' size='3'><b> Validity :</b>&nbsp;&nbsp;&nbsp;&nbsp;2018-10-01</font>";
}

$content .="                   
</div> ";

ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('output.pdf', 'I');
