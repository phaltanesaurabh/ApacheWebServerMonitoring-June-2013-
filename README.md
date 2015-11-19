Maharashtra Institute of Technology Pune
Computer Engineering Final year Project.

Project Name    : Apache Web server Monitoring 
Sponsored by    : e-Zest Solutions Ltd.

Project Description:
Apache Web Server Monitoring tool monitors the server performance/server activity by tracking the Response Time, Server Load, Bandwidth utilized to gives respective alerts, notifications to the server administrator. The tool helps the server administrator to map the performance of the server over a selected span of time analysing the response code, error generation from the server.The tool permits the administrator to track performance history of his server by determining the downtime, causes of downtime etc and accordingly take precautive actions by analysing the log history.
The system is designed to analyse the access logs, errors logs of the server and the analytics engine is built on it.
The Tool also analyses the data about the web site visitors, which pages are most popular, and which search engine phrases brought visitors to his web site.

Technologies: Apache Server, MySql, PHP, JavaScript,D3,SVG,Crossfilter.
Platform       : Linux (ubuntu)

Metrics Determination Analytics  
  
CPU Load Analysis: 
CPU load is analysed over a period of time and and the peak hours are identified.
The varying CPU load helps the server administrator to determine the peak hours on his server and accordingly make arrangements for scaling up his resources.The Cpu load also acts as a indicator about the varying server stress and effective in predicting the failover regions and time periods.
The CPU loads can be analysed over the range of time for a specified range of date.
 


Relative Analysis of Response time vs Server Response Codes
Server Responds with the specific codes as per request. The analysis of the response code guides the administrator to track the server acticity and response to various events of the day 
The response code analysed in conjugation with response time,helps in tracking the issues in responses and changes in responses of the server due to specific loads over the server. 
Fradulent activity over the server can be detected by guessing it by analysing the two metrices. 
  


Error Log Analytics and Performance Analytics
The Error analysis serve a important tool to any to any server administrator to track the server error and hunt for the reasons for its low/degraded performance.
The analysis of logs over a period of time on a specific time slot can server as a important metrics to the server administrator.
The analysis of score of warnings,severe error,mild errors can guide the adminstrator to take directional steps to rectify the issue. 
The proper planned utilization of server capacity can be availed with the judicious use of server error log analysis.  


User Base Analytics UserAgents,Gelocation Analytics

TOP Browsers:
 The metrics of Top browsers utilization can serve as a tool to server administrator to plan his extensions to his projects and also make alternative services available as per the requierments.

Analysis of Downitime:
The analysis of Downtime serve as a important tool to the server administrator the track the server uptime of his server also could monitor the server issues leading to downtime by the analysis of Error log over the period of time.

Geographical access to server:  
The geographical access to the server cant be monitored by tracking the IP that requests the server and determing thier global location using the time stamps. 

Configuration :

Apache Version 2.2:

Log Format for Access Logs :

CustomLog '|/var/www/access' "%h %l %u %t \"%r\" %H %m %>s %T %D %O \"%{Referer}i\" \"%{User-Agent}i\" %v %{SERVERID}e"

Log Format for Error Logs :Default format can only be customized in 2.4 version .
Authorization module for apache is enabled by enabling in Http Conf..
<Location /server-status>
  SetHandler server-status
    AuthType basic
    Satisfy All
    AuthName "Apache status"
    AuthUserFile /etc/apache2/passwd-server-status
    Require user ram
</Location>

Serverid and Virtual Hosts are created In the HTTP.conf file .

  


