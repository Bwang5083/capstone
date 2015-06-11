<?
/* ----------------------------------
+ Artist TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.artist.php');

	$testClass = new Artist();
	if ($func->isErrors())
	{
		echo "<li><b>02001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'artist_id'	=> 1,
	'name'		=> 'test name',
	);

	$testClass->artistConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>02002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->artistConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>02003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->artistConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>02004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// artist_id

	$testClass->setArtistId(1);
	if ($func->isErrors())
	{
		echo "<li><b>02010</b> - setArtistId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02010</b> - setArtistId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setArtistId('');
	if ($func->isErrors())
	{
		echo "<li><b>02011</b> - setArtistId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02011</b> - setArtistId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setArtistId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>02012</b> - setArtistId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02012</b> - setArtistId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setArtistId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>02013</b> - setArtistId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02013</b> - setArtistId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setArtistId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>02014</b> - setArtistId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02014</b> - setArtistId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>02020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>02021</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02021</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>02022</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>02022</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}
