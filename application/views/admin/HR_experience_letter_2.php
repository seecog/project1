


<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;padding-left:200px;floatLeft: 200px;
     border-radius:10px;width:800px;height:auto;background-position:top-center;' id='error_hr_personal_details'>
    <center>
        <h3></h3>
    </center>
    <br><br>
    <font face="times new roman" size=3>
    <p>
        <b>To, &nbsp;&nbsp;&nbsp;&nbsp;
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
            Date :- <?php echo date('y,d M',  strtotime(date('y-m-d'))); ?><br><br><br></b>
    </p>


    <p>
        <?php
        //print_r($employee_register_record);
        ?>
        <b>Mr/Mis <?php echo $employee_register_record[0]['emp_name']; ?> ,</b><br>
        <?php echo ucfirst($employee_register_record[0]['emp_address']); ?>
    </p>


    <center>
        <h1><u><b><i>To whomsoever it may concern</i></b></u></h1>
    </center>

    <p>This is to certify that <b><?php echo $employee_register_record[0]['emp_name']; ?></b> has worked with CEDP Pvt. Ltd. from 
        <b><?php echo $employee_register_record[0]['emp_join_date']; ?></b> to <b><?php echo $employee_register_record[0]['emp_left_date']; ?></b>
        as an <b> <?php
        $designation = $this->model_designation->get_designation_record_by_id($employee_register_record[0]['emp_designation']);
        echo $designation[0]['designation_name'];
        ?>
        </b> <?php echo $employee_register_record[0]['emp_name']; ?> has worked sincerely and efficiently during her tenure and we wish her all the best for her future projects.
    </p><br>

    <b>
        <p>With Regards</p><br>


        <p>Mrs. Shaheen Khan<br>
            Director, Council of Education & Development Programmes <br>
            Date: 30/09/2013<br>
        </p>

    </b>




</div>