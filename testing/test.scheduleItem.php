<?
/* ----------------------------------
+ Schedule Item TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.schedule_item.php');


	$testClass = new ScheduleItem();
	if ($func->isErrors())
	{
		echo "<li><b>16001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'schedule_id'	=> 1,
	'name'			=> 'test name',
	'event_date'	=> '10-24-2006',
	'start_time'	=> '10:00:AM',
	'end_time'		=> '11:00',
	'description'	=> 'test description',
	'event_id'		=> 1,
	);

	$testClass->scheduleItemConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>16002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->scheduleItemConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>16003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->scheduleItemConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>16004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/


// schedule_item_id

	$testClass->setScheduleId(1);
	if ($func->isErrors())
	{
		echo "<li><b>16010</b> - setScheduleId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16010</b> - setScheduleId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setScheduleId('');
	if ($func->isErrors())
	{
		echo "<li><b>16011</b> - setScheduleId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16011</b> - setScheduleId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setScheduleId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>16012</b> - setScheduleId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16012</b> - setScheduleId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setScheduleId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>16013</b> - setScheduleId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16013</b> - setScheduleId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setScheduleId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>16014</b> - setScheduleId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16014</b> - setScheduleId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>16020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>16021</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16021</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>16022</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16022</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// description

	$testClass->setDescription('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>16030</b> - setDescription('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16030</b> - setDescription('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

// event_id

	$testClass->setEventId(1);
	if ($func->isErrors())
	{
		echo "<li><b>16040</b> - setEventId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16040</b> - setEventId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>16041</b> - setEventId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16041</b> - setEventId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>16042</b> - setEventId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16042</b> - setEventId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}


	$testClass->setEventId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>16043</b> - setEventId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16043</b> - setEventId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setEventDate('10-24-2006');
	if ($func->isErrors())
	{
		echo "<li><b>16050</b> - setEventDate('10-24-2006') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16050</b> - setEventDate('10-24-2006') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventDate('');
	if ($func->isErrors())
	{
		echo "<li><b>16051</b> - setEventDate('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16051</b> - setEventDate('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventDate('testValue');
	if ($func->isErrors())
	{
		echo "<li><b>16052</b> - setEventDate('testValue') InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16052</b> - setEventDate('testValue') InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setStartTime('10:50:AM');
	if ($func->isErrors())
	{
		echo "<li><b>16060-A</b> - setStartTime('10:50:AM') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16060-A</b> - setStartTime('10:50:AM') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setStartTime('10:50:PM');
	if ($func->isErrors())
	{
		echo "<li><b>16060-B</b> - setStartTime('10:50:PM') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16060-B</b> - setStartTime('10:50:PM') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setStartTime('');
	if ($func->isErrors())
	{
		echo "<li><b>16061</b> - setStartTime('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16061</b> - setStartTime('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setStartTime('testValue');
	if ($func->isErrors())
	{
		echo "<li><b>16062</b> - setStartTime('testValue') InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16062</b> - setStartTime('testValue') InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setEndTime('10:55');
	if ($func->isErrors())
	{
		echo "<li><b>16070</b> - setEndTime('10:55') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16070</b> - setEndTime('10:55') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEndTime('');
	if ($func->isErrors())
	{
		echo "<li><b>16071</b> - setEndTime('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16071</b> - setEndTime('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEndTime('testValue');
	if ($func->isErrors())
	{
		echo "<li><b>16072</b> - setEndTime('testValue') InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>16072</b> - setEndTime('testValue') InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
