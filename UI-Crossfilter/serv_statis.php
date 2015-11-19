<!DOCTYPE html>
<meta charset="utf-8">
<title>Apache Web Server Monitoring</title>

<style>
{
  font-family: "Helvetica Neue";
  margin: 40px auto;
  width: 960px;
  min-height: 2000px;
}


#chart1 svg {
  height: 400px;
}


#{
  position: relative;
}


footer {
  padding: 2em 0 1em 0;
  font-size: 12px;
}


#lists{
	top: 180%;
	background-color: #C93;
	height: 30%;
	position: absolute;
	left: 5%;
	overflow: scroll;
	z-index: 20;
	min-width: 80%;
	}


#cputitle
{
	background-color: #CFC;
	text-align: center;
	font-size: 24px;
	border-color: #000;
	}


h1 {
  font-size: 96px;
  margin-top: .3em;
  margin-bottom: 0;
}

h1 + h2 {
  margin-top: 0;
}

h2 {
  font-weight: 400;
  font-size: 28px;
}
rect
{

fill:red;
 }


h1, h2 {
	font-family: "Yanone Kaffeesatz";
	text-rendering: optimizeLegibility;
	text-align: center;
	background-color: #3F3;
}

# > p {
  line-height: 1.5em;
  width: 640px;
  text-rendering: optimizeLegibility;
}

#charts {
	top: 30%;
	padding-top: 5%;
	height: 20%;
}

.chart {
  display: inline-block;
  height: 151px;
  margin-bottom: 20px;
}
#tabcpustats
{
	top: 50%;
	width: 100%;
	background-color: #CF0;
	border-style: 5;
	border-width: 20;
	font-size: 16px;
	font-style: normal;
	font-family: "Times New Roman", Times, serif;
	border: 15;
	border-color: #003;
	}
.reset {
  padding-left: 1em;
  font-size: smaller;
  color: #ccc;
}

.smclass
{
  width: 160px;
  padding-right: 10px;
  text-align: right;
background-color:yellow;
}


.smclass1
{
  width: 100px;
  padding-right: 10px;
  text-align: right;
background-color:blue;
}



.background.bar {
  fill: #ccc;
}

.foreground.bar {
  fill: red;
}

.axis path, .axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.axis text {
  font: 10px sans-serif;
}

.brush rect.extent {
  fill: steelblue;
  fill-opacity: .125;
}

.brush .resize path {
  fill: #eee;
  stroke: #666;
}

#time_chart {
	width: 20%;
	padding-left: 10%;
}

#delay-chart {
  width: 230px;
}

#distance-chart {
  width: 420px;
}

#static
{
	position:absolute;
	left:5%;
	top:70%;
	width:70%;
	height:40%;
	z-index:16;
	background-color: #FF9;
	text-align: center;
	border-color: #000;
	border: 3px solid;
	visibility: hidden;
 }
 

#numeric
{
width:1000px
height:300 px
background-color:black;
  }


#date-chart {
	width: 20%;
	top: 20%;
	padding-left: 10%;
	left: 30%;
}

#ip-chart{
width:300px;

  }

#rawlog_list {
	min-height: 1024px;
	top: 60%;
	overflow: scroll;
}

#rawlog_list .date,
#rawlog_list .day {
  margin-bottom: .4em;
}

#rawlog_list .flight {
	
	background: #eee;
	min-width: %100;
	margin-bottom: 1px;
	height:60px;

}

#detailed_error .flight {
	line-height: 1.5em;
	background: #eee;
	min-width: 100%;
	margin-bottom: 1px;
	
	
}

#rawlog_list .time {
  color: #999;
}

#rawlog_list .flight div {
	display: inline-block;
	
	padding-right: 10px;
   text-align: left;
}

#rawlog_list div.error_level
{
     	
		 	width: 10%;
	
	}




#rawlog_list div.error_message{
	
	width: 40%;

	
	 
	}


#rawlog_list div.time{
	width: 10%;
	}

#rawlog_list div.remoteip {
  
  width: 10%;
}



#detailed_error div.distance,
#detailed_error div.user_agent1,
#detailed_error div.delay,
 {
  width: 120px;
  padding-right: 10px;
  text-align: right;
}


#rawlog_list .early {
  color: green;
}

aside {
  position: absolute;
  left: 740px;
  font-size: smaller;
  width: 220px;
}

#mean_ref{
	position:absolute;
	left:55%;
	top:90%;
	width:30%;
	height:282px;
	z-index:15;
	border-color: #000;
	background-color: #CF6;
	font: 15;
	font-size: 16px;
	border: 5px solid;
	visibility: hidden;
}

#mean_req{
	position:absolute;
	left:50%;
	top:40%;
	width:50%;
	z-index:16;
	border-color: #003;
	background-color: #6C6;
	font: 15;
	font-size: 15px;
	border-style: solid;
	border: 5px solid;
	visibility: hidden;
	overflow: scroll;
	min-height: 30%;
}
#mean_usr{
	position:absolute;
	left:50%;
	top:90%;
	width:40%;
	height:50%;
	z-index:15;
	border-color: #000;
	background-color: #96F;
	font: 15;
	font-size: 15px;
	border: 5px solid;
	visibility: hidden;
}


#apDiv1 {
	position:absolute;
	left:276px;
	top:287px;
	width:55px;
	height:11px;
	z-index:2;
}
#meanfield {
	left:0%;
	width:100%;
	height:10%;
	z-index:2;
	background-color: #6C3;
	border: 3px solid;
	border-color: #30F;
}

.meanfield1 {
	left:60%;
	width:30%;
	height:10%;
	z-index:2;
	background-color: #6C6;
	border: 5;
	border-color: #000;
}

#title_ref
{
	background-color: #606;
	top: 30%;
	left: 30%;
	}
#statusbargraph {
	position:absolute;
	left:10%;
	top:25%;
	width:70%;
	height:30%;
	z-index:2;
	background-color: #FF9;
	text-align: center;
	border: 5px solid;
	visibility: hidden;
}


#apDiv4 {
	position:absolute;
	left:20%;
	top:55%;
	width:10%;
	height:5%;
	z-index:3;
	background-color: #3F3;
	text-align: center;
	border: 5px solid;
}


#apDiv5 {
	position:absolute;
	left:10%;
	top:95%;
	width:10%;
	height:5%;
	z-index:4;
	background-color: #0C3;
	text-align: center;
	border: 5px solid;
}
#status_plot {
	position:absolute;
	left:10%;
	top:140%;
	width:70%;
	height:30%;
	z-index:20;
	background-color: #FC6;
	border-width: 5;
	border: 5px solid;
	padding-left: 5%;
	visibility: hidden;
}


#ip2_plot {
	left:50%;
	top:90%;
	width:50%;
	height:40%;
	position:absolute;
	z-index:16;
	background-color: #FC6;
	border-width: 5;
	border: 5px solid;
	padding-left: 10px;
	visibility: hidden;
}
#apDiv7 {
	border:5px solid;
	position:absolute;
	left:70%;
	top:100%;
	width:30%;
	height:3%;
	z-index:6;
	background-color: #3F3;
	text-align: center;
}

#mean_half {
	position:absolute;
	left:0%;
	top:735px;
	width:50%;
	height:100%;
	z-index:7;
}

#in_mfield1{
	position:absolute;
	left:0%;
	width:50%;
	height:10%;
	z-index:7;
}

#in_mfield2 {
	position:absolute;
	left:50%;
	width:50%;
	height:10%;
	z-index:7;
}


.xaxis path,
.xaxis line {
    fill: none;
    stroke: black;
    shape-rendering: crispEdges;
}

