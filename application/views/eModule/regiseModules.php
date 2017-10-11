        <script type="text/javascript">
            function enableButton() {
                document.getElementById('ctl00_CphBody_BtnSubmit').disabled = !document.getElementById('ctl00_CphBody_ChkIAgree').checked;
            }
        </script>
            	<form method="post" action="<?php echo base_url()?>eModule/eModules">
<div class="container text-left">    
  <br>
  <div class="row">
    <div class="col-sm-12">

      	<h1>ลงทะเบียนระบบ eModules</h1><br/><br/><br/>
		<p align="left"><b>เลือกระบบ:*</b></p>
      	<hr>
      	<div class="col-sm-2">
      	<div class="radio">
      		<label><input type="radio" value="ePayment" name="eModules" checked="checked"></label><img src="<?php echo base_url()?>assets/images/icons/newlogo_ep.png">
    	</div>
    	</div>
    	<div class="col-sm-2">
    	<div class="radio">
      		<label><input type="radio" value="eBooking" name="eModules" ></label><img src="<?php echo base_url()?>assets/images/icons/ebooking_re.png">
    	</div>
    	</div>
		<div class="col-sm-2">
    	<div class="radio">
      		<label><input type="radio" value="eCart" name="eModules"></label><img src="<?php echo base_url()?>assets/images/icons/ecart_re.png">
    	</div>
    	</div>
	

	    </div>
	        <div class="col-sm-12">
    	<br><br><br>
    	<p align="left"><b>เอกสารที่ต้องเตรียม</b></p>
      	<hr>
      	<div class="border-1 indent-2 text-left">
      		
      		<p>1. สำเนาบัตรประชาชน (ในกรณีเป็นชาวต่างชาติ ใช้สำเนาหนังสือเดินทางหรือสำเนาใบอนุญาตทำงาน)</p>
			<p>2. สำเนาทะเบียนบ้าน หรือสัญญาเช่า</p>
			<p>3. ทะเบียนพาณิชย์ (ถ้ามี) (สำหรับบริษัท: สำเนาหนังสือรับรองการจดทะเบียนบริษัท หรือ ห้างหุ้นส่วน จำกัด)
</p>
			<p>4. สำเนาสมุดบัญชีธนาคารพร้อม Statement ย้อนหลัง 3 เดือน</p>
			<p>5. ภาพสินค้าและหลักฐานการเป็นเจ้าของเว็บไซต์</p>
			<p>6. ใบอนุญาตประกอบธุรกิจนำเที่ยว โรงแรม หรือรีสอร์ท (ถ้ามี) (กรณีสมัคร eBooking)</p>
			<p>7. ใบอนุญาติจัดตั้งสมาคม หรือองค์กร (กรณีสมัคร eCharity)</p>
			<p>8. <a href="https://www.thaiepay.com/download/PaySolutions-Agreements.rar">เอกสารสัญญาไทยอีเพย์</a></p>







      	</div><br><br>
      	<p align="left"><b>ข้อตกลงและเงื่อนไขการใช้บริการ (ฉบับย่อ)</b></p>
      	<hr>
      	<p class="indent-2">ข้อตกลงและเงื่อนไขการใช้บริการ ได้ถูกสรุปแบบย่อเพื่อให้ทำความเข้าใจได้ง่าย ดังรายละเอียดต่อไปนี้ คุณจะต้องยินยอมรับเงื่อนไขทั้งหมด ด้วยการคลิกถูกที่ตัวเลือก "ยอมรับ" เพื่อดำเนินการในลำดับต่อไปนี้ (<a href="<?php echo base_url();?>aboutCompany/aboutCompany/conditionPage">เงื่อนไขการใช้บริการฉบับเต็ม</a>)</p><br>
      	<p class="indent"><b>1. คุณสมบัติของร้านค้า</b></p>
      	<div class="indent-3">	
      		<p>&bull; ไม่ดำเนินธุรกิจหรือจำหน่ายสินค้าที่ผิดกฎหมายหรือขัดต่อศีลธรรม อาทิ การพนัน สื่อลามก เหล้า ยาเสพติด สินค้าละเมิดลิขสิทธิ์ ยา(ผิดกฎหมายบางประเทศ)</p> 
      		<p>&bull; ธุรกิจจำหน่ายอาหารเสริม เครื่องสำอาง ผลิตภัณฑ์เกี่ยวกับสุขภาพ ทีมงานจะตรวจสอบเป็นพิเศษและอนุมัติในเฉพาะรายที่สินค้าได้รับการรับรองจาก อย. หรือหน่วยงานที่ถูกต้องตามกฎหมายเท่านั้น</p> 
      		<p><b>* ถ้าตรวจพบภายหลังว่าร้านค้าแอบดำเนินธุรกิจที่ผิดกฎหมายเหล่านี้ เราจะปิดร้านค้านั้นๆ อายัดเงินรายได้ทั้งหมด และแจ้งความดำเนินคดีทางกฎหมายทันที</b></p>
      	</div>
      	<p class="indent"><b>2. การใช้งานระบบ</b></p>
      	<div class="indent-3">	
      		<p>&bull; คุณสามารถใช้งานระบบได้ฟรี! 15 วันทันที ที่ลงทะเบียนและจัดส่งเอกสารเรียบร้อย</p> 
      		<p>&bull; ค่าธรรมเนียมการเรียกเก็บเงินตามรายธุรกรรมในอัตรา 3.60% สำหรับบัตร VISA, MasterCard และ อัตรา 4.75% สำหรับบัตร American Express</p> 
      		
      	</div>
      	<p class="indent"><b>3. ข้อตกลงการโอนยอดรายได้</b></p>
      	<div class="indent-3">	
      		<p>ระบบจะสรุปยอดการรายได้ร้านค้าโดยรวบรวมในรอบ 1 เดือนและ โอนยอดรายได้จำนวนดังกล่าว หลังจากหักค่าธรรมเนียมให้แก่ร้านค้าในวันที่ 10 ของเดือนถัดไป โดยการนำฝากเข้าบัญชีธนาคารที่ร้านค้าแจ้งมา</p>   		
      	</div><br>
      	<center>
      		<input id="ctl00_CphBody_ChkIAgree" type="checkbox" name="ctl00$CphBody$ChkIAgree" onclick="enableButton();" /><label for="ctl00_CphBody_ChkIAgree">&nbsp;ข้าพเจ้าขอยืนยันว่าได้อ่านและยอมรับข้อตกลงและเงื่อนไขการใช้บริการข้างต้นแล้ว</label>
      		<br>
      		<button type="submit" class="btn btn-primary" name="ctl00$CphBody$BtnSubmit"  id="ctl00_CphBody_BtnSubmit" disabled="disabled">Submit</button></center>
      	</div><div class="col-sm-2"></div>
    
  </div>
</div>
  </form>