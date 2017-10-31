<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<!--
	Filename:	bingo.php
	Uses:       bingo.php
	Author:		Mike Blackmore
	Background: Bingo Program.
	Created:	30/11/2010 - Initial script
	Modified:	.
-->
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>Practical 6 - BINGO2</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Author" content="Mike Blackmore"/>

		<style type="text/css">
		
		body{font-family: Verdana, Arial, sans-serif; font-size: 100%; color: #990099; background-color: #eeeeee; width: 500px;}
			
		h1 { font-size: 150%; color: black; background-color: inherit; text-align:center} 
		h2 { font-size: 130%; color: #000066; background-color: inherit; text-align:center}
		
		p  { color:black; width:500px; text-align:justify;}
		p.left {text-align: left; margin-left:40px;}
		p.centered{text-align:center;margin-top:0px;margin-bottom:0px;padding:0px;}
		
		</style>
	</head>
	
	<body>
		
		<h1>Mike Blackmore - Practical 6</h1>
		<h2>Bingo 2</h2>
		
		<p>This script simulates the process of pulling bingo balls from a bag.</p>		

		<?php
		$START=microtime(get_as_float);
		$tries=1;
		$counter=1;
		// Initialise the array
		while ($counter <=90)
			{
			$usednumbers[$counter]=0;
			$counter=$counter+1;
			}
		// 	
		$ballsdrawn=1;
		echo "<p>";
		while($ballsdrawn <=90)
			{
			$tries++;
			$random=rand(1,90);
			if ( $usednumbers[$random] == 0)
				{
				echo "ball number $ballsdrawn is $random<br />";
				$ballsdrawn++;
				$usednumbers[$random]=1;
				}
			}
		echo "</p>";	
		echo "<p>The number of balls drawn is $tries </p>";
		$STOP=microtime(get_as_float);
		$DIFF=$STOP - $START;
		echo "<p>Script duration ".$DIFF." seconds</p>";
		
		?>
		
	<p>	<a href="http://validator.w3.org/check?uri=referer"><img
			src="http://www.w3.org/Icons/valid-xhtml10-blue"
			alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a></p>
	
	</body>
</html>
