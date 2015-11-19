<!DOCTYPE html>
<meta charset="utf-8">
<title>Apache Web Server Monitoring</title>

<style>
#body {
	font-family: "Helvetica Neue";
	margin: 40px auto;
	width: 100%;
	min-height: 100%;
	top: 0%;
	left: 0%;
	background-color: #CF9;
	height: 120%;
	text-align: center;
}

#cputitle
{
	background-color: #CFC;
	text-align: center;
	font-size: 24px;
	border-color: #000;
	}



footer {
  padding: 2em 0 1em 0;
  font-size: 12px;
}

h1 {
  font-size: 20px;
  margin-top: .3em;
  margin-bottom: 0;
}

h1 + h2 {
	margin-top: 0;
	background-color: #CF0;
}

rect1
{

fill:red;
 }


h2 {
  font-weight: 400;
  font-size: 28px;
}

h1, h2 {
  font-family: "Yanone Kaffeesatz";
  text-rendering: optimizeLegibility;
}

#body > p {
  line-height: 1.5em;
  width: 640px;
  text-rendering: optimizeLegibility;
}

#charts {
	padding: 0 px;
	width: 100%;
	padding-top: 0%;
	top: 0%;
	left: 0%;
}

.chart {
  display: inline-block;
  height: 151px;
  margin-bottom: 20px;
}

.reset {
  padding-left: 1em;
  font-size: smaller;
  color: #ccc;
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

#Time-chart {
	width: 50%;
}

#date-chart {
	width: 50%;
	left: 50%;
	top: 10%;
}

#distance-chart {
  width: 420px;
}

#date-chart {
	width: 40%;
}


#rawlog_list {
	min-height: 1024px;
	overflow: visible;
	left: 10%;
	height: 50%;
}

#rawlog_list .date,
#rawlog_list .day {
  margin-bottom: .4em;
}

#rawlog_list .flight {
  line-height: 1.5em;
  background: #eee;
  width: 100%;
  margin-bottom: 1px;
}

#rawlog_list .time {
  color: #999;
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


#rawlog_list .flight div {
  display: inline-block;
  width: 100px;
}

#rawlog_list div.distance,
#rawlog_list div.delay 
#rawlog_list div.delay2 
#rawlog_list div.delay3 
{
  width: 20%;
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

#cpu_load
{
	width: 70%;
	height:30%;
	background-color:#FF6;
	left: 10%;
	top: 85%;
	border: 5px solid;
	border-color: #F00;
	position: absolute;
	visibility: hidden;
 }

.mean
{
	position: absolute;
	left: 700px;
	width: 40%;
	height:300px;
	background-color:blue;
	margin-top: 10px;
	text-align: center;
	text-decoration: none;
	color: #000;
	font-size: 18px;
	top: 120%;
	visibility: hidden;
 }
#idle {
	position:absolute;
	left:10%;
	top:0%;
	width:100%;
	height:100%;
	z-index:0;
	border: 5px solid;
	border-color: #F00;
	padding-left: 0px;
	background-color: #FF9;
}
#busy {
	position:absolute;
	left:10%;
	top:0%;
	width:100%;
	height:100%;
	z-index:2;
	background-color : transparent;
	border: 5px solid;
	border-color: #F00;
}
#scoreboard {
	position:absolute;
	left:25%;
	top:80%;
	width:60%;
	height:40%;
	z-index:2;
	background-color: #FF3;
	text-align: center;
	visibility: hidden;
}
#txt-scoreboard {
	position:absolute;
	left:0%;
	top:4px;
	width:25%;
	height:80%;
	z-index:3;
	background-color: #FF3;
	padding-top: 35px;
}
#txt_scoreboard {
	position:static;
	width:100%;
	height:10%;
	z-index:4;
	background-color: #0FF;
	border-bottom-color: #F00;
	border: 10;
	overflow: visible;
	border: 1px solid;
}
#serv_status {
	position:absolute;
	left:0%;
	top:10%;
	width:100%;
	height:25%;
	z-index:4;
	background-color: #6F6;
}
#downtime_graph svg {
	position:absolute;
	left:1px;
	top:83px;
	width:100%;
	height:80%;
	z-index:4;
	background-color: #3F0;
}
#bytes_persec {
	position:absolute;
	left:10%;
	top:85%;
	width:60%;
	height:40%;
	z-index:10;
	visibility: hidden;
	background-color: #FF3;
}