.axis text {
    font-family: sans-serif;
    font-size: 11px;
}	
	
	
#referal_piechart svg{
	position:absolute;
	left:0%;
	top:0%;
	width:100%;
	height:100%;
	z-index:7;
	background-color: #CFC;
	visibility: inherit;
}

#useragent_piechart svg{
	position:absolute;
	left:0%;
	top:0%;
	width:100%;
	height:100%;
	z-index:7;
	background-color: #CFC;
	visibility: inherit;
}



#err_lev_piechart svg{
	position:absolute;
	left:0%;
	top:0%;
	width:100%;
	height:100%;
	z-index:7;
	visibility: inherit;
}


#ip_in_piechart svg{
	position:absolute;
	left:0%;
	top:0%;
	width:100%;
	height:100%;
	z-index:7;
	background-color: #CFC;
	visibility: inherit;
}



#distribution_Stat {
	position:absolute;
	left:0%;
	top:80%;
	width:100%;
	height:20%;
	z-index:8;
	text-align: center;
	background-color: #CF3;
}

#distribution_Stat1 {
	position:absolute;
	left:0%;
	top:0%;
	width:50%;
	height:100%;
	z-index:8;
	text-align: center;
	background-color: #CF3;
}



#body
{
	top: 10%;
	}
#statusbar_text{
	position:absolute;
	left:20%;
	top:83%;
	width:60%;
	height:10%;
	z-index:8;
	background-color: #6F3;
}
#distribution_ip2 {
	position:absolute;
	left:10%;
	top:80%;
	width:80%;
	height:10%;
	z-index:16;
	background-color: #F00;
}
#apDiv2 {
	position:absolute;
	left:126px;
	top:969px;
	width:102px;
	height:41px;
	z-index:8;
	background-color: #F0F;
}
#detailed_error{
	position:absolute;
	left:60%;
	top:100%;
	z-index:8;
	min-height: 30%;
	overflow:scroll;
	height: 80%;
	visibility: hidden;
	text-align: left;
	min-width: 60%;
}
#detailed_error .list_error{
	position:relative;
	left:0%;
	height:10%;
	z-index:9;
	background-color: #F69;
	max-width: 100%;
}
#detailed_error .list_error div
{
	display: inline-block;
}
.date_errorlist
{
	width: 50%;
	padding-right: 0%;
	text-align: left;
	left=10%;
	background-color: #CF0;
	left: 0%;
	}
.time_errorlist{
	text-align: right;
	left: 50%;
	background-color: #6FC;
	height: 100%;
	position: inherit;
	min-width: 50%;
}

.error_errorlist{
	position:absolute;
	width:100%;
	height:10%;
	z-index:9;
}
#apDiv8 {
	position:absolute;
	left:244px;
	top:1258px;
	width:98px;
	height:24px;
	z-index:10;
}


#error_status_click {
	position:absolute;
	left:50%;
	top:5%;
	width:40%;
	height:100%;
	z-index:9;
	background-color: #C93;
}
#apDiv3 {
	position:absolute;
	left:267px;
	top:417px;
	width:101px;
	height:35px;
	z-index:9;
}
#horizontalcentral{
	position:absolute;
	left:4px;
	top:0%;
	width:100%;
	height:10%;
	z-index:20;
	background-color: #CCC;
}




#referalpiechart {
	position:absolute;
	left:50%;
	top:25%;
	width:40%;
	height:60%;
	z-index:15;
	visibility: hidden;
}


#usragentpiechart{
	position:absolute;
	left:50%;
	top:25%;
	width:60%;
	height:60%;
	z-index:7;
	visibility: hidden;
}

</style>


<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">


<style type="text/css">
#err_lev_plot{
	position:absolute;
	left:60%;
	top:50%;
	width:45%;
	height:40%;
	z-index:16;
	background-color: #CFF;
	padding-left: 5%;
	visibility: hidden;
}
#err_lev_plot2 {
	position:absolute;
	left:60%;
	top:90%;
	width:50%;
	height:30%;
	z-index:25;
	background-color: #FF6;
	padding-left: 10%;
	visibility: hidden;
}
#combo_status {
	position:absolute;
	left:0%;
	top:60%;
	width:100%;
	height:4%;
	z-index:13;
	background-color: #CC9;
	visibility: hidden;
}
#combo_status1 {
	position:absolute;
	left:0%;
	top:30%;
	width:100%;
	height:10%;
	z-index:13;
	background-color: #CC9;
	visibility: hidden;
}
#apDiv9 {
	position:absolute;
	left:185px;
	top:477px;
	width:123px;
	height:26px;
	z-index:14;
}

#body2 {
	position:absolute;
	left:38px;
	top:60%;
	width:100%;
	height:100%;
	z-index:14;
	background-color: #FFF;
}
#combo1 {
	position:absolute;
	left:0%;
	top:0%;
	width:30%;
	height:100%;
	z-index:15;
}
#combo2 {
	position:absolute;
	left:40%;
	top:0%;
	width:30%;
	height:100%;
	z-index:15;
}
#combo_dist{
	position:absolute;
	left:10%;
	top:70%;
	width:70%;
	height:40%;
	z-index:16;
	background-color: #CF0;
	visibility: hidden;
	padding-left: 10%;
}


#combo_resp{
	position:absolute;
	left:0px;
	top:0%;
	width:95%;
	height:80%;
	z-index:16;
	background-color: #FF3;
	padding-left: 5%;
}


#combo_container{
	position:absolute;
	left:10%;
	top:20%;
	width:70%;
	height:30%;
	z-index:11;
	background-color: #FF3;
	visibility: hidden;
}
#Text_respcombo{
	position:absolute;
	left:0%;
	top:80%;
	width:90%;
	height:2px;
	z-index:16;
	background-color: #FF3;
	text-align: center;
	padding-left: 5%;
}

#combo_disttext {
	position:absolute;
	left:0px;
	top:80%;
	width:100%;
	height:20%;
	z-index:14;
	background-color: #FC6;
	text-align: center;
}

#apDiv10 {
	position:absolute;
	left:20%;
	top:60%;
	width:30%;
	height:30%;
	z-index:16;
	background-color: #6C3;
}
#errlevel_piechart{
	position:absolute;
	left:5%;
	top:50%;
	width:40%;
	height:40%;
	z-index:16;
	background-color: #CF0;
	visibility: hidden;
}
#ip_piechart {
	position:absolute;
	left:50%;
	top:75%;
	width:40%;
	height:50%;
	z-index:15;
	background-color: #FF0;
	visibility: hidden;
}
#combobox_top_referal {
	position:absolute;
	left:15%;
	top:95%;
	width:20%;
	height:10%;
	z-index:16;
	background-color: #FF0;
	visibility: hidden;
}

#combobox_top_useragent{
	position:absolute;
	left:15%;
	top:85%;
	width:20%;
	height:10%;
	z-index:16;
	background-color: #FC3;
	visibility: hidden;
}


#combobox_top_request{
	position:absolute;
	left:15%;
	top:60%;
	width:20%;
	height:10%;
	z-index:16;
	background-color: #FF0;
	visibility: hidden;
}





