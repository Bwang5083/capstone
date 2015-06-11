<?
/* ----------------------------------
+ Keyword TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.musicCategory.php');

	$testClass = new MusicCategory();
	if ($func->isErrors())
	{
		echo "<li><b>13001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'music_category_id'	=> 1,
	'name'				=> 'test name',
	'info'				=> 'test_info',
	);

	$testClass->musicCategoryConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>13002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->musicCategoryConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>13003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->musicCategoryConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>13004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/


// music_category_id

	$testClass->setMusicCategoryId(1);
	if ($func->isErrors())
	{
		echo "<li><b>13010</b> - setMusicCategoryId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13010</b> - setMusicCategoryId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setMusicCategoryId('');
	if ($func->isErrors())
	{
		echo "<li><b>13011</b> - setMusicCategoryId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13011</b> - setMusicCategoryId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setMusicCategoryId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>13012</b> - setMusicCategoryId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13012</b> - setMusicCategoryId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setMusicCategoryId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>13013</b> - setMusicCategoryId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13013</b> - setMusicCategoryId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setMusicCategoryId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>13014</b> - setMusicCategoryId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13014</b> - setMusicCategoryId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>13020</b> - setName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13020</b> - setName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setName('');
	if ($func->isErrors())
	{
		echo "<li><b>13021</b> - setName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13021</b> - setName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>13022</b> - setName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13022</b> - setName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// name

	$testClass->setInfo('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>13030</b> - setInfo('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13030</b> - setInfo('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setInfo('');
	if ($func->isErrors())
	{
		echo "<li><b>13031</b> - setInfo('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>13031</b> - setInfo('') NullException Test: <div class='fail'>Failed</div> </li>";
	}
