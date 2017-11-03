<form >
    <div class="container text-left">    

        <br>
        <div class="row col-sm-12">
            <div class="col-sm-12">
                <form method="post" action="#">
                    <div class="text-center">
                        <h1>เข้าสู่ระบบ</h1>
                        <hr width="10%">
                        <br/>
                    </div>
                    <p align="center" class="indent">กรุณากรอกชื่ออีเมลและรหัสผ่านเพื่อเข้าสู่ระบบ หรือหากไม่มีบัญชีกับเรามาก่อน โปรดทำการลงทะเบียน</p><br>
                    </div><br><br>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4 border-right-blue">
                        <h4>ผู้ซื้อเก่า</h4>
                        
                        <p align="left">โปรดกรอกอีเมลและรหัสผ่าน เพื่อเข้าสู่ระบบผู้ซื้อ</p>

                        <div class="form-group">
                            <?php //echo label('email', $this); ?>
                            <input type="email" class="form-control" name="email" placeholder="<?php echo label('email', $this); ?>" required>
                        </div>
                        <div class="form-group">
                            <?php //echo label('password', $this); ?>
                            <input type="password" class="form-control" name="password" placeholder="<?php echo label('password', $this); ?>" required>
                        </div>
                        <p align="right"><a href="<?php echo base_url(); ?>buyer/buyer/forgotPassword">ลืมรหัสผ่าน?</a></p>
                        <center><button type="submit" class="btn btn-primary">Sign In</button></center>
                </form>
            </div>
            <div class="col-sm-4">
                <h4>ผู้ซื้อใหม่</h4>
                
                <P align="left">สำหรับผู้ซื้อใหม่ โปรดคลิก Create Account เพื่อทำการลงทะเบียน</P>

                <center><a href="<?php echo base_url() ?>/buyer/buyer/regisBuyer"><button type="button" class="btn btn-primary">Create Account</button></a></center>
            </div>

        </div>
    </div>
    <br>
    </div>
    <br>
</form>