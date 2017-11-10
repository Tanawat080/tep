<form >
    <div class="container text-left">

        <br>
        <div class="row col-sm-12">
            <div class="col-sm-12">
                <form method="post" action="#">
                    <div class="text-center">
                        <h1><?php echo label('signIn', $this); ?></h1>
                        <hr width="10%">
                        <br/>
                    </div>
                    <p align="center" class="indent"><?php echo label('content1', $this); ?></p><br>
                    </div><br><br>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4 border-right-blue">
                        <h4><?php echo label('oldBuyer', $this); ?></h4>

                        <p align="left"><?php echo label('contentOldBuyer', $this); ?></p>

                        <div class="form-group">
                            <?php //echo label('email', $this); ?>
                            <input type="email" class="form-control" name="email" placeholder="<?php echo label('email', $this); ?>" required>
                        </div>
                        <div class="form-group">
                            <?php //echo label('password', $this); ?>
                            <input type="password" class="form-control" name="password" placeholder="<?php echo label('password', $this); ?>" required>
                        </div>
                        <p align="right"><a href="<?php echo base_url(); ?>buyer/buyer/forgotPassword"><?php echo label('forgetPassword', $this); ?>?</a></p>
                        <center><button type="submit" class="btn btn-primary">Sign In</button></center>
                        <br/>
                </form>
            </div>
            <div class="col-sm-4">
                <h4><?php echo label('newBuyer', $this); ?></h4>

                <P align="left"><?php echo label('contentNewBuyer', $this); ?></P>

                <center><a href="<?php echo base_url() ?>/buyer/buyer/regisBuyer"><button type="button" class="btn btn-primary">Create Account</button></a></center>
            </div>

        </div>
    </div>
    <br>
    </div>
    <br>
</form>
