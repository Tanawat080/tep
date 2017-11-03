<script type="text/javascript" src="<?php echo base_url() ?>assets/js/country.js"></script>

<div class="container text-left" >    
    <br>
    <div class="row col-sm-12">
        <div class="col-sm-12">
            <form method="post" action="" >
                <div class="text-center">
                    <h1>ผู้ซื้อใหม่ (ลงทะเบียน)</h1>
                    <hr width="10%">
                    <br>
                    <p>โปรดกรอกข้อมูลของคุณลงในฟอร์มด้านล่างนี้  (<?php echo label('ps', $this); ?>)</p>
                </div>
                
                <br>

                
                <div class="col-sm-8 col-sm-offset-2">

                    <h4>บัญชีผู้ใช้</h4>
                    <br/>
                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('email', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="email" class="form-control" name="email"  required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('password', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="password" class="form-control" name="password"  required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('rePassword', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                           <input type="password" class="form-control " name="repassword"  required>
                        </div>
                    </div>

                    <div class="form-group">
                    <center>  
                        <input id="ctl00_CphBody_ChkMailingList" type="checkbox" name="ctl00$CphBody$ChkMailingList" /><label for="ctl00_CphBody_ChkMailingList">&nbsp;<?php echo label('recieveNews', $this); ?></label>
                    </center>
                    </div>
                            <h4>ข้อมูลบัญชีผู้ใช้</h4>
                            <br>
                        <div class="col-sm-4 ">

                            <div class="form-group"> 
                                <p><?php echo label('country', $this); ?> : </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group"> 
                                <select class="form-control" id="country" name="country" required></select>
                            </div>
                        </div>
                    
                    
                        <div class="col-sm-4 ">
                            <div class="form-group">  
                                <p><?php echo label('name', $this); ?> :* </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">  
                                <input type="text" class="form-control " name="Name"  required>
                            </div>
                        </div>


                        <div class="col-sm-4 ">
                            <div class="form-group">  
                                <p><?php echo label('surname', $this); ?> :* </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">  
                                <input type="text" class="form-control " name="Surname"  required>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 ">
                            <div class="form-group">  
                                <p><?php echo label('company', $this); ?> : </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">  
                                <input type="text" class="form-control " name="Company" >
                            </div>
                        </div>

                    <div class="col-sm-4 ">
                            <div class="form-group">  
                                <p><?php echo label('address', $this); ?> :* </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">  
                                <input type="text" class="form-control " name="Address"  required>
                            </div>
                        </div>


                    <div class="col-sm-4 ">
                        <div class="form-group">  
                                <p><?php echo label('addressOptional', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="text" class="form-control" name="AddressOptional" >
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('city', $this); ?> :* </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="text" class="form-control" name="city"  required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('state', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <select class="form-control" name="state" id="state" required></select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('zipCode', $this); ?> :* </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="text" class="form-control " name="zipCode"  required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('phoneNum', $this); ?> :* </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="text" class="form-control " name="phoneNumber"  required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('mobileNum', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="text" class="form-control" name="mobileNumber" >
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                                <p><?php echo label('fax', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input type="text" class="form-control" name="faxNum" >
                        </div><br>
                    </div>
                     <center><button type="submit" class="btn btn-primary">Create Account</button>
            </div> 
             <div class="col-sm-2"></div>
        </div>
        </form>
    </div>
</div>
<br><br>
<script language="javascript">
    populateCountries("country", "state");
    populateCountries("country2");
</script>