<?php defined('BASEPATH') OR exit('No direct script access allowed');


$config = array(
            'protocol' => 'sendmail', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'localhost', 
            'smtp_port' => 25,
            'smtp_user' => 'contact@transportarlogistics.com',
            'smtp_pass' => 'fUszLa$2#9FY',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'mailtype' => 'html', //plaintext 'text' mails or 'html'
            'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

?>