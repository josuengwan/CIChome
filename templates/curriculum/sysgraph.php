<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php'; // this is common library
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/side.css">
    <link rel="stylesheet" type="text/css" href="<?echo HOME_PATH?>/assets/css/curriculum.css">

</head>
<body>

<!-- End Of Footer -->
<?Header::render();?>
<!-- START Content-->

<div class="main-container">
    <div class="curriculum-content" >
    <div class="main_text">
			<h3>이수체계도</h3>
		<p><strong class="style9"><a href="../../assets/files/sysgraph.pptx">[이수체계표 다운로드]</a></strong></p>
		<div>
		<div id="underimg" style="display: inline"><strong class="style8">[~15학년도까지 이수체계표] &nbsp;&nbsp;&nbsp;</strong></div>
		<div id="upperimg" style="display: inline"><strong class="style9">[16학년 이수체계표]</strong></div>
		</div>
		<br>
        <div class="ur_img"><img id="sysimg" src="../../assets/files/sysg15.png" width="690" height="auto" alt="이수체계도"></div>
	</div>
    </div>
    	<?Side::render('curriculum');?>
</div>
<!-- End Of Content -->



<!-- START Footer-->
<? Footer::render(); ?>

<script src="<?echo HOME_PATH?>/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="<?echo HOME_PATH?>/assets/js/header.js"></script>
<script>
	$("#side-menu-item-f").addClass("hover");
	
	$("#underimg").bind("click", function() {
      $("#sysimg").attr("src","../../assets/files/sysg15.png");
      $("#underimg>strong").attr("class","style8");
      $("#upperimg>strong").attr("class","style9");
	});
	$("#upperimg").bind("click", function() {
      $("#sysimg").attr("src","../../assets/files/sysg16.png");
      $("#underimg>strong").attr("class","style9");
      $("#upperimg>strong").attr("class","style8");
	});
</script>
<!-- End Of Footer-->
</body>
</html>