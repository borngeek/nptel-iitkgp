<?php

$dir = scandir("json_db", SCANDIR_SORT_ASCENDING);
$dscArray = array();
foreach($dir as $filename){
	if(preg_match("/dbDisciplineList[0-9]*\.json/", $filename, $mDl)){
		$dscArray = array_merge($dscArray, json_decode(file_get_contents ("json_db/".$mDl[0]), true));
	}
}

if(!isset($_GET["dscId"])){
  foreach ( $dscArray as $dsc ){
    echo ("<a href='".$dsc["id"]."'>".$dsc["Name"]."</a><br>");
  }
}elseif(isset($_GET["dscId"])){
  $foundFlg = 0;
  foreach ( $dscArray as $dsc ){
    if ($_GET["dscId"] === $dsc["id"]){$foundFlg = 1;break;}
  }
  if($foundFlg == 1){
    $subjArray = array();
    $lecArray = array();
    foreach($dir as $filename){
      if(preg_match("/dbSubjectList[0-9]*\.json/", $filename, $mSl)){
        $subjArray = array_merge($subjArray, json_decode(file_get_contents ("json_db/".$mSl[0]), true));
//      }elseif(preg_match("/dbLectureList[0-9]*\.json/", $filename, $mLl)){
//        $lecArray = array_merge($lecArray, json_decode(file_get_contents ("json_db/".$mLl[0]), true));
	  }
    }
    foreach ( $subjArray as $subj ){
      if ($subj["dscId"] === $dsc["id"]){
		echo ("<a href='DisplayVideo/".$subj["id"]."'>".$subj["subjName"]."</a><br>");
	  }
    }
  }
}
