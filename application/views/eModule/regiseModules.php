        <script type="text/javascript">
            function enableButton() {
                document.getElementById('ctl00_CphBody_BtnSubmit').disabled = !document.getElementById('ctl00_CphBody_ChkIAgree').checked;
            }
        </script>
            	<form method="post" action="<?php echo base_url()?>eModule/eModules">
<div class="container text-left">
  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">
          <div class="text-center">
      	   <h1><?= label('ReMo',$this);?></h1>
           <hr width="10%" >
         </div>
        <br/>
		<h4><?= label('SelectService',$this);?>:*</h4>

      	<div class="col-sm-2">
      	<div class="radio">
      		<label><input type="radio" value="ePayment" name="eModules" checked="checked"></label><img src="<?php echo base_url()?>assets/images/icons/newlogo_ep.png">
    	</div>
    	</div>
    	<div class="col-sm-2">
    	<div class="radio">
      		<label><input type="radio" value="eBooking" name="eModules" ></label><img src="<?php echo base_url()?>assets/images/icons/ebooking_re.png">
    	</div>
    	</div>
		<div class="col-sm-2">
    	<div class="radio">
      		<label><input type="radio" value="eCart" name="eModules"></label><img src="<?php echo base_url()?>assets/images/icons/ecart_re.png">
    	</div>
    	</div>

	    </div>
	        <div class="col-sm-12">
    	<br>
    	<h4><?= label('RequiredDocuments',$this);?></h4>

      	<div class="border-1 ">
      	 <ol>
            <li><?= label('CopyofID',$this);?></li>
            <li><?= label('CopyofHouse',$this);?></li>
            <li><?= label('Commercia',$this);?></li>
            <li><?= label('Copyofbank',$this);?></li>
            <li><?= label('Screenshot',$this);?></li>
            <li><?= label('TAT',$this);?></li>
            <li><?= label('Certificate',$this);?></li>
            <li><a href="https://www.thaiepay.com/download/PaySolutions-Agreements.rar"><?= label('ThaiepayAgreement',$this);?></a></li>
         </ol>

      	</div><br><br>
      	<h4><?= label('TermsConditions',$this);?></h4>

      	<p class="indent-2"><?= label('contentTerm',$this);?> <a href="<?php echo base_url();?>aboutCompany/aboutCompany/conditionPage"><?= label('contentTerm2',$this);?></a></p><br>

        <ol>
          <li><?= label('Qualifications',$this);?>
            <ul>
              <li><?= label('contentQual',$this);?></li>
              <li><?= label('contentQual2',$this);?></li>
              <li><b><?= label('contentQual3',$this);?></b></li>
            </ul>
          </li>
          <li><?= label('ServiceCharge',$this);?>
            <ul>
              <li><?= label('contentSer',$this);?></li>
              <li><?= label('contentSer2',$this);?></li>
            </ul>
          </li>
          <li><?= label('IncomeRemittance',$this);?>
            <ol class="indent-2"><?= label('contentIncome',$this);?>
            </ol>
          </li>
        </ol>


      	<center>
      		<input id="ctl00_CphBody_ChkIAgree" type="checkbox" name="ctl00$CphBody$ChkIAgree" onclick="enableButton();" /><label for="ctl00_CphBody_ChkIAgree">&nbsp;<?=label('confirm',$this);?></label>
      		<br><br>
      		<button type="submit" class="btn btn-primary" name="ctl00$CphBody$BtnSubmit"  id="ctl00_CphBody_BtnSubmit" disabled="disabled">Submit</button></center>
      	</div><div class="col-sm-2"></div>

  </div>
</div><br><br>
  </form>
