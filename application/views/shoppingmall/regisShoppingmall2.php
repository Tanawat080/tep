<div class="container text-left">    

    <br>
    <div class="row col-sm-12">
        <form action="">
            <div class="col-sm-12">
                <h1>ลงทะเบียน Shopping Mall</h1><br><br>
                <p class="indent">ตั้งชื่อร้านและเลือกธีมที่เหมาะสมกับร้านค้าของคุณได้จากตัวเลือกด้านล่างนี้ คุณสามารถคลิกที่ปุ่ม Preview เพื่อดูภาพรวมของธีมนั้นๆได้ (สามารถเปลี่ยนธีมผ่านระบบ Shop Admin ได้ภายหลัง)</p>
                <div class="messageblue">
                    <div class="idea">
                        ชื่อร้านค้าจะต้องประกอบไปด้วยตัวอักษรหรือตัวเลขตั้งแต่ 5 ตัวอักษรแต่สูงสุดไม่เกิน 30 ตัวอักษร</div>
                </div><br>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
                <div class="col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon">https://shop.thaiepay.com/</span>
                        <input id="shopName" type="text" class="form-control" name="shopName" placeholder="Shop Name" required>
                    </div><br/>
                </div>
                
                    <div class="col-sm-4">
                        <div class="form-group">  
                            <p><?php echo label('password', $this); ?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input id="password" type="password" class="form-control" name="password"  required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">  
                            <p><?php echo label('rePassword', $this);?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <input id="repassword" type="password" class="form-control" name="repassword"  required>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">  
                            <p><?php echo label("package",$this);?> : </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">  
                            <select class="form-control" id="sel1" required>
                                <option value="">แพ็คเกจ / Package</option>
                            </select>
                        </div>
                    </div><br/>
            </div>

            <div class="col-sm-2">
            </div>
            <br>
            <div class="col-sm-12">
                <div class="border-2">
                    <p align="center"><a href="">main_theme</a></p>
                    <center>
                        <div class="radio">
                            <label><input type="radio" name="main_theme" checked="checked">main_theme</label>
                        </div>
                        <a href=""><button type="button" class="btn btn-success" name="Preview"  id="Preview" >Preview</button></a>
                    </center><br/>
                </div>
                    <br/>
                    <center>
                    <button type="submit" class="btn btn-primary" name="Submit"  id="Submit" >Submit</button>
            </div>
        </form>
    </div>
</div>
<br><br>