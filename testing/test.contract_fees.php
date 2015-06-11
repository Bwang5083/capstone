<?
/* ----------------------------------
+ Contract Fee TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.contract_fees.php');

	$testClass = new contract_fee();
	if ($func->isErrors())
	{
		echo "<li><b>04001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";
		$ws->error = array();
	}
	else
	{
		echo "<li><b>04001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'contract_fee_id'	=> 1,
	'event_id'			=> 11,
	'fee_id'			=> 11,
	'price_charged'		=> 11.1,
	'GST'				=> true,
	'PST'				=> true,
	);

	$testClass->contractFeeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>04002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->contractFeeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>04003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->contractFeeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>04004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// contract_fee_id

	$testClass->setContractFeeId(1);
	if ($func->isErrors())
	{
		echo "<li><b>04010</b> - setContractFeeId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04010</b> - setContractFeeId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setContractFeeId('');
	if ($func->isErrors())
	{
		echo "<li><b>04011</b> - setCommentId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04011</b> - setContractFeeId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContractFeeId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>04012</b> - setContractFeeId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04012</b> - setContractFeeId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContractFeeId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>04013</b> - setContractFeeId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04013</b> - setContractFeeId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContractFeeId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>04014</b> - setContractFeeId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04014</b> - setContractFeeId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// event_id

	$testClass->setEventId(1);
	if ($func->isErrors())
	{
		echo "<li><b>04020</b> - setEventId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>0402</b> - setEventId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventId('');
	if ($func->isErrors())
	{
		echo "<li><b>04021</b> - setEventId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04021</b> - setEventId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>04022</b> - setEventId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04022</b> - setEventId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>04023</b> - setEventId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04023</b> - setEventId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>04024</b> - setEventId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04024</b> - setEventId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// fee_id

	$testClass->setFeeId(1);
	if ($func->isErrors())
	{
		echo "<li><b>04030</b> - setFeeId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04030</b> - setFeeId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setFeeId('');
	if ($func->isErrors())
	{
		echo "<li><b>04031</b> - setFeeId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04031</b> - setFeeId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeeId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>04032</b> - setFeeId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04032</b> - setFeeId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeeId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>04033</b> - setFeeId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04033</b> - setFeeId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeeId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>04034</b> - setFeeId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04034</b> - setFeeId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// price_charged

	$testClass->setPriceCharged(1);
	if ($func->isErrors())
	{
		echo "<li><b>04040</b> - setPriceCharged(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04040</b> - setPriceCharged(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPriceCharged('');
	if ($func->isErrors())
	{
		echo "<li><b>04041</b> - setPriceCharged('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04041</b> - setPriceCharged('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPriceCharged('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>04042</b> - setPriceCharged(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04042</b> - setPriceCharged(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPriceCharged(-1);
	if ($func->isErrors())
	{
		echo "<li><b>04043</b> - setPriceCharged(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04043</b> - setPriceCharged(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// GST

	$testClass->setGST(true);
	if ($func->isErrors())
	{
		echo "<li><b>04050</b> - setGST(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04050</b> - setGST(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setGST('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>04051</b> - setGST(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04051</b> - setGST(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// PST

	$testClass->setPST(true);
	if ($func->isErrors())
	{
		echo "<li><b>04060</b> - setPST(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04060</b> - setPST(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPST('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>04061</b> - setPST(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>04061</b> - setPST(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
