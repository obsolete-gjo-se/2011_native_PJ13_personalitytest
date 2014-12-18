<?php
// Hiddenfelder für PayPal-Zahlung - gehört als include in html bereich (if Zahlung paypal)
//https://www.sandbox.paypal.com/cgi-bin/webscr

echo '<input type="hidden" name="cmd" value="_xclick" />';
echo '<input type="hidden" name="business" value="gregor_1324030228_biz@n-28.com" />';
echo '<input type="hidden" name="lc" value="DE" />';
echo '<input type="hidden" name="invoice" value="' . $invoice . '" />';
echo '<input type="hidden" name="item_name" value="' . $item_name . '" />';
echo '<input type="hidden" name="amount" value="' . $item_amount . '" />';
echo '<input type="hidden" name="currency_code" value="' . $item_currency_code . '" />';
echo '<input type="hidden" name="button_subtype" value="services" />';
echo '<input type="hidden" name="no_note" value="1" />';
echo '<input type="hidden" name="no_shipping" value="1" />';
echo '<input type="hidden" name="rm" value="2" />';
echo '<input type="hidden" name="return" value="http://' . $host . '/de/payment/success.php" />';
echo '<input type="hidden" name="cancel_return" value="http://' . $host . '/de/personalitytest/offer.php" />';
echo '<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted" />';
echo '<input type="hidden" name="address_override" value="1" />';
echo '<input type="hidden" name="notify_url" value="http://' . $host . '/de/payment/paypal/ipn.php" />';
?>