<?
/* ----------------------------------
+ Event Type TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.eventType.php');

	$testClass = new EventType();
	if ($func->isErrors())
	{
		echo "<li><b>07001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'event_type_id'	=> 1,
	'name'			=> 'test name',
	'description'	=> 'test description',
	);

	$testClass->eventTypeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>07002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->eventTypeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>07003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->eventTypeConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>07004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// event_type_id

	$testClass->setEventTypeId(1);
	if ($func->isErrors())
	{
		echo "<li><b>07010</b> - setEventTypeId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07010</b> - setEventTypeId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventTypeId('');
	if ($func->isErrors())
	{
		echo "<li><b>07011</b> - setEventTypeId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07011</b> - setEventTypeId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventTypeId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>07012</b> - setEventTypeId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07012</b> - setEventTypeId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventTypeId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>07013</b> - setEventTypeId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07013</b> - setEventTypeId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventTypeId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>07014</b> - setEventTypeId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07014</b> - setEventTypeId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>07020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>07021</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07021</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>07022</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07022</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// description

	$testClass->setDescription('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>07030</b> - setDescription('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>07030</b> - setDescription('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}
