<?
/* ----------------------------------
+ Album TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.album.php');

	$testClass = new Album();
	if ($func->isErrors())
	{
		echo "<li><b>01001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array (
	'album_id'	=> 1,
	'name'		=> 'test name',
	'year'		=> 0,
	);

	$testClass->albumConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>01002</b> - Good Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01002</b> - Good Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->albumConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>01003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01003</b> - Null Loaded Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->albumConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>01004</b> - NoArray Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01004</b> - NoArray Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// album_id

	$testClass->setAlbumId(1);
	if ($func->isErrors())
	{
		echo "<li><b>01010</b> - setAlbumId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01010</b> - setAlbumId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setAlbumId('');
	if ($func->isErrors())
	{
		echo "<li><b>01011</b> - setAlbumId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b>01011</b> - setAlbumId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setAlbumId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>01012</b> - setAlbumId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01012</b> - setAlbumId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setAlbumId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>01013</b> - setAlbumId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01013</b> - setAlbumId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setAlbumId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>01014</b> - setAlbumId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01014</b> - setAlbumId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>01020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>01021</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01021</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>01022</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01022</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// year

	$testClass->setYear(1);
	if ($func->isErrors())
	{
		echo "<li><b>01030</b> - setYear(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01030</b> - setYear(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setYear('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>01031</b> - setYear(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01031</b> - setYear(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setYear(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>01032</b> - setYear(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01032</b> - setYear(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setYear(-1);
	if ($func->isErrors())
	{
		echo "<li><b>01033</b> - setYear(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>01033</b> - setYear(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}
