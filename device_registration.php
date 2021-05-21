<?php
error_reporting(0);
$status=$_REQUEST['status'];
if($status=="success")
{
?>
    <script type="text/javascript">
    alert("Device Successfully Registered");
	</script>
<?php 
}
?>

<?php
include("main_header.php");
include("../header.php");

?>
<html>
<head>
	<title>Device Registration</title>
    <link type="text/css" rel="stylesheet" href="../css/header.css">
    <script type="text/javascript" src="../validation/jquery.js"></script>
	<script type="text/javascript" src="../validation/jquery_002.js"></script>
	<script type="text/javascript" src="../validation/jquery.validate.min.js"></script>
	<script type="text/javascript">
	jQuery.validator.addMethod("notEqual", function(value, element, param) {return this.optional(element) || value != param;}, 		"Please enter your name");
			$(document).ready(function() {
			$("#registration_form").validate({
				submitHandler:function(form) 
				{
					SubmittingForm();
				},
				rules: 
				{
					imei:
					{
						required:true
					},
					comment: 
					{
						required: true
					}
					},
					messages: 
					{
						comment: "Please enter a comment.",
						password2: "Password Doesn't Matched"
					}
			});	
		});	
</script>
<style>
#link2
{
	 -moz-box-shadow:inset 0px 1px 0px 0px #0099FF;
	-webkit-box-shadow:inset 0px 1px 0px 0px #0099FF;
	box-shadow:inset 0px 1px 0px 0px #0099FF;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #0099FF), color-stop(1, #0099FF) );
	background:-moz-linear-gradient( center top, #0099FF 5%, #0099FF 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#081421', endColorstr='#0099FF');
	background-color:#0099FF;
	border:1px solid #0099FF;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:8px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #2A323D;
	
	
}
</style>

</head>
<body>
<form action="device_insertion.php" method="post" name="registration_form" id="registration_form">
<!--<a href="main_consumer_reg_selection.php" id="link1">View All</a>!-->
   <table align="center" id="form_table">
      <th align="center" colspan="2"><h2><center>DEVICE REGISTRATION</center></h2></th> 
    <tr>
      	  <td>IMEI:</td><td><input type="text" name="imei" class="form-control"/></td>
      </tr>
    
      </td>
      </tr>
	  <tr>
      <td>&nbsp;</td>
          <td  colspan="2" align="center"><input type="submit" value="Register" name="register" id="button" class="btn btn-primary"/>
          <a href="main_index.php" id="link2" class="btn btn-primary">Cancel</a>
          </td>
      </tr>
    </table>
</form>
</body>
</html>
<?php
include('main_footer.php');
?>