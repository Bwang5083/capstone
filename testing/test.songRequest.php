<?
/* ----------------------------------
+ Feedback Field TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.song_request.php');


	$testClass = new SongRequest();
	if ($func->isErrors())
	{
		echo "<li><b>18001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array (
	'request_id'	=> 1,
	'user_provides'	=> false,
	'person_id'		=> 1,
	'song_name'		=> 'test song name',
	'artist_name'	=> 'test artist name',
	'album_name'	=> 'test album name',
	);

	$testClass->songRequestConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>18002</b> - Good Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18002</b> - Good Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->songRequestConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>18003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18003</b> - Null Loaded Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->songRequestConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>18004</b> - NoArray Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18004</b> - NoArray Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/


// request_id

	$testClass->setRequestId(1);
	if ($func->isErrors())
	{
		echo "<li><b>18010</b> - setRequestId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18010</b> - setRequestId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setRequestId('');
	if ($func->isErrors())
	{
		echo "<li><b>18011</b> - setRequestId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b>18011</b> - setRequestId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setRequestId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>18012</b> - setRequestId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18012</b> - setRequestId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setRequestId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>18013</b> - setRequestId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18013</b> - setRequestId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}


	$testClass->setRequestId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>18014</b> - setRequestId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18014</b> - setRequestId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// user_provides

	$testClass->setUserProvides(true);
	if ($func->isErrors())
	{
		echo "<li><b>18020</b> - setUserProvides(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18020</b> - setUserProvides(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setUserProvides('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>18021</b> - setUserProvides(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18021</b> - setUserProvides(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// person_id

	$testClass->setPersonId(1);
	if ($func->isErrors())
	{
		echo "<li><b>18030</b> - setPersonId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18030</b> - setPersonId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPersonId("");
	if ($func->isErrors())
	{
		echo "<li><b>18031</b> - setPersonId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b>18031</b> - setPersonId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>18032</b> - setPersonId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18032</b> - setPersonId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>18033</b> - setPersonId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18033</b> - setPersonId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}


	$testClass->setPersonId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>18034</b> - setPersonId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18034</b> - setPersonId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// song_name

	$testClass->setSongName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>18040</b> - setSongName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18040</b> - setSongName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setSongName('');
	if ($func->isErrors())
	{
		echo "<li><b>18041</b> - setSongName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18041</b> - setSongName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSongName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>18042</b> - setSongName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18042</b> - setSongName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// artist_name

	$testClass->setArtistName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>18050</b> - setArtistName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18050</b> - setArtistName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setArtistName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>18051</b> - setArtistName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18051</b> - setArtistName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// album_name

	$testClass->setAlbumName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>18060</b> - setAlbumName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18060</b> - setAlbumName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setAlbumName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>18061</b> - setAlbumName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>18061</b> - setAlbumName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}
