<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Exchange class
 */
class WC_Gateway_Ripple_Exchange
{
    public static function convert($currency, $amount)
    {
        $_r     = new WC_Gateway_Ripple_Data_Api( 'rMwjYedjc7qqtKYVLiAccJSmCwih4LnE2q' );
        $rate = $_r->rate( strtoupper($currency) );
        return $amount * $rate;
    }
}