#table_error_report {
	position:absolute;
	left:70%;
	top:180%;
	width:40%;
	height:10%;
	z-index:16;
	background-color: #FF0;
}
#combo_ip {
	position:absolute;
	left:70%;
	top:0%;
	width:30%;
	height:100%;
	z-index:16;
	background-color: #FF0;
}
#submenubar {
	position:absolute;
	left:10%;
	top:65%;
	width:100%;
	height:10%;
	z-index:15;
	background-color: #FF0;
}
#combo_filter_referal {
	position:absolute;
	left:15%;
	top:35%;
	width:20%;
	height:10%;
	z-index:17;
	background-color: #FF0;
	visibility: hidden;
}
#apDiv11 {
	position:absolute;
	left:112px;
	top:618px;
	width:115px;
	height:2px;
	z-index:21;
}
#apDiv12 {
	position:absolute;
	left:128px;
	top:634px;
	width:63px;
	height:26px;
	z-index:22;
}
.toolTip {
	position:absolute;
	top:70%;
	width:30%;
	height:10%;
	z-index:25;
	background-color: #6F3;
	background: transparent;
}
#apDiv13 {
	left:40%;
	top:80%;
	width:70%;
	height:10%;
	z-index:24;
	background-color: #6F3;
}
#apDiv14 {
	position:absolute;
	left:64px;
	top:522px;
	width:155px;
	height:42px;
	z-index:25;
	background-color: #3C9;
}
#apDiv15 {
	position:absolute;
	left:167px;
	top:409px;
	width:172px;
	height:60px;
	z-index:26;
}
#NewtoolTip {
	position:absolute;
	top:15%;
	width:30%;
	height:10%;
	z-index:80;
	background-color: #CF0;
	left: 70%;
}
</style>


<?php include_once "project.php "?>
<div id="ip_piechart">
     <div id="ip_in_piechart">
         <svg></svg>
     </div>
</div>






<div id="table_error_report_red"></div>
<div id="body">
<h2>Apache Server monitoring</h2>


<div id="charts">
<div id="time_chart" class="chart">
            <div class="title">TIME</div>
  </div>
  
          <div id="date-chart" class="chart">
             <div class="title">Date</div>
          </div>
         <aside id="totals">
             <span id="active">-</span> of <span id="total">-</span> Total Records accessed 
      </aside>
</div>

   
   <div id="body2">
   
   
   <div id="NewtoolTip"></div>

   <div id="apDiv6"></div>

   
     <div id="horizontalcentral">
<ul id="MenuBar1" class="MenuBarHorizontal">
          
   <li><a class="MenuBarItemSubmenu" onclick="javascript
   :hideAll();
           javascript:showsdiv('combo_status');javascript:showsdiv('lists');">Server Respose/Error Tracking</a>        
          <ul>
            <li><a  onclick="javascript:hideAll();javascript:showsdiv('statusbargraph');javascript:showsdiv('status_plot');javascript:showsdiv('combo_status');javascript:showsdiv('lists');javascript:showsdiv('NewtoolTip');">ResposeCode</a></li>
    <li><a  onclick="javascript:hideAll();javascript:showsdiv('combo_container');javascript:showsdiv('combo_dist');javascript:showsdiv('combo_status');javascript:showsdiv('lists');javascript:showsdiv('NewtoolTip');">Respose Time</a></li>
    <li><a onclick="javascript:hideAll();javascript:showsdiv('errlevel_piechart');javascript:showsdiv('err_lev_plot');javascript:showsdiv('combo_status1');javascript:showsdiv('err_lev_plot2');javascript:showsdiv('lists');javascript:showsdiv('NewtoolTip');">Track Errors</a></li>
        </ul>
      </li>
            
               
               
               
               
               
             <li>
             <a onclick="javascript:hideAll();javascript:showsdiv('mean_ref');javascript:showsdiv('referalpiechart');javascript:showsdiv('combo_filter_referal');javascript:showsdiv('combobox_top_referal');">Top Referals</a>
      </li>
       
    
       
             <li><a onclick="javascript:hideAll();javascript:showsdiv('mean_req');javascript:showsdiv('combobox_top_request');javascript:showsdiv('combo_filter_referal');">Top Requests</a></li> 
            <li> 
            <a onclick="javascript:hideAll();javascript:showsdiv('mean_usr');javascript:showsdiv('usragentpiechart');javascript:showsdiv('combobox_top_useragent');javascript:showsdiv('combo_filter_referal');">Top Useragents</a> </li>
            <li><a href="javascript:hideAll();javascript:showsdiv('static');javascript:showsdiv('ip_piechart');
            javascript:showsdiv('combo_filter_referal')">IP Tracking</a></li>
       </ul>
    </div>


 


<div id="combo_status1">

<div id="combo_ip" >  
			<form>Filter  I.P.
				 <select id="combodist_ip">
 							<option>IP</option>
			  </select>
       </form>
    </div> 
 
 
  </div>




<div id="combo_status">

<div id="combo1">  <form>
  Filter ResponseCode
  <select id="combobox_status">
    <option></option>

</select>

</form></div>
 
 
 


 
<div id="combo2" >  
<form>

Filter Remote I.P.
<select id="combobox_ip">

</select>
</form>
</div> 


<script>
function combo_filter(combo)
  {
    
      var x=document.getElementById(combo).selectedIndex;
	 
	  
      var y=document.getElementById(combo).options;
      return y[x].text;
       
	
   }
</script>




</div>




 <div id = "mean_usr">
   <div id="meanfield">Top Browsers</div>
   </div>
   
   
<div id="mean_req">
        <div id="meanfield">Top Requests to filtered IP 
        
       
     </div>

</div>

   
   <div id="statusbargraph">Response Status Report
      <div id="statusbar_text">Click Bar For Detail Distribution</div>
     </div>


   <div id="static">
<div class="title"><centre> Ip distributiuon </centre></div>
         <div id="statusbar_text">Click Bar For Detail Distribution</div>
     </div>


 
   <div id="combobox_top_request"> top_request
<form>
           <select id="combo_top_request">

               <option>2</option>
     			<option>3</option>
     			<option>5</option>
      			<option>15</option>
		</select>
     </form>
     </div>




   <div id="combobox_top_useragent">top_useragent
   <form>
         <select id="combo_top_useragent">
                <option>2</option>
                 <option>3</option>
                  <option>5</option>
                 <option>15</option>
        </select>
      </form>

     </div>
     
     <div id="referalpiechart">
	  <div id="referal_piechart">  <svg> </svg></div>
     </div>
     
      <div id="mean_ref">
     <div id="meanfield">Top Referals</div>
    </div>

<div id="combobox_top_referal">top_referal
   <form>
	   <select id="combo_top_referal">
     				<option>2</option>
     				<option>3</option>
     				<option>5</option>
   				   <option>15</option>
	  </select>
	</form>

	</div>



    <div id="detailed_error">
<div class="list_error">
               <div class = "date_errorlist" > fsdfs   </div>
                <div class="time_errorlist"></div>
      </div>
     </div>

    <div id="combo_dist">
         <div id="combo_disttext">Respose Status Distribution over Time</div>
     </div>

//..


<div id="combo_container">
          <div id="combo_resp"></div>
     
      <div id="Text_respcombo">Response Time in Seconds</div>
     </div>
      
