<?php
/* ----------------------------------
+ Song Controller
+ Description on Song Class
+
+ Revision History:
+		02.27.2006 : Created
------------------------------------ */

include("ext/ent.songs.php");


class SongController extends Song {
	private $pager;

	function __construct()
	{
		global $print, $func, $ws;

		switch($ws->input['sub'])
		{
			case "browse":
				$this->browseSongs();
				break;
			case "song_selection":
				$this->songSelection();
				break;
			case "song_selection_process":
				$this->songSelectionProc();
				break;
			case "request":
				$this->requestSong();
				break;
		}

	}

	/* ------------------
	songSelectionProc
		@ Processes the song selections upon hitting Save
	------------------- */
	function songSelectionProc()
	{
		global $con, $ws, $func, $print, $fon;


			if ($ws->input['event_id'] != '')
			{
				$ws->event_id = $ws->input['event_id'];
			}

			// Get our type id
			$con->query("SELECT type_id FROM event WHERE event_id = '".$ws->event_id."'");
			$r = $con->fetch_rows();
			$type_id = $r['type_id'];


			// Grab all our types
			$con->query("SELECT selection_type_id, name, description FROM selection_type
								WHERE event_type_id = '".$type_id."'
								OR event_type_id = '0'");
			while ($data = $con->fetch_rows())
			{
				$keys = $ws->input [ $data['name'] . '_key' ];
				$keys_delete = $ws->input [ $data['name'] . '_key_delete' ];

				$keys = substr($keys, 0, strlen($keys) - 1);
				$keys_delete = substr($keys_delete, 0, strlen($keys_delete) - 1);

				$keys = explode(",", $keys);
				$keys_delete = explode(",", $keys_delete);

				// If we selected the delete option, run this
				if ($ws->input['mod_type'] == 'delete')
				{
					foreach($keys_delete as $value)
					{
						if ($value != '')
						{
							$fon->query("DELETE FROM song_selection_lookup
											WHERE song_id = '".$value."'
											AND type_id = '".$data['selection_type_id']."'
											AND event_id = '".$ws->event_id."'");
						}
					}
				}

				foreach($keys as $value)
				{
					if ($value != '')
					{
						$sql = array(
							'song_id'	=> $value,
							'event_id'	=> $ws->event_id,
							'type_id'	=> $data['selection_type_id'],
							);

						$fon->query("SELECT song_id FROM song_selection_lookup
											WHERE song_id = '".$value."'
											AND type_id = '".$data['selection_type_id']."'
											AND event_id = '".$ws->event_id."'");
						if ($fon->get_num_rows() == 0)
						{
							$sql = $fon->compile_insert($sql);

							$fon->query("INSERT INTO song_selection_lookup
											(".$sql['FIELD_NAMES'].")
											VALUES
											(".$sql['FIELD_VALUES'].")");
						}
					}
				}
			}


		// Decide where we want to go...if we just did an add/remove, back to songs
		// otherwise, redirect to our move to

		if ( ($ws->input['mod_type'] == 'add') || ($ws->input['mod_type'] == 'delete') )
		{
			// Include the search term in the url
			Header("Location: ".$_SERVER['HTTP_REFERER']."&search_key=".$ws->input['search_key']);
		} else {
			$func->redirect("Song Selection Updated", $ws->input['move_to']);
		}

	}

	/* ------------------
	songSelection
		@ Sets up the song selection page
	------------------- */
	function songSelection()
	{
		global $con, $ws, $func, $print;

		if ($ws->input['event_id'])
		{
			$ws->event_id = $ws->input['event_id'];
			$url_return = $ws->base_loc."/admin/?page=event&event_id=".$ws->event_id;
		} else {
			$url_return = $ws->base_loc."/event/event_details";
		}

		/* -- Setup the alphabet selection -- */
		$types = array('songs', 'artists');

		foreach($types as $type)
		{
			for($i = 65; $i <= 90; $i++)
			{
				$alpha = chr($i);

				eval ('$data["alpha_'.$type.'"] .= "'. $func->fetch_template('song_browse_alpha') . '";');
			}
		}

		// Check if this dude is an admin
		$con->query("SELECT is_admin, is_master FROM person WHERE person_id = '".$ws->member['id']."'");
		$r = $con->fetch_rows();

		if ( ($r['is_admin'] == 1) || ($r['is_master'] == 1) )
		{
			$is_admin = 1;
		}



		// Get our type id
		$con->query("SELECT type_id FROM event WHERE event_id = '".$ws->event_id."'");
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

		if ($is_admin == 1)
		{
			$artist_column = "<td>Album</td>";
		}
		// Loop through our types, grab songs, and create the HTML
		foreach($selection_types as $name => $description)
		{
			$songs [ $name ] = '';
			$id = $selection_id [ $name ];
			$total_songs = 0;
			// Get a list of songs currently selected for this type/event
			$con->query("SELECT t.name, t.event_type_id, s.song_id, g.name AS song_name, a.name AS artist_name, g.length, g.year, b.name AS album_name
									FROM selection_type t
										JOIN song_selection_lookup s ON (t.selection_type_id = s.type_id)
										JOIN song g ON (s.song_id = g.song_id)
										JOIN artist a ON (g.artist_id = a.artist_id)
										JOIN album b ON (b.album_id = g.album_id)
									WHERE s.event_id = '".$ws->event_id."'
									AND s.type_id = '".$id."'
									");
			while ($r = $con->fetch_rows())
			{
				$songs [ $name ] .= "<tr id='added_".$r['song_id']."'><td><input type='checkbox' name='songs_rem' value='".$r['song_id']."' /></td><td>".$r['artist_name']."</td><td>".$r['song_name']."</td><td>".$r['year']."</td>";
				if ($is_admin == 1)
				{
					$songs [ $name ] .= "<td>".$r['album_name']."</td>";
				}
				$songs [ $name ] .= "</tr>";
				$total_songs ++;
				$total_time += $r['length'];

				// Output Javascript to create some of our arrays
				$song_js .= "song[".$r['song_id']."] = new songObj();
							 song[".$r['song_id']."].name = '".$r['song_name']."';
							 song[".$r['song_id']."].artist = '".$r['artist_name']."';
							 song[".$r['song_id']."].year = '".$r['year']."';
							 song[".$r['song_id']."].category = '".$r['name']."';
							 song[".$r['song_id']."].length = '".$r['length']."';\n";
			}

			// Here we do some crazy math to convert milliseconds to minutes
			// (349922 / 1000) / 60 (.00203333) * 60
			$total_time = round((($total_time / 1000) / 60), 2);

			$time_split = explode(".", $total_time);

			if ($time_split[1] > 60)
				$time_split[1] = $time_split[1] * 60;

			$total_time = $time_split[0].".".$time_split[1];
			$total_time = round($total_time, 2);


			eval ('$song["selection_type_tables"] .= "'. $func->fetch_template('selection_table') . '";');


			$song['selection_type_list'] .= "<option value='".$name."'";
			if ($ws->input['song_category'] == $name."_songs") { $song['selection_type_list'] .= " selected"; }
			$song['selection_type_list'] .= ">".$description."</option>";

			$song['hidden_list'] .= "<input type='hidden' name='".$name."_key' id='".$name."_key' />";
			$song['hidden_list'] .= "<input type='hidden' name='".$name."_key_delete' id='".$name."_key_delete' />\n";
		}


		$this->readSongs(); // Run the query to get a list of songs

		eval ('$html = "'. $func->fetch_template('song_selection') . '";');

		$print->add_output($html);
		$print->do_output();
	}

	/* ------------------
	browseSongs
		@ Front end for browsing the song library
	------------------- */
	function browseSongs()
	{
		global $func, $print, $con, $ws;
		/* -- Setup the alphabet selection -- */
		$types = array('songs', 'artists');

		foreach($types as $type)
		{
			for($i = 65; $i <= 90; $i++)
			{
				$alpha = chr($i);

				eval ('$data["alpha_'.$type.'"] .= "'. $func->fetch_template('song_browse_alpha') . '";');
			}
		}

		$this->readSongs(); // Run the query to get a list of songs

		if($ws->input['mod'] == 'song_detail')
		{
			$this->readSong($ws->input['song_detail']);
		}

		//$data['pager'] = $func->SetupPager($this->pager);
		eval ('$html = "'. $func->fetch_template('song_browse') . '";');

		$print->add_output($html);
		$print->do_output();
	}

	/* ------------------
	getGenreList
		@ Returns an array of genres based on an entered value
	------------------- */
	function getGenreList()
	{
		global $ws, $con, $func;

		$genre_list = array();

		$con->query("SELECT g.genre_id, g.name
							FROM genre g
								JOIN song_genre_lookup l ON (l.genre_id = g.genre_id)
								JOIN song s ON (s.song_id = l.song_id)
							WHERE g.name LIKE '%".$ws->input['txtItemSearch']."%'");
		while ($r = $con->fetch_rows())
		{
			$genre_list[] = $r['name'];
		}

		return $genre_list;
	}

	/* ------------------
	readSongs
		@ Grab a list of songs and create an XML document to output based on the search
	------------------- */
	function readSongs()
	{
		global $ws, $con, $func, $fon;



		$sorts = array(
			'artist_name'	=> 'a.name',
			'song_name'		=> 's.name',
			);

		$sort_key = $sorts [ $ws->input['sort_by_key'] ];

		if ($sort_key == '') { $sort_key = 's.name'; }



		$got_songs = false;
		if ( ($ws->input['mod'] == 'txtItemSearch') || ($ws->input['mod'] == 'sort_by_key') || ($ws->input['mod'] == 'pagenum') || ($ws->input['mod'] == 'search_by_key') )
		{
			// Setup paging
			$con->query("SELECT song_id
								FROM song
								WHERE name LIKE  '%".$ws->input['txtItemSearch']."%'");
			$this->pager = $func->PagerArray(100);

			$data['pager'] = $func->SetupPager($this->pager);

			$xml = "<root type='songList'>";

			// Select the correct query based on the search by selection
			switch($ws->input['search_by_key'])
			{
				case "genre":
				$con->query("SELECT DISTINCT s.song_id, s.name, a.name AS artist_name, s.year, length, b.name AS album_name
							FROM song s
								JOIN artist a ON (s.artist_id = a.artist_id)
								JOIN album b ON (s.album_id = b.album_id)
								JOIN song_genre_lookup k ON (k.song_id = s.song_id)
								JOIN genre g ON (k.genre_id = g.genre_id)
							WHERE g.name LIKE '%".$ws->input['txtItemSearch']."%'
							LIMIT ".$this->pager['start'].",".$this->pager['per_page']."");
					break;
				case "keyword":
				$con->query("SELECT DISTINCT s.song_id, s.name, a.name AS artist_name, s.year, keyword, length, b.name AS album_name
									FROM song s
										JOIN artist a ON (s.artist_id = a.artist_id)
										JOIN album b ON (s.album_id = b.album_id)
										JOIN keyword_song_lookup k ON (k.song_id = s.song_id)
										JOIN keyword w ON (k.keyword_id = w.keyword_id)
									WHERE w.keyword LIKE '%".$ws->input['txtItemSearch']."%'
									LIMIT ".$this->pager['start'].",".$this->pager['per_page']."");
					break;
				case "artist_name":
				$con->query("SELECT s.song_id, s.name, a.name AS artist_name, s.year, length, b.name AS album_name
							FROM song s
								JOIN artist a ON (s.artist_id = a.artist_id)
								JOIN album b ON (s.album_id = b.album_id)
							WHERE a.name LIKE  '%".$ws->input['txtItemSearch']."%'
							ORDER BY ".$sort_key." ASC
							LIMIT ".$this->pager['start'].",".$this->pager['per_page']."");
					break;


				default:
				$con->query("SELECT s.song_id, s.name, a.name AS artist_name, s.year, length, b.name AS album_name
							FROM song s
								JOIN artist a ON (s.artist_id = a.artist_id)
								JOIN album b ON (s.album_id = b.album_id)
							WHERE s.name LIKE  '%".$ws->input['txtItemSearch']."%'
							ORDER BY ".$sort_key." ASC
							LIMIT ".$this->pager['start'].",".$this->pager['per_page']."");
			}

			while ($r = $con->fetch_rows())
			{
				// Setup a song!
				$this->songBase($r);

				$fon->query("SELECT g.genre_id, g.name
							FROM genre g
								JOIN song_genre_lookup l ON (l.genre_id = g.genre_id)
								JOIN song s ON (s.song_id = l.song_id)
							WHERE l.song_id = '".$r['song_id']."'");
				while ($g = $fon->fetch_rows())
					$r['genre'] .= $g['name'].", ";

				$r['genre'] = substr($r['genre'], 0, -2);
				if ($r['genre'] == '') { $r['genre'] = '<blank></blank>'; }

				$got_songs = true;
				$xml .= "<song>";
				$xml .= $func->varToXml("song_id", $r['song_id']);
				$xml .= $func->varToXml("song_name", $this->getSongName());
				$xml .= $func->varToXml("year", $r['year']);
				$xml .= $func->varToXml("artist_name", $r['artist_name']);
				$xml .= $func->varToXml("genre", $r['genre']);
				$xml .= $func->varToXml("album", $r['album_name']);
				$xml .= $func->varToXml("length", $r['length']);
				$xml .= "</song>\n";
			}

			if (trim($data['pager']) == '')
			{
				$data['pager'] = 'junk';
			}

			$xml .= "<pager><child>".$data['pager']."</child></pager>";
			$xml .= "</root>";

			if ($got_songs == true)
			{
				echo $xml;
			} else {
				// Echo out a blank xml doc
				$xml = "<root type='songList'><pager><child>junk</child></pager></root>";
				echo $xml;
			}

			die();
		}
	}

	/* ------------------
	readSong
		@ Read a single song based on the search
	------------------- */
	function readSong($id)
	{
		$xml = "<root type='songDetail'>";
			$con->query("SELECT s.song_id, s.name, a.name AS artist_name, s.year
							FROM song s
								JOIN artist a ON (s.artist_id = a.artist_id)
							WHERE s.name LIKE  '%".$ws->input['txtItemSearch']."%'");
			while ($r = $con->fetch_rows())
			{
				// Setup a song!
				$this->constructWithVars($r);


				$xml .= "<song>";
				$xml .= $func->varToXml("song_id", $this->getSongId());
				$xml .= $func->varToXml("song_name", $this->getSongName());
				$xml .= $func->varToXml("year", $this->getYear());
				$xml .= $func->varToXml("year", $this->getYear());
				$xml .= $func->varToXml("artist_name", $r['artist_name']);
				$xml .= "</song>\n";
			}

			$xml .= "</root>";
			echo $xml;

			die();
	}

}

$idx = new SongController;
?>
