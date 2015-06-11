<?
/* ----------------------------------
+ Contract Fee TestClass
+
------------------------------------ */

require('../ext/ent.fee.php');

	$testClass = new Fee();
	if ($func->isErrors())
	{
		echo "<li><b>08001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'fee_id'		=> 1,
	'price'			=> 11.1,
	'name'			=> 'test name',
	'description'	=> 'test description',
	'GST'			=> true,
	'PST'			=> true,
	);

	$testClass->feeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>08002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
		$ws->error = array();
	}
	else
	{
		echo "<li><b>08002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->feeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>08003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->feeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>08004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// contract_fee_id

	$testClass->setFeeId(1);
	if ($func->isErrors())
	{
		echo "<li><b>08010</b> - setFeeId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08010</b> - setFeeId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setFeeId('');
	if ($func->isErrors())
	{
		echo "<li><b>08011</b> - setFeeId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08011</b> - setFeeId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeeId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>08012</b> - setFeeId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08012</b> - setFeeId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeeId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>08013</b> - setFeeId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08013</b> - setFeeId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeeId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>08014</b> - setFeeId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08014</b> - setFeeId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// price

	$testClass->setPrice(1);
	if ($func->isErrors())
	{
		echo "<li><b>08020</b> - setPrice(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08020</b> - setPrice(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPrice('');
	if ($func->isErrors())
	{
		echo "<li><b>08021</b> - setPrice('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08021</b> - setPrice('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPrice('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>08022</b> - setPrice(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08022</b> - setPrice(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPrice(-1);
	if ($func->isErrors())
	{
		echo "<li><b>08023</b> - setPrice(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08023</b> - setPrice(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>08030</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08030</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>08031</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08031</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>08032</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08032</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// description

	$testClass->setDescription('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>08040</b> - setDescription('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08040</b> - setDescription('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

// GST

	$testClass->setGST(true);
	if ($func->isErrors())
	{
		echo "<li><b>08050</b> - setGST(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08050</b> - setGST(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setGST('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>08051</b> - setGST(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08051</b> - setGST(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// PST

	$testClass->setPST(true);
	if ($func->isErrors())
	{
		echo "<li><b>08060</b> - setPST(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08060</b> - setPST(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPST('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>08061</b> - setPST(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>08061</b> - setPST(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
