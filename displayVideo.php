<?php
  $lecJson = file_get_contents ('json_db/dbLectureList1.json');
  $lecData = json_decode($lecJson, true);
  foreach ( $lecData as $lec ){
    if(isset($_GET['lecId'])){
      if($lec[1] == $_GET['lecId'] && $lec[0] == $_GET['subjId']){break;}
    }elseif(!isset($_GET['lecId'])){
      if($lec[0] == $_GET['subjId']){break;}
    }
  }
  $subData = file_get_contents ('json_db/dbSubjectList1.json');
  $subJson = json_decode($subData, true);
  foreach ( $subJson as $sub ){
    if($sub[0] == $_GET['subjId']){break;}
  }
  
  $dscData = file_get_contents ('json_db/dbDisciplineList1.json');
  $dscJson = json_decode($dscData, true);
  foreach ( $dscJson as $dsc ){
    if($dsc["id"] == $sub[1]){break;}
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
    max-width: 500px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
  }
  #header .heading h6{
    border-top: 1px #000 solid;
  }
  #header .college-name{
    display: inline-block;
    height: 45px;
    font-size: 9pt;
    line-height: 45px;
    vertical-align: middle;
    padding-right: 10px;
    padding-left: 10px;
    float:right;
    font-style:italic;
    border: 1px dashed #000;
    background-color: aqua;
	border-radius: 5px;
  }
  .video-page-main-panel{
    margin-top: 65px;
  }
  .video-page-main-panel .lecture-list{
    width: calc(35vw);
    display: inline-block;
    vertical-align: top;
    list-style: none;
    padding-left:0px;
    margin: 0px;
    font-size: 9pt;
    height: calc(80vh);
    overflow-y: scroll;
  }
  .video-page-main-panel .lecture-list li{
    height: 24px;
    padding: 5px;
    background-color: #a90909;
    border-color: #fff;
    color: #fff;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
  }
  .video-page-main-panel .lecture-list li a{
    color: #fff;
    text-decoration: none;
    line-height: 40px;
	vertical-align: middle;
    padding: 10px;
  }
  .video-page-main-panel video{
	width: calc(60vw);
	display: inline-block;
	height: calc(80vh);
  }
  </style>
 </head>
 <body>
  <div class="container">
   <div id="header">
    <img src="/nptel/img/banner500x100.png">
    <div class="heading">
		<h4><?php echo $lec[2]; ?></h4>
		<h6>
			<?php 
			echo "<a href=\"/nptel/\">Home</a> &gt;&gt; 
			<a href=\"/nptel/".$dsc["id"]."\">".$dsc["Name"]."</a> &gt;&gt; 
			<a href=\"/nptel/DisplayVideo/".$sub[0].">".$sub[4]."</a></h6>";
			?>
    </div>
    <div class="college-name">
		ABC Institute of Technology
	</div>
   </div>
  </div>
  <div class="video-page-main-panel">
   <ul class="lecture-list">
     <?php
     foreach ( $lecData as $lect ){
		if($lect[0] == $_GET['subjId']){
		  echo "<li title=".$lect[2]."><a href=\"/nptel/DisplayVideo/".$lect[0]."/".$lect[1]."\">".$lect[2]."</li>";
		}
	  }
     ?>
   </ul> 
   <video width="650" height="500" controls>
    <source id="src" src="/nptel/videos/<?= $_GET['subjId']."/".$lec[1] ?>.mp4" type="video/mp4">
     Your browser does not support the video tag.
   </video>
  </div>
 </body>
</html>
