<?
/* ----------------------------------
+ suggestion TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.suggestions.php');


	$testClass = new Suggestion();
	if ($func->isErrors())
	{
		echo "<li><b>19001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'suggestion_id'			=> 1,
	'title'					=> 'test name',
	'description'			=> 'test description',
	'suggestion_type_id'	=> 1,
	);

	$testClass->suggestionConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>19002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->suggestionConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>19003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->suggestionConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>19004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/


// suggestion_id

	$testClass->setSuggestionId(1);
	if ($func->isErrors())
	{
		echo "<li><b>19010</b> - setSuggestionId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19010</b> - setSuggestionId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setSuggestionId('');
	if ($func->isErrors())
	{
		echo "<li><b>19011</b> - setSuggestionId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19011</b> - setSuggestionId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSuggestionId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>19012</b> - setSuggestionId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19012</b> - setSuggestionId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSuggestionId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>19013</b> - setSuggestionId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19013</b> - setSuggestionId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}


	$testClass->setSuggestionId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>19014</b> - setSuggestionId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19014</b> - setSuggestionId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setTitle('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>19020</b> - setTitle('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19020</b> - setTitle('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setTitle('');
	if ($func->isErrors())
	{
		echo "<li><b>19021</b> - setTitle('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19021</b> - setTitle('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTitle($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>19022</b> - setTitle(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19022</b> - setTitle(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setDescription('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>19030</b> - setDescription('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19030</b> - setDescription('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setDescription('');
	if ($func->isErrors())
	{
		echo "<li><b>19031</b> - setDescription('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19031</b> - setDescription('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// suggestion_type_id

	$testClass->setSuggestionTypeId(1);
	if ($func->isErrors())
	{
		echo "<li><b>19040</b> - setSuggestionTypeId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19040</b> - setSuggestionTypeId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setSuggestionTypeId('');
	if ($func->isErrors())
	{
		echo "<li><b>19041</b> - setSuggestionTypeId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19041</b> - setSuggestionTypeId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSuggestionTypeId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>19042</b> - setSuggestionTypeId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19042</b> - setSuggestionTypeId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSuggestionTypeId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>19043</b> - setSuggestionTypeId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19043</b> - setSuggestionTypeId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSuggestionTypeId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>19044</b> - setSuggestionTypeId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>19044</b> - setSuggestionTypeId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}
