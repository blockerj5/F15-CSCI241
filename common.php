<?php
session_start();
function readLines($filename)
{
	$fileResource = fopen($filename, "r");
	
	if(!is_resource($fileResource))
	{
		exit("Could not open the file to read.");
	}
	
	$contents = array();
	
	while($line  = fgets($fileResource))
	{
		$contents[] = $line;
	}
	
	fclose($fileResource);
	
	return $contents;
	
}
function appendLine($filename, $line)
{
	$fileResource = fopen($filename, "a");
	
	if(!is_resource($fileResource))
	{
		exit("Could not open the file to read.");
	}
	
	fwrite($fileResource, $line);
	
	fclose($fileResource);
	
	return null;
	
}
function deleteLine($filename, $line)
{
	$contents = readLines($filename);
	
	unset($contents[$line]);
	
	$fileResource = fopen($filename, "w");
		
	if(!is_resource($fileResource))
	{
		exit("Could not open the file for reading.");
	}
	
	foreach($contents as $contentLine)
	{
		fwrite($fileResource, $contentLine);
	}	
	
	fclose($fileResource);
	
	return null;
	
}