#req_persec {
	position:absolute;
	left:10%;
	top:85%;
	width:60%;
	height:40%;
	z-index:10;
	visibility: hidden;
	background-color: #FCC;
}

#count_downtime{
	position:absolute;
	left:0px;
	width:100%;
	height:50%;
	z-index:6;
	background-color: #9F9;
}
#apDiv1 {
	position:absolute;
	left:0%;
	top:70%;
	width:60%;
	z-index:6;
}
#colorboxgreen {
	position:absolute;
	left:70%;
	top:80%;
	width:5%;
	height:10%;
	z-index:6;
	background-color: #6F0;
}
#colorboxblue {
	position:absolute;
	left:5%;
	top:80%;
	width:5%;
	height:10%;
	z-index:7;
	background-color: #00C;
}
#busytext {
	position:absolute;
	left:15%;
	top:80%;
	width:auto;
	height:10%;
	z-index:6;
}


#idletext {
	position:absolute;
	left:80%;
	top:80%;
	width:auto;
	height:10%;
	z-index:6;
}



#list_container {
	position:absolute;
	left:10%;
	top:140%;
	width:80%;
	z-index:15;
	min-height:0%;
	background-color: #FFC;
	overflow: scroll;
	height: 30%;
}
#chart_container{
	position:absolute;
	left:0%;
	top:30%;
	width:100%;
	height:50%;
	z-index:7;
}
#MenuBar_container{
	position:absolute;
	left:0%;
	top:60%;
	width:100%;
	height:10%;
	z-index:8;
	background-color: #999;
}


#Downtime_uptime{
	position:absolute;
	left:30%;
	top:70%;
	width:60%;
	height:30%;
	z-index:15;
	visibility: hidden;
}

#bandwidth {
	position:absolute;
	left:10%;
	top:85%;
	width:100%;
	height:40%;
	z-index:10;
	visibility: hidden;
}




#idlebusy_container {
	position:absolute;
	left:0%;
	top:80%;
	width:60%;
	height:35%;
	z-index:11;
	visibility: hidden;
	padding-left: 20%;
}
</style>




<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<style type="text/css">
#cpu_load_table{
	position:absolute;
	left:90%;
	top:70%;
	width:20%;
	height:30%;
	z-index:12;
	background-color: #FF3;
}


#reqpersec_table{
	position:absolute;
	left:90%;
	top:40%;
	width:20%;
	height:30%;
	z-index:12;
	background-color: #FF3;
}

#bytespersec_table {
	position:absolute;
	left:90%;
	top:90%;
	width:20%;
	height:30%;
	z-index:12;
	background-color: #FF3;
}
#list_header{
	position:absolute;
	left:0%;
	top:0%;
	width:100%;
	height:10%;
	z-index:16;
	background-color: #9F0;
}
#apDiv2 {
	position:absolute;
	left:26px;
	top:527px;
	width:52px;
	height:15px;
	z-index:16;
}
#score_board_piechart svg{
	position:absolute;
	left:0%;
	top:0%;
	width:100%;
	height:100%;
	z-index:0;
	visibility: inherit;
}

#scoreboard_piechart {
	position:absolute;
	left:60%;
	top:180%;
	width:30%;
	height:30%;
	z-index:16;
	background-color: #FF0;
}
#apDiv3 {
	position:absolute;
	left:10%;
	top:130%;
	width:80%;
	height:10%;
	z-index:17;
	background-color: #FF0;
}
</style>








<?php  include_once "project.php"?>








