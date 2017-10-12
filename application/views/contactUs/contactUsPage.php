<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal1-content1 {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption1 {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal1-content1, #caption1 {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close1 {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal1-content1 {
        width: 100%;
    }
}
</style>


			
</head>

<form >
<body>
<div class="container text-center">    

  <br>
  <div class="row">
    <div class="col-sm-12">
      
      	
      	<div class="col-sm-12">
      	<h1 align="left">ติดต่อเรา</h1>
      	<p align="left">&nbsp;&nbsp;&nbsp;ลูกค้าทุกท่านสามารถติดต่อ THAIEPAY ได้หลายทาง ทั้งเดินทางด้วยตนเองมาที่บริษัท ติดต่อผ่านโทรศัพท์ หรือติดต่อทางอีเมล ซึ่งเจ้าหน้าที่ของเราทุกคน ยินดีให้ข้อมูล คำปรึกษา พร้อมความช่วยเหลือเป็นอย่างดี รายละเอียดช่องทางในการติดต่อกับเราเป็นดังนี้
		</p><br><br>
        </div>



            <div class="col-sm-6" align="left">
             <h3>ที่อยู่และแผนที่</h3>
             <hr>
                <h4>บริษัท เพย์ โซลูชั่น จำกัด</h4>
        		<p>&nbsp;&nbsp;&nbsp;522 ซอยรัชดาภิเษก 26  ถนนรัชดาภิเษก แขวงสามเสนนอก เขตห้วยขวาง  กรุงเทพฯ 10310 ประเทศไทย <br />
        		โทร 0 2515  2324 ,  09 5372 2151, 09 5372 2152, 09 5372 2153  <br />
				แฟกซ์  0 2541 4098 </p>
				 <p>ติดต่อทาง LINE@ :<a href="https://line.me/R/ti/p/%40pay.sn" target="_blank"> คลิกที่นี่</a></p>
             <h5> เลขประจำตัวผู้เสียภาษีอากร  0-1055-56096-53-7</h5><br />
                <h5>อีเมล:</h5>
                <fieldset>
                <ul>
                    <li><label>สอบถามข้อมูล</label><a id="ctl00_CphBody_LnkEmailInfo" href="contactus.aspx#contactform"> info@thaiepay.com</a></li>
                    <li><label>ฝ่ายดูแลลูกค้า</label><a id="ctl00_CphBody_LnkEmailSupport" href="contactus.aspx#contactform"> support@thaiepay.com</a></li>
                    <li><label>ฝ่ายบัญชี</label><a id="ctl00_CphBody_LnkEmailBilling" href="contactus.aspx#contactform"> billing@thaiepay.com</a></li>
                
                </ul>
                </fieldset>
            </div><br><br><br><br><br><br><br><br><br><br><br><br>


            <div class="col-sm-6">
                      

                        <img id="myImg" title="แผนที่ THAIEPAY (คลิกเพื่อขยายขนาดภาพใหญ่)" src="../../assets/images/maps_TH.jpg" alt="แผนที่ THAIEPAY (คลิกเพื่อขยายขนาดภาพใหญ่)" width="300" height="200">

                          <!-- The Modal -->
                          <div id="myModal1" class="modal1">
                            <span class="close">&times;</span>
                            <img class="modal1-content1" id="img01">
                            <div id="caption1"></div>
                          </div>

                    </div>


			<div class ="col-sm-12" align= "Center">
			
            <h4>Google Maps</h4>
           <iframe width="650" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=th&amp;geocode=&amp;q=522+%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94+%E0%B8%94%E0%B8%AD%E0%B8%97+%E0%B8%84%E0%B8%AD%E0%B8%A1+%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%A3%E0%B8%B1%E0%B8%8A%E0%B8%94%E0%B8%B2%E0%B8%A0%E0%B8%B4%E0%B9%80%E0%B8%A9%E0%B8%81+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%99%E0%B8%AD%E0%B8%81+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87++%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%AF+&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=38.911557,86.572266&amp;ie=UTF8&amp;hq=522+%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94+%E0%B8%94%E0%B8%AD%E0%B8%97+%E0%B8%84%E0%B8%AD%E0%B8%A1+%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%A3%E0%B8%B1%E0%B8%8A%E0%B8%94%E0%B8%B2%E0%B8%A0%E0%B8%B4%E0%B9%80%E0%B8%A9%E0%B8%81+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%99%E0%B8%AD%E0%B8%81+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87++%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%AF&amp;hnear=&amp;radius=15000&amp;ll=13.799594,100.575842&amp;spn=0.011669,0.021136&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4992800752286621502&amp;output=embed"></iframe><br />
           <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=th&amp;geocode=&amp;q=522+%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94+%E0%B8%94%E0%B8%AD%E0%B8%97+%E0%B8%84%E0%B8%AD%E0%B8%A1+%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%A3%E0%B8%B1%E0%B8%8A%E0%B8%94%E0%B8%B2%E0%B8%A0%E0%B8%B4%E0%B9%80%E0%B8%A9%E0%B8%81+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%99%E0%B8%AD%E0%B8%81+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87++%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%AF+&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=38.911557,86.572266&amp;ie=UTF8&amp;hq=522+%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94+%E0%B8%94%E0%B8%AD%E0%B8%97+%E0%B8%84%E0%B8%AD%E0%B8%A1+%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%A3%E0%B8%B1%E0%B8%8A%E0%B8%94%E0%B8%B2%E0%B8%A0%E0%B8%B4%E0%B9%80%E0%B8%A9%E0%B8%81+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99%E0%B8%99%E0%B8%AD%E0%B8%81+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87++%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%AF&amp;hnear=&amp;radius=15000&amp;ll=13.799594,100.575842&amp;spn=0.011669,0.021136&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4992800752286621502" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>
           <input type="hidden" name="ctl00$CphBody$HdnLang" id="ctl00_CphBody_HdnLang" value="TH" />

			</div>


			<div class="col-sm-12" align = "center" >
				<a name="contactform"></a><br><br>
            <h3>แบบฟอร์มกรอกข้อมูลเพื่อติดต่อเรา</h3><hr>
            <P align = "left"> &nbsp;&nbsp;&nbsp;คุณสามารถกรอกข้อมูลคำถาม หรือข้อความที่ต้องการติดต่อทีมงานของเราผ่านแบบฟอร์มดังต่อไปนี้ ระบบจะจัดส่งข้อความของคุณไปยังเจ้าหน้าที่ของเราโดยตรง และจะดำเนินการในลำดับต่อไป</p>
    		

            </div >

            <div class="col-sm-5" align = "center">
	    
                
                <ul ><br>
                	

                	<div class="form-group" >
					<input type="text" class="form-control" name="ctl00$CphBody$TxtName" placeholder="ชื่อ-นามสกุล (จำเป็น)" >
					</div>
					<div class="form-group">
					<input type="text" class="form-control" name="ctl00$CphBody$TxtPhoneNumber" placeholder="เบอร์โทร (จำเป็น)" >
					</div>
					<div class="form-group">
					<input type="text" class="form-control" name="ctl00$CphBody$TxtEmail" placeholder="อีเมล (จำเป็น)" >
					</div>
                
                      <div class="form-group">
		                <select  class="form-control" name="ctl00$CphBody$DdlSubject"  onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$CphBody$DdlSubject\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_CphBody_DdlSubject">
						<option selected="selected" value="0">หัวข้อ</option>
						<option value="7"></option>


						</select>
					</div>			                
			        <div class="form-group"> 
	
							<textarea class="form-control" rows="4" cols="50" name="ctl00$CphBody$TxtBody" id="ctl00_CphBody_TxtBody"  placeholder="รายละเอียด"></textarea>


		            </div>
			                
			               
							  
			  
					<div class="form-group"> 

			   			<span id="ctl00_CphBody_ucCaptcha"><img alt = 'Captcha' src = '../../assets/images/captcha/Image.ashx?key=LvKnzaSvIEQZTOwB3%2f2HcGakvP0xolCJmiznsB7kN88%3d&color=%23FF0000' align = 'Middle' /><input  type = 'hidden' name = 'ucCaptcha_Expression' value = 'EmbT5diGC8n6th72RjWlIA==' /></span><input class="form-control"  name="ctl00$CphBody$Txtcapcha" type="text" id="ctl00_CphBody_Txtcapcha" placeholder="captcha"/>
			  
			 		</div> 

			 		<button  type="submit" class="btn btn-primary" >Submit</button><br><br>
			 	
			         	    

			                </ul>
			                
			               
			                
			               
			                
			</div>
			            
            

			</div>	





      </div>
      </div>
  </div>
</div>
<script>
// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal1.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal1.style.display = "none";
}
</script>
    
</body>
</html>


