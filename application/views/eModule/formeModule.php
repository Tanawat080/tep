<script type="text/javascript" src="<?php echo base_url() ?>assets/js/country.js"></script>
<div class="container text-left">    
    <br>
    <div class="row col-sm-12">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">

            <div class="form-group">
                <select class="form-control "  name="category">
                    <option><?php echo label('category', $this); ?></option>
                </select><label>หมวดหมู่ไหนที่บอกถึงธุรกิจของคุณได้ดีที่สุด?</label>
            </div>
            <div class="form-group">
                <?php echo label('subCategory', $this); ?>
                <select class="form-control "  name="subcategory">
                    <option><?php echo label('subCategory', $this); ?></option>
                </select>
            </div>
            <?php echo label('country', $this); ?>
            <select class="form-control " id="country" name="country"></select><br>
            <div class="form-group">
                <?php echo label('company', $this); ?>
                <input type="text" class="form-control " name="Company" placeholder=" <?php echo label('company', $this); ?>" >
            </div>
            <div class="form-group">
                <?php echo label('address', $this); ?> *
                <input type="text" class="form-control " name="Address" placeholder=" <?php echo label('address', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('addressOptional', $this); ?>
                <input type="text" class="form-control" name="AddressOptional" placeholder=" <?php echo label('addressOptional', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('city', $this); ?> *
                <input type="text" class="form-control " name="City" placeholder=" <?php echo label('city', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('state', $this); ?>
                <select class="form-control" name="state" id="state">
                </select>
            </div>
            <div class="form-group">
                <?php echo label('zipCode', $this); ?> *
                <input type="text" class="form-control " name="ZIP" placeholder=" <?php echo label('zipCode', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('phoneNum', $this); ?> *
                <input type="text" class="form-control " name="PhoneNumber" placeholder=" <?php echo label('phoneNum', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('fax', $this); ?>
                <input type="text" class="form-control" name="FaxNumber" placeholder=" <?php echo label('fax', $this); ?>">
            </div>
            <br><br>

        </div>
        <div class="col-sm-12">
            <p align="center">ข้อมูลส่วนนี้จะถูกเก็บเป็นความลับและไม่แสดงผลบนเว็บไซต์ไทยอีเพย์ จะใช้ในการติดต่อระหว่างคุณกับเราเท่านั้น</p><br>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="form-group">
                <?php echo label('name', $this); ?> *
                <input type="text" class="form-control" name="Name" placeholder="<?php echo label('name', $this); ?>" >
            </div>
            <div class="form-group">
                <?php echo label('surname', $this); ?>
                <input type="text" class="form-control" name="Surname" placeholder="<?php echo label('surname', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('mobileNum', $this); ?>
                <input type="text" class="form-control" name="MobileNumber" placeholder="<?php echo label('mobileNum', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('email', $this); ?>
                <input type="email" class="form-control " name="email" placeholder="<?php echo label('email', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('website', $this); ?>
                <input type="url" class="form-control " name="Website" placeholder="<?php echo label('website', $this); ?>"><br/>
            </div>
        </div>
        <div class="col-sm-12"><br>
            <p><b>ข้อมูลบัญชีธนาคาร</b></p>
            <hr>
            <p align="center">&bull; บัญชีธนาคารนี้ใช้สำหรับรับเงินรายได้ของร้านค้า โดยไทยอีเพย์จะโอนยอดรายได้ให้ตามรอบระยะเวลาที่กำหนดเอาไว้</p><br>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="form-group">
                <?php echo label('bank', $this); ?>
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
                </select> 
            </div>
            <div class="form-group">
                <?php echo label('accountNum', $this); ?> *
                <input type="text" class="form-control" name="accountno" placeholder="<?php echo label('accountNum', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('accountType', $this); ?>
                <select name="AccountType" class="form-control ">
                    <option value="S">Savings Deposit</option>
                    <option value="F">Fixed Deposit</option>
                    <option value="C">Current</option>
                </select>
            </div>
            <div class="form-group">
                <?php echo label('accountName', $this); ?> *
                <input type="text" class="form-control " name="accountname" placeholder="<?php echo label('accountName', $this); ?>">
            </div>
            <div class="form-group">
                <?php echo label('branch', $this); ?>
                <input type="text" class="form-control " name="branch" placeholder="<?php echo label('branch', $this); ?>">
            </div>
            <p><?php echo label('area', $this); ?></p>
            <div class="radio">
                <label><input type="radio" value="Bangkok" name="area" checked="checked"><?php echo label('bkk', $this); ?></label>
            </div>
            <div class="radio">
                <label><input type="radio" value="AnotherRegion" name="area" ><?php echo label('anotherRegion', $this) ?></label>
            </div>
            <center><button type="submit" class="btn btn-primary" name="BtnSubmit">Submit</button></center>
        </div>
    </div>
</div>
<script language="javascript">
    populateCountries("country", "state");
    populateCountries("country2");
</script>