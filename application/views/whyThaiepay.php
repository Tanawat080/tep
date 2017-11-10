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


<style>

* {
  box-sizing: border-box;
}
.row > .column {
  padding: 0 8px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column {
  float: left;
  width: 25%;
}
/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}
/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1000px;
}
/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}
.mySlides {
  display: none;
}
.cursor {
  cursor: pointer
}
/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  color:black;
  background-color: rgba(0, 0, 0, 0.2);
}
/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
img {
  margin-bottom: -4px;
}
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}
.demo {
  opacity: 0.6;
}
.active,
.demo:hover {
  opacity: 1;
}
img.hover-shadow {
  transition: 0.3s
}
.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>
</head>

<body>

<div class="container text-center">

  <br>
  <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-12">
        <div class="text-center">
          <h1 ><?= label('header',$this);?></h1>
          <hr width="10%">
          <br/>
        </div>
        <p align="left" class="indent"><?= label('content1',$this);?></p><br><br>
        </div>


              <div class="col-sm-12" align="left">

                    <h4>
                        <?= label('title1',$this);?></h4>
                    <div class="col-sm-8 indent-2">
                        <p><?= label('content1-title1',$this);?></p>
                        <p><?= label('content2-title1',$this);?></p>
                        <p><?= label('content3-title1',$this);?></p>
                    </div>
                    <div class="col-sm-4">
                        <img id="myImg" src="../assets/images/thaiepayv1.jpg" alt="ปี 2003 THAIEPAY ได้เปิดตัวเว็บไซต์เวอร์ชันแรก" width="300" height="200">
                          <!-- The Modal -->
                          <div id="myModal1" class="modal1">
                            <span class="close">&times;</span>
                            <img class="modal1-content1" id="img01">
                            <div id="caption1"></div>
                          </div><i><?= label('detailPic',$this);?></i>

                    </div>
                    <div >
                    </div>

                    <br />
                    <br />


                  </div>

            <div class="col-sm-12" align="left"><br><br>
              <h4>
                        <?= label('title2',$this);?></h4>


                        <div class="row">
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_1.png" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_2.png" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_3.png" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_4.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_5.png" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_6.png" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_7.png" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_8.png" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                          </div>
                          <div class="column">
                            <img src="../assets/images/whythaiepay/eshop_9.png" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                          </div>
                        </div>

                        <div id="myModal" class="modal">
                          <span class="close cursor" onclick="closeModal()">&times;</span>
                          <div class="modal-content">

                            <div class="mySlides">
                              <div class="numbertext">1 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_1.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">2 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_2.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">3 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_3.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">4 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_4.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">5 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_5.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">6 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_6.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">7 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_7.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">8 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_8.png" style="width:100%">
                            </div>

                            <div class="mySlides">
                              <div class="numbertext">9 / 9</div>
                              <img src="../assets/images/whythaiepay/eshop_9.png" style="width:100%">
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <div class="caption-container">
                              <p id="caption"></p>
                            </div>


                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_1.png" style="width:100%" onclick="currentSlide(1)" alt="มีธีมและรูปแบบร้านค้าออนไลน์ให้เลือกมากมาย ดีไซน์ด้วยมืออาชีพน่าใช้งานและมีความน่าเชื่อถือ">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_2.png" style="width:100%" onclick="currentSlide(2)" alt="ดีกับทุกเซิร์ซเอนจินตามหลักการของ SEO เปิดได้สวยงามทุกเบราเซอร์">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_3.png" style="width:100%" onclick="currentSlide(3)" alt="พัฒนาบนเทคโนโลยีใหม่ล่าสุด ง่ายต่อการใช้งาน">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_4.png" style="width:100%" onclick="currentSlide(4)" alt="ทำงานได้กับระบบวิธีการจัดส่งหลากหลาย อาทิ TNT, UPS และไปรษณีย์ไทย ค่าจัดส่งถูกตั้งค่าไว้อย่างถูกต้องพร้อมใช้งานได้ทันที">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_5.png" style="width:100%" onclick="currentSlide(5)" alt="สามารถเปิดใช้งานระบบชำระเงินออนไลน์ได้ทั้งระบบของไทยอีเพย์, PayPal, และอื่นๆได้ง่ายดาย">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_6.png" style="width:100%" onclick="currentSlide(6)" alt="ระบบยี่ห้อสินค้า ช่วยให้ลูกค้าสามารถตรวจดูสินค้าตามยี่ห้อ อำนวยความสะดวกในการค้นหาสินค้าได้ง่ายขึ้น">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_7.png" style="width:100%" onclick="currentSlide(7)" alt="ระบบหลายสกุลเงิน สามารถตั้งอัตราแลกเปลี่ยนได้เอง">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_8.png" style="width:100%" onclick="currentSlide(8)" alt="สร้างหน้าเว็บเพจเนื้อหาเพิ่มเติมและเขียนบล็อกได้ไม่จำกัด">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="../assets/images/whythaiepay/eshop_9.png" style="width:100%" onclick="currentSlide(9)" alt="ให้ระบบคำนวณอันดับสินค้าขายดีอัตโนมัติหรือ ตั้งอันดับสินค้าขายดีได้เอง และสามารถกำหนดแยกตามหมวดหมู่ได้อีกด้วย">
                            </div>
                          </div>
                        </div>

            </div><i><?= label('examplePic',$this);?></i>

            <div  class="col-sm-12" align="left"><br>
              <li><?= label('content1-title2',$this);?></li>
              <li><?= label('content2-title2',$this);?></li>
              <li><?= label('content3-title2',$this);?></li>
              <li><?= label('content4-title2',$this);?></li>
            </div>

      <div class="col-sm-12" align="left"><br><br>

                    <h4><?= label('title3',$this);?></h4>
                    <p class="indent"><?= label('content4-title2',$this);?></p>
        <ul>
          <li><?= label('content1-title3',$this);?></li>
          <li><?= label('content2-title3',$this);?></li>
        </ul>
        <p class="indent"><?= label('content3-title3',$this);?></p>
        <p class="indent"><?= label('content4-title3',$this);?></p>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
          <tr class="info">
            <th><?= label('th1-table',$this);?></th>
            <th><?= label('th2-table',$this);?></th>
            <th><?= label('th3-table',$this);?></th>
            <th><?= label('th4-table',$this);?></th>
            <th><?= label('th5-table',$this);?></th>
          </tr>
          <tr>
            <td><?= label('td-thaiepay',$this);?></td>
            <td><?= label('td-stable',$this);?></td>
            <td>3.60% Visa, MasterCard 4.75% AMEX</td>
            <td><?= label('th2-table',$this);?> + 3.60%, 4.75%</td>
            <td><?= label('th2-table',$this);?> + 3.60%, 4.75%</td>
          </tr>
          <tr>
            <td><?= label('td-others',$this);?></td>
            <td>-</td>
            <td> 3.99% + 49 <?= label('td-baht-order',$this);?></td>
            <td><?= label('th2-table',$this);?> <font color="red"><b>4,900</b></font> <?= label('td-baht',$this);?> + 3.99%</td>
            <td><?= label('th2-table',$this);?> <font color="red"><b>24,500</b></font> <?= label('td-baht',$this);?> + 3.99%</td>
          </tr>
          <caption ><?= label('caption-table',$this);?></caption>
          </table>
        </div>
      </div>

      <div class="col-sm-12" align="left"><br>

                    <h4><?= label('title4',$this);?></h4>
                    <ul class="normal">
                        <li><?= label('content1-title4',$this);?></li>
                        <li><?= label('content2-title4',$this);?></li>
                        <li><?= label('contetn3-title4',$this);?></li>
                    </ul>
                    </ul>
                    <div class="link">
                        <a id="ctl00_CphBody_LnkLearnMore" title="อ่านรายละเอียดเพิ่มเติมเกี่ยวกับความปลอดภัย &amp;raquo;" href="securities"><?= label('learnMore',$this);?> &raquo;</a></div>
                    <div class="clear">
                    </div>
                    <br/>
                    <br/>
      </div>


            <br>
</div>

</div>
</div>

</div>




<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

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
