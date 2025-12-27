<?php

// do different work with same method. We get advantage in large project.

// by force, code base is maintained. some issues may not be fixed due to flexibility of abstract.
 abstract class PaymentGateway{
    abstract public function pay($amount);
// there will be no body or second bracket here like function due to abstract.
    // same abstract method will have to use in later methods. Mentioning other methods will cause error.
    public function refund(){
        // normal method
        // if other developers do not use the same method name, no error will be hsown.
    }
}
 class PayPal extends PaymentGateway{
    public function pay($amount){
        echo "Paid $$amount via PayPal\n";
    }
    public function makerefund(){
    }
 }
 class Stripe extends PaymentGateway{
    public function pay($amount){
        echo "Paid $$amount via Stripe\n";
 }
}
 class Bkash extends PaymentGateway{
    public function pay($amount){
        echo "Paid $$amount via Bkash\n";
 }
}
$gateways = [new PayPal(), new Stripe(), new Bkash()];
foreach($gateways as $gateway){
    $gateway->pay(5000);
}
// $PayPal=new PayPal();
// $PayPal->pay(1000);
// $PayPal=new Stripe();
// $PayPal->pay(2000);
// $PayPal=new Bkash();
// $PayPal->pay(3000);

// abstract class is not hundred percent strict. We can keep normal classes beside abstract class.
?>

