<?php
function getExtName($filename='')
{
	$ext='';
	if($filename){
		$names=$filename['name'];
		$arr=explode('.',$names);
		$max=count($arr)-1;
		$ext=$arr[$max];	
	}	
	return $ext;
}
?>