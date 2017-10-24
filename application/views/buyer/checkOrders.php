
<div class="container text-center">    

  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">
     	<h1 align="left">ตรวจสอบสถานะรายการสั่งซื้อ</h1>
     	<p align="left" class="indent">โปรดกรอกหมายเลขการสั่งซื้อและอีเมลของคุณลงในแบบฟอร์มด้านล่างนี้ เพื่อตรวจสอบดูสถานะการสั่งซื้อและข้อมูลที่เกี่ยวข้อง</p>
      </div>
     <div class="col-sm-4">
	     <form name="frm">
	     	<div class="form-group">
	     		<input type="email" class="form-control" name="email" placeholder="Email">
	     	</div>

	     		<p align="left">หมายเลขการสั่งซื้อ:*</p>
	     		<table><tr>
	     		<td>
	     		<input type="number" class="form-control" name="orderid"  >
	     		</td>
	     		<td><p>&nbsp;-&nbsp;</p></td>
	     		<td>
	     		<input type="number" class="form-control" name="orderid2" >
	     		</td>
	     		<td></td>
	     		</tr>
	     		</table>
	     		<p align="left">(ตัวอย่าง 000111-123456 หรือ 000222-12345678)</p><br>
	     		<a href="#"><button type="button" class="btn btn-primary">Create Account</button></a><br>
	
	     </form>

     </div>
     <div class="col-sm-8">
	     <img id="myImg" src="../../assets/images/orderno.png" alt="หมายเลขการสั่งซื้อปรากฏที่อีเมลยืนยันการสั่งซื้อ" width="360" height="240">
	     <p align="center"><i><b>หมายเลขการสั่งซื้อปรากฏที่อีเมลยืนยันการสั่งซื้อ</b></i></p>

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