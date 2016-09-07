<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/home/library/common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1182, initial-scale=1">
    <title>컴퓨터정보통신공학과</title>
    <link rel="stylesheet" type="text/css" href="/home/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/home/assets/css/contact.css">

</head>
<body>
<!-- End Of Footer -->
<?php Header::render();?>
<!-- START Content-->
<div class="main-container">
    <div class="map-content">
        <table border="0" cellpadding="0" cellspacing="0" class="map-table">
            <tr style="height:50px;">
                <td>
                    <div class="contact-item">
                        <div class="title">Contact</div>
                        <div class="bar"></div>
                    </div>
                </td>
            </tr>
            <tr style="height:350px;">
                <td><<div id="map"style="width:70%; height:350px;"></div></td>
            </tr>
        </table>
    </div>
    <div class="contact-content">
        <table border="0" cellpadding="10" cellspacing="0" class="contact-table">
            <tr style="height:40px;">

                <td><span class="contact-title">Address</span><br><span>&nbsp;</span></td>
                <td><span class="kor-address">세종특별자치시 조치원읍 세종로 2639(신안리300) 홍익대학교 D407</span><br><span class="eng-address">D407, Hongik University, 2639 Sejong-ro(300 Sinan-ri), Jochiwon-eup, Sejong Special Self-Governing City, Republic of Korea</span></td>
            </tr>
            <tr style="height:40px;">
                <td><span class="contact-title">Zip Code</span></td>
                <td><span class="kor-address">30016</span></td>
            </tr>
            <tr style="height:40px;">
                <td><span class="contact-title">Fax</span></td>
                <td><span class="kor-address">(044) 865-0460</span></td>
            </tr>
            <tr style="height:40px;">
                <td><span class="contact-title">Tel</span></td>
                <td><span class="kor-address">(044) 860-2392</span></td>
            </tr>
            <tr style="height:40px;">
                <td><span class="contact-title">Home Admin</span></td>
                <td><span class="kor-address">com01@hongik.ac.kr</span></td>
            </tr>
        </table>
    </div>
</div>
<!-- End Of Content -->

<!-- START Footer-->
<div class="footer">
    <div class="content">
        <div class="bar"></div>
        <div class="logo"></div>
        <div class="menu">
            <div class="top">
                <ul>
                    <li><a href="">ABEEK</a></li>
                    <li><a href="">대학원</a></li>
                    <li><a href="">커뮤니티</a></li>
                    <li><a href="">구성원</a></li>
                    <li><a href="">교과과정</a></li>
                    <li><a href="">학과소개</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<script src="/home/assets/vendor/jquery-1.11.3.min.js"></script>
<script src="/home/assets/js/header.js"></script>

<script src="/home/assets/js/contact.js"></script>
<!-- End Of Footer-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZ5ks45D7YdnhGZQuJvc6IpQY8dsRW920&callback=initMap"
        async defer></script>
</body>
</html>