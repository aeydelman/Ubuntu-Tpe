<?php
chdir('/home/smarkoc4/www/p/support/php');
include_once('uploadfiles_util.php');

//error_reporting(E_ERROR | E_PARSE);
	if ($argc == 3)
	{
		$filePath = $argv[1];
		if (!$filePath) {
			exit(3);	//no fileh
		}

		$jobid = $argv[2];
		if (!$jobid) {
			exit(2);	// no project ID specified
		}
	}
	else {
		exit(1);//wrong arguments
	}

   	$skin = '';
	$pname = 'max';
	$path_parts = pathinfo($filePath);
	$filename = NormalizeFilename($path_parts['basename']);	
    resize_photo_to_multiple_sizes($filePath, $jobid, $pname, $skin, $filename);
?>