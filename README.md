# NexiNetsPaymentCore - Payment Core for simple integration with Netaxept API for plugins
============================================

| Core              | NetsCore - Payment Core 
|-------------------|-------------------------
| Author            | `Nexi/Nets eCom LAKA`             
| Version           | `1.2`                 
| License           | `MIT License`           
| Supporting System | `Nets eCom LAKA plugins`              


### What it is
NexiNetsPaymentCore is an SDK for payment plug-ins. It can be updated separately from the payment plugins themselves.

### Updating the SDK

* If the latest SDK package has been released and you don't have it in your plugin, then all you need to do is the following:
  * composer update nexi-nets-ecom-integrations/paymentcore 
  * if the SDK was manually installed via composer use the below command:
    * composer reinstall nexi-nets-ecom-integrations/paymentcore