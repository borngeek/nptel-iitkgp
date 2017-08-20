<?php
  $lecData = file_get_contents ('dbLectureList1.json');
  $lecJson = json_decode($lecData, true);
  foreach ( $lecJson as $lec ){
    if($lec["id"] == $_GET['b'] && $lec["subjId"] == $_GET['a']){break;}
  }
  
  $subData = file_get_contents ('dbSubjectList1.json');
  $subJson = json_decode($subData, true);
  foreach ( $subJson as $sub ){
    if($sub["id"] == $_GET['a']){break;}
  }
  
  $dscData = file_get_contents ('dbDisciplineList1.json');
  $dscJson = json_decode($dscData, true);
  foreach ( $dscJson as $dsc ){
    if($dsc["id"] == $sub["dscId"]){break;}
  }
  ?>
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
  .video{
    margin-top: 65px;
    text-align: center;
  }
  </style>
 </head>
 <body>
  <div class="container">
   <div id="header">
    <img src="/nptel/img/banner500x100.png">
    <div class="heading">
		<h4><?php echo $lec["name"]; ?></h4>
		<h6><?php echo $dsc["Name"]." > ".$sub["subjName"]; ?></h6>
    </div>
   </div>
  </div>
  <div class="video">
   <video width="650" height="500" controls>
    <source id="src" src="/nptel/videos/<?= $_GET['a']."/".$_GET['b'] ?>.mp4" type="video/mp4">
     Your browser does not support the video tag.
   </video>
  </div>
 </body>
</html>