<div id="err_lev_plot">Error/Notiffy/warnings</div>

   <div id="err_lev_plot2"></div>


 <script>
      function showsdiv(bargraph)
    {
    
     document.getElementById(bargraph).style.visibility = "visible";
      }
	  
	function hideAll()
	{		                                  

      
		 document.getElementById("NewtoolTip").style.visibility = "hidden";
     	 document.getElementById("combobox_top_request").style.visibility = "hidden";
     	 document.getElementById("lists").style.visibility = "hidden";
         document.getElementById("combo_filter_referal").style.visibility = "hidden";
		 document.getElementById("combo_status").style.visibility = "hidden";
		 document.getElementById("statusbargraph").style.visibility = "hidden";
		 document.getElementById("combo_status").style.visibility = "hidden";
		 document.getElementById("combo_status1").style.visibility = "hidden";
		 document.getElementById("combobox_top_useragent").style.visibility = "hidden";
         document.getElementById("combobox_top_referal").style.visibility = "hidden";
         document.getElementById("mean_usr").style.visibility = "hidden";
		 document.getElementById("referalpiechart").style.visibility = "hidden";
	     document.getElementById("mean_ref").style.visibility = "hidden";
		 document.getElementById("usragentpiechart").style.visibility = "hidden";
         document.getElementById("static").style.visibility = "hidden";
	     document.getElementById("mean_req").style.visibility = "hidden";	
	     document.getElementById("detailed_error").style.visibility = "hidden";	  
         document.getElementById("status_plot").style.visibility = "hidden";
		 document.getElementById("ip2_plot").style.visibility = "hidden";
         document.getElementById("combo_container").style.visibility = "hidden";
         document.getElementById("combo_dist").style.visibility = "hidden";
         document.getElementById("err_lev_plot").style.visibility = "hidden";
         document.getElementById("errlevel_piechart").style.visibility = "hidden";
		document.getElementById("ip_piechart").style.visibility = "hidden";
	    document.getElementById("combo_status").style.visibility = "hidden";
        document.getElementById("err_lev_plot2").style.visibility = "hidden";

		 
 	}  
  </script>




     <div id="usragentpiechart">
            <div id="useragent_piechart"><svg></svg></div>
     </div>

    <div id="errlevel_piechart">
        <div id="err_lev_piechart">
          <svg></svg>
        </div>

</div>


<div id="combo_filter_referal">

   
			<form>Filter  I.P.
				 <select id="combo_referal_ip">
			  </select>
       </form>

  </div>


</div>





	





<div id="status_plot">
       <div id="distribution_Stat">
              <div id="distribution_Stat1"></div>
              <div id="error_status_click" onclick="javascript:showit()" style="cursor:pointer;">

<script>

  function showit() 
    {
	   document.getElementById("detailed_error").style.visibility = "visible";
		  }
		  
</script>Click on Graph for Details</div>
       </div>
</div>




 

   <div id=title_ref>
<title>Top Referals</title></div>


   <p>&nbsp;</p>
  

<div id="ip2_plot">
    <div id="distribution_ip2"></div>
  </div>
  

<div id="lists">

  <div id="rawlog_list" class="list"></div>

</div>
</div>






<script src="http://localhost/crossfilter.js"></script>
<script src="http://localhost/d3.v2.js"></script>
<script type=text/javascript src="http://localhost/nv.d3.js"></script>