<div id="MenuBar_container">
<ul id="MenuBar2" class="MenuBarHorizontal">
      <li><a  onclick="javascript:hideAll();javascript:showdiv('Downtime_uptime');">Server UpTime</a></li>

      <li><a onclick="javascript:hideAll();javascript:showdiv('cpu_load');">Server Load</a></li>
      <li><a onclick="javascript:showdiv('idlebusy_container');">Busy/Idle </a></li>
      
      

      
   <li><a class="MenuBarItemSubmenu">Bandwidth Stats</a>
    <ul>
      <li><a onclick="javascript:hideAll();javascript:showdiv('bytes_persec');">RequestsPerSecond </a></li>
      <li><a onclick="javascript:hideAll();javascript:showdiv('req_persec');">BytesPerSecond</a></li>
      <li><a href="#">BytesPerRequest</a></li>
    </ul>
  </li>
      
      
      
    
      
      
      
      
      <li><a onclick="javascript:hideAll();javascript:showdiv('scoreboard');"> Scoreboard </a></li>

      
  </ul>
</div>




<div id="req_persec">Requests Per Sec</div>
  <div id="bytes_persec">Bytes PerSecond</div>
<div id="apDiv3"></div>
<div id="idlebusy_container">
<div id="idle"> 

 <div id="busytext">Busy Workers </div>
      <div id="idletext">idle Workers </div>
        <div id="colorboxgreen"></div> 
    <div id="colorboxblue"></div>
 </div>
    <div id="busy">
  </div>

</div>

<div id="reqpersec_table"></div>

<div id="cpu_load_table"></div>
<div id="bytespersec_table"></div>
<script>
function showdiv(diventry)
{
document.getElementById(diventry).style.visibility = "visible";

}



function hideAll()
{

document.getElementById("Downtime_uptime").style.visibility = "hidden";
document.getElementById("cpu_load").style.visibility = "hidden";
document.getElementById("idlebusy_container").style.visibility = "hidden";

document.getElementById("scoreboard").style.visibility = "hidden";

document.getElementById("bytes_persec").style.visibility = "hidden";
document.getElementById("req_persec").style.visibility = "hidden";

}
</script>






<div id="body">

  <h2></h2>

<div id="chart_container">

<div id="charts">
  <div id="Time-chart" class="chart">
    <div class="title">Time</div>
  </div>
 <div id="date-chart" class="chart">
    <div class="title">Date</div>
  </div>
  

</div>

</div>
<div id="Means" class="mean">
  
  
  <div class="cputitle">CPU titleStats</div>


<table id="tabcpustats">
<tr>
    <td>Average Req persec</td>
    <td>row 1, cell 2</td>
</tr>
<tr>
    <td>Average Bytes persec</td>
     <td>row 2, cell 2</td>
</tr>
<tr>
    <td>Average Bytes persec</td>
     <td>row 2, cell 2</td>
</tr>


</table> 
</div>

 <div id="Downtime_uptime">

<div id="downtime_graph">Server Avg. DownTime <svg> </svg>
   </div>
     <div id="serv_status">Server Present Status On/Off</div>
</div>
 








<div id="list_container">


<div id="lists">
  <div id="rawlog_list" class="list"></div>
</div>
</div>



<div id="scoreboard">

    <div id="txt-scoreboard">
    
    <div id="txt_scoreboard">Waiting for Connection</div>
    <div id="txt_scoreboard">"S" Starting up</div> 
    <div id="txt_scoreboard"> "R" Reading Request</div>
    <div id="txt_scoreboard">"K" Keepalive (read)</div>
    <div id="txt_scoreboard">"D" DNS Lookup</div>
    <div id="txt_scoreboard">"C" Closing connection</div>
    <div id="txt_scoreboard">"L" Logging</div>
    <div id="txt_scoreboard">"G" Gracefully finishing</div>
    </div>


</div>




<div id="scoreboard_piechart">
<div id="score_board_piechart">
            <svg></svg>
  </div>

</div>






<div id="cpu_load">
  <div class="title"><centre>CPU Load Statistics </centre></div>
  
  
</div>


</div>



<script src="http://localhost/crossfilter.js"></script>
<script src="http://localhost/d3.v2.js"></script>
<script type=text/javascript src="http://localhost/nv.d3.js"></script>


