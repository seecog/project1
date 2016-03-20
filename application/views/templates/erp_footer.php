<script language='javascript'>
$(document).ready(function(){
//hiding the subscription alerts

$('#error_user_subscription_name').hide();
$('#error_user_subscription_emailid').hide();
$('#error_div').hide();
$('#error_user_subscription_emailid_present').hide();
$('#success_div_subscribe').hide();

//hiding the subscription alerts
$('#subscribe_button').click(function(){

$('#error_user_subscription_name').hide();
$('#error_user_subscription_emailid').hide();


var user_subscription_name =$('#user_subscription_name').val();
var user_subscription_emailid =$('#user_subscription_emailid').val();


var error_count=0;
if(user_subscription_name=='')
{
error_count++;
$('#error_user_subscription_name').show();
}
if(user_subscription_emailid=='')
{
error_count++;
$('#error_user_subscription_emailid').show();
}
//alert(error_count);

if(error_count==0)
{


$.post('/projects/egypt_real_estate/index.php/property_user_subscription_pre',
{
user_subscription_name : user_subscription_name,
user_subscription_emailid : user_subscription_emailid
},function(data,status)
{

//alert(data);

if(data)
{

if(data=="111")
{
$('#error_user_subscription_emailid_present').show();
$('#error_div').show();
}
else
{
$('#user_subscription_name').val('');
$('#user_subscription_emailid').val('');
$('#error_div').hide();
$('#success_div_subscribe').show();
}
}
});

}
else
{
$('#error_div').show();
}


});



//populating city through ajax start
			$.post('/projects/egypt_real_estate/index.php/get_property_city_details_record_footer/1',
			{
			},function(data,status)
			{
	//$('#property_city_footer').html(data);
			});
		
	//populating city through ajax end	

	
//populating city through ajax end	


});


</script>

<!--	<div class="wrapper bgSlice2">
    	 			

        <div class="clearFix"></div>
        <br/>
		
    </div>-->
	
<!-- WRAPPER BASE END HERE -->
 <script src="/projects/egypt_real_estate/assets/js/accordly.js"></script>
  <script src="/projects/egypt_real_estate/assets/js/slidy.js"></script>
	
        <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
//window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
//d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
//_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
//$.src='//v2.zopim.com/?27XXdYoHlnke30wbfmAcsfYQrKqt0shF';z.t=+new Date;$.
//type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</body>
