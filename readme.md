WooCommerce Payment Gateway Ripple
==========

Integrate Ripple technology into your WooCommerce webshop and accept payments in any currencies

Initial project from Casper Mekel https://github.com/caspermekel/woocommerce-ripple-gateway

## Features
- Display prices in XRP in store and on checkout
- Links can be copied by clicking and a QR code is supplied 
- Testmode allows payments of 1 XRP to be marked as a succesfull payment (careful!)
- Current languages are en_US and nl_NL. Translations are welcome
- Countdown refreshes form each 5 minutes, updating amounts using the most recent conversion reate
- Matches payments on destination tag and amount
- Updates order with destination tag, transaction hash, date and amount

## Screenshot
![Screenshot1](/assets/screenshot-1.png "Checkout")

## Changelog

### v0.0.6
- Cleaned repo

### v0.0.5
- Replaced cURL by wp_remote_get

### v0.0.4
- Fixed typo in currency label
- Added a discount percentage for XRP payments

### v0.0.3
- Changed timer to 10 minutes
- Update destination tag on each refresh
- Fixed amount comparison

### v0.0.2
- Now using cryptonator API for exchange rate (Ripple returned an optimistic value for EURXRP)

### v0.0.1
- Initial release
