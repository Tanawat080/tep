
<div class="container text-center">

  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">
    	<div class="text-center">
     		<h1><?= label('header1', $this); ?></h1>
     		<hr width="10%">
     		<br/>
     	</div>
     	<p  class="indent"><?php echo label('content1', $this); ?></p>
      </div>
     <div class="col-sm-4 col-md-offset-2">
	     <form name="frm" action="">
	     	<div class="form-group">
	     		<input type="email" class="form-control" name="email" placeholder="Email" required>
	     	</div>

	     		<h5><?php echo label('content2', $this); ?></h5>
	     		<table><tr>
	     		<td>
	     		<input type="number" class="form-control" name="orderid"  required>
	     		</td>
	     		<td><p>&nbsp;-&nbsp;</p></td>
	     		<td>
	     		<input type="number" class="form-control" name="orderid2" required>
	     		</td>
	     		<td></td>
	     		</tr>
	     		</table>
	     		<p align="left">(<?php echo label('example', $this); ?> 000111-123456 หรือ 000222-12345678)</p><br>
	     		<button type="submit" class="btn btn-primary">Submit</button><br><br/>

	     </form>

     </div>
     <div class="col-sm-4">
	     <img id="myImg" src="../../assets/images/orderno.png" alt="หมายเลขการสั่งซื้อปรากฏที่อีเมลยืนยันการสั่งซื้อ" width="360" height="240">
	     <p align="center"><i><b><?php echo label('content3', $this); ?></b></i></p>
<br><br>
		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <span class="close">×</span>
		  <img class="modal-content" id="img01">
		  <div id="caption"></div>
		</div>

     </div>
  </div>
  <br>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
