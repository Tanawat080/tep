<script type="text/javascript" src="<?php echo base_url() ?>assets/js/country.js"></script>
<form action="">
<div class="container text-left">    
    <br>
    <div class="row col-sm-12">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

            <h4>ข้อมูลที่ตั้งร้าน</h4><br/>
            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('category', $this); ?> : </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <select class="form-control "  name="category" required>
                    <option value=""><?php echo label('category', $this); ?></option>
                    </select>
                    <label>หมวดหมู่ไหนที่บอกถึงธุรกิจของคุณได้ดีที่สุด?</label>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('subCategory', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <select class="form-control "  name="subcategory" required>
                    <option value=""><?php echo label('subCategory', $this); ?></option>
                    </select>
                </div>
            </div>

            
            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('country', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <select class="form-control " id="country" name="country" required></select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('company', $this); ?> : </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control " name="Company" >                  
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('addressOptional', $this); ?> : </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control" name="AddressOptional">                       
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('city', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control " name="City"  required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('state', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <select class="form-control" name="state" id="state" required>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('zipCode', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control " name="ZIP"  required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('phoneNum', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control " name="PhoneNumber"  required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('fax', $this); ?> : </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control" name="FaxNumber" >
                </div>
            </div>
            <br><br>
        </div>
        <div class="col-sm-12">
            <p align="center">ข้อมูลส่วนนี้จะถูกเก็บเป็นความลับและไม่แสดงผลบนเว็บไซต์ไทยอีเพย์ จะใช้ในการติดต่อระหว่างคุณกับเราเท่านั้น</p><br>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('name', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control" name="Name"  required >
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('surname', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control" name="Surname"  required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('mobileNum', $this); ?> : </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control" name="MobileNumber" >
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('email', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="email" class="form-control " name="email"  required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('website', $this); ?> : </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="url" class="form-control " name="Website" >
                </div>
            </div>
        </div>
        <div class="col-sm-12"><br>
            
        </div>
        
        <div class="col-sm-8 col-sm-offset-2">
            <h4>ข้อมูลบัญชีธนาคาร</h4>
            <p align="center">&bull; บัญชีธนาคารนี้ใช้สำหรับรับเงินรายได้ของร้านค้า โดยไทยอีเพย์จะโอนยอดรายได้ให้ตามรอบระยะเวลาที่กำหนดเอาไว้</p>
            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('bank', $this); ?> : </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <select name="bank" id="ctl00_CphBody_DdlBank" class="form-control" required>
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
                    </select> 
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('accountNum', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control" name="accountno"  required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('accountType', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <select name="AccountType" class="form-control " required>
                        <option value="S">Savings Deposit</option>
                        <option value="F">Fixed Deposit</option>
                        <option value="C">Current</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('accountName', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control " name="accountname" required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('branch', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <input type="text" class="form-control " name="branch"  required>
                </div>
            </div>

             <div class="col-sm-4">
                <div class="form-group">  
                    <p><?php echo label('area', $this); ?> :* </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">  
                    <div class="radio">
                        <label><input type="radio" value="Bangkok" name="area" checked="checked"><?php echo label('bkk', $this); ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="AnotherRegion" name="area" ><?php echo label('anotherRegion', $this) ?>
                        </label>
                    </div>
                </div>
            </div>

            <center>
                <button type="submit" class="btn btn-primary" name="BtnSubmit">Submit</button>
            </center>
        </div>
    </div>
</div>
<br>
<br>
</form>
<script language="javascript">
    populateCountries("country", "state");
    populateCountries("country2");
</script>