<script>
d3.csv("http://localhost/moddata1.csv", function(serstats) {

  // Various formatters
  
  var formatNumber = d3.format(",d"),
      formatChange = d3.format("+,d"),
      formatDate = d3.time.format("%B %d, %Y"),
      formatTime = d3.time.format("%I:%M %p");


 // A nest operator, for grouping the flight list.
  var nestByDate = d3.nest()
                     .key(function(d) { return d.date; });


  // A little coercion, since the CSV is untyped.
  
  serstats.forEach(function(d, i) 
    {
        d.index = i;
        d.date = parseDate(d.date);
    
    });

 // Create the crossfilter for the relevant dimensions and groups.

  var serstat = crossfilter(serstats),
          all = serstat.groupAll();
      


      date = serstat.dimension(function(d) { return d3.time.day(d.date); }),
      dates= date.group(),

      hour = serstat.dimension(function(d) { return d.date.getHours() +      d.date.getMinutes() / 60; }),
      hours = hour.group(Math.floor);
 

     

  var charts = [

       barChart()
              .dimension(hour)
              .group(hours)
      .x(d3.scale.linear()
                      .domain([0, 24])
                      .rangeRound([0, 10 * 24])),

    barChart()
             .dimension(date)
             .group(dates)
             .round(d3.time.day.round)
             .x(d3.time.scale()
                             .domain([new Date(2001, 9, 1), new Date(2001, 11, 1)])
                             .rangeRound([0, 10 * 90]))
 
  ];

	
 var svg1,svg2,svg3,svg_scoreboard,svg_bytespersec,svg_reqpersec;			

 
 
          svg1=svg_selection(svg1,'#cpu_load');
	      svg2=svg_selection(svg2,'#busy');
	      svg3=svg_selection(svg3,'#idle');
          svg_scoreboard=svg_selection(svg_scoreboard,"#scoreboard");
		  svg_bytespersec=svg_selection(svg_bytespersec,"#bytes_persec");
          svg_reqpersec=svg_selection(svg_reqpersec,"#req_persec");
 

    function svg_selection (svg_sel,svg_s)
	    {   
	  
	        var w = 800;
			var h = 400;
			//
			
		    svg_sel = d3.select(svg_s)
						.append("svg")
						.attr("width", w)
						.attr("height", h);
						
			     var y_scale=d3.scale.linear()
	            .domain([0, 10])    
		        .range([0, 100]);
		
		   var x_scale=d3.scale.linear()
	           .domain([0,1000])    
		       .range([0,1000]);
			   
			 var yAxis = d3.svg.axis()
                           .orient("left")
                            .scale(y_scale);
        
        // define the y axis
             var xAxis = d3.svg.axis()
                           .orient("bottom")
                           .scale(x_scale);
               
			  
 
         svg_sel.append("g")
                 .attr("class", "xaxis")  
	             .attr("transform", "translate(0," + 150 + ")")
                 .call(xAxis);
				  
			
						
						
						
	
	  	     return svg_sel;
	
	     }
 
 
         
var filter_cpu_load; 
 
 
    function rect_selection (text_sel,rect_sel,dataset,svg_sel,width,value)
	   {
		    

		  rect_sel=svg_sel.selectAll("rect")
			                .data(dataset);
			 
			 
	      rect_sel.enter()
			     .append("rect")
			      .attr("x", function(d, i)
                                        {if (width >= 15)
			   		                          return (i*width)+(width);
										   else 
										      {return (i*15)+(15);}
			                                })
		         .attr("y",150)
			     .attr("width", 10)
			     .attr("fill", function(d) {
				                       return "rgb(0, 0, " + (d.value * 10) + ")";
			                               })
                 .on("click",function(d,i){
					 if (value==1)
					       {
							 filter_cpu_load=d.key; 
							 renderAll();
							   }
							   
					 alert(d.key);
					                     })
			   .attr("style","cursor:pointer;");					  
						 	
										   
			    						   
										   
			   
	

			   
     		text_sel=svg_sel.selectAll("text")
			                .data(dataset)
			   
		   text_sel.enter()
			       .append("text")
			       .text(function(d) {
			   		                 return  d3.round(d.value,3);
			                         })
			       .attr("text-anchor", "middle")
			       .attr("x",function(d,i){
					   if (width > 15)
			   		      return (i*width)+(width)+15;
						else {
							return (i*15)+(15)+15;
                                 }
					   })
			       .attr("y",170)
			       .attr("font-family", "sans-serif")
			       .attr("font-size", "10px")
			       .attr("fill", "blue");  
			  
			  
			      text_sel.exit().remove();
       return rect_sel;
			   
		    }
	


 // Given our array of charts, which we assume are in the same order as the
  // .chart elements in the DOM, bind the charts to the DOM and render them.
  // We also listen to the chart's brush events to update the display.



  var chart = d3.selectAll(".chart")
                .data(charts)
                .each(function(chart) { 
				                      chart.on("brush", renderAll).on("brushend", renderAll); 
									  });

  // Render the initial lists.
  var list =  d3.selectAll(".list")
                .data([serstatList]);


  // Render the total.
               d3.selectAll("#total")
                 .text(formatNumber(serstat.size()));

         renderAll();


  // Renders the specified chart or list.
  function render(method) {
                           d3.select(this).call(method);
                           }


  // Whenever the brush moves, re-rendering everything.
  function renderAll() {
                      chart.each(render);
                      list.each(render);
                      d3.select("#active")
					  .text(formatNumber(all.value()));
                        }

  // Like d3.time.format, but faster.
  function parseDate(d) {
                         return new Date(2001,
                                          d.substring(0, 2) - 1,
                                          d.substring(2, 4),
                                          d.substring(4, 6),
                                          d.substring(6, 8));
                         }
 
    window.filter = function(filters) {
                                     filters.forEach(function(d, i) { charts[i].filter(d); 
									                 });
    renderAll();
  };

  window.reset = function(i) {
                 charts[i].filter(null);
                 renderAll();
  };

 
function serstatList(div) {
	
var  avgarray= nestByDate.entries(date.top(Infinity));

var cpu_load_array=[]; var busy_array=[]; var idle_array=[];var bytes_persec_array=[];var req_persec_array=[];



     
var arr_cpu_load=[];
var arr_idle=[];
var arr_busy=[];
var arr_bytes_persec=[];
var arr_bytes_persec=[];
var arr_req_persec=[];



     var cf1=crossfilter(avgarray);        //crossfiltering the pushed data  
	
	 var date12 = cf1.dimension(function(p) { return p.date; });
	 var dates = date12.group();
		date12.top(Infinity).forEach(   
		                                 function(d,i){
	     arr_cpu_load.push({key:d.key,value:d3.round(d3.mean(d.values,function(s){return s.cpu_load}),3)});
										 });
			
		date12.top(Infinity).forEach(   
		                                 function(d,i){
	     arr_idle.push({key:d.key,value:d3.round(d3.mean(d.values,function(s){return s.idle}),3)});
		 

										 });
										 
										 
		date12.top(Infinity).forEach(   
		                                 function(d,i){
		 		arr_busy.push({key:d.key,value:d3.round(d3.mean(d.values,function(s){return s.busy}),3)});


										 });	
											 
		date12.top(Infinity).forEach(   
		                                 function(d,i){
	arr_bytes_persec.push({key:d.key,value:d3.round(d3.mean(d.values,function(s){return  s.bytespersec}),3)});


										 });								 							 
										 
										 
										 
		date12.top(Infinity).forEach(   
		                                 function(d,i){

	    arr_req_persec.push({key:d.key,value:d3.round(d3.mean(d.values,function(s){return s.reqpersec}),3)});								 

										 });								 							 
										 								 
										 
		
				
		
		
var cf_list=crossfilter(avgarray);        //crossfiltering the pushed data  
var date_list = cf_list.dimension(function(p) { return p.key; });		
date_list.filter(filter_cpu_load);

									   


									   
avgarray.forEach(function(d){ 
                                  cpu_load_array.push(d3.mean(d.values,function(s){return s.cpu_load;}));
	                              idle_array.push(d3.mean(d.values,function(s){return s.idle;}));
								  busy_array.push(d3.mean(d.values,function(s){return s.busy;}));
								  bytes_persec_array.push(d3.mean(d.values,function(s){return s.bytespersec;}));
								  req_persec_array.push(d3.mean(d.values,function(s){return s.reqpersec;})); 
					         });
							 

;

							 
						 
  	
document.getElementById("cpu_load_table").innerHTML='<table width="300" border="1"><tr><td width="120">MaX CpuLoad</td><td width="120">'+eval(d3.round(d3.max(cpu_load_array),4))+'</td></tr><tr><td width="120">Min CpuLoad</td><td width="120">'+eval(d3.round(d3.min(cpu_load_array),4))+'</td></tr><tr><td width="120">Average CpuLoad</td><td width="120">'+eval(d3.round(d3.mean(cpu_load_array),4))+'</td></tr></table>';	
	
	
	  	
document.getElementById("bytespersec_table").innerHTML='<table width="300" border="1"><tr><td width="120">MaX BytesPerSec</td><td width="120">'+eval(d3.round(d3.max(bytes_persec_array),4))+'</td></tr><tr><td width="120">Min BytesPerSec</td><td width="120">'+eval(d3.round(d3.min(bytes_persec_array),4))+'</td></tr><tr><td width="120">Average BytesPerSec</td><td width="120">'+eval(d3.round(d3.mean(bytes_persec_array),4))+'</td></tr></table>';	
	
	
	
		  	
document.getElementById("reqpersec_table").innerHTML='<table width="300" border="1"><tr><td width="120">MaX RequestsPerSec</td><td width="120">'+eval(d3.round(d3.max(req_persec_array),4))+'</td></tr><tr><td width="120">Min RequestsPerSec </td><td width="120">'+eval(d3.round(d3.min(req_persec_array),4))+'</td></tr><tr><td width="120">Average RequestsPerSec</td><td width="120">'+eval(d3.round(d3.mean(req_persec_array),4))+'</td></tr></table>';	
	
	
	
 var data_w=[],data_dash=[],data_g=[],data_r=[],data_k=[],data_d=[],data_c=[],data_l=[],data_i=[];
 
 
 
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_w.push(s.w); return s.w;});});
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_dash.push(s.dash); return s.dash;});});    
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_g.push(s.g); return s.g;});});
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_r.push(s.r); return s.r;});});
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_k.push(s.k); return s.k;});});
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_d.push(s.d); return s.d;});});
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_c.push(s.c); return s.c;});});
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_l.push(s.l); return s.l;});});
  d3.sum(avgarray,function(d){  d.values.forEach( function(s){data_i.push(s.i); return s.i;});});


