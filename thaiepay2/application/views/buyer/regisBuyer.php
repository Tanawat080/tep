<script type="text/javascript" src="<?php echo base_url()?>assets/js/country.js"></script>

<div class="container text-left">    
  <br>
  <div class="row">
    <div class="col-sm-12">
    	<h1>ผู้ซื้อใหม่ (ลงทะเบียน)</h1><br><br>
    	<p class="indent">โปรดกรอกข้อมูลของคุณลงในฟอร์มด้านล่างนี้ (* <font color="red">กรอบสีแดง</font>หมายถึงฟิลด์ที่จำเป็นต้องกรอกข้อมูล)</p>
    	<br>
    	<div class="col-sm-3">
    	</div>
    	<div class="col-sm-6">
    		<input type="email" class="form-control border-input" name="email" placeholder="Email"><br>
    		<input type="password" class="form-control border-input" name="password" placeholder="Password"><br>
    		<input type="password" class="form-control border-input" name="repassword" placeholder="Re Password"><br>
    		<input id="ctl00_CphBody_ChkMailingList" type="checkbox" name="ctl00$CphBody$ChkMailingList" /><label for="ctl00_CphBody_ChkMailingList">&nbsp;ต้องการรับข่วสารและโปรโมชั่นทางอีเมล</label><br>
			<select class="form-control" id="country" name="country"></select><br>
			<input type="text" class="form-control border-input" name="Name" placeholder="Name"><br>
			<input type="text" class="form-control border-input" name="Surname" placeholder="Surname"><br>
			<input type="text" class="form-control border-input" name="Company" placeholder="Company"><br>
			<input type="text" class="form-control border-input" name="Address" placeholder="Address"><br>
			<input type="text" class="form-control" name="AddressOptional" placeholder="Address (Optional)"><br>
			<select class="form-control" name="state" id="state"></select><br>
			<input type="text" class="form-control border-input" name="Address" placeholder="ZIP/Postal Code"><br>
			<input type="text" class="form-control border-input" name="Address" placeholder="Phone Number"><br>
			<input type="text" class="form-control" name="Address" placeholder="Mobile Number"><br>
			<input type="text" class="form-control" name="Address" placeholder="Fax Number"><br>
			<center><a href=""><button type="button" class="btn btn-primary">Create Account</button></a>
		</div>
</div>
</div>
</div>

 <script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
        </script>