<!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบชำระเงินออนไลน์ - ร้านค้าออนไลน์</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/gernerally.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css">
  <script src="<?php echo base_url();?>assets/bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>home"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ผู้ซื้อ
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>buyer/buyer/loginBuyer">เข้าสู่ระบบ</a></li>
          <li><a href="<?php echo base_url();?>buyer/buyer/checkOrders">ตรวจสอบรายการซื้อ</a></li>
          <li><a href="<?php echo base_url();?>buyer/buyer/forgotPassword">ลืมรหัสผ่าน</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ผู้ขาย/ร้านค้า
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>merchant/merchant/payment">ชำระเงิน/ต่ออายุบริการ</a></li>
          <li><a href="<?php echo base_url();?>merchant/merchant/adminSystem">ระบบจัดการร้านค้า</a></li>
          <li><a href="<?php echo base_url();?>merchant/merchant/download">ดาวน์โหลด</a></li>
          <li><a href="<?php echo base_url();?>buyer/buyer/forgotPassword">ลืมรหัสผ่าน</a></li>
        </ul>
      </li>
        <li><a href="<?php echo base_url();?>service/service/servicePage">บริการ</a></li>
        <li><a href="<?php echo base_url();?>shoppingmall/shoppingmall/regisShoppingmall">ลงทะเบียน Shopping Mall</a></li>
        <li><a href="<?php echo base_url();?>eModule/eModules/regiseModules">ลงทะเบียน eModules</a></li>
        <li><a href="<?php echo base_url();?>package/package/pricePackage">ราคา/แพ็คเกจ</a></li>
        <li><a href="<?php echo base_url();?>siteMap/siteMap/siteMapPage">แผนผังเว็บ</a></li>
        <li><a href="<?php echo base_url();?>contactUs/contactUs/contactUsPage">ติดต่อเรา</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>buyer/buyer/loginBuyer"><button class="tm-green-btn">เข้าสู่ระบบ</button></a></li>
      </ul>
    </div>
  </div>
</nav>