var scoreboard_array=[];

	scoreboard_array.push({key:'w',value:checkNaN(d3.sum(data_w))});
	scoreboard_array.push({key:'l',value:checkNaN(d3.sum(data_l))});
	scoreboard_array.push({key:'_',value:checkNaN(d3.sum(data_dash))});
	scoreboard_array.push({key:'g',value:checkNaN(d3.sum(data_g))});
	scoreboard_array.push({key:'k',value:checkNaN(d3.sum(data_k))});
	scoreboard_array.push({key:'d',value:checkNaN(d3.sum(data_d))});
	scoreboard_array.push({key:'c',value:checkNaN(d3.sum(data_c))});
	scoreboard_array.push({key:'i',value:checkNaN(d3.sum(data_i))});

	function checkNaN(value)
	   {  
	      if (isNaN(value))
	                 return 0;
		   else return d3.round(value);
		}
//piechart(scoreboard_array.slice(0),'#score_board_piechart svg');
	
	
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
         return[{key: "Cumulative Return",values:u.slice(0)}];
	  	  }	
	
	
	
  var scoreboard=[];
  
                scoreboard.push(d3.mean(data_w),d3.mean(data_dash),d3.mean(data_g),d3.mean(data_r),d3.mean(data_k),d3. mean(data_d),d3.mean(data_c),  d3.mean(data_l),d3.mean(data_i));
   
   
   var downtime=[];
 
 
        avgarray.forEach(function(d){d.values.forEach(function(s){if(s.presentstatus=="0"){downtime.push(s.Downtime)}})})

   

