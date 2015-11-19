#!/usr/bin/php
<?php
//script to generate the view and generate csv for the given servername
include "d_connect.php";

$var="tempview";
echo $server;

$export=mysql_query("create or replace view $var as SELECT * from WSM.accessnew where accessnew.serveid ='$server';");		//generate view for the server

if(!$export)								
echo "invalid server name ";

$export=mysql_query("SELECT * from WSM.tempview where tempview.serveid ='$server';");

$num=mysql_numrows($export);

echo "</br></br>"."\n\nNumber of records found:$num"."<br/>";

$file =fopen("/var/www/csv.txt","w");				//csv.txt generated in home folder
if($file)
echo "opened";
else
echo "not"."</br>";
$header='';
$fields= mysql_num_fields ($export);			
for ( $i = 0; $i < $fields; $i++ )			//the row header fields in first entry of csv
{
     if($i==0)						//the first entry concat directly
     {
      $header = mysql_field_name( $export , $i );		
     }			
     else
     {
      $header =  $header.",".mysql_field_name( $export , $i);	//" , " given to seperate previous n new value	
     }	
    
}
$data=($header)."\n";

while( $row = mysql_fetch_row( $export ) )		//for each record in the table
{
    	$i=1;
	$line = '';
	foreach( $row as $value )			//for each row as "$value"
	{                                            
		if ( ( !isset( $value ) ) || ( $value == " " ) )
		{
			if($i==1)            
			$value = ""; 		//value has nothng 
 			else
			$value=",";        	//" , " given to seperate previous n new value	
		}
        	else
        	{
            
			if($i==4)		//to chk if it is timestamp
 			{
				$value="'".$value."'";			
			}
			if($i!=1)
			$value = "," . $value;  //$i to chk whether a new value if not give comma betwn new n previous value
		}
        $line .= $value;
        $i++;
        }
    $data .= ( $line ) . "\n";
}
fwrite($file,$data);

fclose($file);

if ( $data == "" )
{
    $data = "\n(0) Records Found!\n";                        
}

?>
