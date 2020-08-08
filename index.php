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

<p><h1>Videos 4 Mobile</h1></p>
<p>Here are some videos to stream or download for the kids:</p>
<ul>
	<?php
		$dirname = "videos/";
		$videos = scandir($dirname);
		shuffle($videos);
		$ignore = array(".", "..");
		foreach($videos as $curimg){
			if(!in_array($curimg, $ignore)) {
				echo "<li><a href=\"$dirname$curimg\">$curimg<br><video preload=\"none\" controls height=\"150\" muted><source src=$dirname$curimg alt='' type=\"video/mp4\"></video></a></li>\n ";
			}
		} 				
	?>
</ul>

</body>
</html>
