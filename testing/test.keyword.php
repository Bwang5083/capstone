<?
/* ----------------------------------
+ Keyword TestClass
+
------------------------------------ */


/* entity we're testing */
require('../ext/ent.keyword.php');


	$testClass = new Keyword();
	if ($func->isErrors())
	{
		echo "<li><b>12001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'keyword_id'	=> 1,
	'keyword'		=> 'test name',
	);

	$testClass->keywordConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>12002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->keywordConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>12003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->keywordConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>12004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// keyword_id

	$testClass->setKeywordId(1);
	if ($func->isErrors())
	{
		echo "<li><b>12010</b> - setKeywordId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12010</b> - setKeywordId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setKeywordId('');
	if ($func->isErrors())
	{
		echo "<li><b>12011</b> - setKeywordId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12011</b> - setKeywordId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setKeywordId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>12012</b> - setKeywordId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12012</b> - setKeywordId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setKeywordId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>12013</b> - setKeywordId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12013</b> - setKeywordId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setKeywordId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>12014</b> - setKeywordId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12014</b> - setKeywordId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// keyword

	$testClass->setKeyword('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>12020</b> - setKeyword('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12020</b> - setKeyword('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setKeyword('');
	if ($func->isErrors())
	{
		echo "<li><b>12021</b> - setKeyword('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12021</b> - setKeyword('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setKeyword($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>12022</b> - setKeyword(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>12022</b> - setKeyword(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}
