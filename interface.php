<?php
// If you want to fix all methods, use interface.
// The properties and methods declared in interface, must be used in all other classes.
interface Payment{
    public function pay($amount);

    public function refund();
}
 class Paypal implements Payment{
    public function pay($amount){
        echo "Paid $$amount via PayPal\n";
    }
    public function refund(){}
 }
 class Stripe implements Payment{
    public function pay($amount){
        echo "Paid $$amount via Stripe\n";
        
 }
 public function refund(){}
}
 class Bkash implements Payment{
    public function pay($amount){
        echo "Paid $$amount via Bkash\n";
 }
 public function refund(){}
}

$PayPal=new PayPal();
$PayPal->pay(1000);
$PayPal=new Stripe();
$PayPal->pay(2000);
$PayPal=new Bkash();
$PayPal->pay(3000);
?>