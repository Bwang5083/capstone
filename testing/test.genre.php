<?
/* ----------------------------------
+ Genre TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.genre.php');

// 02001 test default constructor
	$testClass = new Genre();
	if ($func->isErrors())
	{
		echo "<li><b>11001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'genre_id'		=> 1,
	'name'			=> 'test name',
	'description'	=> 'test description',
	);

	$testClass->genreConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>11002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->genreConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>11003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->genreConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>11004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// genre_id

	$testClass->setGenreId(1);
	if ($func->isErrors())
	{
		echo "<li><b>11010</b> - setGenreId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11010</b> - setGenreId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setGenreId('');
	if ($func->isErrors())
	{
		echo "<li><b>11011</b> - setGenreId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11011</b> - setGenreId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setGenreId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>11012</b> - setGenreId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11012</b> - setGenreId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setGenreId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>11013</b> - setGenreId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11013</b> - setGenreId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setGenreId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>11014</b> - setGenreId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11014</b> - setGenreId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>11020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>11021</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11021</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>11022</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11022</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// description

	$testClass->setDescription('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>11030</b> - setDescription('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>11030</b> - setDescription('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}
