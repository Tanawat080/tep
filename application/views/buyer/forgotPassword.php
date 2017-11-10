<div class="container text-left">

    <br>
    <div class="row col-sm-12">
        <div class="text-center">
                <h1><?= label('header', $this); ?></h1>
                <hr width="10%">
            </div>
            <br>
        </div>
        <div class="col-sm-5 col-sm-offset-1 border-right-blue">
            <h4><?= label('buyerForget', $this); ?>?</h4>
            <p class="indent"><?= label('contentBuyer', $this); ?></p>
             <form action="">
                <div class="form-group">
                    <?php //echo label('email', $this); ?>
                    <input type="email" class="form-control" name="email" placeholder="<?php echo label('email', $this); ?>" required>
                </div>
                <center><button type="submit" class="btn btn-primary">Send Password</button></center><br/><br/>
            </form>
        </div>

        <div class="col-sm-5">
            <h4><?= label('merchantForget', $this); ?></h4>

            <p class="indent"><?= label('contentMerchant', $this); ?></p>
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
