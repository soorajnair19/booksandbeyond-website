<?php
session_start();
if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: login.php");
	    	exit;
		}
?>
<!DOCTYPE html>

<html>
 <head> <link rel="stylesheet" type="text/css" href="ib.css">
   <title>TRENDING IN MYSTERY</title>
<script>
function goBack() {
    window.history.back();
}
</script>
 </head>

<style>

img {
    opacity: 0.7;
   
}

img:hover {
    opacity: 1.0;
     
}



</style>

<body>
	<font color=WHITE>
   <h2>TRENDING IN MYSTERY</h2> </font>
<ib class="dashed"> 
<a href="accidental.php" target=_top>
<img src="accidentaL.jpg" style="width:150px;height:200px;"> </a> </ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"> 
<a href="onenyt.php" target=_top>
<img src="onenight.jpg" style="width:150px;height:200px;"> </a> </ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"> <a href="60.php" target=_top> <img src="60.jpg" style="width:150px;height:200px;"> </a> </ib>


</body>
</html>
