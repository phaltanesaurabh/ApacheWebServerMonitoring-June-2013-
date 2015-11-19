<?php
//script to parse the scoreboard from status_mod
for($j=0;$j<13;$j++)
 {
  $scorecnt[$j]=0;
 }
 
 $len=strlen($attribute[2]);
 $j=0;
 while($j<=$len)
  {
   if($attribute[2][$j]=='W')
   {
    $scorecnt[0]++;
   } 
   if($attribute[2][$j]=='_')
   {
    $scorecnt[1]++;
   } 
   if($attribute[2][$j]=='G')
   {
    $scorecnt[2]++;    
   } 
   if($attribute[2][$j]=='S')
   {
    $scorecnt[3]++;
   }
   if($attribute[2][$j]=='R')
   {
    $scorecnt[4]++;
   }
   if($attribute[2][$j]=='K')
   {
    $scorecnt[5]++;
   }
   if($attribute[2][$j]=='D')
   {
    $scorecnt[6]++;
   }
   if($attribute[2][$j]=='C')
   {
    $scorecnt[7]++;
   }
   if($attribute[2][$j]=='L')
   {
    $scorecnt[8]++;  
   }
   if($attribute[2][$j]=='I')
   {
    $scorecnt[9]++;
   }
   $j++; 
  }

for($j=0;$j<=9;$j++)
{
  $token1[$j]=mysql_real_escape_string($scorecnt[$j]);		//the count of each field from scoreboard 
}



?>
