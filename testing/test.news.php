<?
/* ----------------------------------
+ Contract Fee TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.news.php');

	$testClass = new News();
	if ($func->isErrors())
	{
		echo "<li><b>14001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
			'news_id'=> 1,
			'title' => 'test title',
			'body' => 'test body',
			'post_date' => 4/14/2006,
			'is_posted' => true,
	);

	$testClass->newsConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>14002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->newsConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>14003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->newsConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>14004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/


// news_id

	$testClass->setNewsId(1);
	if ($func->isErrors())
	{
		echo "<li><b>14010</b> - setNewsId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14010</b> - setNewsId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setNewsId('');
	if ($func->isErrors())
	{
		echo "<li><b>14011</b> - setNewsId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14011</b> - setNewsId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setNewsId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>14012</b> - setNewsId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14012</b> - setNewsId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setNewsId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>14013</b> - setNewsId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14013</b> - setNewsId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setNewsId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>14014</b> - setNewsId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14014</b> - setNewsId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// title

	$testClass->setTitle('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>14020</b> - setTitle('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14020</b> - setTitle('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setTitle('');
	if ($func->isErrors())
	{
		echo "<li><b>14021</b> - setTitle('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14021</b> - setTitle('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTitle($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>14022</b> - setTitle(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14022</b> - setTitle(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// body

	$testClass->setBody('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>14030</b> - setBody('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14030</b> - setBody('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setBody('');
	if ($func->isErrors())
	{
		echo "<li><b>14031</b> - setBody('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14031</b> - setBody('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// post_date

	$testClass->setNewsDate('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>14040</b> - setNewsDate('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14040</b> - setNewsDate('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setNewsDate('');
	if ($func->isErrors())
	{
		echo "<li><b>14041</b> - setNewsDate('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14041</b> - setNewsDate('') NullException Test: <div class='fail'>Failed</div> </li>";
	}



// GST

	$testClass->setIsPosted(true);
	if ($func->isErrors())
	{
		echo "<li><b>14050</b> - setIsPosted(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14050</b> - setIsPosted(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setIsPosted('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>14051</b> - setIsPosted(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>14051</b> - setIsPosted(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
