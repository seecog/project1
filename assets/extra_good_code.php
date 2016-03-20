<!-- div for showing message start -->			
			<br>
			<div style='background-color:#A9F5A9;border-style:solid;border-color:#ffffff;
			border-radius:10px;
			width:550px;height:50px;
			background-position:top-center;
			
			'>		
			<?php 
			
			$msg="<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<font face='times new roman' size=3 color='#0B610B'>".$message_1."</font>";
			
			if(isset($message_1))
			{
				
	        echo $msg;			
				
			}
			else 
			{
			echo "<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<font face='times new roman' size=3 color='#0B610B'>Not registered</font>";	
			}
			
			
			?>		
					
		</div>			
					
		<!-- div for showing message end -->			
					
			