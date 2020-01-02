<?php
require_once('../vendor/autoload.php');
require_once('../stripe/stripe-php-7.14.2/init.php');

$stripe = [
  "secret_key"      => "sk_test_ZyqW1DtPoiFWzCjymvIFAtER00KRvLAqk4",
  "publishable_key" => "pk_test_1MpdkDImiRhOXP1VYUPHuBWl00M1ktV8Bb",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>