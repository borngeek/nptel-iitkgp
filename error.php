<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Display Video</title>
  <style>
  .container{
    position:absolute;
    left:0px;
    top:0px;
    right:0px;
  }
  #header{
    height:50px;
    background-color:#FFF;
    border-bottom: 1px #000 solid;
    padding:5px 0px 5px 5px;
  }
  #header img{
    height: 45px;
    background-color:#FFF;
    border-right: 1px #000 solid;
    display: inline-block;
  }
  #header .heading{
    display: inline-block;
    font-size: 12pt;
    vertical-align: top;
  }
  #header .heading h4,h6{
    margin: 0px !important;
    line-height: 20pt;
  }
  #header .heading h6{
    border-top: 1px #000 solid;
  }
  .message{
    margin-top: 75px;
    text-align: center;
  }
  </style>
 </head>
 <body>
  <div class="container">
   <div id="header">
    <img src="/nptel/img/banner500x100.png">
    <div class="heading">
		<h4><?php
			if($_GET["status"] === "404"){
			  echo "Error 404: File Not Found";
		    }elseif($_GET["status"] === "403"){
			  echo "Error 403: Forbidden";
		    }elseif($_GET["status"] === "500"){
			  echo "Error 500: Server Error";
		    }
		  ?></h4>
		<h6></h6>
    </div>
   </div>
  </div>
  <div class="message">
   Seems like we don't have the file you have requested for.
  </div>
 </body>
</html>
