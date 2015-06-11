<?
/* ----------------------------------
+ Feedback Field TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.songs.php');

	$testClass = new Song();
	if ($func->isErrors())
	{
		echo "<li><b>17001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array (
	'song_id'		=> 1,
	'name'		=> 'test song name',
	'length'		=> 1,
	'year'			=> 1,
	'artist_id'		=> 1,
	'album_id'		=> 1,
	'clip_location'	=> 'test location',
	'song_count'	=> 0,
	);

	$testClass->songConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>17002</b> - Good Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17002</b> - Good Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->songConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>17003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17003</b> - Null Loaded Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->songConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>17004</b> - NoArray Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17004</b> - NoArray Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = array (
	'song_id'		=> 1,
	'name'		=> 'test song name',
	'year'			=> 1,
	);

	$testClass->songBase($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>17005</b> - Song Base Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17005</b> - Song Base Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->songBase($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>17006</b> - Null Loaded Song Base Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17006</b> - Null Loaded Song Base Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->songBase($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>17007</b> - NoArray Loaded Song Base Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17007</b> - NoArray Loaded Song Base Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/


// song_id

	$testClass->setSongId(1);
	if ($func->isErrors())
	{
		echo "<li><b>17010</b> - setSongId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17010</b> - setSongId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setSongId("");
	if ($func->isErrors())
	{
		echo "<li><b>17011</b> - setSongId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b>17011</b> - setSongId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSongId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>17012</b> - setSongId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17012</b> - setSongId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSongId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>17013</b> - setSongId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17013</b> - setSongId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSongId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>17014</b> - setSongId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17014</b> - setSongId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// song_name

	$testClass->setSongName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>17020</b> - setSongName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17020</b> - setSongName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setSongName('');
	if ($func->isErrors())
	{
		echo "<li><b>17021</b> - setSongName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17021</b> - setSongName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setSongName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>17022</b> - setSongName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17022</b> - setSongName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// length

	$testClass->setLength(1);
	if ($func->isErrors())
	{
		echo "<li><b>17030</b> - setLength(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17030</b> - setLength(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLength('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>17031</b> - setLength(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17031</b> - setLength(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}


	$testClass->setLength(-1);
	if ($func->isErrors())
	{
		echo "<li><b>17032</b> - setLength(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17032</b> - setLength(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// year

	$testClass->setYear(1);
	if ($func->isErrors())
	{
		echo "<li><b>17040</b> - setYear(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17040</b> - setYear(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setYear(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>17041</b> - setYear(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17041</b> - setYear(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setYear('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>17042</b> - setYear(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17042</b> - setYear(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setYear(-1);
	if ($func->isErrors())
	{
		echo "<li><b>17043</b> - setYear(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17043</b> - setYear(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// album_id

	$testClass->setAlbumId(1);
	if ($func->isErrors())
	{
		echo "<li><b>17050</b> - setAlbumId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17050</b> - setAlbumId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setAlbumId('');
	if ($func->isErrors())
	{
		echo "<li><b>17051</b> - setAlbumId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b>17051</b> - setAlbumId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setAlbumId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>17052</b> - setAlbumId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17052</b> - setAlbumId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setAlbumId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>17053</b> - setAlbumId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17053</b> - setAlbumId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setAlbumId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>17054</b> - setAlbumId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17054</b> - setAlbumId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// artist_id

	$testClass->setArtistId(1);
	if ($func->isErrors())
	{
		echo "<li><b>17060</b> - setArtist(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17060</b> - setArtist(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setArtistId('');
	if ($func->isErrors())
	{
		echo "<li><b>17061</b> - setArtistId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo"<li><b>17061</b> - setArtistId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setArtistId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>17062</b> - setArtistId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17062</b> - setArtistId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setArtistId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>17063</b> - setArtistId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17063</b> - setArtistId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setArtistId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>17064</b> - setArtistId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17064</b> - setArtistId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// song_location

	$testClass->setLocation('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>17070</b> - setLocation('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17070</b> - setLocation('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLocation($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>17071</b> - setLocation(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>17071</b> - setLocation(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}
