<?php
//script to entry status_mod entries in the database
  $field=0;
  
   while(($line = fgets ($stdin)))
  {
	preg_match("/(\S+): ([0-9]*.*)$/",$line,$attribute);
	$token[$field]= mysql_real_escape_string($attribute[2]);
	if($field==9)						//check the field is scoreboard
 	{
  	 include"scoreboard.php";
 	}
	$field++;
   }

$doc = new DOMDocument();		//module for date
$doc->loadHTMLFile("http://localhost/server-status");
$elements = $doc->getElementsByTagName('dt');
$i=0;
foreach ($elements as $element)
{
 if($i==2)  
 {
  preg_match("/^(\S+) (\S+:) (\S+,) (\d+-\S+-\d+) (\d+:\d+:\d+)/",$element->nodeValue,$attr);
  }
 $i++;
}
 
 $attribute[4]=$attr[4];
 $attribute[5]=$attr[5];

  include 'dateconversion.php';			//dateconversion to convert date
$result=mysql_query("select virtual_host,serveid from WSM.accessnew where time_stamp='$timestamp';");

$num=mysql_numrows($result);

echo "number of rows::::".$num;

$virtualhost=mysql_result($result,0,'virtual_host');		//virtual host and serveid fields taken frm accesslog database
$serverid=mysql_result($result,0,'serveid');



$virtualhost= mysql_real_escape_string($virtualhost);
$serverid=mysql_real_escape_string($serverid);



mysql_query("INSERT INTO `WSM`.`modstatus` VALUES ('$token[0]','$token[1]','$token[2]','$token[3]','$token[4]','$token[5]','$token[6]','$token[7]','$token[8]','$time_stamp','$token1[0]','$token1[1]','$token1[2]','$token1[3]','$token1[4]','$token1[5]','$token1[6]','$token1[7]','$token1[8]','$token1[9]','$virtualhost','$serverid');");

  
 

?>
