<?php
//script for dataconversion from apache to mysql format
preg_match("/^([0-9]+)\/?-?([a-zA-Z]+)\/?-?([0-9]+)/",$attribute[4],$attribute1); //"$attribute[4]" contains apache timestamp 
										//2012-jan-12 12:00:00 to 2012-01-12 12:00:00
if(!strcmp($attribute1[2],"Jan"))		//$attribute1[2] contains the month of the timestamp
  {
	
     $mnth="01";
  }
 
if(!strcmp($attribute1[2],"Feb"))
  {
	
     $mnth="02"; 
  }
if(!strcmp($attribute1[2],"Mar"))
  {
	
     $mnth="03";
  }
if(!strcmp($attribute1[2],"Apr"))
  {
	
     $mnth="04";
  }
if(!strcmp($attribute1[2],"May"))
  {
	
     $mnth="05";
  }
if(!strcmp($attribute1[2],"Jun"))
  {
	
     $mnth="06";
  }
if(!strcmp($attribute1[2],"Jul"))
  {
	
     $mnth="07";
  }
if(!strcmp($attribute1[2],"Aug"))
  {
	
     $mnth="08";
  }
if(!strcmp($attribute1[2],"Sep"))
  {
	
     $mnth="09";
  }
if(!strcmp($attribute1[2],"Oct"))
  {
	
     $mnth="10";
  }
if(!strcmp($attribute1[2],"Nov"))
  {
	
     $mnth="11";
  }
if(!strcmp($attribute1[2],"Dec"))
  {
	
     $mnth="12";
  }


$attribute1[3]=$attribute1[3]."-";		//concat the date (year:month:date)
$attribute1[3]=$attribute1[3].$mnth;
$attribute1[3]=$attribute1[3]."-";
$attribute1[3]=$attribute1[3].$attribute1[1];


$date    = mysql_real_escape_string($attribute1[3]);	//$timestamp contains the converted timestamp 2012-03-24 12:12:00
$timestamp=$attribute1[3]." ".$attribute[5];

$time_stamp=mysql_real_escape_string($timestamp);

?>


