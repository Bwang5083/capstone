<?
/* ----------------------------------
+ Comments TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.feedback.php');

	$testClass = new Feedback();
	if ($func->isErrors())
	{
		echo "<li><b>09001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'feedback_id'	=> 1,
	'event_id'		=> 1,
	'how_find_out'	=> 'test value',
	'recommend'		=> false,
	'improvement'	=> 'thing',
	'comments'		=> 'thing',
	'reference'		=> false,
	'summary'		=> 'thing',
	'summary_title'	=> 'thing',
	'is_private'	=> false,
	'post_on_site'	=> false,
	);

	$testClass->feedbackConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>09002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
		print_r($ws->error);
		$ws->error = array();
	}
	else
	{
		echo "<li><b>09002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->feedbackConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>09003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->feedbackConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>09004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// feedback_id

	$testClass->setFeedbackId(1);
	if ($func->isErrors())
	{
		echo "<li><b>09010</b> - setFeedbackId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09010</b> - setFeedbackId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setFeedbackId('');
	if ($func->isErrors())
	{
		echo "<li><b>09011</b> - setFeedbackId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09011</b> - setFeedbackId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeedbackId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09012</b> - setFeedbackId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09012</b> - setFeedbackId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeedbackId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>09013</b> - setFeedbackId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09013</b> - setFeedbackId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFeedbackId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>09014</b> - setFeedbackId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09014</b> - setFeedbackId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// event_id

	$testClass->setEventId(1);
	if ($func->isErrors())
	{
		echo "<li><b>09020</b> - setEventId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09020</b> - setEventId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventId('');
	if ($func->isErrors())
	{
		echo "<li><b>09021</b> - setEventId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09021</b> - setEventId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09022</b> - setEventId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09022</b> - setEventId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>09023</b> - setEventId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09023</b> - setEventId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>09024</b> - setEventId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09024</b> - setEventId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// how_find_out

	$testClass->setHowFindOut('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09030</b> - setHowFindOut('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09030</b> - setHowFindOut('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setHowFindOut('');
	if ($func->isErrors())
	{
		echo "<li><b>09031</b> - setHowFindOut('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09031</b> - setHowFindOut('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// reccomend

	$testClass->setRecommend(true);
	if ($func->isErrors())
	{
		echo "<li><b>09040</b> - setRecommend(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09040</b> - setRecommend(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setRecommend('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09041</b> - setRecommend(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09041</b> - setRecommend(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// improvement

	$testClass->setImprovement('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09050</b> - setImprovement('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09050</b> - setImprovement('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setImprovement('');
	if ($func->isErrors())
	{
		echo "<li><b>09051</b> - setImprovement('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09051</b> - setImprovement('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// comments

	$testClass->setComments('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09060</b> - setComments('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09060</b> - setComments('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setComments('');
	if ($func->isErrors())
	{
		echo "<li><b>09061</b> - setComments('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09061</b> - setComments('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// reference

	$testClass->setReference(true);
	if ($func->isErrors())
	{
		echo "<li><b>09070</b> - setComments(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09070</b> - setComments(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

// summary

	$testClass->setSummary('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09080</b> - setSummary('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09080</b> - setSummary('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

// is_private

	$testClass->setIsPrivate(true);
	if ($func->isErrors())
	{
		echo "<li><b>09090</b> - setIsPrivate(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09090</b> - setIsPrivate(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setIsPrivate('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09091</b> - setIsPrivate(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09091</b> - setIsPrivate(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// post_on_site

	$testClass->setPostOnSite(true);
	if ($func->isErrors())
	{
		echo "<li><b>09100- setPostOnSite(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09100</b> - setPostOnSite(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPostOnSite('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>09101</b> - setPostOnSite(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>09101</b> - setPostOnSite(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
