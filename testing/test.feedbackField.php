<?
/* ----------------------------------
+ Feedback Field TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.feedbackField.php');

	$testClass = new FeedbackField();
	if ($func->isErrors())
	{
		echo "<li><b>10001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array (
	'feedback_field_id'	=> 1,
	'name'				=> 'test name',
	'is_before'			=> false,
	);

	$testClass->feedbackFieldConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>10002</b> - Good Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10002</b> - Good Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->feedbackFieldConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>10003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10003</b> - Null Loaded Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->feedbackFieldConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>10004</b> - NoArray Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10004</b> - NoArray Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// album_id

	$testClass->setFeedbackFieldId(1);
	if ($func->isErrors())
	{
		echo "<li><b>10010</b> - setFeedbackFieldId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10010</b> - setFeedbackFieldId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setFeedbackFieldId("");
	if ($func->isErrors())
	{
		echo "<li><b>10011</b> - setFeedbackFieldId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b> 10011</b> - setFeedbackFieldId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeedbackFieldId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>10020</b> - setFeedbackFieldId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10020</b> - setFeedbackFieldId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeedbackFieldId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>10021</b> - setFeedbackFieldId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10021</b> - setFeedbackFieldId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeedbackFieldId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>10022</b> - setFeedbackFieldId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10022</b> - setFeedbackFieldId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>10030</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10030</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>10031</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10031</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>10032</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10032</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// is_before

	$testClass->setIsBefore(true);
	if ($func->isErrors())
	{
		echo "<li><b>10040</b> - setIsBefore(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10040</b> - setIsBefore(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setIsBefore('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>10041</b> - setIsBefore(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>10041</b> - setIsBefore(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
