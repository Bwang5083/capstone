<?php
/* ----------------------------------
+ Popular Song List
+ Simple switch page for About DJ's/Us
+
+ Revision History:
+		02.28.2006 : Created
------------------------------------ */

$idx = new Popular;

class Popular {

	function __construct()
	{
		global $con, $conx, $print, $func, $ws;


		$songs = array();
		$html .= "<div id='content'><h1>Popular Songs</h1>";

		$con->query("SELECT popular_song_category_id, name FROM popular_song_category
							ORDER BY popular_song_category_id ASC");
		while ($r = $con->fetch_rows())
		{
			$popular_list = '';
			$popular_list .= "<tr><td colspan='3' class='formtitle'>".$r['name']."</td></tr>";
			$popular_list .= "<tr><td><b>Rank</b></td><td><b>Name</b></td><td><b>Artist</b></td><td><b>Year</b></td></tr>";
			$conx->query("SELECT s.name, s.year, l.song_id, l.rank, a.name AS artist_name
							FROM popular_song_lookup l
								JOIN song s ON (s.song_id = l.song_id)
								JOIN artist a ON (s.artist_id = a.artist_id)
								WHERE popular_song_category_id = '".$r['popular_song_category_id']."'
							ORDER BY rank ASC");
			while ($s = $conx->fetch_rows())
			{

				$popular_list .= "<tr><td>".$s['rank']."</td><td>".$s['name']."</td><td>".$s['artist_name']."</td><td>".$s['year']."</td></tr>";
			}

			eval('$html .= "' . $func->fetch_template('song_popular') . '";');
		}


		foreach($songs as $key => $name)
		{

		}

		$html .= "</div>";



		$print->add_output($html);
		$print->do_output();
	}



}

?>
