        <script type="text/javascript">
            function enableButton() {
                document.getElementById('ctl00_CphBody_BtnSubmit').disabled = !document.getElementById('ctl00_CphBody_ChkIAgree').checked;
            }
        </script>
<div class="container text-left">    
  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">

      	<h1>ลงทะเบียน Shopping Mall</h1><br/><br/><br/>
		<p align="left"><b>เลือกระบบ:*</b></p>
      	<hr>
      	<div class="radio">
      		<label><input type="radio" name="eShop" checked="checked"></label><img src="<?php echo base_url()?>assets/images/icons/eshop_re.png">
    	</div><br><br><br>
    	<p align="left"><b>เอกสารที่ต้องเตรียม</b></p>
      	<hr>
      	<div class="border-1">
      		<ol>
            <li>บัตรประชาชน (ในกรณีเป็นชาวต่างชาติ ใช้สำเนาหนังสือเดินทางหรือสำเนาใบอนุญาตทำงาน)</li>
            <li>สำเนาทะเบียนบ้าน หรือสัญญาเช่า</li> 
            <li>ทะเบียนพาณิชย์ (สำหรับบริษัท: สำเนาหนังสือรับรองการจดทะเบียนบริษัท หรือห้างหุ้นส่วน จำกัด)</li> 
            <li>สำเนาสมุดบัญชีธนาคารพร้อม Statement ย้อนหลัง 3 เดือน (หากต้องการใช้ระบบชำระเงินผ่านบัตรเครดิต)</li> 
            <li>ใบอนุญาตประกอบธุรกิจนำเที่ยว โรงแรม หรือรีสอร์ท (ถ้ามี) (กรณีสมัคร eBooking)</li>   
          </ol>
      	</div><br><br>
      	<p align="left"><b>ข้อตกลงและเงื่อนไขการใช้บริการ (ฉบับย่อ)</b></p>
      	<hr>
      	<p class="indent-2">ข้อตกลงและเงื่อนไขการใช้บริการ ได้ถูกสรุปแบบย่อเพื่อให้ทำความเข้าใจได้ง่าย ดังรายละเอียดต่อไปนี้ คุณจะต้องยินยอมรับเงื่อนไขทั้งหมด ด้วยการคลิกถูกที่ตัวเลือก "ยอมรับ" เพื่อดำเนินการในลำดับต่อไปนี้ (<a href="<?php echo base_url();?>aboutCompany/aboutCompany/conditionPage">เงื่อนไขการใช้บริการฉบับเต็ม</a>)</p><br>

        <ol>
          <li>คุณสมบัติของผู้ขาย
            <ul>
              <li>ไม่ดำเนินธุรกิจหรือจำหน่ายสินค้าที่ผิดกฎหมายหรือขัดต่อศีลธรรม อาทิ การพนัน สื่อลามก เหล้า ยาเสพติด สินค้าละเมิดลิขสิทธิ์ ยา(ผิดกฎหมายบางประเทศ)</li>
              <li>ธุรกิจจำหน่ายอาหารเสริม เครื่องสำอาง ผลิตภัณฑ์เกี่ยวกับสุขภาพ ทีมงานจะตรวจสอบเป็นพิเศษและอนุมัติในเฉพาะรายที่สินค้าได้รับการรับรองจาก อย. หรือหน่วยงานที่ถูกต้องตามกฎหมายเท่านั้น</li>
              <li><b>ถ้าตรวจพบภายหลังว่าร้านค้าแอบดำเนินธุรกิจที่ผิดกฎหมายเหล่านี้ เราจะปิดร้านค้านั้นๆ อายัดเงินรายได้ทั้งหมด และแจ้งความดำเนินคดีทางกฎหมายทันที</b></li>
            </ul>
          </li>
          <li>การใช้งานระบบ
            <ul>
              <li>คุณสามารถใช้งานระบบได้ฟรี 15 วัน (หรือตามโปรโมชั่นที่กำหนด) หลังจัดส่งเอกสารเรียบร้อย</li>
              <li>ร้านค้าของคุณจะแสดงผลได้ผ่านโดเมนเนมของคุณเอง เช่น www.yourshopname.com</li>
            </ul>
          </li>
          <li>ข้อตกลงการโอนยอดรายได้
            <ol class="indent-2">
              ในกรณีที่ร้านค้าใช้ระบบไทยอีเพย์รับเงินจากบัตรเครดิตของผู้ซื้อ ทางไทยอีเพย์ระบบจะสรุปยอดรายได้ร้านค้าโดยรวบรวมในรอบ 1 เดือนและ โอนยอดรายได้จำนวนดังกล่าว หลังจากหักค่าธรรมเนียมให้แก่ร้านค้าในวันที่ 10 ของเดือนถัดไป โดยการนำฝากเข้าบัญชีธนาคารที่ร้านค้าแจ้งมา
            </ol>
          </li>
        </ol>

      	<br>
      	<center>
      		<input id="ctl00_CphBody_ChkIAgree" type="checkbox" name="ctl00$CphBody$ChkIAgree" onclick="enableButton();" /><label for="ctl00_CphBody_ChkIAgree">&nbsp;ข้าพเจ้าขอยืนยันว่าได้อ่านและยอมรับข้อตกลงและเงื่อนไขการใช้บริการข้างต้นแล้ว</label>
      		<br>
      		<a href="<?php echo base_url()?>shoppingmall/shoppingmall/regisShoppingmall2"><button type="button" class="btn btn-primary" name="ctl00$CphBody$BtnSubmit"  id="ctl00_CphBody_BtnSubmit" disabled="disabled">Submit</button></a></center>
      	</div><div class="col-sm-2"></div>
      
  </div>
</div>