<script type="text/javascript" src="<?php echo base_url() ?>assets/js/country.js"></script>

<div class="container text-left">    
    <br>
    <div class="row col-sm-12">
        <div class="col-sm-12">
            <h1>ผู้ซื้อใหม่ (ลงทะเบียน)</h1><br><br>
            <p class="indent">โปรดกรอกข้อมูลของคุณลงในฟอร์มด้านล่างนี้  (<?php echo label('ps', $this); ?>)</p>
            <br>
            <div class="col-sm-6">
                <div class="form-group"> 
                    <p><?php echo label('email', $this); ?> *</p>
                    <input type="email" class="form-control" name="email" placeholder="<?php echo label('email', $this); ?>">
                </div>
                <div class="form-group">    
                    <p><?php echo label('password', $this); ?> *</p>
                    <input type="password" class="form-control" name="password" placeholder="<?php echo label('password', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('rePassword', $this); ?> *</p>
                    <input type="password" class="form-control " name="repassword" placeholder="<?php echo label('rePassword', $this); ?>">
                </div>
                <div class="form-group">  
                    <input id="ctl00_CphBody_ChkMailingList" type="checkbox" name="ctl00$CphBody$ChkMailingList" /><label for="ctl00_CphBody_ChkMailingList">&nbsp;<?php echo label('recieveNews', $this); ?></label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">  
                    <p><?php echo label('country', $this); ?></p>
                    <select class="form-control" id="country" name="country"></select>
                </div>
                <div class="form-group">  
                    <p><?php echo label('name', $this); ?> *</p>
                    <input type="text" class="form-control " name="Name" placeholder="<?php echo label('name', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('surname', $this); ?> *</p>
                    <input type="text" class="form-control " name="Surname" placeholder="<?php echo label('surname', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('company', $this); ?></p>
                    <input type="text" class="form-control " name="Company" placeholder="<?php echo label('company', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('address', $this); ?> *</p>
                    <input type="text" class="form-control " name="Address" placeholder="<?php echo label('address', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('addressOptional', $this); ?></p>
                    <input type="text" class="form-control" name="AddressOptional" placeholder="<?php echo label('addressOptional', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('city', $this); ?> *</p>
                    <input type="text" class="form-control" name="city" placeholder="<?php echo label('city', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('state', $this); ?></p>
                    <select class="form-control" name="state" id="state"></select>
                </div>
                <div class="form-group">  
                    <p><?php echo label('zipCode', $this); ?> *</p>
                    <input type="text" class="form-control " name="zipCode" placeholder="<?php echo label('zipCode', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('phoneNum', $this); ?> *</p>
                    <input type="text" class="form-control " name="phoneNumber" placeholder="<?php echo label('phoneNum', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('mobileNum', $this); ?></p>
                    <input type="text" class="form-control" name="mobileNumber" placeholder="<?php echo label('mobileNum', $this); ?>">
                </div>
                <div class="form-group">  
                    <p><?php echo label('fax', $this); ?></p>
                    <input type="text" class="form-control" name="faxNum" placeholder="<?php echo label('fax', $this); ?>">
                </div>
                <center><a href=""><button type="button" class="btn btn-primary">Create Account</button></a>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    populateCountries("country", "state");
    populateCountries("country2");
</script>