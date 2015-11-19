#!/usr/bin/php

<?php
//script to check toe downtime of the server
{
 
 include "d_connect.php";
  
  $stdin = fopen ("http://localhost/server-status?auto", 'r');

  $result=mysql_query("SELECT STATUS FROM WSM.uptime WHERE `Timestamp` = (SELECT max( `Timestamp` ) FROM `uptime` WHERE 1);");

  $row=mysql_fetch_array($result);  
  $prev_stat=$row[0];
  
   echo $row[0];

   if(!$stdin)
      $pres_stat=0;
   else 
      $pres_stat=1;   

 if($prev_stat && $pres_stat) 
       $state=0;
 else if(!$prev_stat && $pres_stat)  
       $state=1;
 else if($prev_stat && !$pres_stat)  
       $state=2;  
 else if(!$prev_stat && !$pres_stat)  
       $state=3;


switch($state)
{

  case 0:
        //  insert_data();
           include "insert.php"; 
            break;

 case 1:  //off to on

               echo "case1";
              $row1=mysql_fetch_array(mysql_query("SELECT max(`Timestamp`) FROM WSM.`uptime` WHERE `status`=0;"));
              $prev_timestamp=mysql_real_escape_string($row1[0]);

               include "insert.php";
               $pres_timestamp=$timestamp;
               echo $pres_timestamp;                   
  
              $timestamp_diff = mysql_real_escape_string(strtotime($pres_timestamp)-strtotime($prev_timestamp));
              echo  $timestamp_diff;
              mysql_query("UPDATE WSM.`uptime` SET `downtime`='$timestamp_diff' WHERE `Timestamp`='$prev_timestamp';");

                 break;

  case 2: //on to off
              $row1=mysql_fetch_array(mysql_query("SELECT max(`Timestamp` ) FROM `uptime` WHERE 1;"));
              $prev_timestamp=mysql_real_escape_string($row1[0]);
              mysql_query("UPDATE WSM.`uptime` SET `status`= 0 WHERE `Timestamp`= '$prev_timestamp';");
               
                 break;
     
   }

  fclose($stdin);
}
?>

