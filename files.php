<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mobile Video Gallery</title>
<style type="text/css">
<!--
li{
	list-style-type:none;
	margin-right:10px;
	margin-bottom:10px;
	float:left;
}

-->
</style></head>

<body>

<p><h1>Apps and Files</h1></p>
<p>Here are some apps and files on the server:</p>
<ul>
	<?php
		$dirname = "files/";
		$videos = scandir($dirname);
		shuffle($files);
		$ignore = array(".", "..");
		foreach($files as $curimg){
			if(!in_array($curimg, $ignore)) {
				echo "<p style=\"font-size:large;text-transform:uppercase;\"><a href=\"$dirname$curimg\">$curimg<br></a></p>\n ";
			}
		} 				
	?>
</ul>

</body>
</html>
