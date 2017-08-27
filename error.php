<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/nptel/img/favicon.ico" rel="shortcut icon">
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
  #header .college-name{
    display: inline-block;
    height: 45px;
    font-size: 9pt;
    line-height: 22px;
    vertical-align: middle;
    padding-right: 15px;
    padding-left: 15px;
    float: right;
    font-style: normal;
    border: 1px dashed #000;
    font-family: "Arial Narrow";
    color: #2a8318;
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
    <div class="college-name">Brought to you by:<br>
     <?php
     $college = json_decode(file_get_contents ("college.json"), true);
     echo $college["college-name"]; ?>
    </div>
   </div>
  </div>
  <div class="message">
   Seems like we don't have the file you have requested for.
  </div>
 </body>
</html>
