<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
include_once $_SERVER['DOCUMENT_ROOT'].'/home/config/db.php'; // this is common library

$f ="무효처리 임 학생회장에게 문의하면 기회한번더줌";

if(!empty($_POST["choice"])){
	
$pnum = $_POST["choice"];

$re1 = mysql_query("select getnum from collect where pnum ='".$pnum."'");

$getnum = mysql_result($re1,0,0);
$getnum+=1;

$re2 = mysql_query("update collect set getnum='".$getnum."'where pnum ='".$pnum."'");
if($re2){
	echo "<script>location.replace('./resulting2')</script>";
}else{
	echo "다시 투표";
}

}
else{
	echo "<script>window.alert('".$f."');location.replace('./result')</script>";
}