document.getElementById("serv_status").innerHTML='<table width="200" border="1"><tr><td width="120">No of Downtimes</td><td width="64">'+eval(downtime.length)+'</td></tr><tr><td>Total Downtimes</td><td>'+eval(d3.sum(downtime))+'sec'+'</td></tr></table>';

var i=0;
var down_data=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

  avgarray.forEach(function(d){d.values.forEach(function(s){var a=s.Downtime;down_data.push({y:10-(a/10),x:i=i+10+(a/10)})})});
  

//console.log('count'+down_data);


function downtime_data() {
	return   [
             {
               values: down_data,
               key: 'Downtime',
       
              }
     
               ];
           }

var avgarray=[];

  


  nv.addGraph(function(avgarray) {  
  
  var chart = nv.models.lineChart();
  
 chart.xAxis
        .axisLabel('Time')
        .tickFormat(d3.format(',r'));
  
    chart.yAxis
        .axisLabel('Downtime(sec)');
		

   var sel=d3.select('#downtime_graph svg')
       .datum(downtime_data)
       .transition().duration(0)
           .call(chart);
     
   nv.utils.windowResize(function() { d3.select('#downtime_graph svg').call(chart) });
 
  return chart;
 });



      




//var serstatsByD1=nestByDate.entries(date.top(10));

