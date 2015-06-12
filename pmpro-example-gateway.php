<?php
/*
Plugin Name: Example Gateway for Paid Memberships Pro
Description: Example Gateway for Paid Memberships Pro
Version: .1
*/

define("PMPRO_EXAMPLEGATEWAY_DIR", dirname(__FILE__));

//load payment gateway class
require_once(PMPRO_EXAMPLEGATEWAY_DIR . "/classes/class.pmprogateway_example.php");