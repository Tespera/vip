<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "ini.php";

//版权：Tespera
//作者：Tespera
//网址：Tespera.com

?>


<!DOCTYPE html>

<html lang="zh-cn">
	
<head>
	
  <meta charset="utf-8"/>
  
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  
  <title>Tespera VIP视频解析</title>
  
  <meta name="keywords" content="'爱奇艺会员','腾讯会员','优酷会员','vip视频解析','vip视频在线解析','万能vip视频解析','vip视频全能解析','vip视频解析','优酷vip解析','爱奇艺vip解析','腾讯vip解析','乐视vip解析','芒果vip解析'" />
  
  <meta name="description" content="小人物做的小网站，只为了我的朋友们能够免费看会员电影。" />
  
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  
  <link rel="shortcut icon" href="img/icon128.png" type="image/x-icon" />
  
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script src="public/js/jquery-1.7.2.min.js"></script>
  
  <script src="https://use.fontawesome.com/142c047bf2.js"></script>
  
  <script type="text/javascript">
  	
  	eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};
  	
  	if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};
  	
  	while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);
  	
  	return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))
  	
  </script>

</head>


<body background="./img/bj.png">
	
  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
  	
  	  	
  <h3 class="text-muted" align="center"><?php echo $ini['title']?></h3>
  
    <br />
  

	<div class="list-group">
		
		<tr align="center" valign="top/bottom/middle">
			
        <td><a class="list-group-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; 观看电影</a></td>
        
        <td><a class="list-group-item" href="public/jc.html"><i class="fa fa-book" aria-hidden="true"></i>&nbsp; 使用教程</a></td>
        
        <td><a class="list-group-item" href="http://v.hao123.baidu.com/dianying/"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp; 影片推荐</a></td>
        
    	</tr>
	
	</div>
	
  	
  	<br />

	
	<table class="table table-bordered">
		
	<tbody>
		
	   <div class="col-md-14 column">
	   	
    <div class="panel panel-default">
    	
     <div id="kj" class="panel-body">
		
      <iframe src="./public/index.html" id="player" width="100%" height="260px" allowtransparency="true" frameborder="0" scrolling="yes"></iframe>
      
     </div>
    </div>
   </div>
		<tr>
   <div class="col-md-14 column">
    <form method="get" id="1233911832">
     <div class="input-group" style="width: 100%;">
      <span class="input-group-addon input-lg" style="width: 80px; ">选择接口</span>
      
      <select class="form-control input-lg" id="jk">
      	
      			<option value="http://tv.visionbang.com/video.php?v=" selected=""> 1号接口：腾讯、爱奇艺、搜狐、优酷、土豆 </option>
           	    <option value="http://v.72du.com/api/?url="> 2号接口：爱奇艺、腾讯、优酷、乐视、搜狐、PPTV、土豆 </option>
				<option value="http://000o.cc/jx/ty.php?url="> 3号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆 </option>
				<option value="http://api.47ks.com/webcloud/?v="> 4号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆、腾讯 </option>
				<option value="http://p2.api.47ks.com/webcloud/?v="> 5号接口：爱奇艺、优酷、乐视、芒果、搜狐、PPTV、土豆 </option>
				<option value="http://www.ou522.cn/t2/1.php?url="> 6号接口：优酷、芒果、搜狐、PPTV、土豆 </option>
				<option value="http://api.cloudparse.com/?url=">更多优质接口等待后续更新添加... </option>
			    
		</select>
		
     </div>
     <br>
     <div class="input-group" style="width: 100%;">
      <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
      <input class="form-control input-lg" type="search" placeholder="输入播放地址" id="url">
     </div>
     <br>
     <div>
      <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">点我播放</button>
     </div>
    </form>
   </div>
		</tr>
      </tbody>
      
<br /><br />
      
<div class="list-group">
	
	<a class="list-group-item" href="#"><i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp;注意：</a>
	  
	<a class="list-group-item" href="#">&nbsp;
		
		<li>移动端播放时画质较好，但有广告。</li>&nbsp;
	  	
		<li>关闭广告的按钮在广告的右上角。</li>&nbsp;
		
		<li>建议用电脑播放。</li>&nbsp;
		  
		<li>祝您观影愉快。</li> &nbsp;
		  
	  </a>
	  
	<a class="list-group-item" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=q9-O2NvO2crr2tqFyMTG">
		
		<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<big>☜</big>&nbsp;&nbsp;有问题点这儿联系我。</a>

</div>

<br /><br />

<!--畅言评论模块PC和WAP自适应版-->
<div id="SOHUCS" sid="请将此处替换为配置SourceID的语句" ></div> 
<script type="text/javascript"> 
(function(){ 
var appid = 'cyt9rQ6IN'; 
var conf = 'prod_a405840324acf552af25b2665a356b2b'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); }
 else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);
 if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;
 	if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>

<br /><br /><br /><br /><br />

<div class="copy-right"  align="center">

    <p> Copyright &copy; 2017."Tespera VIP视频解析".  </p>
    <p>By <a href="http://weibo.com/tespera"> Tespera </a> <i class="fa fa-weibo" aria-hidden="true"></i></p>
    <p><a target="_blank" href="http://www.miitbeian.gov.cn">陇ICP备17003910号-1</a></p>


</div>


<script type="text/javascript">
		
		setInterval(function(){
			var videoAd = document.getElementById('kj').getElementsByTagName('a');
			var videoImg = document.getElementById('kj').getElementsByTagName('img');
			if(videoAd.length != 0){
				document.removeChild(videoAd);
				document.removeChild(videoImg);
			}
			
		},5000);
	
</script>
</body>
</html>

