<div class="container text-left">

  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">
        <div class="text-center">
      	   <h1><?= label('header',$this);?></h1>
           <hr width="10%">
           <br/>
        </div>
      	<p class="indent"><?= label('content1',$this);?>ี้</p><br>
      	<h4><?= label('paymentMethod',$this);?></h4>
      	<p class="indent"><?= label('contentPaymentMethod',$this);?></p>

      	<br>
        <ol>
          <li><b><?= label('paymentCreditCard',$this);?></b>
            <ol>
              <p><?= label('contentpaymentCreditCard',$this);?> <img src="<?php echo base_url();?>assets/images/icons/allcards.png"> <?= label('contentpaymentCreditCard2',$this);?></p>
              <p ><B><?= label('shoppingMall',$this);?> :</B></p>

              <p class="border-1">
                <a href="https://shopadmin.thaiepay.com/renewserviceonline.aspx ">https://shopadmin.thaiepay.com/renewserviceonline.aspx</a>
              </p>
              <p ><B><?= label('eModules',$this);?> :</B></p>
              <p class="border-1">
                <a href="https://control.thaiepay.com/renewserviceonline.aspx ">https://control.thaiepay.com/renewserviceonline.aspx </a>
              </p>

            </ol>
          </li>
          <li><b><?= label('payByCash',$this);?></b>
            <ol>
              <p><?= label('address',$this);?></p>
              <p><?= label('address2',$this);?></p>
            </ol>
          </li>
          <li><b><?= label('payByATM',$this);?></b>
            <ol>
              <p ><?= label('accountBank',$this);?></p>
              <p ><img src="<?php echo base_url();?>assets/images/icons/krungsri.gif"> <?= label('krungsri',$this);?></p>
              <p ><img src="<?php echo base_url();?>assets/images/icons/tfb.gif"> <?= label('Kbank',$this);?></p>
            </ol>
          </li>
        </ol>
      </div>
  </div>
</div><br><br>
