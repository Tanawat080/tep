<div class="container text-left">
  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">
    	<div class="text-center">
      		<h1><?= label('header',$this); ?></h1>
      		<hr width="10%">
      		<br/>
      	</div>
      		<div class="indent text-left">
      			<p><?= label('content1',$this);?></p>
      			<p  class="border-1" ><font color="red">&bull; <?= label('content2-free',$this);?></font></p>
      		</div><br><br>
      		<h4><?= label('title1',$this); ?></h4>
		<ul>
			<li><?= label('content1-title1',$this);?></li>
			<li><?= label('content2-title1',$this);?></li>
			<li><?= label('content3-title1',$this);?></li>
			<li><?= label('content4-title1',$this);?></li>
		</ul>
		<br>
      		<h4><?= label('title2',$this);?></h4>
		<ul>
			<li><?= label('content1-title2',$this);?></li>
			<li><?= label('content2-title2',$this);?>์</li>
			<li><?= label('content3-title2',$this);?>์</li>
		</ul>
		<br>
		<h4><?= label('title3',$this);?></h4>
    <hr>
		<div class="w3-content" style="max-width:700px">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_01.png" style="width:100%">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_02.png" style="width:100%">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_03.png" style="width:100%">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_04.png" style="width:100%">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_05.png" style="width:100%">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_06.png" style="width:100%">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_07.png" style="width:100%">
			  <img class="mySlides" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_08.png" style="width:100%">

			  <div class="w3-row-padding w3-section">
			    <div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_01.png" style="width:100%" onclick="currentDiv(1)">
			    </div>
			    <div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_02.png" style="width:100%" onclick="currentDiv(2)">
			    </div>
			    <div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_03.png" style="width:100%" onclick="currentDiv(3)">
			    </div>
			    <div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_04.png" style="width:100%" onclick="currentDiv(4)">
			    </div>
			    <div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_05.png" style="width:100%" onclick="currentDiv(5)">
			    </div>
			    <div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_06.png" style="width:100%" onclick="currentDiv(6)">
			    </div>
			  </div>
			  <div class="w3-row-padding w3-section">
 				<div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_07.png" style="width:100%" onclick="currentDiv(7)">
			    </div>
			    <div class="w3-col s2">
			      <img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo base_url()?>assets/images/service/eBusiness/ebusiness_08.png" style="width:100%" onclick="currentDiv(8)">
			    </div>
			    </div>
			</div>
			<ul>
				<li><?= label('content1-title3',$this);?></li>
				<li><?= label('content2-title3',$this);?></li>
				<li><?= label('content3-title3',$this);?></li>
				<li><?= label('content4-title3',$this);?></li>
				<li><?= label('content5-title3',$this);?></li>
				<li><?= label('content6-title3',$this);?></li>
			</ul>
			<br><br>
		<h4><?= label('title4',$this);?></h4>
		<ol>
			<li><?= label('content1-title4',$this);?></li>
			<li><?= label('content2-title4',$this);?></li>
			<li><?= label('content3-title4',$this);?></li>
			<li><?= label('content4-title4',$this);?></li>
		</ol>
		<div class="indent-3 text-left">
		<p><?= label('content5-title4',$this);?></p><br>
		</div>
		<h4><?= label('title5',$this);?></h4>
  		<ol>
  			<li><?= label('content1-title5',$this);?></li>
  		</ol>
		<br>
		<center><a href="<?php echo base_url();?>shoppingmall/shoppingmall/regisShoppingmall"><button type="button" class="btn btn-primary">ลงทะเบียนใช้งาน</button></a></center>
      </div>
  </div>
</div><br><br>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