var serstatsByD1=[];

//date_list.top(Infinity).forEach(function(d){d.values.forEach(function(s){serstatsByD1.push(s)})});
serstatsByD1=date_list.top(Infinity).slice(0);



div.each(function(){
	
	
 var datea = d3.select(this).selectAll(".date")
                                        .data(serstatsByD1, function(d) { return d.key; });

             datea.enter().append("div")
                          .attr("class", "date")
                          .append("div")
                          .attr("class", "day");

            datea.exit().remove();

      var stat = datea.order().selectAll(".flight")
                              .data(function(d) { return d.values; }, function(d) { return d.index; });

      var statEnter = stat.enter().append("div")
                          .attr("class", "flight");

      statEnter.append("div")
               .attr("class", "time")
               .text(function(d) { return formatTime(d.date); });

      statEnter.append("div")
               .attr("class", "origin")
               .text(function(d) { return d.remoteip; });

      statEnter.append("div")
               .attr("class", "destination")
               .text(function(d) { return d.total_access; });

      statEnter.append("div")
               .attr("class", "distance")
               .text(function(d) {return d.cpu_load; });

     statEnter.append("div")
              .attr("class", "delay")
              .text(function(d) { return d.reqpersec ; });
			  
     statEnter.append("div")
              .attr("class", "delay1")
              .text(function(d) { return d.busy ; });
			  
     statEnter.append("div")
              .attr("class", "delay2")
              .text(function(d) { return d.idle ; });		  

         stat.exit().remove();

         stat.order();
	  

  
 var text_sel1;
 var text_sel2;
 var text_sel3;
 var text_sel4;
 var text_sel5
 var rect2;
 var rect1;
 var rect_scoreboard;
 var rect_bytespersec;
 var rect_reqpersec; 
//Rect Selection and Div appendinf




       rect1=rect_selection(text_sel1,rect1,arr_cpu_load.slice(0),svg1,(document.getElementById('cpu_load').offsetWidth/cpu_load_array.length),1);
      
	   rect2=rect_selection(text_sel2,rect2,arr_busy.slice(0),svg2,10,(document.getElementById('idlebusy_container').offsetWidth/busy_array.length),0);     
       
	   rect3=rect_selection(text_sel2,rect2,arr_idle.slice(0),svg3,10,(document.getElementById('idlebusy_container').offsetWidth/idle_array.length),0);
	   
	   
	   
     // rect_scoreboard=rect_selection(text_sel2,rect_scoreboard,scoreboard.slice(0),svg_scoreboard,10,0);
	   
       
	  rect_bytespersec=rect_selection(text_sel4,rect_bytespersec,arr_bytes_persec.slice(0),svg_bytespersec,(document.getElementById('bytes_persec').offsetWidth/bytes_persec_array.length),0);
	   
	 rect_reqpersec=rect_selection(text_sel5,rect_reqpersec,arr_req_persec.slice(0),svg_reqpersec,(document.getElementById('req_persec').offsetWidth/req_persec_array.length),0);

	   
//redraw function
        redraw2(rect1,arr_cpu_load.slice(0),svg1,0.4*(document.getElementById('cpu_load').offsetHeight/d3.max(cpu_load_array)),0,"red",(document.getElementById('cpu_load').offsetWidth/cpu_load_array.length));
  
       redraw2(rect2,arr_busy.slice(0),svg2,0.4*(document.getElementById('idlebusy_container').offsetHeight/d3.max(idle_array)),0,"red",(document.getElementById('idlebusy_container').offsetWidth/busy_array.length)); 
		
    
	    redraw2(rect3,arr_idle.slice(0),svg3,0.4*(document.getElementById('idlebusy_container').offsetHeight/d3.max(idle_array)),5,"green",(document.getElementById('idlebusy_container').offsetWidth/idle_array.length));
		
        
		redraw2(rect_bytespersec,arr_bytes_persec.slice(0),svg_bytespersec,0.08,0,"red",(document.getElementById('bytes_persec').offsetWidth/bytes_persec_array.length));
		
      
	    redraw2(rect_reqpersec,arr_req_persec.slice(0),svg_reqpersec,30,0,"blue",(document.getElementById('req_persec').offsetWidth/req_persec_array.length));

//exit logic
        rect_exit(rect1,arr_cpu_load.slice(0),svg1);
        rect_exit(rect2,arr_busy.slice(0),svg2);
        rect_exit(rect3,arr_idle.slice(0),svg3);
        rect_exit(rect_bytespersec,arr_bytes_persec.slice(0),svg_bytespersec);
        rect_exit(rect_reqpersec,arr_req_persec.slice(0),svg_reqpersec);

        //redrawwidth(scoreboard.slice(0),'red',rect_scoreboard,80,20,svg_scoreboard,2) 

});



  }
  
  
  function rect_exit(rect_sel,dataset,svg_sel)
    {
           rect_sel.exit().remove();
	 }
 
