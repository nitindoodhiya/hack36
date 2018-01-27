<!DOCTYPE html>
<html>
<head>
	<title> display pdf</title>
</head>
	<body>
		<?php 
		$file= 'relativity.pdf';
		$filename='relativity.pdf';
		header('Content-type:application/pdf');
		header('Content-Disposition:inline;filename"'.$filename.'"');
		header('Content-Transfer-Encoding:binary');
		header('Accept-Ranges:bytes');
        @readfile($file);
        ?>
	</body>
	</html>
