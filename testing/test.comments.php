<?
/* ----------------------------------
+ Comments TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.comments.php');

	$testClass = new Comments();
	if ($func->isErrors())
	{
		echo "<li><b>03001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'comment_id'	=> 1,
	'name'			=> 'test name',
	'email'			=> 'email@email.com',
	'comment_date'	=> '04-13-2006',
	'comment_type'	=> 1,
	'body'			=> 'test body',
	);

	$testClass->commentConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>03002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->commentConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>03003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->commentConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>03004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// comment_id

	$testClass->setCommentId(1);
	if ($func->isErrors())
	{
		echo "<li><b>03010</b> - setCommentId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03010</b> - setCommentId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setCommentId('');
	if ($func->isErrors())
	{
		echo "<li><b>03011</b> - setCommentId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03011</b> - setCommentId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setCommentId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>03012</b> - setCommentId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03012</b> - setCommentId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setCommentId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>03013</b> - setCommentId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03013</b> - setCommentId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setCommentId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>03014</b> - setCommentId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03014</b> - setCommentId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>03020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>03021</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03021</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// email

	$testClass->setEmail('email@email.com');
	if ($func->isErrors())
	{
		echo "<li><b>03030</b> - setEmail('email@email.com') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03030</b> - setEmail('email@email.com') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEmail('');
	if ($func->isErrors())
	{
		echo "<li><b>03031</b> - setEmail('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03031</b> - setEmail('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

$temp = $toolong . "@ddd.com";
	$testClass->setEmail($temp);
	if ($func->isErrors())
	{
		echo "<li><b>03032</b> - setEmail(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03032</b> - setEmail(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEmail('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>03033</b> - setEmail('fdhsatejhw') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03033</b> - setEmail('fdhsatejhw') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// comment_date

	$testClass->setCommentDate('04-13-2006');
	if ($func->isErrors())
	{
		echo "<li><b>03040</b> - setCommentDate('04-13-2006') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03040</b> - setCommentDate('04-13-2006') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setCommentDate('');
	if ($func->isErrors())
	{
		echo "<li><b>03041</b> - setCommentDate('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03041</b> - setCommentDate('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// comment_type

	$testClass->setCommentType(1);
	if ($func->isErrors())
	{
		echo "<li><b>03042</b> - setCommentType(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03042</b> - setCommentTypez(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setCommentType('');
	if ($func->isErrors())
	{
		echo "<li><b>03043</b> - setCommentType('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03043</b> - setCommentType('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setCommentType('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>03044</b> - setCommentType('testvalue') InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03044</b> - setCommentType('testvalue) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setCommentType(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>03050</b> - setCommentType(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03050</b> - setCommentType(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setCommentType(-1);
	if ($func->isErrors())
	{
		echo "<li><b>03051</b> - setCommentType(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03051</b> - setCommentType(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// body

	$testClass->setBody('email@email.com');
	if ($func->isErrors())
	{
		echo "<li><b>03060</b> - setBody('email@email.com') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03060</b> - setBody('email@email.com') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setBody('');
	if ($func->isErrors())
	{
		echo "<li><b>03061</b> - setBody('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>03061</b> - setBody('') NullException Test: <div class='fail'>Failed</div> </li>";
	}
