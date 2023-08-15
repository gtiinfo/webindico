<!-- LOADING -->
<div class="loading-spinner">
    <div class="spinner"></div>
  </div>
  <?php
$date = new DateTime();
$orderId=$date->getTimestamp();
// $orderId="21";
$merchant="102416";
$apiPassword="1f0f2dc99bc233b8b55b4d94b3b1b121";
$amount="3500.00";
$returnUrl="http://indico.bluteki.com/particulares/pay.php";
$currency="MZN";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://test-millenniumbim.mtf.gateway.mastercard.com/api/nvp/version/49");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "apiOperation=CREATE_CHECKOUT_SESSION&apiPassword=$apiPassword&interaction.returnUrl=$returnUrl&apiUsername=merchant.$merchant&merchant=$merchant&order.id=$orderId&order.amount=$amount&order.currency=$currency");

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result=curl_exec($ch);
if(curl_errno($ch)){
	echo 'ERROR: '.curl_errno($ch);
}

curl_close($ch);
// print_r(explode("=", explode("&", $result)[2])[1]);

$sessionId= explode("=", explode("&", $result)[2])[1];

?>

<script src="https://test-millenniumbim.mtf.gateway.mastercard.com/checkout/version/49/checkout.js" data-error="errorCallback" data-cancel="http://indico.bluteki.com/particulares/pay.php"></script>

<script type="text/javascript">
	function errorCallback(error){
		alert("ERROR: " + JSON.stringify(error));
		window.location.href = "http://indico.bluteki.com/particulares/pay.php";
	}

	Checkout.configure({
		merchant: '<?php echo $merchant ?>',
		order: {
			amount: function (){
				return <?php echo $amount;?>;
			},
			currency: '<?php echo $currency; ?>',
			description: 'Pagamento de Pacote',
			id: '<?php echo $orderId; ?>'
		},
		interaction: {
			merchant:{
				name: 'Indico Seguros',
				address:{
					line1: 'Maputo',
					line2: 'Mozambique'
				}
			}
		},
		session: {
			id: '<?php echo $sessionId; ?>'
		}
	});
	Checkout.showPaymentPage();
</script>