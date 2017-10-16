<script type="text/javascript" src="<?php echo base_url()?>assets/js/country.js"></script>

<div class="container text-left">    
  <br>
  <div class="row">
    <div class="col-sm-12">
    	<h1>ผู้ซื้อใหม่ (ลงทะเบียน)</h1><br><br>
    	<p class="indent">โปรดกรอกข้อมูลของคุณลงในฟอร์มด้านล่างนี้</p>
    	<br>
    	<div class="col-sm-3">
    	</div>
    	<div class="col-sm-6">
    		<input type="email" class="form-control" name="email" placeholder="Email (Require)"><br>
    		<input type="password" class="form-control" name="password" placeholder="Password (Require)"><br>
    		<input type="password" class="form-control " name="repassword" placeholder="Re Password (Require)"><br>
    		<input id="ctl00_CphBody_ChkMailingList" type="checkbox" name="ctl00$CphBody$ChkMailingList" /><label for="ctl00_CphBody_ChkMailingList">&nbsp;ต้องการรับข่วสารและโปรโมชั่นทางอีเมล</label><br>
			<select class="form-control" id="country" name="country"></select><br>
			<input type="text" class="form-control " name="Name" placeholder="Name (Require)"><br>
			<input type="text" class="form-control " name="Surname" placeholder="Surname (Require)"><br>
			<input type="text" class="form-control " name="Company" placeholder="Company"><br>
			<input type="text" class="form-control " name="Address" placeholder="Address (Require)"><br>
			<input type="text" class="form-control" name="AddressOptional" placeholder="Address (Optional)"><br>
			<select class="form-control" name="state" id="state"></select><br>
			<input type="text" class="form-control " name="Address" placeholder="ZIP/Postal Code (Require)"><br>
			<input type="text" class="form-control " name="Address" placeholder="Phone Number (Require)"><br>
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