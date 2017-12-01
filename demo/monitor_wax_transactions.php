<?php
require_once(__DIR__ . '/../Wax.php');

$wax = new Wax('192.168.1.6');

$filter_id = $wax->createNewPendingTransactionFilter();
while (true) {
	$txns = $wax->getNewWaxTransactions($filter_id);
	if (!empty($txns)) {
		print_r($txns);
	}

	sleep(1);
}
