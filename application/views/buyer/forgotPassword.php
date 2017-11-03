<div class="container text-left">    

    <br>
    <div class="row col-sm-12">
        <div class="text-center">
                <h1>ลืมรหัสผ่าน?</h1>
                <hr width="10%">
            </div>
            <br>
        </div>
        <div class="col-sm-5 col-sm-offset-1 border-right-blue">
            <h4>ผู้ซื้อลืมรหัสผ่าน?</h4>
            <p class="indent">หากคุณจำรหัสผ่านที่ใช้เข้าระบบผู้ซื้อไม่ได้ กรุณากรอกชื่ออีเมลลงในแบบฟอร์มด้านล่างนี้ ระบบจะจัดส่งรหัสผ่านให้คุณทางอีเมล</p>
             <form action="">
                <div class="form-group">
                    <?php //echo label('email', $this); ?>
                    <input type="email" class="form-control" name="email" placeholder="<?php echo label('email', $this); ?>" required>
                </div>
                <center><button type="submit" class="btn btn-primary">Send Password</button></center><br/><br/>
            </form>
        </div>
       
        <div class="col-sm-5">
            <h4>ร้านค้าลืมรหัสผ่าน?</h4>
            
            <p class="indent">หากคุณจำรหัสผ่านที่ใช้เข้าระบบจัดการร้านค้าไม่ได้ ให้เลือกรูปแบบบริการที่คุณใช้งานแล้วกรอกข้อมูล MerchantID หรือชื่อร้าน ระบบจะจัดส่งรหัสผ่านให้คุณทางอีเมล</p>
               <form action="">
                <div class="form-group">
                    <select class="form-control" id="sel1" required>
                        <option value="">รูปแบบบริการ / Service Type</option>
                    </select>
                </div>
                <div class="form-group">
                    <?php //echo label('shopName', $this); ?>
                    <input type="text" class="form-control" name="shopname" placeholder="<?php echo label('shopName', $this); ?>" required><br>
                    <center><button type="submit" class="btn btn-primary">Send Password</button></center>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br>