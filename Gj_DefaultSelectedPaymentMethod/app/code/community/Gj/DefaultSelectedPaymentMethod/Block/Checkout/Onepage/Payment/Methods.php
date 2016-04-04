<?php class Gj_DefaultSelectedPaymentMethod_Block_Checkout_Onepage_Payment_Methods extends Mage_Checkout_Block_Onepage_Payment_Methods
{
	public function getSelectedMethodCode()
	{
		return false;
		// return "paymentmethod_code_here"; ie: "paypal_standard", "sagepay", "cashondelivery", "You Can Find those codes in chekout page > inspect element > payment method radiobuttons > value"
	}
}
