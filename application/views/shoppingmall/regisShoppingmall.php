        <script type="text/javascript">
            function enableButton() {
                document.getElementById('ctl00_CphBody_BtnSubmit').disabled = !document.getElementById('ctl00_CphBody_ChkIAgree').checked;
            }
        </script>
<div class="container text-left">
  <br>
  <div class="row col-sm-12">
    <div class="col-sm-12">
      <div class="text-center">
      	<h1><?= label('RegisterShoppingMall',$this);?></h1>
        <hr width="10%">
        <br/>
      </div>
		<h4><?= label('SelectedService',$this);?>:*</h4>

      	<div class="radio">
      		<label><input type="radio" name="eShop" checked="checked"></label><img src="<?php echo base_url()?>assets/images/icons/eshop_re.png">
    	</div><br>
    	<h4><?= label('RequiredDocuments',$this);?></h4>

      	<div class="border-1">
      		<ol>
            <li><?= label('RequiredDocumentscontent1',$this);?></li>
            <li><?= label('RequiredDocumentscontent2',$this);?></li>
            <li><?= label('RequiredDocumentscontent3',$this);?></li>
            <li><?= label('RequiredDocumentscontent4',$this);?></li>
            <li><?= label('RequiredDocumentscontent5',$this);?></li>
          </ol>
      	</div><br><br>
      	<h4><?= label('TermsConditions',$this);?></h4>

      	<p class="indent-2"><?= label('contentTerms',$this);?><a href="<?php echo base_url();?>aboutCompany/aboutCompany/conditionPage"><?= label('fullTerms',$this);?></a></p><br>

        <ol>
          <li><?= label('QualificationsofSeller',$this);?>
            <ul>
              <li><?= label('contentQualification1',$this);?></li>
              <li><?= label('contentQualification2',$this);?></li>
              <li><b><?= label('contentQualification3',$this);?></b></li>
            </ul>
          </li>
          <li><?= label('UsageServiceCharge',$this);?>
            <ul>
              <li><?= label('contentUsage1',$this);?></li>
              <li><?= label('contentUsage2',$this);?></li>
            </ul>
          </li>
          <li><?= label('IncomeRemittance',$this);?>
            <ol class="indent-2">
              <?= label('contentIncome1',$this);?>
            </ol>
          </li>
        </ol>

      	<br>
      	<center>
      		<input id="ctl00_CphBody_ChkIAgree" type="checkbox" name="ctl00$CphBody$ChkIAgree" onclick="enableButton();" /><label for="ctl00_CphBody_ChkIAgree">&nbsp;<?=label('confirm',$this);?></label>
      		<br>
      		<a href="<?php echo base_url()?>shoppingmall/shoppingmall/regisShoppingmall2"><button type="button" class="btn btn-primary" name="ctl00$CphBody$BtnSubmit"  id="ctl00_CphBody_BtnSubmit" disabled="disabled">Submit</button></a></center>
      	</div><div class="col-sm-2"></div>

  </div>
</div><br><br>
