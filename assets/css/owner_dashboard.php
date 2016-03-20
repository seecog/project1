<script>

$(document).ready(function(){

$('#font1').hover(function(){

$(this).addClass('font11');
},
function(){

$(this).removeClass('font11');

});

$('#font2').hover(function(){

	$(this).addClass('font22');
	},
	function(){

	$(this).removeClass('font22');

});

$('#font3').hover(function(){

	$(this).addClass('font33');
	},
	function(){

	$(this).removeClass('font33');

});

$("#hide2").click(function(){

$("#tr_2").hide();	
});



});




</script>
<!-- Main Content Area Start here | This is php page now we are using old css so, we have to create the new css -->
				<h3 style="margin-top:-6px;"><font face="times new roman" color="#FF8214" size="3">Home/Dashboard</font></h3>
				
<font face="times new roman" size="3">Welcome salman khan 
<?php 

$this->load->view('user/owner_header');

?>

</font><br>

<hr color="#FE9A2E">
				
				<div>
				<div class="owner_Dashboard">
				
				<!-- Now dash board items start -->
				
				<table border="0" cellpadding="2" cellspacing="0" width="100%">
				<tr>
				<th><font face="times new roman" color="#B40404" size="3">PropertyImage</font></th>
				<th><font face="times new roman" color="#B40404" size="3">Property name</font></th>
				<th><font face="times new roman" color="#B40404" size="3">Edit</font></th>
				<th><font face="times new roman" color="#B40404" size="3">Revenue generated</font></th>
				<th><font face="times new roman" color="#B40404" size="3">Enqueries</font></th>
				<th><font face="times new roman" color="#B40404" size="3">Delete</font></th>
				<th><font face="times new roman" color="#B40404" size="3">Hide</font></th>
				</tr>
				<tr style="background:#ffffff;">
				<td>
				<div class="circular_property_1"></div>
				<!-- 
				<img src="/projects/egypt_real_estate/assets/images/assets_pic/property.jpg" width="70" height="70" align="left">
				 -->
				
				</td>
				<td>
				<div id="font1_new"  style="overflow:slroll;height:120px;">
				<font class="font_normal" size=3>
				Updated on 05/08/2014<br>
				Listing status : In verification phase<br>
				Type : Apartment/flat | Price : $100/night<br>
				Location : Abu-kabir<br>
				</font>
				</div> 
				
				
				
				
				
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3">
				<a href="/projects/egypt_real_estate/index.php/owner_add_property_1" class="propertyBtn propertyBtn-blue">
				Edit
				</a>
				</font>
				</td>
				
				<td>
				<font face="times new roman" color="#ffffff" size="3">
				<a href="/projects/egypt_real_estate/index.php/owner_add_property_4" class="propertyBtn propertyBtn-blue">
				Revenue Generated
				</a>
				</font>
				</td>
				
				<td>
				<font face="times new roman" color="#ffffff" size="3">
				<a href="/projects/egypt_real_estate/index.php/owner_enquiry_1" class="propertyBtn propertyBtn-blue">
				Enquires(9)					
				</a>
				</font>
				</td>
								
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Delete
				</font>
				</td>
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Hide
				</font>
				
				</td>
				
				</tr>

				
<!-- row 2 start -->	
				
	<tr style="background:#ffffff;">
				<td>
				<div class="circular_property_2"></div>
				<!-- 
				<img src="/projects/egypt_real_estate/assets/images/assets_pic/property.jpg" width="70" height="70" align="left">
				 -->
				
				</td>
				<td>
				<div id="font1_new" class="font_normal" style="overflow:slroll;height:120px;">
				<font class="font_normal" size=3>Updated on 05/08/2014<br>
				Listing status : In verification phase<br>
				Type : Apartment/flat | Price : $100/night<br>
				Location : Abu-kabir<br>
				</font>
				</div> 
				
				
				
				
				
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3">
				<a href="/projects/egypt_real_estate/index.php/owner_add_property_1" class="propertyBtn propertyBtn-blue">
				Edit
				</a>
				</font>
				</td>
				
				<td>
				<font face="times new roman" color="#ffffff" size="3">
				<a href="/projects/egypt_real_estate/index.php/owner_add_property_4" class="propertyBtn propertyBtn-blue">
				Revenue Generated
				</a>
				</font>
				</td>
				
				<td>
				<font face="times new roman" color="#ffffff" size="3">
				<a href="/projects/egypt_real_estate/index.php/owner_enquiry_1" class="propertyBtn propertyBtn-blue">
				Enquires(9)					
				</a>
				</font>
				</td>
								
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Delete
				</font>
				</td>
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Hide
				</font>
				
				</td>
				
				</tr>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
							
			<!-- 	
