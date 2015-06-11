<?
/* ----------------------------------
+ Template TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.template.php');

	$testClass = new SiteTemplate();
	if ($func->isErrors())
	{
		echo "<li><b>20001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array (
	'template_id'	=> 1,
	'name'			=> 'test name',
	'body'			=> 'test body',
	);

	$testClass->siteTemplateConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>20002</b> - Good Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20002</b> - Good Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->siteTemplateConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>20003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20003</b> - Null Loaded Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->siteTemplateConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>20004</b> - NoArray Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20004</b> - NoArray Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/


// template_id

	$testClass->setTemplateId(1);
	if ($func->isErrors())
	{
		echo "<li><b>20010</b> - setTemplateId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20010</b> - setTemplateId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setTemplateId('');
	if ($func->isErrors())
	{
		echo "<li><b>20011</b> - setTemplateId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b>20011</b> - setTemplateId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTemplateId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>20012</b> - setTemplateId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20012</b> - setTemplateId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTemplateId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>20013</b> - setTemplateId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20013</b> - setTemplateId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTemplateId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>20014</b> - setTemplateId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20014</b> - setTemplateId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>20020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>20021</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20021</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>20021</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20021</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// body

	$testClass->setBody('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>20030</b> - setBody('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20030</b> - setBody('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setBody('');
	if ($func->isErrors())
	{
		echo "<li><b>20031</b> - setBody('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>20031</b> - setBody('') NullException Test: <div class='fail'>Failed</div> </li>";
	}
