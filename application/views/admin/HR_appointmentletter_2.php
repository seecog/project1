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



<?php
$this->load->view('admin/HR_menu');
?>
<hr><br>

<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;padding-left:200px;floatLeft: 200px;
	border-radius:10px;width:800px;height:auto;background-position:top-center;'>
<input type='button' class="propertyBtn propertyBtn-blue"  name='print'  id='print_id_card' value='Print Appointment Letter' onclick="PrintElem('#print_appointment_letter')">
<a href=<?php echo base_url("index.php/pdf/".$employee_register_record[0]['emp_no']);  ?>><input type='button' class="propertyBtn propertyBtn-blue"  name='print'  id='print_id_card' value='Generate PDF'></a>

</div>

<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;padding-left:200px;floatLeft: 200px;
	border-radius:10px;width:800px;height:auto;background-position:top-center;' id='print_appointment_letter'>
<center>    
    <font color="red" size="4" face="times new roman">Appointment Letter</font></center>
<font face="times new roman" size=3>
<p>
To, &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Date :- <?php echo date('Y,d M',  strtotime(date('y-m-d'))); ?><br><br><br>
(Mr/Mrs/Miss)
<b><?php echo $employee_register_record[0]['emp_name'];?></b><br>
<br><br>
</p

<p>
Sub: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Appointment Letter for the position of <b>
    <?php  $designation=$this->model_designation->get_designation_record_by_id($employee_register_record[0]['emp_designation']);
    echo $designation[0]['designation_name'];
    ?></b><br>

</p>
<p>
Ref:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With reference to Offer Letter dated  <b><?php echo date('y-m-d');?></b><br><br><br>
</p>
<?php 
//}  
?>
<p>

Dear  <b><?php echo $employee_register_record[0]['emp_name'];?></b>,<br>
</p>
<p>

We are pleased to inform you that you have been appointed as <b><?php echo $designation[0]['designation_name'];?></b> with us, w.e.f.  <b> <?php echo $employee_register_record[0]['emp_join_date']; ?> </b>
on the following terms and conditions, viz:<br>

