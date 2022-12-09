<?php
// use Symfony\Component\Mailer\Transport;
// use Symfony\Component\Mailer\Mailer;
// use Symfony\Component\Mime\Email;

// require_once 'vendor/autoload.php';

// $transport = Transport::fromDsn('smtp://mail.reabus.me');
// $mailer = new Mailer($transport);

include 'inc/style.php';

include 'forms/portfolio_builder.php';
include 'forms/diversification_calculator.php';
include 'forms/risk_profiler.php';


add_action('wp_ajax_for_sending_mail', 'for_sending_mail');
add_action('wp_ajax_nopriv_for_sending_mail', 'for_sending_mail');

function for_sending_mail(){
    
    echo "Hello We Here!";
    $message = "Hello";
    // $mail('usmanrana18989@gmail.com', 'My Subject', $message);

}

