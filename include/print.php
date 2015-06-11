<?php
/* ----------------------------------
+ Print
+ Printing control page
+
+ Revision History:
+		4/22/2006 : Created
------------------------------------ */

$idx = new PrintController;

class PrintController {

	function __construct()
	{
		global $print, $func, $ws;

		switch($ws->input['sub'])
		{
			case 'song_browse':
				$this->songBrowse();
				break;
			case 'song_selection':
				$this->songSelection();
				break;
		}


	}

	function songSelection()
	{
		global $ws, $func, $print, $con, $fon;

		if ($ws->input['event_id'])
		{
			$event_id = $ws->input['event_id'];
		} else {
			$event_id = $ws->event_id;
		}

		// Check if this dude is an admin
		$con->query("SELECT is_admin, is_master FROM person WHERE person_id = '".$ws->member['id']."'");
		$r = $con->fetch_rows();

		if ( ($r['is_admin'] == 1) || ($r['is_master'] == 1) )
		{
			$is_admin = 1;
		}

		// Get our type id
		$con->query("SELECT type_id FROM event WHERE event_id = '".$event_id."'");
		$r = $con->fetch_rows();

		$type_id = $r['type_id'];


		// Get a list of our song selection types
		$con->query("SELECT selection_type_id, name, description FROM selection_type
							WHERE event_type_id = '".$type_id."'
							OR event_type_id = '0'");
		while ($r = $con->fetch_rows())
		{
			$selection_types [ $r['name'] ] = $r['description'];
			$selection_id [ $r['name'] ] = $r['selection_type_id'];
		}


		$html .= "<center><b>Song Selections</b> <input type='button' value='Print This Page' onClick='window.print()' /></center><br />";
		// Loop through our types, grab songs, and create the HTML
		foreach($selection_types as $name => $description)
		{
			$songs [ $name ] = '';
			$id = $selection_id [ $name ];
			$total_songs = 0;
			// Get a list of songs currently selected for this type/event
			$con->query("SELECT t.name, t.event_type_id, s.song_id, g.name AS song_name, a.name AS artist_name, g.length, g.year, m.name AS album_name
									FROM selection_type t
										JOIN song_selection_lookup s ON (t.selection_type_id = s.type_id)
										JOIN song g ON (s.song_id = g.song_id)
										JOIN artist a ON (g.artist_id = a.artist_id)
										JOIN album m ON (g.album_id = m.album_id)
									WHERE s.event_id = '".$event_id."'
									AND s.type_id = '".$id."'");
			while ($r = $con->fetch_rows())
			{

				$songs [ $name ] .= "<tr><td></td><td>".$r['artist_name']."</td><td>".$r['song_name']."</td><td>".$r['year']."</td>";
				if ($is_admin == 1)
				{
					$songs [ $name ] .= "<td>".$r['album_name']."</td>";
				}
				$songs [ $name ] .= "</tr>";
				$total_songs ++;
				$total_time += $r['length'];
			}

			// Here we do some crazy math to convert milliseconds to minutes
			// (349922 / 1000) / 60 (.00203333) * 60
			$total_time = round((($total_time / 1000) / 60), 2);

			$time_split = explode(".", $total_time);

			if ($time_split[1] > 60)
				$time_split[1] = $time_split[1] * 60;

			$total_time = $time_split[0].".".$time_split[1];
			$total_time = round($total_time, 2);

			eval ('$html .= "'. $func->fetch_template('selection_table') . '";');
		}

		echo $html;
	}

	function songBrowse()
	{
		global $ws, $func, $print, $con, $fon;

		$sorts = array(
			'artist_name'	=> 'a.name',
			'song_name'		=> 's.name',
			);

		$sort_key = $sorts [ $ws->input['sort_by_key'] ];

		if ($sort_key == '') { $sort_key = 's.name'; }


		switch($ws->input['search_by_key'])
		{
			case "genre":
			$con->query("SELECT DISTINCT s.song_id, s.name, a.name AS artist_name, s.year, length
						FROM song s
							JOIN artist a ON (s.artist_id = a.artist_id)
							JOIN song_genre_lookup k ON (k.song_id = s.song_id)
							JOIN genre g ON (k.genre_id = g.genre_id)
						WHERE g.name LIKE '%".$ws->input['search']."%'");
				break;
			case "keyword":
			$con->query("SELECT DISTINCT s.song_id, s.name, a.name AS artist_name, s.year, keyword, length
								FROM song s
									JOIN artist a ON (s.artist_id = a.artist_id)
									JOIN keyword_song_lookup k ON (k.song_id = s.song_id)
									JOIN keyword w ON (k.keyword_id = w.searchy_by)
								WHERE w.keyword LIKE '%".$ws->input['search']."%'");
				break;
			case "artist_name":
			$con->query("SELECT s.song_id, s.name, a.name AS artist_name, s.year, length
						FROM song s
							JOIN artist a ON (s.artist_id = a.artist_id)
						WHERE a.name LIKE  '%".$ws->input['search']."%'
						ORDER BY ".$sort_key." DESC");
				break;

			default:
			$con->query("SELECT s.song_id, s.name, a.name AS artist_name, s.year, length
						FROM song s
							JOIN artist a ON (s.artist_id = a.artist_id)
						WHERE s.name LIKE  '%".$ws->input['search']."%'
						ORDER BY ".$sort_key." ASC");
		}

		echo "<input type='button' value='Print This Page' onClick='window.print()' /></center><br />";
		echo '<table class="print" width=100%><tr><td>Song</td><td>Artist</td><td>Year</td><td>Genre(s)</td><td>HELLO</td>';

		echo "</tr>";

		while ($r = $con->fetch_rows())
		{

			$fon->query("SELECT g.genre_id, g.name
						FROM genre g
							JOIN song_genre_lookup l ON (l.genre_id = g.genre_id)
							JOIN song s ON (s.song_id = l.song_id)
						WHERE l.song_id = '".$r['song_id']."'");
			while ($g = $fon->fetch_rows())

			$r['genre'] .= $g['name'].", ";
			$r['genre'] = substr($r['genre'], 0, -2);
			if ($r['genre'] == '') { $r['genre'] = ' '; }




			echo '<tr><td>' . $r['name'] . '</td>';
			echo '<td>' . $r['artist_name'] . '</td>';
			echo '<td>' . $r['year'] . '</td>';
			echo '<td>' . $r['genre'] . '</td></tr>';
		}

		echo '</table>';


	}



}

?>
