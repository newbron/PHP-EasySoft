<?php

	$dt      = date('Y-m-d\TH:i:s');
	$payment = esLib::getPaymentByOperation($data, $operation);

	if ($esAdapter->confirm($payment, $dt))
	{
		$xmlBody = '<OrderDate>' . $dt . '</OrderDate>';
	}
	else
	{
		$msg = '������� ������������ �������';		
		$code = -12;
	}

?>