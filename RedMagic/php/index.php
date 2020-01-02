<?php require_once('config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Professionel"
          data-amount="3900"
          data-locale="auto"></script>
</form>