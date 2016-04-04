# Gj_DefaultSelectedPaymentMethod-1.0.0
Extension to set default selected payment method in Magento(Tested on Magento CE 1.8.x.x, 1.9.x.x.).

Set default selected payment method Programmatically

in app/code/community/Gj/DefaultSelectedPaymentMethod/Block/Checkout/Onepage/Payment/Methods.php
there is
```php
public function getSelectedMethodCode()
{ return false; }
```

Replace ```return false; ```
with the "paymentmethod_code" which you wanna make default selected
ie:
```php
return "paymentmethod_code_here";

return "paypal_standard";

return "sagepay";

return "cashondelivery"
```

"You Can Find those codes in frontend chekout page > inspect element > payment method radiobuttons > value"