function redraw2(rect,dataset1,svg_sel,scale,pad,color,width)
                 { 
                       rect
                             .data(dataset1)
                             .transition()
                             .duration(5)
                             .attr("x", function(d, i)
                                        {  
											if (width > 15)
			   		                       return (i*width)+(width)+pad;
										   else 
										   {
										     return (i*15)+(15)+pad;}
			                                })
							 .attr("y", function(d, i)
							                    {  if(isNaN(d.value))
							                           return 0;
							                       else 
                                                       return 150-(d.value*scale);}
							                         )	
							  .attr("fill",color)
							 						
                             .attr("height", function(d) {
								                          if(isNaN(d.value))
											                        return 0;
											              else 
			   		                                               return d.value*scale; 
											              });
												
												
												
								svg_sel.selectAll("text") 
			                            .data(dataset1)
			                            .transition()
			                            .text(function(d){return d3.round(d.value,2);})
			                            .attr("text-anchor", "middle")
			                            .attr("x",function(d,i){
										if (width >15)
			   		                       return (i*width)+(width);
										   else{return (i*15)+(15);} 
										})
			                            .attr("y",170)
			                            .attr("font-family", "sans-serif")
			                            .attr("font-size", "12px")
			                            .attr("fill", color);					
							
							
												

                    }     
 


	function redrawwidth(dataset1,color,rect,hgt,p,svg,wdth)
                    { 
                         rect
                                .data(dataset1)
						        .transition()
                                .duration(100).delay(10) 
                                .attr("y", function(d, i)
                                                         {
			              		                         return (i*30)+10*p-150;
			                                              })
							     .attr("x",200)
                                 .attr("width",function(d) {
								                            if(isNaN(d))
								                                         return 0;
						                                    else
			   		                                                     return d*hgt; })
					             .attr("height",5*wdth)

                                 .attr("fill",color);
							  
  
	               		 svg.selectAll("text") 
			                .data(dataset1)
			                .transition()
			   
			   
			                .text(function(d){ if(isNaN(d))return 0; else  return d3.round(d,3);})
			                .attr("text-anchor", "middle")
			                .attr("y",function(d,i){return (i*30)+10*p-140;})
			                .attr("x",150)
			                .attr("font-family", "sans-serif")
			                .attr("font-size", "15px")
			                .attr("fill", "blue");		 
							 
		       rect.exit().remove();                  
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

      y.domain([0, group.top(1)[0].value]);

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
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
