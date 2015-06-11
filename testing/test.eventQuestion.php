<?
/* ----------------------------------
+ Event Question TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.eventQuestions.php');

	$testClass = new EventQuestion();
	if ($func->isErrors())
	{
		echo "<li><b>06001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'question_id'	=> 1,
	'question_name'	=> 'test name',
	'question'		=> 'test question',
	'question_type'	=> 'string',
	);

	$testClass->eventQuestionConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>06002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->eventQuestionConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>06003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->eventQuestionConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>06004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// question_id

	$testClass->setQuestionId(1);
	if ($func->isErrors())
	{
		echo "<li><b>06010</b> - setQuestionId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06010</b> - setQuestionId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setQuestionId('');
	if ($func->isErrors())
	{
		echo "<li><b>06011</b> - setQuestionId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06011</b> - setQuestionId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setQuestionId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>06012</b> - setQuestionId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06012</b> - setQuestionId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setQuestionId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>06013</b> - setQuestionId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06013</b> - setQuestionId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setQuestionId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>06014</b> - setQuestionId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06014</b> - setQuestionId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// question_name

	$testClass->setQuestionName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>06020</b> - setQuestionName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06020</b> - setQuestionName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setQuestionName('');
	if ($func->isErrors())
	{
		echo "<li><b>06021</b> - setQuestionName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06021</b> - setQuestionName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setQuestionName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>06022</b> - setQuestionName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06022</b> - setQuestionName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// question

	$testClass->setQuestion('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>06030</b> - setQuestion('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06030</b> - setQuestion('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setQuestion('');
	if ($func->isErrors())
	{
		echo "<li><b>06031</b> - setQuestion('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>06031</b> - setQuestion('') NullException Test: <div class='fail'>Failed</div> </li>";
	}
