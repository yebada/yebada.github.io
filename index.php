<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css"  />
<title>homepage</title>

<script language="javascript" type="text/javascript">
function dyniframesize(down) {
var pTar = null;
if (document.getElementById){
pTar = document.getElementById(down);
}
else{
eval('pTar = ' + down + ';');
}
if (pTar && !window.opera){
//begin resizing iframe
pTar.style.display="block"
if (pTar.contentDocument && pTar.contentDocument.body.offsetHeight){
//ns6 syntax
pTar.height = pTar.contentDocument.body.offsetHeight +20;
pTar.width = pTar.contentDocument.body.scrollWidth+20;
}
else if (pTar.Document && pTar.Document.body.scrollHeight){
//ie5+ syntax
pTar.height = pTar.Document.body.scrollHeight;
pTar.width = pTar.Document.body.scrollWidth;
}
}
}
</script> 



</head>
<body>
<div align="center">
  <div id="container">
    <div id="header">
      <h1>YOU CAN YOU UP</h1>
    </div>
    <div id="navfirst">
      <ul id="menu">
        <li><a href="home.php" target="mainframe" title="主页">HOME</a></li>
        <li><a href="about.php" target="mainframe" title="个人介绍">ABOUT</a></li>
        <li><a href="post.php" target="mainframe" title="上传信息">POST</a></li>
    	</ul>
	</div>
    <div id="slider">
    	<div id="permsg">
    	</div>
    	<h4>外链 :</h4>
      	<dl>    
          <dt><a href="http://www.w3school.com.cn/index.html" target="new">W3School</a></dt>
          <dt><a href="http://www.ustc.edu.cn/" target="new">科大主页</a></dt>
          <dt><a href="http://wlt.ustc.edu.cn/" target="new">网络通</a></dt>
          <dt><a href="http://mis.teach.ustc.edu.cn/" target="new">教务系统</a></dt>
          <dt><a href="http://bbs.ustc.edu.cn/" target="new">BBS</a></dt>
          <dt><a href="http://lib.ustc.edu.cn/" target="new">图书馆</a></dt>
      	</dl>
	  <?php
        echo "今天:".date("Y/m/d")."<br />";
        echo "访问量：";
        if(file_exists("count.txt")){
          $f = fopen("count.txt","r");
          $i = fread($f,1000);
          echo "$i";
          fclose($f);
          $f = fopen("count.txt","w");
          $i++;
          fwrite($f,$i);
          fclose($f);
          
        }else{
          $f = fopen("count.txt","w");
          fwrite($f,0);
          fclose($f);
          echo " 0 ";
        }
     	 ?>
    </div>
    
    <iframe id="mainframe" name="mainframe"  src="home.php" onload="javascript:dyniframesize(this)" >
    </iframe>
    
    <div id="footer">
	  	Last Update: 2014-5-13 16:00
    </div>
  </div>
</div>
</body>
</html>
