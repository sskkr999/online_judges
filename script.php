<?php
$filename = md5('sami').".txt"; 
$filer = fopen( $filename, 'r' ); 
$size = filesize( $filename ); 
$filedata = fread( $filer, $size ); 
echo $filedata;
?>