
<div class="container text-left">
  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">
    	<div class="text-center">
      		<h1 ><?= label('header',$this);?></h1>
      		<hr width="10%">
      		<br/>
      	</div>
      	<div class="indent ">
	      	<p><?= label('content1',$this);?></p>
	      	<br>
		</div>
		<h4><?= label('title4',$this);?></h4>
		<ul>
			<li><?= label('content1-title4',$this);?></li>
		</ul>
		<br>
		<h4><?= label('title5',$this);?></h4>
		<ul>
			<li><?= label('content1-title5',$this);?></li>
			<li><?= label('content2-title5',$this);?></li>
		</ul>
		<br>
		<h4><?= label('title6',$this);?></h4>
			<ul>
				<li><?= label('content1-title6',$this);?></li>
				<li><?= label('content2-title6',$this);?></li>
			</ul>
		<br>
		<h4><?= label('title7',$this);?></h4>
		<ol>
			<li><?= label('content1-title7',$this);?></li>
			<li><?= label('content2-title7',$this);?></li>
			<li><?= label('content3-title7',$this);?></li>
			<li><?= label('content4-title7',$this);?></li>
		</ol><br>

		<h4><?= label('title8',$this);?></h4>
		<ol>
			<li><?= label('content1-title8',$this);?></li>
			<li><?= label('content2-title8',$this);?></li>
		</ol>
		<br>

        <h4><?= label('title9',$this);?></h4>
		<div class="indent text-left">
			<p ><?= label('content1-title9',$this);?></p>
			<p><?= label('content2-title9',$this);?></p>
		</div><br>

		<h4><?= label('title10',$this);?></h4>
		<p align="left" class="indent"><?= label('content1-title10',$this);?></p>
		<ol>
			<li><?= label('content1-title10',$this);?></li>
			<li><?= label('content2-title10',$this);?></li>
			<li><?= label('content3-title10',$this);?>้</li>
			<li><?= label('content4-title10',$this);?></li>
		</ol>
		<br>
		<center><a href="<?php echo base_url();?>shoppingmall/shoppingmall/regisShoppingmall"><button type="button" class="btn btn-primary"><?= label('btn-regis',$this);?></button></a></center>
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
