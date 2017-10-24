<!DOCTYPE html>
<html lang="th">
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
<nav class="navbar navbar-inverse border-bottom-red">
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo label('buyer',$this);?>
          <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?>buyer/buyer/loginBuyer"><?php echo label('signIn',$this);?></a></li>
              <li><a href="<?php echo base_url();?>buyer/buyer/checkOrders"><?php echo label('checkOrders',$this);?></a></li>
              <li><a href="<?php echo base_url();?>buyer/buyer/forgotPassword"><?php echo label('forgotPassword',$this);?></a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo label('merchantSeller',$this);?>
          <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?>merchant/merchant/payment"><?php echo label('paymentRenewal',$this);?></a></li>
              <li><a href="<?php echo base_url();?>merchant/merchant/adminSystem"><?php echo label('adminSystem',$this);?></a></li>
              <li><a href="<?php echo base_url();?>merchant/merchant/download"><?php echo label('download',$this);?></a></li>
              <li><a href="<?php echo base_url();?>buyer/buyer/forgotPassword"><?php echo label('forgotPassword',$this);?></a></li>
            </ul>
        </li>
          <li>
            <a href="<?php echo base_url();?>service/service/servicePage"><?php echo label('serviceNav',$this);?></a>
          </li>
          <li>
            <a href="<?php echo base_url();?>shoppingmall/shoppingmall/regisShoppingmall"><?php echo label('registerShoppingmall',$this);?></a>
          </li>
          <li>
            <a href="<?php echo base_url();?>eModule/eModules/regiseModules"><?php echo label('registereModules',$this);?></a>
          </li>
          <li>
            <a href="<?php echo base_url();?>package/package/pricePackage"><?php echo label('pricePackage',$this);?></a>
          </li>
          <li>
            <a href="<?php echo base_url();?>siteMap/siteMap/siteMapPage"><?php echo label('siteMap',$this);?></a>
          </li>
          <li>
            <a href="<?php echo base_url();?>contactUs/contactUs/contactUsPage"><?php echo label('contactUs',$this);?></a>
          </li> 
          <li>
          <a href="<?php echo base_url();?>buyer/buyer/loginBuyer"><button class="tm-green-btn"><?php echo label('signIn',$this);?></button></a>
          </li> 
            <ul class="nav navbar-nav navbar-right ">
                <li class="lang-divider visible-xs">เปลี่ยนภาษา</li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle lang" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon-lang <?php echo label('iconlang',$this)?>"></span> 
                      <span class="lang-label"><?php echo label('language',$this); ?></span><span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">                              
                            <li>
                              <a href="<?php echo base_url();?>home/changeLang/thailand"><span class="icon-lang th"></span> ภาษาไทย</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url();?>home/changeLang/english"><span class="icon-lang en"></span> English</a>
                            </li>
                          </ul>
                  </li>
            </ul>
      </ul>

     
       
     
    </div>
  </div>
</nav>