<tr style="background:#CCCCCC;" id="tr_2">
				<td>
				
				<img src="/projects/egypt_real_estate/assets/images/assets_pic/property2.jpg" width="70" height="70" align="left">
				</td>
				<td>
				<div id="font2" class="font2" style="overflow:slroll;height:120px;">
				Updated on 05/08/2014<br>
				Listing status : In verification phase<br>
				Type : Apartment/flat | Price : $100/night<br>
				Location : Abu-kabir<br>
				</div> 
				
				
				
				
				
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Edit
				</font>
				</td>
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Image
				</font>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Map
				</font>
				
				</td>
				
				
				<td>
				<a class="propertyBtn propertyBtn-blue">
				<font face="times new roman" color="#ffffff" size="3" >
				Manage
				</font>
				</td>
				
				
				<td>
				<a href="/projects/egypt_real_estate/index.php/owner_enquiry_1" class="propertyBtn propertyBtn-blue">
				<font face="times new roman" color="#ffffff" size="3"> 
				Enquires(9)
				</font>				
				</a>
				</td>
				
				<td>
				<a id="hide_2"></a><font face="times new roman" color="#ffffff" size="3"  class="propertyBtn propertyBtn-blue">
				Delete
				</font></a>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Hide
				</font>
				
				</td>
				
				</tr>
				 -->
				
<!-- row 2 end -->			
			
<!-- row 3 start -->				
				
<!-- 				
<tr style="background:#ffffff;">
				<td>
				
				<img src="/projects/egypt_real_estate/assets/images/assets_pic/property3.jpg" width="70" height="70" align="left">
				</td>
				<td>
				<div id="font3" class="font3" style="overflow:slroll;height:120px;">
				Updated on 05/08/2014<br>
				Listing status : In verification phase<br>
				Type : Apartment/flat | Price : $100/night<br>
				Location : Abu-kabir<br>
				</div> 
				
				
				
				
				
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Edit
				</font>
				</td>
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Image
				</font>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Map
				</font>
				
				</td>
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Manage
				</font>				
				</td>
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Enquires(9)
				</font>
				
				</td>
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Delete
				</font>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Hide
				</font>
				
				</td>
				
				</tr>
				 -->
				
<!-- row 3 end -->			
				
<!-- row 3 start -->				
				<!-- 
<tr style="background:#CCCCCC;">
				<td>
				
				<img src="/projects/egypt_real_estate/assets/images/assets_pic/property4.jpg" width="70" height="70" align="left">
				</td>
				<td>
				<div id="font3" class="font3" style="overflow:slroll;height:120px;">
				Updated on 05/08/2014<br>
				Listing status : In verification phase<br>
				Type : Apartment/flat | Price : $100/night<br>
				Location : Abu-kabir<br>
				</div> 
				
				
				
				
				
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Edit
				</font>
				</td>
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Image
				</font>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Map
				</font>
				
				</td>
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Manage
				</font>				
				</td>
				
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Enquires(9)
				</font>
				
				</td>
				
				<td>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Delete
				</font>
				<font face="times new roman" color="#ffffff" size="3" class="propertyBtn propertyBtn-blue">
				Hide
				</font>
				
				</td>
				
				</tr>
				 -->
				
<!-- row 3 end -->			
				
				
				</table>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<!-- Now dash board items end -->
				
				
			   </div>
			   <div class="clearFix"></div>
				<br/>
	
			   
			   
			   				
					
			   </div>
			   




<!-- Main Content Area End here -->