<script = "text/javascript">
d3.csv("http://localhost/ddata.csv", function(alogdatas) {

  // Various formatters.
  var formatNumber = d3.format(",d"),
      formatChange = d3.format("+,d"),
      formatDate = d3.time.format("%B %d, %Y"),
      formatTime = d3.time.format("%I:%M %p");

  // A nest operator, for grouping the flight list
  var nestByDate = d3.nest()
                     .key(function(d) { return d3.time.day(d.date); });

  // A little coercion, since the CSV is untyped.
  alogdatas.forEach(function(d, i){
                    d.index = i;
                    d.date = parseDate(d.date);
                    });

  // Create the crossfilter for the relevant dimensions and groups.
  
  
  var alogdata = crossfilter(alogdatas),
           all = alogdata.groupAll(),
           date = alogdata.dimension(function(d) { return d3.time.day(d.date); }),
           dates = date.group(),
		   
		   
           hour = alogdata.dimension(function(d) { return d.date.getHours() + d.date.getMinutes() / 60; }),
           hours = hour.group(Math.floor),

           remoteip=alogdata.dimension(function(d){return d.remoteip;}),
           remoteips=remoteip.group(),
	   
	       status=alogdata.dimension(function(d){return d.status;}),
           statuss=status.group();
		   
				
				
		 ClearCombo();
	       statuss.top(Infinity).forEach(function(d,i){AddtoCombo("combobox_status",d.key,i+1);});
           remoteips.top(Infinity).forEach(function(d,i){AddtoCombo("combobox_ip",d.key,i+1);}); 
		   remoteips.top(Infinity).forEach(function(d,i){AddtoCombo("combodist_ip",d.key,i+1);});
           remoteips.top(Infinity).forEach(function(d,i){AddtoCombo("combo_referal_ip",d.key,i+1);});
  
		   
 
		   
	
	
function ClearCombo()
   {
	   console.log("clearing combo");
	   
	   var combo = document.getElementById("combobox_status").innerHTML=" ";
       var combo = document.getElementById("combobox_ip").innerHTML=" ";
	   var combo = document.getElementById("combodist_ip").innerHTML=" ";
      

        }
	
	




function AddtoCombo(comboname,Text,Value)
    {
        var opt = document.createElement("option");
        document.getElementById(comboname).options.add(opt);
        opt.text = Text;
        opt.value = Value;
               
    }				
				
				
				    
var charts = [

    barChart()
             .dimension(hour)          
             .group(hours)
             .x(d3.scale.linear()
             .domain([0,24])
             .rangeRound([0, 15*20])),
   barChart()
            .dimension(date)
            .group(dates)
            .round(d3.time.day.round)
            .x(d3.time.scale()
			 .domain([new Date(2001, 9, 1), new Date(2001, 12, 1)])
            .rangeRound([0, 10 *150])),
			
            /*.domain([new Date(2004, 0, 1), new Date(2004, 5, 1)])
            .rangeRound([0, 10*200])),
       */
 	   
	   
  ];
  


  /////////static barchart

   var svg1;
   var svg2;
   var svg_ip2;
    var svg_err_lev;
    var svg_err_lev2;
	var svg_comboresp;
    var svg_combodist;
	var svg_stat_count;
   

																								///svg declaration for All Graphs
 
      svg1=svg_selection(svg1,'#static');
	  svg2=svg_selection(svg2,'#status_plot');
      svg_ip2=svg_selection(svg_ip2,'#ip2_plot');
	  svg_err_lev=svg_selection(svg_err_lev,'#err_lev_plot');
	  svg_err_lev2=svg_selection(svg_err_lev2,'#err_lev_plot2');
	  svg_comboresp=svg_selection(svg_comboresp,'#combo_resp');
       svg_combodist=svg_selection(svg_combodist,'#combo_dist');
       svg_stat_count=svg_selection(svg_stat_count,'#statusbargraph');

    function svg_selection (svg_sel,svg_s)
	  {   
	  
	        var w = 800;
			var h = 500;
			var barPadding = 1;
			var padding=10;
			
		   			svg_sel = d3.select(svg_s)
								.append("svg")
						.attr("width", w)
						.attr("height", h);
						
		    var y_scale=d3.scale.linear()
	            .domain([0, 10])    
		        .range([0, 100]);
		
		   var x_scale=d3.scale.linear()
	           .domain([0,1000])    
		       .range([0,800]);
			   
			 var yAxis = d3.svg.axis()
                           .orient("left")
                            .scale(y_scale);
        
        // define the y axis
             var xAxis = d3.svg.axis()
                           .orient("bottom")
                           .scale(x_scale);
               
			  
 
         svg_sel.append("g")
                 .attr("class", "xaxis")  
	             .attr("transform", "translate(0," + 120 + ")")
                 .call(xAxis);
				
		   	   return svg_sel;
	   }
  
 var list_level;
  var filter_list;       
  var ip2_selector;
  var err_lev2_selector;
  var filter_resptime;
  var filter_respdate;
  var detailed_error_list;
  
 
    function rect_selection (text_sel,rect_sel,dataset,svg_sel,width,loc,chart_on,level)
	   {
		    

			rect_sel=svg_sel.selectAll("rect")
			   .data(dataset);

			rect_sel.exit().remove(); 

			   rect_sel.enter()
			   .append("rect")
			   .attr("x", function(d, i) {
			   		return i*loc;
			   })
			   .attr("y",120)
			   .attr("width", width)
			   .on("click",function(d,i){
                                         if(level==1)
										  {    
											   chart_selector=d.key;
										       ip2_selector=d.key;             
 										       err_lev2_selector=d.key; 
									           checkdiv(chart_on);
											   filter_respdate=d.key;
											 											                                                    renderAll();

											 }
										else if(level==2)
										{
											filter_respdate=d.key;                                            	 alert(d.value); 
												list_level=1;											                                                 renderAll();

											
											}	 
										else if(level==3)         //Response Time
										  {
											
											filter_resptime=d.key;
											 list_level=2;
											   renderAll();

											  }	
										else if(level==4)
										  {
										                                                                                                                              											                                             list_level=2;
                                             filter_respdate=d.key;                                           
                                              renderAll();											                        

											  }	   
										 else
										    {    
										        filter_respdate=d.key;                                            	 //alert(d.value); 
												list_level=1;											                                                 renderAll();

												 } 
												 
												       
										  })
										  
					.on("mouseover",function(d,i){
                                                       showTooltip(this,d.key,d.value,i*loc);})
					.on("mouseout",function(d,i){ hideTooltip(this)})
							  
					    .attr("style","cursor:pointer")		
						 
						
									
			            .attr("fill", function(d) {
					                     return "rgb(0, 0, " + (d.value * 10) + ")";
			                                      });
			   
	
	
	
  		text_sel=svg_sel.selectAll("text")
			   .data(dataset)
			   
			   text_sel.enter()
			   .append("text")
			   .text(function(d) {
			   		return d.key;
			      })
			   .attr("text-anchor", "middle")
			   .attr("x",function(d,i){
													    return(i*10)+10;
													 })
														
			  .attr("y",80)
			   .attr("font-family", "sans-serif")
			   .attr("font-size", "20px")
			   .attr("fill", "blue");  
			  
			  
			  text_sel.exit().remove();
			   
			    
				
				
			   return rect_sel;
			   
		    }
 
 
 

function showTooltip(div1,title,value,x)
{


var div13=document.getElementById('NewtoolTip');
div13.setAttribute('left',100);


div13.setAttribute('top',300);
document.getElementById('NewtoolTip').innerHTML='<table width="300" border="1"><tr><td>X Axis</td><td>'+title+'</td></tr><tr><td>Count</td><td>'+value+'</td></tr></table>';

}
 
 
function hideTooltip(div)
{
 
var div13=document.getElementById('NewtoolTip');
div13.innerHTML='';
}


 
 
  function checkdiv(chart_on)
			   {
				   if(chart_on==1)
			       {				   
          	         document.getElementById("ip2_plot").style.visibility = "visible";
					      				      }	
					  
					}
			   
 
//////////////////////////////////////////////
var chart_selector;
/*
var datasetb=statuss.top(Infinity).slice(0);
var click_status;
			var w = 500;
			var h = 500;
			var barPadding = 1;
			
			
			var svgbargraph = d3.select("#statusbargraph")
						.append("svg")
						.attr("width", w)
						.attr("height", h);
                     
		 var y_scale=d3.scale.linear()
	            .domain([0, 0])    
		        .range([0, 100]);
		
		   var x_scale=d3.scale.linear()
	           .domain([0,0])    
		       .range([0,500]);
			   
			 var yAxis = d3.svg.axis()
                           .orient("left")
                            .scale(y_scale);
        
        // define the y axis
             var xAxis = d3.svg.axis()
                           .orient("bottom")
                           .scale(x_scale);
               
			  
         svgbargraph.append("g")
                 .attr("class", "xaxis")  
	             .attr("transform", "translate(0," + 100 + ")")
                 .call(xAxis);
					 
					 
					 
					    
          
		   var rectbargraph=svgbargraph.selectAll("rect")
			   .data(datasetb);
			   
			   
			  svgbargraph.selectAll("text") 
			   .data(datasetb)
			   .enter()
			   .append("text")
			   .text(function(d) {
			   		return d.key;
			   })
			   .attr("text-anchor", "middle")
			   .attr("x",function(d,i){return i*80+20;})
			   .attr("font-family", "sans-serif")
			   .attr("font-size", "15px")
			   .attr("fill", "blue");	
					
	rectbargraph.exit().remove(); 
			   

     rectbargraph.enter()
	   		     .append("rect")
			     .attr("x", function(d, i) {
			   		         return i*80;
			                     })
			   .attr("y",50)
			   .attr("width", 10)
			   .attr("fill","red")
			   .on("click", function(d,i) { 
			   renderAll();
			   document.getElementById("status_plot").style.visibility = "visible";
			   alert(d.key);chart_selector=d.key; write_statuscode(d.key); })
			    .attr("style","cursor:pointer;");					  

	*/		   
	        
		   
			   
			   
 // chart elements in the DOM, bind the charts to the DOM and render them.
 
 var chart = d3.selectAll(".chart")
                .data(charts)
                .each(function(chart) { chart.on("brush", renderAll).on("brushend", renderAll); });
                                                                     // Render the initial lists.
 var list   = d3.selectAll(".list")
                .data([dataList]);

                                                                   // Render the total.
  d3.selectAll("#total")
      .text(formatNumber(alogdata.size()));

  renderAll();

                                                                  // Renders the specified chart or list.
  function render(method) {
                          d3.select(this).call(method);
                          }

                                                                 // Whenever the brush moves, re-rendering everything.
  function renderAll() {
                        chart.each(render);
                        list.each(render);
                        d3.select("#active").text(formatNumber(all.value()));
                        }

                                                                  // Like d3.time.format, but faster.
																  function parseDate(d) {
                            return new Date(2001,
                            d.substring(0, 2) - 1,
                            d.substring(2, 4),
                            d.substring(4, 6),
                            d.substring(6, 8));
                          }
						  
						  /*
												 function parseDate(d) {
                            return new Date(
							d.substring(1, 5),
                            d.substring(6, 8) - 1,
                            d.substring(9, 11),
                            d.substring(12,14),
                            d.substring(15, 17),
							d.substring(18,20)
							 );
                          }
*/
  window.filter = function(filters) {
                  filters.forEach(function(d, i) { charts[i].filter(d); });
                  renderAll();
                  };




  window.reset = function(i) {
                 charts[i].filter(null);
                 renderAll();
                 };
       


function dataList(div) {

	
	
 var avg = nestByDate.entries(date.top(Infinity));

var avgarray1=[];

div.each(function(){
		
	
     /*var date11 = d3.select(this).selectAll(".date")
            .data(avg, function(d) { return d.key; });

     var alog1 = date11.order().selectAll(".flight")
          .data(function(d) {return d.values; }, function(d) { return d.index; });


      var alogEnter1 = alog1.enter().append("div").text(function(d){avgarray1.push(d);});
	  */
	  
	  
	  
          
		avg.forEach(function(d){d.values.forEach(function(s){avgarray1.push(s)})});
		  
		  

     var cf1=crossfilter(avgarray1);                          //crossfiltering the pushed data  
	
	
	 
   	 var useragentl = cf1.dimension(function(p) { return p.user_agent; });
	 var useragent1s=useragentl.group(); 
	
	
      
	 var status_cnt=cf1.dimension(function(d){return d.status;});
 	 var status_cnts=status_cnt.group(); 
	 
      var ip=cf1.dimension(function(d){return d.remoteip;});
      var ips=ip.group();
	  
	
	
	  var status_cnt_array=[];                          //level 2 groupings  are here....
      var cf_statcount=crossfilter(avgarray1);   //grouping for filtering status count on Ip basis 
	  stat_dimen=cf_statcount.dimension(function(d){return d.remoteip;});
	  stat_dimen.filter(combo_filter("combobox_ip")).top(Infinity).forEach(function(d){status_cnt_array.push(d)});
	   
	  
	  var cf_status=crossfilter(status_cnt_array);
	  var status_count=cf_status.dimension(function(d){return d.status;});
 	  var status_counts=status_count.group();
	 
	 
	  
	  //combo_referal_ip
	  var referal_cnt_array =[];
	  var cf_referal=crossfilter(avgarray1);   //grouping for filtering status count on Ip basis 
	  referal_dimen=cf_referal.dimension(function(d){return d.remoteip;});
	  referal_dimen.filter(combo_filter("combo_referal_ip")).top(Infinity).forEach(function(d){referal_cnt_array.push(d)});
	
	  
	  var cf_referal=crossfilter(referal_cnt_array);
	  var referal = cf_referal.dimension(function(p) { return p.referal; });
	  var referals = referal.group();

	  var usragnt = cf_referal.dimension(function(p) { return p.user_agent; });
	  var usragnts = usragnt.group();

      var request = cf_referal.dimension(function(p) { return p.requests; });	
	  var requests = request.group();
       
    


  	  var cf1_errlev=crossfilter(avgarray1); 
	  var error_levelip=cf1_errlev.dimension(function(d) { return d.remoteip; });
	  error_levelip.filter(combo_filter("combodist_ip"));

	  var error_level=cf1_errlev.dimension(function(d) { return d.error_level; });
	  var error_levels=error_level.group();
		  
	    
		
      write_statuscode(1);
      write_statuscode(2);


	  var cf_stat=crossfilter(avgarray1);
	  cf_stat.groupAll();
		    
	  var stat_dimen=cf_stat.dimension(function(d){return d.status;});
	  var cf_ip2=crossfilter(avgarray1)
	  var ip2_dimen=cf_ip2.dimension(function(d){return d.remoteip;});

	
	  var cf_err_lev2=crossfilter(avgarray1)
      var err_lev2_dimen=cf_err_lev2.dimension(function(d){return d.error_level;});
//
	  
	  var stat_array=[];
	  stat_dimen.filter(combo_filter("combobox_status")).top(Infinity).forEach(function(d){stat_array.push(d);});
	   		
	  var ip2_array=[];
	  ip2_dimen.filter(ip2_selector).top(Infinity).forEach(function(d){ip2_array.push(d);});
 
      
       var err_lev2_array=[];
	   err_lev2_dimen.filter(err_lev2_selector).top(Infinity).forEach(function(d){err_lev2_array.push(d);});
 
 
       var cf_ip2=crossfilter(ip2_array);  
	   var cf_stat2=crossfilter(stat_array);  
	   var cf_err_lev2=crossfilter(err_lev2_array);  
    
			 
	   

    ////here i am 
      var status_dist=cf_stat2.dimension(function(d){return d.remoteip;});
      var stat_filt_array=[];
	  status_dist.filter(combo_filter("combobox_ip")).top(Infinity).forEach(function(d){stat_filt_array.push(d);});

     
	 
	 var cf_stat_filtered=crossfilter(stat_filt_array);
	 var status_dist=cf_stat_filtered.dimension(function(d){return d.time;});
     var status_dists=status_dist.group();

//ohh 
   
   	   var ip2_dist=cf_ip2.dimension(function(d){return d.time;});
       var ip2_dists=ip2_dist.group();	   
	   
	
	   var err_lev2_dist=cf_err_lev2.dimension(function(d){return d.time;});
       var err_lev2_dists=err_lev2_dist.group();	   
	
	
	
	
      var filter_Array1=[];
         
	  var cf_combo=crossfilter(avgarray1);
      var combo_dimstat=cf_combo.dimension(function(d){return d.status;});
      combo_dimstat.filter(combo_filter("combobox_status"));
		 
	
      var combo_dimip=cf_combo.dimension(function(d){return d.remoteip;});
	  combo_dimip.filter(combo_filter("combobox_ip")).top(Infinity).forEach(function(d){filter_Array1.push(d)});
	
	
   var list_array=[];
 
         var comboresp_cf=crossfilter(filter_Array1);
      	 var combo_response= comboresp_cf.dimension(function(p) { return Math.floor(p.Response_time/1000000) });
         var combo_responses=combo_response.group();
////////////////////////////////////////////////////	  

	     var cf_combo2=crossfilter(filter_Array1);	  
         var combo_statdist= cf_combo2.dimension(function(p) {return Math.floor(p.Response_time/1000000)
});
      
   	     combo_statdist.filter(filter_resptime);
         var combo_statdist= cf_combo2.dimension(function(p) { return p.time;});        //here
         var combo_statdists=combo_statdist.group();
		  
////////////////////////////////////////////////	  
	  
	     var cf_combo3=crossfilter(filter_Array1);	  
	     var combo_statdist3= cf_combo3.dimension(function(p) {return Math.floor(p.Response_time/1000000)
});
 
         combo_statdist3.filter(filter_resptime);
         var combo_statdist3= cf_combo3.dimension(function(p) { return p.date;});

calculate_list_array();


function calculate_list_array()
{

  switch(list_level)
   { 
       case 1:
            {
	         var combocase_cf=crossfilter(filter_Array1);
              var combo_c= combocase_cf.dimension(function(p){return p.date});
	          var combo_cs=combo_c.group();
	           combo_c.filter(filter_respdate).top(Infinity).forEach(function(d){list_array.push(d);});
                    }
		       break;
    
	   case 2:
            {
      
	      combo_statdist3.filter(filter_respdate).top(Infinity).forEach(function(d){list_array.push(d);});
	  	 	         }
    
	   default:
	      {
		    //list_array=filter_Array1.slice(0);
		    
			}

            break; 
             
        }
      }






	 
/////////////////////////////////////////////////////////////////////////	 
	 
	  var date = d3.select(this).selectAll(".date");
 
      var alog = date.order().selectAll(".flight")
                     .data(list_array);


      var alogEnter = alog.enter().append("div")
                          .attr("class", "flight");

      


alogEnter.append("div")
               .attr("class", "remoteip")
               .text(function(d) { return d.remoteip});

alogEnter.append("div")
               .attr("class", "time")
               .text(function(d) { return d.time });

alogEnter.append("div")
               .attr("class", "error_level")
               .text(function(d) { return d.error_level });


alogEnter.append("div")
               .attr("class", "error_message")
               .text(function(d) { return d.error_message });


                                                                
alog.exit().remove();
	
	
	
	
	function detailed_list()
	{	  
    alert("ohh");
	    var stat_array_list = [];

     	var cf_stats_list=crossfilter(stat_array);  
         
		var status_dist_list=cf_stats_list.dimension(function(d){return d.date;});
		

       
	 
	      var error_div=d3.select("#detailed_error").selectAll(".list_error")
                  .data(stat_array);
      				  
	       error_diventer = error_div.enter().append("div")
	                  .attr("class","list_error");
	 				  
	       error_diventer  
	                   .append("div")
	                   .attr("class","date_errorlist")
					   .text(function(d){ return (d.date1+''+d.remoteip);})
	 
	      error_diventer           
		                .append("div")
	                    .attr("class","time_errorlist")
					    .text(function(d){ return (d.error_message+'::'+d.error_level);});			   
	
				error_div.exit().remove();
	
	}
			   


  dataset1= ips.top(Infinity).slice(0);
  dataset2= status_dists.top(Infinity).sort(function(d){return d.key}).slice(0);
  dataset_err_lev= error_levels.top(Infinity).slice(0);
  dataset_ip2=ip2_dists.top(Infinity).sort(function(d){return d.key}).slice(0);
  dataset_err_lev2=err_lev2_dists.top(Infinity).sort(function(d){return d.key}).slice(0);
  dataset_comboresp=combo_responses.top(Infinity).sort(function(d){return d.key}).slice(0);
  dataset_combodist=combo_statdists.top(Infinity).sort(function(d){return d.key}).slice(0);
  dataset_stat_count= status_counts.top(Infinity).slice(0);
  status_counts.top(Infinity).forEach(function(d){console.log('this'+d.key+'->'+d.value)});
 
 
// datasetb1= status_cnts.top(Infinity).slice(0);

  
  
 var rect1;
 var rect2;
 var rect_ip2;
 var rect_err_lev;
 var rect_err_lev2;
 var rect_comboresp;
 var  rect_combodist;
 var rect_stat_count;
 
 var text_sel1;
 var text_sel2;
 var text_ip2;
 var text_err_lev;
 var text_err_lev2;
 var text_comboresp;
 var text_combodist;
 var text_stat_count;
 
  
      rect1=rect_selection(text_sel1,rect1,dataset1,svg1,20,40,1,1);
	  rect2=rect_selection(text_sel2,rect2,dataset2,svg2,10,10,0,2);
	  rect_err_lev=rect_selection(text_err_lev,rect_err_lev,dataset_err_lev,svg_err_lev,20,10,0,1);
      rect_comboresp=rect_selection(text_comboresp,rect_comboresp,dataset_comboresp,svg_comboresp,20,60,1,3);

     
	  rect_ip2=rect_selection(text_ip2,rect_ip2,dataset_ip2,svg_ip2,10,10,0,2);  
      rect_err_lev2=rect_selection(text_err_lev2,rect_err_lev2,dataset_err_lev2,svg_err_lev2,10,10,0,2);  
      rect_combodist=rect_selection(text_combodist,rect_combodist,dataset_combodist,svg_combodist,5,2,0,4);
      rect_stat_count=rect_selection(text_stat_count,rect_stat_count,dataset_stat_count,svg_stat_count,25,50,1,1);
 
var svgreferal,svgusr,svgrequest;


renderDiv('combo_top_referal');
renderDiv('combo_top_useragent');
renderDiv('combo_top_request');
renderDiv('combo_top_referal'); 
renderDiv('combobox_status');
renderDiv('combobox_ip');
renderDiv('combodist_ip');
renderDiv('combo_referal_ip');

//***




function renderDiv(combo)
{
	
   var elemToBind = document.getElementById (combo);
        elemToBind.onchange = function () { renderAll(); }
	}


		
var datareferal =referals.top(combo_filter('combo_top_referal')).slice(0);
var datauseragent=usragnts.top(combo_filter('combo_top_useragent')).slice(0);
var datarequest=requests.top(combo_filter('combo_top_request')).slice(0);



piechart(usragnts.top(5).slice(0),'#useragent_piechart svg');
piechart(referals.top(5).slice(0),'#referal_piechart svg');
piechart(error_levels.top(Infinity).slice(0),'#err_lev_piechart svg');
piechart(ips.top(5).slice(0),'#ip_in_piechart svg');



/*document.getElementById("table_error_report").innerHTML='<table width="300" border="1"><tr><td width="120">No of Errors</td><td width="120">'+eval(tab_err_report[0].value)+'</td></tr><tr><td width="120">No of Errors</td><td width="120">'+eval(tab_err_report[1].value)+'</td></tr><tr><td width="120">No of Errors</td><td width="120">'+eval(tab_err_report[2].value)+'</td></tr></table>';	
	*/


function piechart(data,svg_select)
{
	
	nv.addGraph(function() {
  var chart11 = nv.models.pieChart()
      .x(function(d) { return d.key })
      .y(function(d) { return d.value })
      .showLabels(true);

   d3.select(svg_select)
        .datum(exampleData(data.slice(0)))
        .transition().duration(1200)
        .call(chart11);

  return chart11;
});

}



function exampleData(u) {
 var values=[];
    u.forEach(function(d){values.push(d)});
         return[{key: "Cumulative Return",values:values.slice(0)}];
	     
		  }

mean_calc(datarequest,"#mean_req",svgrequest);
mean_calc(datareferal,"#mean_ref",svgreferal);
mean_calc(datauseragent,"#mean_usr",svgusr);		



		
//redrawb();

redraw2(rect2,dataset2,svg2,15,0.5*(document.getElementById('status_plot').offsetHeight/d3.max(dataset2,function(d){return d.value;}))); 
redraw2(rect_ip2,dataset_ip2,svg_ip2,15,0.5*(document.getElementById('ip2_plot').offsetHeight/d3.max(dataset_ip2,function(d){return d.value;}))
); 
redraw2(rect_err_lev,dataset_err_lev,svg_err_lev,50,0.5*(document.getElementById('err_lev_plot').offsetHeight/d3.max(dataset_err_lev,function(d){return d.value;}))
);
redraw2(rect_err_lev2,dataset_err_lev2,svg_err_lev2,15,0.5*(document.getElementById('err_lev_plot2').offsetHeight/d3.max(dataset_err_lev2,function(d){return d.value;}))
); 
redraw2(rect_comboresp,dataset_comboresp,svg_comboresp,30,0.7*(document.getElementById('combo_resp').offsetHeight/d3.max(dataset_comboresp,function(d){return d.value;}))
); 
redraw2(rect_combodist,dataset_combodist,svg_combodist,10,0.5*(document.getElementById('combo_dist').offsetHeight/d3.max(dataset_combodist,function(d){return d.value;}))
); 


redraw2(rect_stat_count,dataset_stat_count,svg_stat_count,50,0.5*(document.getElementById('statusbargraph').offsetHeight/d3.max(dataset_stat_count,function(d){return d.value;}))
);



//dataset_ip2.forEach(function(d){console.log("ip2"+d.value)})
//dataset2.forEach(function(d){console.log("da:"+d.value)})


redraw2(rect1,dataset1,svg1,50,2);
rect_exit(rect2,dataset2,svg2);
rect_exit(rect_ip2,dataset_ip2,svg_ip2);
rect_exit(rect_err_lev,dataset_err_lev,svg_err_lev);
rect_exit(rect_stat_count,dataset_stat_count,svg_stat_count);



 
});
 
 
 
 
 
 
 
function rect_exit(rect_sel,dataset,svg_sel)
 {
   rect_sel.exit().remove();
  }
  
 
 
 
 
 
 
 
  
 function redraw2(rect,dataset1,svg_sel,loc,scale_height)
                 { 
                       rect
                             .data(dataset1)
                             .transition()
                             .duration(5).delay(5) 
                             .attr("x", function(d, i)
                                        {
			   		                       return i*loc;
			                                })
							 .attr("y", function(d, i)
                                        {
			   		                      return (120-(d.value*scale_height));
			                                })				
                             .attr("height", function(d) {
			   		                          return (d.value*scale_height); 
											    });
												
								svg_sel.selectAll("text") 
			                      .data(dataset1)
			                      .transition()
			                      .text(function(d){if (loc==50){return d.key }else return d.value;})
			                      .attr("text-anchor", "middle")
			                      .attr("x",function(d,i){return i*loc+5;})
			                      .attr("y",135)
			                      .attr("font-family", "sans-serif")
			                      .attr("font-size", "12px")
			                      .attr("fill", "blue");	
								  								  				
                 }     
 
 
 
 function write_statuscode(k)
 {

switch(k)
{



case 1:
	 //document.getElementById("distribution_Stat1").innerHTML='<table width="200" height="20" border="0"><tr><td width="180" height="20">Error Distribution For</td><td width="50">'+chart_selector+'</td></tr></table>';
break;

case 2:

//document.getElementById("distribution_ip2").innerHTML='<table width="200" height="20" border="0"><tr><td width="180" height="20">IP Distribution For</td><td width="50">'+ip2_selector+'</td></tr></table>';

}

	 }
 
 







function mean_calc(data1,mean,svgappend){
	   
	    svgappend=d3.select(mean)
		          .selectAll("div")
				  .attr("id","meanfield")
	              .data(data1);

       var svg_id=svgappend
			      .enter() 
				  .append("div")
				  .attr("id","meanfield")
				  .append("text")
	              .text(function(s){return s.key+'- >'+s.value;}); 
				  
	
		
		
		svgappend.exit().remove();	 }



 function redrawb()
                 { 
                       rectbargraph
                                  .data(datasetb)
                                  .transition()
                                  .duration(200).delay(10) 
                                  .attr("y",function(d) {
			   		                          return 100-d.value/10; 
											    })
								  .attr("height", function(d) {
			   		                          return d.value/10; 
											    });
						
						
			           svgbargraph.selectAll("text") 
			                      .data(datasetb)
			                      .transition()
			                      .text(function(d){return d.key;})
			                      .attr("text-anchor", "middle")
			                      .attr("x",function(d,i){return i*80+20;})
			                      .attr("y",120)
			                      .attr("font-family", "sans-serif")
			                      .attr("font-size", "15px")
			                      .attr("fill", "blue");	
			   
                }	 

/////////////////////////////////////////////////////////////////


var alogdataByDate = nestByDate.entries(date.top(10));



    div.each(function() {
		
	
      var date = d3.select(this).selectAll(".date")
                   .data(alogdataByDate, function(d) { return d.key; });

      date.enter().append("div")
                  .attr("class", "date")
                  .append("div")
                  .attr("class", "day")
                  .text(function(d) { return formatDate(d.values[0].date); });

      date.exit().remove();
    });
	
  }



  function barChart() {
      if (!barChart.id) barChart.id = 0;

     var margin = {top: 10, right: 10, bottom: 20, left: 10},
        x,
        y = d3.scale.linear().range([100, 0]),
        id = barChart.id++,
        axis = d3.svg.axis().orient("bottom"),
        brush = d3.svg.brush(),
        brushDirty,
        dimension,
        group,
        round;

    function chart(div) {
      var width = x.range()[1],
          height = y.range()[0];

      y.domain([0,200]);  //needs rectification here 

      div.each(function() {
        var div = d3.select(this),
            g = div.select("g");

        // Create the skeletal chart.
        if (g.empty()) {
          div.select(".title").append("a")
               .attr("href", "javascript:reset(" + id + ")")
               .attr("class", "reset")
               .text("reset")
               .style("display", "none");

          g = div.append("svg")
               .attr("width", width + margin.left + margin.right)
               .attr("height", height + margin.top + margin.bottom)
            .append("g")
               .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

          g.append("clipPath")
               .attr("id", "clip-" + id)
            .append("rect")
               .attr("width", width)
               .attr("height", height);

           g.selectAll(".bar")
               .data(["background", "foreground"])
            .enter().append("path")
               .attr("class", function(d) { return d + " bar"; })
               .datum(group.all());

            g.selectAll(".foreground.bar")
              .attr("clip-path", "url(#clip-" + id + ")");

            g.append("g")
              .attr("class", "axis")
              .attr("transform", "translate(0," + height + ")")
              .call(axis);

          // Initialize the brush component with pretty resize handles.

          var gBrush = g.append("g").attr("class", "brush").call(brush);
          gBrush.selectAll("rect").attr("height", height);
          gBrush.selectAll(".resize").append("path").attr("d", resizePath);
        }

        // Only redraw the brush if set externally.
        if (brushDirty) {
          brushDirty = false;
          g.selectAll(".brush").call(brush);
          div.select(".title a").style("display", brush.empty() ? "none" : null);
          if (brush.empty()) {
            g.selectAll("#clip-" + id + " rect")
                .attr("x", 0)
                .attr("width", width);
          } else {
            var extent = brush.extent();
            g.selectAll("#clip-" + id + " rect")
                .attr("x", x(extent[0]))
                .attr("width", x(extent[1]) - x(extent[0]));
          }
        }

        g.selectAll(".bar").attr("d", barPath);
      });

      function barPath(groups) {
        var path = [],
            i = -1,
            n = groups.length,
            d;
        while (++i < n) {
          d = groups[i];
          path.push("M", x(d.key), ",", height, "V", y(d.value), "h9V", height);
        }
        return path.join("");
      }

      function resizePath(d) {
        var e = +(d == "e"),
            x = e ? 1 : -1,
			
            y = height / 3;
        return "M" + (.5 * x) + "," + y
            + "A6,6 0 0 " + e + " " + (6.5 * x) + "," + (y + 6)
            + "V" + (2 * y - 6)
            + "A6,6 0 0 " + e + " " + (.5 * x) + "," + (2 * y)
            + "Z"
            + "M" + (2.5 * x) + "," + (y + 8)
            + "V" + (2 * y - 8)
            + "M" + (4.5 * x) + "," + (y + 8)
            + "V" + (2 * y - 8);
      }
    }

    brush.on("brushstart.chart", function() {
      var div = d3.select(this.parentNode.parentNode.parentNode);
      div.select(".title a").style("display", null);
    });

    brush.on("brush.chart", function() {
      var g = d3.select(this.parentNode),
          extent = brush.extent();
      if (round) g.select(".brush")
          .call(brush.extent(extent = extent.map(round)))
        .selectAll(".resize")
          .style("display", null);
      g.select("#clip-" + id + " rect")
          .attr("x", x(extent[0]))
          .attr("width", x(extent[1]) - x(extent[0]));
      dimension.filterRange(extent);
    });

    brush.on("brushend.chart", function() {
      if (brush.empty()) {
        var div = d3.select(this.parentNode.parentNode.parentNode);
        div.select(".title a").style("display", "none");
        div.select("#clip-" + id + " rect").attr("x", null).attr("width", "100%");
        dimension.filterAll();
      }
    });

    chart.margin = function(_) {
      if (!arguments.length) return margin;
      margin = _;
      return chart;
    };

    chart.x = function(_) {
      if (!arguments.length) return x;
      x = _;
      axis.scale(x);
      brush.x(x);
      return chart;
    };

    chart.y = function(_) {
      if (!arguments.length) return y;
      y = _;
      return chart;
    };

    chart.dimension = function(_) {
      if (!arguments.length) return dimension;
      dimension = _;
      return chart;
    };

    chart.filter = function(_) {
      if (_) {
        brush.extent(_);
        dimension.filterRange(_);
      } else {
        brush.clear();
        dimension.filterAll();
      }
      brushDirty = true;
      return chart;
    };

    chart.group = function(_) {
      if (!arguments.length) return group;
      group = _;
      return chart;
    };

    chart.round = function(_) {
      if (!arguments.length) return round;
      round = _;
      return chart;
     };

      return d3.rebind(chart, brush, "on");
    }
 });
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar3 = new Spry.Widget.MenuBar("MenuBar3", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar4 = new Spry.Widget.MenuBar("MenuBar4", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
 




