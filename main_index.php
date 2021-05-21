<?php
error_reporting(0);
$status=$_REQUEST['status'];
if($status=="success")
{
	?>
    <script type="text/javascript">
    alert("Replied Successfully");
	</script>
     <?php 
}
else
{
echo "<meta http-equiv='refresh' content='3'>";	
}
include("main_header.php");
include('main_content.php');
include('main_footer.php');
?>