<div class="container text-left">    

    <br>
    <div class="row col-sm-12">
        <div class="col-sm-12">
            <h1 align="left">ลืมรหัสผ่าน?</h1>
            <br><br>
            <p ><B>ผู้ซื้อลืมรหัสผ่าน?</B></p>
            <hr>
            <p class="indent">หากคุณจำรหัสผ่านที่ใช้เข้าระบบผู้ซื้อไม่ได้ กรุณากรอกชื่ออีเมลลงในแบบฟอร์มด้านล่างนี้ ระบบจะจัดส่งรหัสผ่านให้คุณทางอีเมล</p>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <?php echo label('email', $this); ?>
                <input type="email" class="form-control" name="email" placeholder="<?php echo label('email', $this); ?>">
            </div>
            <center><a href="#"><button type="button" class="btn btn-primary">Send Password</button></a></center>
        </div>
        <div class="col-sm-12">
            <br>
            <br>
            <p ><B>ร้านค้าลืมรหัสผ่าน?</B></p>
            <hr>
            <p class="indent">หากคุณจำรหัสผ่านที่ใช้เข้าระบบจัดการร้านค้าไม่ได้ ให้เลือกรูปแบบบริการที่คุณใช้งานแล้วกรอกข้อมูล MerchantID หรือชื่อร้าน ระบบจะจัดส่งรหัสผ่านให้คุณทางอีเมล</p>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <select class="form-control" id="sel1">
                    <option>รูปแบบบริการ / Service Type</option>
                </select>
            </div>
            <div class="form-group">
                <?php echo label('shopName', $this); ?>
                <input type="text" class="form-control" name="shopname" placeholder="<?php echo label('shopName', $this); ?>"><br>
                <center><a href="#"><button type="button" class="btn btn-primary">Send Password</button></a></center>
            </div>
        </div>
    </div>
</div>