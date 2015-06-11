<?
// Handler for our song loading function

include('mysql.php');

$con = new db_driver;
$con->connect();


if ($_GET['name'])
{

	// Get/make a genre id
	$con->query("SELECT genre_id FROM genre WHERE name = '".$_GET['genre']."'");
	if ($con->get_num_rows() == 0)
	{
		// Insert the genre!
		$con->query("INSERT INTO genre (name,description) VALUES ('".$_GET['genre']."','')");

		$genre_id = $con->get_insert_id();

	} else {
		$r = $con->fetch_rows();
		$genre_id = $r['genre_id'];
	}



	$con->query("SELECT album_id FROM album WHERE name = '".$_GET['album']."'");
	if ($con->get_num_rows() == 0)
	{
		// Insert this album
		$con->query("INSERT INTO album (name,year) VALUES ('".$_GET['album']."', '".$_GET['year']."')");

		$album_id = $con->get_insert_id();

	} else {
		$r = $con->fetch_rows();
		$album_id = $r['album_id'];
	}

	$con->query("SELECT artist_id FROM artist WHERE name = '".$_GET['artist']."'");
	if ($con->get_num_rows() == 0)
	{
		// Insert this artist
		$con->query("INSERT INTO artist (name) VALUES ('".$_GET['artist']."')");

		$artist_id = $con->get_insert_id();

	} else {
		$r = $con->fetch_rows();
		$artist_id = $r['artist_id'];
	}

	// Now we can setup the song :O
	$sql = array(
		'name'	=> $_GET['name'],
		'album_id'	=> $album_id,
		'artist_id'	=> $artist_id,
		'length'	=> $_GET['time'],
		'year'		=> $_GET['year'],
		);

	$sql = $con->compile_insert($sql);

	$con->query("INSERT INTO song (".$sql['FIELD_NAMES'].")
									VALUES
								   (".$sql['FIELD_VALUES'].")");

	$song_id = $con->get_insert_id();

	// Add it to the genre lookup table!
	if ($genre_id > 0)
		$con->query("INSERT INTO song_genre_lookup (song_id, genre_id) VALUES ('".$song_id."', '".$genre_id."')");

}
?>
