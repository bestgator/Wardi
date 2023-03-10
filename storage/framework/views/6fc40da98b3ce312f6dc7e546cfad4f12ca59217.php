<?php if($payment == 'cod'): ?> 
  <input type="hidden" name="method" value="Cash On Delivery">
<?php endif; ?>
<?php if($payment == 'paypal'): ?> 
    <input type="hidden" name="method" value="Paypal">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="lc" value="UK">
    <input type="hidden" name="currency_code" value="<?php echo e($curr->name); ?>">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
<?php endif; ?>
<?php if($payment == 'stripe'): ?> 
  <input type="hidden" name="method" value="Stripe">
    <div class="row" >
        <div class="col-lg-6">
        <input type="radio" class="radio" name="PaymentMethodId" value="2" checked>
        <span>(VISA/MASTER)</span>
        <img src="https://portal.myfatoorah.com/imgs/payment-methods/vm.png" width="50" height="50" class="icon">
        <input type="hidden" name="serviceCharage" value="4.725" />
        
        <span id="errCard"></span>
      </div>
        
        
  </div>
  <script type="text/javascript" src="<?php echo e(asset('assets/front/js/payvalid.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('assets/front/js/paymin.js')); ?>"></script>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script type="text/javascript" src="<?php echo e(asset('assets/front/js/payform.js')); ?>"></script>
  <script type="text/javascript">
    var cnstatus = false;
    var dateStatus = false;
    var cvcStatus = false;
    function validateCard(cn) {
      cnstatus = Stripe.card.validateCardNumber(cn);
      if (!cnstatus) {
        $("#errCard").html('<?php echo e($langg->lang781); ?>');
      } else {
        $("#errCard").html('');
      }
    }
    function validateCVC(cvc) {
      cvcStatus = Stripe.card.validateCVC(cvc);
      if (!cvcStatus) {
        $("#errCVC").html('<?php echo e($langg->lang782); ?>');
      } else {
        $("#errCVC").html('');
      }
    }
  </script>
<?php endif; ?>
<?php if($payment == 'instamojo'): ?> 
  <input type="hidden" name="method" value="Instamojo">
<?php endif; ?>
<?php if($payment == 'paystack'): ?> 
  <input type="hidden" name="ref_id" id="ref_id" value="">
  <input type="hidden" name="sub" id="sub" value="0">
  <input type="hidden" name="method" value="Paystack">
<?php endif; ?>
<?php if($payment == 'razorpay'): ?> 
  <input type="hidden" name="method" value="Razorpay">
<?php endif; ?>
<?php if($payment == 'molly'): ?> 
  <input type="hidden" name="method" value="Molly">
<?php endif; ?>
<?php if($payment == 'other'): ?> 
  <input type="hidden" name="method" value="<?php echo e($gateway->title); ?>">
  <div class="row" >
  <div class="col-lg-12 pb-2">
    <?php echo $gateway->details; ?>

  </div>
  <div class="col-lg-6">
    <label><?php echo e($langg->lang167); ?> *</label>
    <input class="form-control" name="txn_id4" type="text" placeholder="<?php echo e($langg->lang167); ?>"  />
  </div>
    </div>
<?php endif; ?><?php /**PATH /usr/local/var/www/wardi/resources/views/load/payment.blade.php ENDPATH**/ ?>