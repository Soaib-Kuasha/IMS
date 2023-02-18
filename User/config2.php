<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_i1XhUeUsMwH1JQGc05GmNnfh00GpQOXajO",
  "publishable_key" => "pk_test_jeAmIvaI625hFwceLh3KAF6B003BbPRRAt",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>