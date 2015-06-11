<?php
/*-------------------------------------------
+ index.php
+
+ oh god whats going on here
+-------------------------------------------*/

/* --------- Edit the following site path variable -------- */
$site_path = '';


/* ---------- DO NOT EDIT BELOW -------------- */


/* Setup */
error_reporting(E_ERROR | E_WARNING | E_PARSE);

/* mySQL setup */
require("include/mysql.php");
$con = new db_driver;
$conx = new db_driver;
$fon = new db_driver;

$con->connect();
$conx->connect();
$fon->connect();




/* Library setup */
require("include/library.php");
require('include/constants.php');

$print = new display;
$func = new func;
$sess = new session();
$globals = $print->get_global();

$ws = new stdClass();

$ws->input = $func->parse_incoming();
$ws->base_loc = $site_path;
$ws->error = array();
$ws->member = $sess->authorise();
$ws->session_id = $sess->session_id;

// Setup the event id if we need to
 session_save_path("cgi-bin/tmp");     ///home/users/web/b1162/nf.igotthebeat/cgi-bin/tmp
session_start();
$ws->event_id = $_SESSION['event_id'];

// Ok check if they are an admin here
$con->query("SELECT is_admin, is_master FROM person WHERE person_id  = '".$ws->member['id']."'");
$r = $con->fetch_rows();

if ( ($r['is_admin'] == '1') || ($r['is_master'] == '1') )
{
	$ws->is_admin = true;
}

$crumbs =  explode('/', $ws->input['qarray']);

if ($crumbs[0])
	$ws->input['page'] = $crumbs[0];

if ($crumbs[1])
	$ws->input['sub'] = $crumbs[1];

if ($crumbs[2])
	$ws->input['id'] = $crumbs[2];

$pages = array(
	'main'			=> 'main',
	'faqs'			=> 'faqs',
	'songs'			=> 'songs',
	'about'			=> 'about',
	'news'			=> 'news',
	'customer'		=> 'customer',
	'event'			=> 'event',
	'feedback'		=> 'feedback',
	'brochure'		=> 'brochure',
	'print'			=> 'print',
	'popular'		=> 'popular',
);



if (! isset($pages[ $ws->input['page'] ] ) ) {
	$ws->input['page'] = 'main';
}

require("include/". $pages [ $ws->input['page'] ] .".php");


?>
