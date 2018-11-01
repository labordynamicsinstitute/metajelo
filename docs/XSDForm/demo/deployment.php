
<html><head>
<!-- fixed lines that include the scripts -->
<script type="text/javascript" src="../jquery.min.js"></script>
<script type="text/javascript" src="../xsdformjs.php"></script>
<link href="../style.css" type="text/css" media="screen" rel="stylesheet">
<!-- Prepare the form on page load -->
<!-- Use the form identifier that is entered on configuration -->

<?php 
$xmlContent="";
if(isset($_POST["xmlContent"])){
	$xmlContent = $_POST["xmlContent"];
}

echo highlight_string(stripslashes($xmlContent));
//IMPORTANT: client should remove trailing slashes. 
$xmlCurrentContent = stripslashes($xmlContent);
?>

<script>
$(document).ready(function() {
	var xmlCurrentContent = '<?php echo base64_encode($xmlCurrentContent);?>'
	getXSDForm("deploymentform","formDivId",xmlCurrentContent);
});
</script>
</head>
<!-- Your web page content -->
<body>


<center><h3>Deployment Form</h3>
<table border="1" width="500px">
<tr><td>

<!-- This is the place that you want to place the web form -->
 <div id="formDivId"></div>    

</td></tr>
</table>
</center>

</body></html>