</p>
<p>
1.	You will be paid Cost to Company ` <b>Rs. <?php echo $employee_register_record[0]['emp_salary'];?></b> per annum.
Details are attached in Annexure 1. Salary and other perquisites / benefits which have been distributed under the 
aforesaid head will be governed by the provisions of the Income Tax Act, 1961 and the rules framed there under from time to time.<br><br>

2.	The probation period is six months from the Joining date. During the probation period your services can be terminated with 
seven days notice on either side and without any reasons whatsoever. After probation period, according to performance 
review, you will be rewarded with an increment. Then onwards, every 12 months Performance Appraisals will be undertaken 
for further promotion and increment consideration. Increment may range between 20-40% of CTC.<br><br>

3.	Your present place of posting is <b>Mumbai.</b> You will be governed by the transfer policy of the company at any point 
of time during the course of your employment. <br><br>

4.	You will retire from the services of the Company at 58 years subject to change in the retirement
 policy of the company at any point of time.<br><br>

<b>5.	<u>Conditions of Employment:</u></b><br><br>

i.	During the period of your employment with the Company, you will devote full time to the work of the Company. Further, 
you will not take up any other employment or assignment or any office, honorary or for any consideration, 
in cash or in kind or otherwise, without the prior written permission of the Company.<br><br>

ii.	Every employee at the time of his appointment, confirmation, promotion shall be given a written communication which shall be 
signed by the authorized person of the management. All matters mentioned in the appointment letter will be subject to 
these service rules amended from time to time. <br><br>
iii.	At the time of appointment, the employee shall produce an evidence of age, either a birth certificate or Academy leaving 
certificate. The age admitted at the time of appointment shall be final for all purposes.<br><br>

iv.	At the time of appointment, an employee will also submit certain information about, address, marital status, number of children, 
number of dependants, educational qualifications, previous employment history, training, references etc. on the prescribed forms 
of the Academy which shall be given to him/her. No person shall be deemed to be employed unless the above information is verified
 from original certificates.<br><br>
 
 v.	The Management has the sole right to direct and control the employees including right to terminate, promote/demote, 
 and transfer and to determine the strength of employees required for managing any department. This shall exclusively be 
 the domain of the Management.<br><br>

vi.	The Management will promote only qualified employees as and when vacancies in higher positions occur. Promotions will be based on merit, efficiency, past record, requisite skills and state of health of the employee and seniority. Promotion will be effected solely at the discretion of the Management and cannot be claimed as a right by any employee.<br><br>

vii.	If at any time in our opinion, which is final in this matter you are found non- performer or guilty of fraud, dishonest, disobedience, disorderly behavior, negligence, indiscipline, absence from duty without permission or any other conduct considered by us deterrent to our interest or of violation of one or more terms of this letter, your services may be terminated without notice and on account of reason of any of the acts or omission the company shall be entitled to recover the damages from you.<br><br>

viii.	You will not accept any present, commission or any sort of gratification in cash or kind from any person, party or firm or Company having dealing with the company and if you are offered any, you should immediately report the same to the Management.<br><br>

ix.	Every employee is liable to be transferred at any time from any type of work to another, from one department to another, from one section to another section in the same establishment. Upon such transfers, employees will be governed by the terms and conditions of service, rules and regulations as may be applicable to the employees in his category. <br><br> 

x.	An employee enters into employment voluntarily, and is free to resign at any time for any reason or no reason after giving 30 days notice in writing or paying 30 days’ salary in lieu of notice period. Similarly, CEDP Academy is free to conclude its relationship with any employee at any time for any reason or no reason after giving 30 days’ notice or giving 30 days’ salary in lieu of notice period. Following the probationary period, employees are required to follow the Employment Termination Policy. <br><br>


xi.	In order to improve the employee’s performance, Management may require them to undergo a training program as may be prescribed from time to time.<br><br>

xii.	You will be required to maintain utmost secrecy in respect of Project documents, commercial offer, design documents, Project cost & Estimation, Technology, Software packages license, Company’s polices, Company’s patterns & Trade Mark and Company’s Human assets profile.<br><br>

xiii.	This appointment letter is being issued to you on the basis of the information and particulars furnished by you in your application (including bio-data), at the time of your interview and subsequent discussions. If it transpires that you have made a false statement (or have not disclosed a material fact) resulting in your being offered this appointment, the Management may take such action as it deems fit in its sole discretion, including termination of your employment.<br><br>


<b><u>6.	Leave Policy:</u></b><br><br>

i.	Paid Leaves: CEDP provides 18 paid leaves per annum, average of 1.5 leaves per month.<br><br>

ii.	Public Holidays and Festival Leaves: Employees have one public Holiday i.e. 2nd October and four Festival leaves. On 15th Aug and 26th Jan, our NGOs events are mandatory to attend by all staff of CEDP Pvt. Ltd. If you work on 2nd Oct and festival leaves, you will get one and half pay or one and half paid leave credit.<br><br>

iii.	If you remain absent from work without authorization or reasonable explanation, for more than ten consecutive days, it will be presumed that you are no longer interested in working for the company and have abandoned its service, thereby terminating your service.<br><br>

<b><u>7.	General Duties and Responsibilities:</u></b><br><br>

i.	The Company will expect you to work with a high standard of initiative, efficiency and economy. You will perform, observe and conform to such duties, directions and instructions assigned or communicated to you by the Company and those in authority over you. Apart from your usual duty, your activities will also extend over any kind of work as may be required by the circumstances.<br><br>

ii.	 You will devote your full attention exclusively to the duties entrusted to you from time to time by the company; and while in service of the company, you will not work for any person or company during your leave period, holiday etc. nor will you engage yourself in other business of your own either for remunerations, rewards, recognition, or on consultation basis. Contravention to this will lead to the termination of your service without any notice or any compensation in lieu of such notice.<br><br>

iii.	You will be required to perform, observe and conform to such duties, directions and instructions assigned to you from time to time by the Company and those in authority over you for any unit, or branches/sister concerns/associate companies/ subsidiary companies, anywhere in India or abroad, that are now functional or may come into existence at a future date. In the event of the company desires to undergo any transformation or constitutes an additional company, you will be required to pay similar attention to the work of such unit/ branches/sister concerns/associate companies/subsidiary as the case may be.<br><br>

<b><u>8.	Reporting:</u></b><br><br>

i.	You will be reporting to the  <b><?php echo $employee_register_record[0]['emp_join_date'];?></b>.<br><br>
ii.	Reporting of the work should be done on daily basis.<br><br>

<b><u>9.	General:</u></b><br><br>

i.	You will be covered by the service rules and regulations including the company code of conduct, discipline and administrative orders and any such rules or orders of the Company that may come in force from time to time and as documented within the Company Policy.<br><br>

ii.	You will extend full co-operation to the Management in maintaining discipline and you will also maintain sound, peaceful and healthy relationship at all levels in the organization.<br><br>

iii.	You will intimate in writing to the Management any change of your residential address, residence telephone, personal email ID and mobile phone number and within a week from change of the same, failing which any communication sent on your last recorded residential address shall be deemed to have been served to you.<br><br>

iv.	We understand that the information given by you in your application is correct, true and complete. If it is found at any time that the information given by you is incorrect, untrue and/or incomplete, this appointment may be withdrawn / terminated without any notice or any compensation in lieu of the notice period and in addition to and without prejudice to whatever right of action the company may have against you.<br><br>

v.	For all matters concerning employment, courts of Mumbai shall have exclusive jurisdiction. Any dispute arising out of above employment contract is subject to Mumbai jurisdiction only.<br><br>


<b><u>10.	Protecting CEDP System:</u></b><br><br>

It is important to protect the confidential information of CEDP systems and procedures. To demonstrate your determination to protect the systems, have each employee read and sign a Non-Disclosure and Non-Competition Agreement. A sample agreement follows that you might find useful. However, consult your attorney to be certain the agreement you use conforms to applicable laws.<br><br>

<b><u>11.	Additionally: </u></b><br><br>

In case you are unable to give the minimum notice of one month, you will not be entitled to enjoy any benefits as define in the Human Resource policy.<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.	Your services are liable to be dismissed without any notice or salary in lieu thereof for misconduct without being exhaustive and without prejudice to the general meaning of the term “misconduct” in the case of reasonable suspicion of misconduct, disloyalty, commission of an act involving moral turpitude, any act of indiscipline, inefficiency etc.<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii.	You will hand over the charge of letter of Authority or Power of Attorney issued to you or any property / material of the company in your possession at the time of cessation of your employment with the Company.<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii.	Upon your ceasing to be in our employment at any time, it is to be specifically understood and agreed by you that you shall not work for at least a period of 2 (two) years with any of our competitors and for at least a period of 1 (one) year with any of our customers. For the purpose of this Clause, a CUSTOMER means any company / individual having an existing monetary relationship with us, either in terms of payment or receipt of payment, for any services rendered or to whom we have licensed our software and a COMPETITOR means any company / individual who competes with us in any manner in the same field, including developing and supplying software solutions to the same market segments we service at the time of your leaving the company. Your failure to adhere to this clause shall render you liable for liquidated damages as may be ascertained depending upon the facts and circumstances of the case at the material point of time.<br><br><br>

We welcome you to Council of Education and Development Programmes PVT. LTD. i.e. CEDP family and look forward to a fruitful collaboration.
<br><br><br>
Thanking you<br>
Yours faithfully <br><br><br>



<b>Ms. Shaheen Khan</b><br>
Director<br><br>
<b><hr></b>
<center>ACCEPTANCE OF APPOINTMENT
<p>
I am in receipt of the Appointment letter along with the terms and conditions and I have fully understood the conditions and unconditionally accept the appointment.</center>


</p>



<p>Signature:	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;Name: <br>
	 	

   Date:
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;		
				
	Place:


</p>
<p>
<center><h3>Non-Disclosure Agreement</h3></center>

For good consideration, and in consideration of being employed by CEDP, henceforth mentioned as “CEDP”, the undersigned employee hereby agrees and acknowledges:<br><br>
That during the course of my employment there may be disclosed to me certain trade secrets of the Organization; said trade secrets consisting but not necessarily limited to:<br><br>

a)	Technical information: course syllabi, student manuals, lecturer’s notes, methods, processes, systems, techniques, computer programs, research projects, trainingdata, PPT presentations, etc.<br><br>
b)	Business information: student lists, fees data, counselors data, staff salary data, sources of supply, financial data, marketing & promotion data, or merchandising systems or plans.<br><br>
c)	
1.	I agree that I shall not during, or at any time after the termination of my employment with CEDP, use for myself or others, or disclose or divulge to others including future employees, any trade secrets, confidential information, or any other proprietary data of the organization in violation of this agreement. <br><br>
2.	That upon the termination of my employment from CEDP:<br><br>

a)	I shall return to CEDP all documents and property of the organization, including but not necessarily limited to: drawings, blueprints, reports, manuals, correspondence, student lists, computer programs, counselor lists, training & placement data, etc. and all other materials and all copies thereof relating in any way to CEDP's business, or in any way obtained by me during the course of employment. I further agree that I shall not retain copies, notes or abstracts of the foregoing.<br><br>
b)	CEDP may notify any future or prospective employer or third party of the existence of this agreement, and shall be entitled to full injunctive relief for any breach.<br><br>
c)	This agreement shall be binding upon me and my personal representatives and successors in interest, and shall inure to the benefit of CEDP, its successors and assigns.<br><br>



</p>
<p>
<center><b>ACCEPTANCE OF NON DISCLOSURE AGREEMENT</b><br><br>

I have fully understood the Non Disclosure Agreement and henceforth accept it.</center>
</p>
<p>Signature:	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;Name: <br>
	 	

   Date:
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;		
				
	Place:


</p>

<br>

</font>
</div>