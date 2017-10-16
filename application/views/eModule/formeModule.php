<script type="text/javascript" src="<?php echo base_url()?>assets/js/country.js"></script>
<div class="container text-left">    
  <br>
  <div class="row">
  	<div class="col-sm-3"></div>
    <div class="col-sm-6">
    	<label>หมวดหมู่ไหนที่บอกถึงธุรกิจของคุณได้ดีที่สุด?</label>
    	<select class="form-control "  name="category">
    		<option>Category</option>
    	</select><br>

    	<select class="form-control "  name="subcategory">
    		<option>Sub Category</option>
    	</select><br>
    	<select class="form-control " id="country" name="country"></select><br>
    	<input type="text" class="form-control " name="Company" placeholder="Company" ><br/>
    	<input type="text" class="form-control " name="Address" placeholder="Address (Require)"><br/>
    	<input type="text" class="form-control" name="AddressOptional" placeholder="Address Optional"><br/>
    	<input type="text" class="form-control " name="City" placeholder="City (Require)"><br/>
    	<input type="text" class="form-control " name="ZIP" placeholder="ZIP/Postal Code (Require)"><br/>
    	<input type="text" class="form-control " name="PhoneNumber" placeholder="Phone Number (Require)"><br/>
    	<input type="text" class="form-control" name="FaxNumber" placeholder="Fax Number"><br/>
    	<select class="form-control" name="state" id="state"></select><br><br>

      </div>
      <div class="col-sm-12">
      <p align="center">&bull; ข้อมูลส่วนนี้จะถูกเก็บเป็นความลับและไม่แสดงผลบนเว็บไซต์ไทยอีเพย์ จะใช้ในการติดต่อระหว่างคุณกับเราเท่านั้น</p><br>
  </div>
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
  	 <input type="text" class="form-control" name="Name" placeholder="Name (Require)" ><br/>
    	<input type="text" class="form-control" name="Surname" placeholder="Surname (Require)"><br/>
    	<input type="text" class="form-control" name="MobileNumber" placeholder="Mobile Number (Ex. 0893334444)"><br/>
    	<input type="email" class="form-control " name="email" placeholder="Email (Require)"><br/>
    	<input type="url" class="form-control " name="Website" placeholder="Website (Require)"><br/>
  </div>
  <div class="col-sm-12"><br>
  	<p><b>ข้อมูลบัญชีธนาคาร</b></p>
  	<hr>
  	 <p align="center">&bull; บัญชีธนาคารนี้ใช้สำหรับรับเงินรายได้ของร้านค้า โดยไทยอีเพย์จะโอนยอดรายได้ให้ตามรอบระยะเวลาที่กำหนดเอาไว้</p><br>
  </div>
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
  	<select name="bank" id="ctl00_CphBody_DdlBank" class="form-control">
		<option value="BBL">Bangkok Bank</option>
		<option value="KSRI">Bank of Ayudhya</option>
		<option value="CIMB">CIMBTHAI</option>
		<option value="HSBC">HSBC Bank</option>
		<option value="ICBC">ICBCTHAI</option>
		<option value="KBANK">Kasikorn Bank</option>
		<option value="KK">Kiatnakin Bank</option>
		<option value="KTB">Krungthai Bank</option>
		<option value="SCB">Siam Commercial Bank</option>
		<option value="SC">Standard  Chartered</option>
		<option value="TNC">Thanachart Bank</option>
		<option value="TISCO">TISCO</option>
		<option value="TMB">TMBBank</option>
		<option value="BOA">UOB Bank</option>
	</select> <br>
	<input type="text" class="form-control" name="accountno" placeholder="Account No. (Require)"><br>
	<select name="AccountType" class="form-control ">
		<option value="S">Savings Deposit</option>
		<option value="F">Fixed Deposit</option>
		<option value="C">Current</option>
	</select><br>
	<input type="text" class="form-control " name="accountname" placeholder="Account Name (Require)"><br>
	<input type="text" class="form-control " name="branch" placeholder="Branch (Require)"><br>
	<p>Area</p>
	<div class="radio">
      		<label><input type="radio" value="Bangkok" name="area" checked="checked">Bangkok</label>
    </div>
    <div class="radio">
      		<label><input type="radio" value="AnotherRegion" name="area" >Another Region</label>
    </div>
    <center><button type="submit" class="btn btn-primary" name="BtnSubmit">Submit</button></center>
  </div>
  </div>
</div>
<script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
        </script>