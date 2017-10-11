<form >
<div class="container text-center">    

  <br>
  <div class="row">
    <div class="col-sm-12">
 <form method="post" action="#">
      	<h1 align="left">เข้าสู่ระบบ</h1>
      	<p align="left" class="indent">กรุณากรอกชื่ออีเมลและรหัสผ่านเพื่อเข้าสู่ระบบ หรือหากไม่มีบัญชีกับเรามาก่อน โปรดทำการลงทะเบียน</p><br>
       </div><br><br>
       <div class="col-sm-2"></div>
		<div class="col-sm-4">
			<p align="left"><b>ผู้ซื้อเก่า</b></p>
			<hr>
			<p align="left">โปรดกรอกอีเมลและรหัสผ่าน เพื่อเข้าสู่ระบบผู้ซื้อ</p>
     
			<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<p align="right">ลืมรหัสผ่าน?</p>
			<button type="submit" class="btn btn-primary">Sign In</button>
    </form>
		</div>
      	<div class="col-sm-4">
      		<p align="left"><b>ผู้ซื้อใหม่</b></p>
      		<hr>
      		<P align="left">สำหรับผู้ซื้อใหม่ โปรดคลิก Create Account เพื่อทำการลงทะเบียน</P>
      		<a href="<?php echo base_url()?>/buyer/buyer/regisBuyer"><button type="button" class="btn btn-primary">Create Account</button></a>
      	</div><div class="col-sm-2"></div>

      </div>
  </div>
  <br>
</div>
<br>
</form>