<?php
/* ----------------------------------
+ Entity Testing Class
+ Class used for testing all the entities
+
+ Tests
+----------------------
+
+ Constructor Tests
+---------------------------
+ Loaded Constructor Test: Test Entity's constructor with good values
+ Null Loaded Constructor Test: Test Entity's constructor with nothing
+ Not Array Loaded Constructor Test: Test Entity's constructor with a non-array
+
+ Field Tests (Sets)
+--------------------------
+ Proper Test: Test the Field with good values
+ NullException Test: Test the Field with no value
+ InvalidTypeException Test: Test the Field with an inproper value
+ NegativeException Test: Test the Field with a negative number
+ InvalidFormatException Test: Test the Field with an improperly formatted value
+ TooLargeException Test: Test the Field with a value too large for it
+ TooSmallException Test: Test the Field with a value too small for it
+
------------------------------------ */

/* Library setup */
require("../include/library.php");
require('../include/constants.php');

/* setup vars */
$print = new display;
$func = new func;
$sess = new session();

$toolong = "123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901";


$ws->base_loc = '/project';
		$ws->error = array();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> - Entity Testing</TITLE>
<link rel="stylesheet" type="text/css" href="testing.css" />
</HEAD>

<BODY>

<?
echo "<h4>01000 - Album Entity</h4><ul>";
include('test.album.php');

echo "</ul><h4>02000 - Artist Entity</h4><ul>";
include('test.artist.php');

echo "</ul><h4>03000 - Comment Entity</h4><ul>";
include('test.comments.php');

echo "</ul><h4>04000 - ContractFee Entity</h4><ul>";
include('test.contract_fees.php');

echo "</ul><h4>05000 - Event Entity</h4><ul>";
include('test.event.php');

echo "</ul><h4>06000 - EventQuestion Entity</h4><ul>";
include('test.eventQuestion.php');

echo "</ul><h4>07000 - EventType Entity</h4><ul>";
include('test.eventType.php');

echo "</ul><h4>08000 - Fee Entity</h4><ul>";
include('test.fee.php');

echo "</ul><h4>09000 - Feedback Entity</h4><ul>";
include('test.feedback.php');

echo "</ul><h4>10000 - FeedbackField Entity</h4><ul>";
include('test.feedbackField.php');

echo "</ul><h4>11000 - Genre Entity</h4><ul>";
include('test.genre.php');

echo "</ul><h4>12000 - Keyword Entity</h4><ul>";
include('test.keyword.php');

echo "</ul><h4>13000 - MusicCategory Entity</h4><ul>";
include('test.musicCategory.php');

echo "</ul><h4>14000 - News Entity</h4><ul>";
include('test.news.php');

echo "</ul><h4>15000 - Person Entity</h4><ul>";
include('test.person.php');

echo "</ul><h4>16000 - ScheduleItem Entity</h4><ul>";
include('test.scheduleItem.php');

echo "</ul><h4>17000 - Song Entity</h4><ul>";
include('test.song.php');

echo "</ul><h4>18000 - SongRequest Entity</h4><ul>";
include('test.songRequest.php');

echo "</ul><h4>19000 - Suggestion Entity</h4><ul>";
include('test.suggestion.php');

echo "</ul><h4>20000 - Template Entity</h4><ul>";
include('test.template.php');
echo "</ul>";
?>
</ul>
</BODY>
</HTML>
