<!--
	File:			weddingplanneralpha.php
	Version:		1.0 Alpha
	Author:			Dave Mann
	Last Updated:	July 29 2005
--->
<html>
<head>
<title>I Got The Beat DJ Services - Wedding Planner</title>
<META name="resource-type" content="document">
<META name="description" content="I Got The Beat DJ Service provides music and fun for your weddings or party. Professional equipment with very competitive pricing. If you want the beat I Got The Beat">
<META name="keywords" content="DJ, DJ Services, DJ Services Kitchener, DJ Services Guelph, DJ Services Watterloo, DJ Services Cambridge, DJ Services Galt, disc jockey, party, dance, school dances, light show, wedding receptions, corporate functions, fun, excitement MC, hall facility, Guelph, Kitchener, Cambridge, Galt, Hamilton, TriCities, Toronto.">
<META name="distribution" content="global">
</head>
<body bgcolor="#ffffff" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" link="#202C64" vlink="#202C64" alink="#202C64">
	<?php
		if ($_SERVER['REQUEST_METHOD'] != 'POST'){
		$me = $_SERVER['PHP_SELF'];
	?>
	<form name="WeddingPlanner" method="post"
		action="<?php echo $me;?>">
	<h1 align="center"><font color="red">I GOT THE BEAT - WEDDING PLANNER</FONT></H1>
	<BR></BR>


<!-- Main Content -->

			<p align=left><u>BASIC INFORMATION:</u></p>

			<TABLE WIDTH=600 border=0 cellspacing="0" cols=3>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>DATE OF WEDDING:</B></FONT></td>
					<TD width="328"><input name="DateOfWedding" type="text" id="DateOfWedding" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>BRIDE'S NAME:</B></FONT></td>
					<TD><input name="BrideName" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>GROOM'S NAME:</B></FONT></td>
					<TD><input name="GroomName" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>BRIDE'S PARENTS:</B></FONT></td>
					<TD><input name="BridesParents" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>GROOM'S PARENTS:</B></FONT></td>
					<TD><input name="GroomsParents" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>MAID/MATRON OF HONOUR'S NAME:</B></FONT></td>
					<TD><input name="MaidOfHonour" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>BEST MAN'S NAME:</B></FONT></td>
					<TD><input name="BestMan" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>CONTACT'S NAME:</B></FONT></td>
					<TD><input name="NameContact" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>PHONE NUMBER OF CONTACT:</B></FONT></td>
					<TD><input name="ContactsPhone" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>EMAIL OF CONTACT:</B></FONT></td>
					<TD><input name="ContactsEmail" type="text" size="35" value=""></td>
				</TR>
			</TABLE>

			<br><br>
			<p align=left><u>RECEPTION:</u></p>
			<TABLE WIDTH=600 border=0 cellspacing="0">
				<TR>
					<TD width="268"><FONT SIZE=-2><B>LOCATION:</B></FONT></td>
					<TD width="308"><input name="Location" type="text" size="35" value=""></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>ROOM NAME:</B></FONT></td>
					<TD><input name="RoomName" type="text" id="RoomName" size="35" value=""></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>ESTIMATED NUMBER OF GUESTS:</B></FONT></TD>
					<TD><input name="EstGuests" type="text" id="EstGuests" size="23" value=""></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>RECEPTION FACILITY CONTACT PERSON:</B></FONT></TD>
					<TD><input name="ReceptionContactsName" type="text" id="ReceptionContactsName" size="15" value=""></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>PHONE NUMBER OF CONTACT:</B></FONT></td>
					<TD><input name="ReceptionContactsPhone" type="text" size="35" value=""></td>
				</TR>
					<TD><FONT SIZE=-2><B>WHAT IS THE DJ's SET UP TIME?</B></FONT></TD>
					<TD><input name="GuestArrivalTime" type="text" id="GuestArrivalTime" size="23" value=""></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>TIME THE MUSIC IS TO START:</B></FONT></TD>
					<TD><input name="MusicStart" type="text" id="MusicStart" size="23" value=""></td>
				</TR>
			</TABLE>

			<br><br>
			<p align=left><u>COCKTAILS AND DINNER:</u></p>
			<TABLE WIDTH=600 border=0 cellspacing="0">
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>DO YOU HAVE A MASTER OF CEREMONIES?</B></FONT>
						<input type="radio" name="MasterOfCeremonies" value="yes">
						<FONT SIZE=-2><B>YES</B>&nbsp;&nbsp;</FONT>
						<input type="radio" name="MasterOfCeremonies" value="no">
						<FONT SIZE=-2><B>NO</B></FONT></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>If Yes, Who?</B>
						<input name="MasterOfCeremoniesName" type="text" id="MasterOfCeremoniesName" size="35" value="">
						</FONT></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>DJ TO ANNOUNCE BRIDAL PARTY?</B></FONT>
						<input type="radio" name="AnnounceBridalParty" value="yes">
						<FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="AnnounceBridalParty" value="no">
						<FONT SIZE=-2><B>NO</B>
						&nbsp;&nbsp;
						When?
						<input name="AnnounceBridalPartyWhen" type="text" id="AnnounceBridalPartyWhen" size="20" value="">
						</FONT></td>
				</TR>
				<TR>
					<TD colspan="2" align="top"><p><FONT SIZE=-2><B>BRIDAL PARTY SONG(S)?:</B>
					  </FONT><br>
					</td>
				</TR>
				<TR>
					<TD colspan="4" >
						<textarea cols="90" rows="2" name="BridalPartyMusic" id="BridalPartyMusic" value=""></textarea>
						<font size="1" face="arial">(If DJ is introducing bridal party attach the names, in order, with the pronunciation of any awkward names)</font></td>
					<td width="1"></TD>
				</TR>
				<TR>
					<TD width="82"><FONT SIZE=-2><B>ARTIST:</B></FONT></td>
					<TD width="299"><input name="BridalPartyMusicArtist" type="text" size="40" value=""></td>
									</TR>
				<TR>
					<TD><FONT SIZE=-2><B>CLIENT PROVIDES</B></FONT>
						<input type="radio" name="BridalPartyMusicProvided" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="BridalPartyMusicProvided" value="no"><FONT SIZE=-2><B>NO</B></FONT></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>BRIDE AND GROOM SONG?:</B></FONT></TD>
					<TD>
						<input name="BrideGroomMusic" type="text" id="BrideGroomMusic" size="40" value="Same as Bridal Party">
						<br></TD>
				</TR>
				<TR>
					<TD ><FONT SIZE=-2><B>ARTIST:</B></FONT></td>
					<TD><input name="BrideGroomMusicArtist" type="text" size="40" value="Same as Bridal Party"></td>
				</TR>
				<TR>
					<TD width="189"><FONT SIZE=-2><B>CLIENT PROVIDES</B></FONT>
						<input type="radio" name="BrideGroomMusicProvided" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="BrideGroomMusicProvided" value="no"><FONT SIZE=-2><B>NO</B></FONT></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>DO YOU NEED OUR MICROPHONE FOR SPEECHES?</B></FONT>
						<input type="radio" name="Microphone" value="yes">
						<FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="Microphone" value="no">
						<FONT SIZE=-2><B>NO</B>
						</FONT></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>COCKTAIL AND DINNER MUSIC?</B></FONT>
						<input type="radio" name="CoktailDinnerMusic" value="yes">
						<FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="CoktailDinnerMusic" value="no">
						<FONT SIZE=-2><B>NO</B>
						</FONT></td>
				</TR>
				<TR>
					<TD colspan="2"><FONT SIZE=-2><B>WILL YOU PROVIDE A MEAL FOR THE DJ?</B></FONT>
						<input type="radio" name="ProvideMeal" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="ProvideMeal" value="no"><FONT SIZE=-2><B>NO</B>
						</FONT></td>
				</TR>
			</TABLE>

			<p align=left><u><font size="2">DANCING:</font></u></p>

			<TABLE WIDTH=600 CELLSPACING=0 CELLPADDING=0>
				<TR>
					<TD><FONT SIZE=-2><B>1ST DANCE:</B></FONT></td>
					<TD COLSPAN=2><input name="FirstDanceTitle" type="text" size="30" value=""></td></TR>
				<TR>
					<TD><FONT SIZE=-2><B>ARTIST:</B></FONT></td>
					<TD><input name="FirstDanceArtist" type="text" size="30" value=""></td>
					<TD><FONT SIZE=-2><B>CLIENT PROVIDES</B></FONT>
						<input type="radio" name="FirstDanceProvided" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="FirstDanceProvided" value="no"><FONT SIZE=-2><B>NO</B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=3><HR></td></TR>
				<TR>
					<TD><FONT SIZE=-2><B>2ND DANCE:</B></FONT></td>
					<TD COLSPAN=2><input name="SecondDanceTitle" type="text" size="30" value=""></td></TR>
				<TR>
					<TD><FONT SIZE=-2><B>ARTIST:</B></FONT></td>
					<TD><input name="SecondDanceArtist" type="text" size="30" value=""></td>
					<TD><FONT SIZE=-2><B>CLIENT PROVIDES</B></FONT>
						<input type="radio" name="SecondDanceProvided" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="SecondDanceProvided" value="no"><FONT SIZE=-2><B>NO</B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2><B>PEOPLE DANCING TO 2ND SONG:</B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=3><textarea cols=50 rows=2 name="SecondDancePeople" ></textarea></td>
				</TR>
				<TR>
					<TD COLSPAN=3><HR></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>3RD DANCE:</B></FONT></td>
					<TD COLSPAN=2><input name="ThirdDanceTitle" type="text" size="30" value=""></td>
				</TR>
				<TR>
					<TD><FONT SIZE=-2><B>ARTIST:</B></FONT></td>
					<TD><input name="ThirdDanceArtist" type="text" size="30" value=""></td>
					<TD><FONT SIZE=-2><B>CLIENT PROVIDES</B></FONT>
						<input type="radio" name="ThirdDanceProvided" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="ThirdDanceProvided" value="no"><FONT SIZE=-2><B>NO</B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2><B>PEOPLE DANCING TO 3RD SONG:</B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=3><textarea cols=50 rows=2 name="ThirdDancePeople"></textarea></td>
				</TR>
				<TR>
					<TD COLSPAN=3><HR></td>
				</TR>
			</TABLE>

			<TABLE WIDTH=600 CELLSPACING=0 CELLPADDING=0>
				<TR>
					<TD COLSPAN=4></td>
				</TR>
				<TR>
					<TD COLSPAN=4></td>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>DJ TO ANNOUNCE BOUQUET TOSS?</B></FONT>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" name="AnnounceBouquet" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="AnnounceBouquet" value="no"><FONT SIZE=-2><B>NO</B>
						&nbsp;&nbsp;
						TIME: <input name="BouquetTime" type="text" size="30" value=""></FONT></td>
				</tr>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>IF YES, IS THERE A PARTICULAR SONGS YOU WANT US TO USE?</B></FONT>
				</TR>
				<TR>
					<TD COLSPAN=4><textarea cols=50 rows=2 name="BouquetMusic"></textarea></td>
				</TR>
				<TR>
					<TD COLSPAN=3><HR></td>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>DJ TO ANNOUNCE GARTER TOSS?</B></FONT>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" name="AnnounceGarter" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="AnnounceGarter" value="no"><FONT SIZE=-2><B>NO</B>
						&nbsp;&nbsp;
						TIME: <input name="GarterTime" type="text" size="30" value=""></FONT></td></tr>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>IF YES, IS THERE A PARTICULAR SONGS YOU WANT US TO USE?</B></FONT>
				</TR>
				<TR>
					<TD COLSPAN=4><textarea cols=50 rows=2 name="GarterMusic"></textarea></td>
				</TR>
				<TR>
      				<TD COLSPAN=3><HR></td>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>DJ TO ANNOUNCE WEDDING CAKE?</B></FONT>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" name="AnnounceCake" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="AnnounceCake" value="no"><FONT SIZE=-2><B>NO</B>
						&nbsp;&nbsp;
						TIME: <input name="CakeTime" type="text" size="30" value=""></FONT></td>
				</tr>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>DJ TO ANNOUNCE LAST DANCE?</B></FONT>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" name="AnnounceLastDance" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="AnnounceLastDance" value="no"><FONT SIZE=-2><B>NO</B>
						&nbsp;&nbsp;
						TIME:
						<input name="LastDanceTime" type="text" id="Last Dance Time" size="30" value="">
						</FONT></td>
				</tr>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>IF YES, ARE THERE PARTICULAR SONGS YOU WANT US TO USE?</B></FONT>
				</TR>
				<TR>
					<TD COLSPAN=4><textarea cols=50 rows=2 name="LastDanceMusic"></textarea></td>
				</TR>
				<TR>
					<TD COLSPAN=3><HR></td>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>GUESTS TO FORM CIRCLE AROUND BRIDE AND GROOM?</B></FONT>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" name="GuestsCircle" value="yes"><FONT SIZE=-2><B>YES</B></FONT>
						&nbsp;&nbsp;
						<input type="radio" name="GuestsCircle" value="no"><FONT SIZE=-2><B>NO</B></FONT>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>DETAILS NOT HAVE ALREADY COVERED:</B></FONT>
				</TR>
				<TR><TD COLSPAN=4><textarea name="ExtraDetails" cols=50 rows=2 id="ExtraDetails"></textarea></td></TR>
				<TR><TD COLSPAN=3><HR></td></TR>
				<TR><TD COLSPAN=3><FONT SIZE=-2><B>MUST PLAY SONGS, DEDICATIONS, BIRTHDAYS, AND ANNOUNCEMENTS:</B></FONT></td></TR>
				<TR><TD COLSPAN=3><textarea name="MustPlayMusic_Announcements_Dedications" cols=50 rows=2 id="MustPlayMusic_Announcements_Dedications">MustPlayMusic_Announcements_Dedications</textarea></td></TR>
				<TR><TD COLSPAN=3><HR></td></TR>

				<TR><TD COLSPAN=3><FONT SIZE=-2><B>SONGS YOU DO NOT WANT PLAYED:</B></FONT></td></TR>
				<TR><TD COLSPAN=3><textarea cols=50 rows=2 name="DoNotPlayMusic">DoNotPlayMusic</textarea></td></TR>
				<TR><TD COLSPAN=3><HR></td></TR>

				<TR><TD COLSPAN=4><FONT SIZE=-2><B>MUSIC YOU WANT PLAYED: &nbsp;&nbsp; (CHECK CATEGORIES THAT APPLY)</B></FONT></td></TR>
				<TR><TD COLSPAN=4><br></td></TR>
				<tr>
			</table>

			<table WIDTH=600>
				<tH width="40"><FONT SIZE=1>NONE&nbsp;&nbsp;</font></tH>
				<th width="40"><FONT SIZE=1>SOME&nbsp;&nbsp;</font></th>
				<th width="40"><FONT SIZE=1>LOTS&nbsp;&nbsp;</font></th>
				<th></th>
				<tH width="40"><FONT SIZE=1>NONE&nbsp;&nbsp;</font></tH>
				<th width="40"><FONT SIZE=1>SOME&nbsp;&nbsp;</font></th>
				<th width="40"><FONT SIZE=1>LOTS&nbsp;&nbsp;</font>
				<TR>
					<TD><input type="radio" name="BigBand" value="None"></td>
					<TD><input type="radio" name="BigBand" value="Some"></td>
					<TD><input type="radio" name="BigBand" value="Lots"></td>
					<TD><FONT SIZE=-2><B>BIG BAND & 40's</B>.</FONT></td>
					<TD><input type="radio" name="Ballroom" value="None"></td>
					<TD><input type="radio" name="Ballroom" value="Some"></td>
					<TD><input type="radio" name="Ballroom" value="Lots"></td>
					<TD><FONT SIZE=-2><B>BALLROOM</B></FONT></td>
				</TR>
				<TR>
					<TD><input type="radio" name="Fifties" value="None"></td>
					<TD><input type="radio" name="Fifties" value="Some"></td>
					<TD><input type="radio" name="Fifties" value="Lots"></td>
					<TD><FONT SIZE=-2><B>50'S AND 60'S ROCK AND ROLL</B></FONT></td>
					<TD><input type="radio" name="Ballads" value="None"></td>
					<TD><input type="radio" name="Ballads" value="Some"></td>
					<TD><input type="radio" name="Ballads" value="Lots"></td>
					<TD><FONT SIZE=-2><B>CLASSIC BALLADS</B></FONT></td>
				</TR>
				<TR>
					<TD><input type="radio" name="Seventies" value="None"></td>
					<TD><input type="radio" name="Seventies" value="Some"></td>
					<TD><input type="radio" name="Seventies" value="Lots"></td>
					<TD><FONT SIZE=-2><B>70'S AND 80'S ROCK AND ROLL</B></FONT></td>
					<TD><input type="radio" name="Funk" value="None"></td>
					<TD><input type="radio" name="Funk" value="Some"></td>
					<TD><input type="radio" name="Funk" value="Lots"></td>
					<TD><FONT SIZE=-2><B>MOWTOWN / FUNK</B></FONT></td>
				</TR>
				<TR>
					<TD><input type="radio" name="Disco" value="None"></td>
					<TD><input type="radio" name="Disco" value="Some"></td>
					<TD><input type="radio" name="Disco" value="Lots"></td>
					<TD><FONT SIZE=-2><B>DISCO</B></FONT></td>
					<TD><input type="radio" name="EightiesRetro" value="None"></td>
					<TD><input type="radio" name="EightiesRetro" value="Some"></td>
					<TD><input type="radio" name="EightiesRetro" value="Lots"></td>
					<TD><FONT SIZE=-2><B>80'S RETRO</B></FONT></td>
				</TR>
				<TR>
					<TD><input type="radio" name="EightiesAlt" value="None"></td>
					<TD><input type="radio" name="EightiesAlt" value="Some"></td>
					<TD><input type="radio" name="EightiesAlt" value="Lots"></td>
					<TD><FONT SIZE=-2><B>80'S ALTERNATIVE</B></FONT></td>
					<TD><input type="radio" name="NinetiesDance" value="None"></td>
					<TD><input type="radio" name="NinetiesDance" value="Some"></td>
					<TD><input type="radio" name="NinetiesDance" value="Lots"></td>
					<TD><FONT SIZE=-2><B>90'S DANCE MUSIC</B></FONT></td>
				</TR>
				<TR>
					<TD><input type="radio" name="NinetiesAlt" value="None"></td>
					<TD><input type="radio" name="NinetiesAlt" value="Some"></td>
					<TD><input type="radio" name="NinetiesAlt" value="Lots"></td>
					<TD><FONT SIZE=-2><B>90'S ALTERNATIVE</B></FONT></td>
					<TD><input type="radio" name="OldSchool" value="None"></td>
					<TD><input type="radio" name="OldSchool" value="Some"></td>
					<TD><input type="radio" name="OldSchool" value="Lots"></td>
					<TD><FONT SIZE=-2><B>OLD SKOOL</B></FONT></td>
				</TR>
				<TR>
					<TD><input type="radio" name="Country" value="None"></td>
					<TD><input type="radio" name="Country" value="Some"></td>
					<TD><input type="radio" name="Country" value="Lots"></td>
					<TD><FONT SIZE=-2><B>COUNTRY</B></FONT></td>
					<TD><input type="radio" name="CurrentBallads" value="None"></td>
					<TD><input type="radio" name="CurrentBallads" value="Some"></td>
					<TD><input type="radio" name="CurrentBallads" value="Lots"></td>
					<TD><FONT SIZE=-2><B>CURRENT BALLADS</B></FONT></td>
				</TR>
				<TR>
					<TD><input type="radio" name="Participation" value="None"></td>
					<TD><input type="radio" name="Participation" value="Some"></td>
					<TD><input type="radio" name="Participation" value="Lots"></td>
					<TD><FONT SIZE=-2><B>PARTICIPATION</B></FONT></td>
					<TD><input type="radio" name="TrustTheDJ" value="None"></td>
					<TD><input type="radio" name="TrustTheDJ" value="Some"></td>
					<TD><input type="radio" name="TrustTheDJ" value="Lots"></td>
					<TD><FONT SIZE=-2><B>TRUST THE DJ</B></FONT></td>
				</TR>
			</TABLE>

			<br><br>
			<p align=left><u>IF MUSIC IS REQUIRED FOR YOUR WEDDING CEREMONY PLEASE COMPLETE THE FOLLOWING:</u></p>
			<TABLE WIDTH=600 CELLSPACING=0 CELLPADDING=0>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>EARLIEST GUESTS ARRIVE BEFORE THE CEREMONY: <input name="GuestArrival" type="text" size="30" value=""></B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>WHAT STYLE OF MUSIC WOULD YOU LIKE BEFORE THE CEREMONY? <input name="PreceremonyMusic" type="text" size="30" value=""></B></FONT></td>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>PROCESSIONAL: <input name="ProcessionalMusic" type="text" size="30" value=""></B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>LICENCE SIGNING SONG: <input name="LicenseSigningMusic" type="text" size="30" value=""></B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=4><FONT SIZE=-2><B>RECESSIONAL: <input name="RecessionalMusic" type="text" size="30" value=""></B></FONT></td>
				</TR>
			</table>

			<br><br>

			<TABLE WIDTH=600 CELLSPACING=0 CELLPADDING=0>
				<tr>
					<td colspan="3"><font size="2">PLEASE LIST THE NUMBER OF GUESTS THAT FIT INTO EACH OF THE FOLLOWING CATEGORIES</font></td>
				</tr>
				<TR>
					<TD width="33%" align=right><FONT SIZE=-2><B>UNDER 20:</B>
						<input name="GuestsUnderTwenty" type="text" size="5" value=""></FONT></td>
					<TD width="33%" align=right><FONT SIZE=-2><B>20's:</B>
						<input name="GuestsInTwenties" type="text" id="20s" size="5" value="">
						</FONT></td>
					<TD width="34%" align=right><FONT SIZE=-2><B>30's:</B>
						<input name="GuestsInThirties" type="text" id="30s" size="5" value="">
						</FONT></td>
				</TR>
				<TR>
					<TD width="33%" align=right><FONT SIZE=-2><B>40's:</B>
						<input name="GuestsInFourties" type="text" id="40s" size="5" value="">
						</FONT></td>
					<TD width="33%" align=right><FONT SIZE=-2><B>50's:</B>
						<input name="GuestsInFifties" type="text" id="50s" size="5" value="">
						</FONT></td>
					<TD width="34%" align=right><FONT SIZE=-2><B>60+:</B>
						<input name="GuestsSixtyPlus" type="text" id="60" size="5" value="">
						</FONT></td>
				</TR>
				<TR>
					<TD COLSPAN=4><br></td>
				</TR>
				<tr>
					<td colspan="3"><font size="2">IS THERE AN ETHNIC OR REGIONAL BACKGROUND THAT MAY REQUIRE SPECIFIC MUSIC?</font></td>
				</tr>
				<tr>
					<td colspan="3"><font size="1">(Italian, Portuguese, Greek, Indian, West Indian, Maritime Provinces, Scottish, Chinese, Filipino)</font></td>
				</tr>
				<TR>
					<TD COLSPAN="3"><FONT SIZE=-2><B>BRIDE:
						<input name="BridesEthnicBackground" type="text" id="BridesEthnicBackground" size="30" value="">
						</B></FONT></td>
				</TR>
				<TR>
					<TD COLSPAN="3"><FONT SIZE=-2><B>GROOM:
						<input name="GroomsEthnicBackground" type="text" id="GroomsEthnicBackground" size="30" value="">
						</B></FONT></td>
				</TR>
			</table>

		<TR>
			<TD colspan="4"><div align="center"><br>
				<br>
				<INPUT TYPE="submit" VALUE="Submit">
				&nbsp;&nbsp;&nbsp;
				<INPUT TYPE="reset" NAME="Clear">
				</div>
			</TR>
</FORM>
		<TR>
			<TD COLSPAN=4>&nbsp;</td>
		</TR>
		<TR>
			<TD COLSPAN=4 align="center"><div align="center"><font size=2 face="arial"><B>THANK YOU FOR CHOOSING I Got The Beat DJ Services <br>
				Phone (519) 760-9191 &nbsp;&nbsp; Email&nbsp; igotthebeat@rogers.com</B></FONT></div></td>
		</TR>

<?php
} else {
  error_reporting(0);
  $recipient = 'dj_john@igotthebeat.ca';
  $subject = stripslashes($_POST['DateOfWedding']).' '. ($_POST['BrideName']).' & '.($_POST['GroomName']);
  $from = stripslashes($_POST['NameContact']);
  $dateOfWedding = stripslashes($_POST['DateOfWedding']);
  $bridesName = stripslashes($_POST['BrideName']);
  $groomsName = stripslashes($_POST['GroomName']);
  $bridesParents = stripslashes($_POST['BridesParents']);
  $groomsParents = stripslashes($_POST['GroomsParents']);
  $maidOfHonour = stripslashes($_POST['MaidOfHonour']);
  $bestMan = stripslashes($_POST['BestMan']);
  $nameContact = stripslashes($_POST['NameContact']);
  $contactsPhone = stripslashes($_POST['ContactsPhone']);
  $contactsEmail = stripslashes($_POST['ContactsEmail']);
  $location = stripslashes($_POST['Location']);
  $roomName = stripslashes($_POST['RoomName']);
  $estGuest = stripslashes($_POST['EstGuests']);
  $receptionContactsName = stripslashes($_POST['ReceptionContactsName']);
  $receptionContactsPhone = stripslashes($_POST['ReceptionContactsPhone']);
  $guestArrivalTime = stripslashes($_POST['GuestArrivalTime']);
  $musicStart = stripslashes($_POST['MusicStart']);
  $masterOfCeremonies = stripslashes($_POST['MasterOfCeremonies']);
  $masterOfCeremoniesName = stripslashes($_POST['MasterOfCeremoniesName']);
  $announceBridalParty = stripslashes($_POST['AnnounceBridalParty']);
  $announceBridalPartyWhen = stripslashes($_POST['AnnounceBridalPartyWhen']);
  $bridalPartyMusic = stripslashes($_POST['BridalPartyMusic']);
  $microphone = stripslashes($_POST['Microphone']);
  $coktailDinerMusic = stripslashes($_POST['CoktailDinnerMusic']);
  $provideMeal = stripslashes($_POST['ProvideMeal']);
  $firstDanceTitle = stripslashes($_POST['FirstDanceTitle']);
  $firstDanceArtist = stripslashes($_POST['FirstDanceArtist']);
  $firstDanceProvided = stripslashes($_POST['FirstDanceProvided']);
  $secondDanceTitle = stripslashes($_POST['SecondDanceTitle']);
  $secondDanceArtist = stripslashes($_POST['SecondDanceArtist']);
  $secondDanceProvided = stripslashes($_POST['SecondDanceProvided']);
  $secondDancePeople = stripslashes($_POST['SecondDancePeople']);
  $thirdDanceTitle = stripslashes($_POST['ThirdDanceTitle']);
  $thirdDanceArtist = stripslashes($_POST['ThirdDanceArtist']);
  $thirdDanceProvided = stripslashes($_POST['ThirdDanceProvided']);
  $thirdDancePeople= stripslashes($_POST['ThirdDancePeople']);
  $announceBouquet = stripslashes($_POST['AnnounceBouquet']);
  $bouquetTime = stripslashes($_POST['BouquetTime']);
  $bouquetMusic = stripslashes($_POST['BouquetMusic']);
  $announceGarter = stripslashes($_POST['AnnounceGarter']);
  $garterTime = stripslashes($_POST['GarterTime']);
  $garterMusic = stripslashes($_POST['GarterMusic']);
  $announceCake = stripslashes($_POST['AnnounceCake']);
  $cakeTime = stripslashes($_POST['CakeTime']);
  $announceLastDance = stripslashes($_POST['AnnounceLastDance']);
  $lastDanceTime = stripslashes($_POST['LastDanceTime']);
  $lastDanceMusic = stripslashes($_POST['LastDanceMusic']);
  $guestsCircle = stripslashes($_POST['GuestsCircle']);
  $extraDetails = stripslashes($_POST['ExtraDetails']);
  $mustPlayMusic_Announcements_Dedications = stripslashes($_POST['MustPlayMusic_Announcements_Dedications']);
  $doNotPlayMusic = stripslashes($_POST['DoNotPlayMusic']);
  $bigBand = stripslashes($_POST['BigBand']);
  $ballroom = stripslashes($_POST['Ballroom']);
  $fifties = stripslashes($_POST['Fifties']);
  $ballads = stripslashes($_POST['Ballads']);
  $seventies = stripslashes($_POST['Seventies']);
  $funk = stripslashes($_POST['Funk']);
  $disco = stripslashes($_POST['Disco']);
  $eightiesRetro = stripslashes($_POST['EightiesRetro']);
  $eightiesAlt = stripslashes($_POST['EightiesAlt']);
  $ninetiesDance = stripslashes($_POST['NinetiesDance']);
  $ninetiesAlt = stripslashes($_POST['NinetiesAlt']);
  $oldSchool = stripslashes($_POST['OldSchool']);
  $country = stripslashes($_POST['Country']);
  $currentBallads = stripslashes($_POST['CurrentBallads']);
  $participation = stripslashes($_POST['Participation']);
  $trustTheDJ = stripslashes($_POST['TrustTheDJ']);
  $guestArrival = stripslashes($_POST['GuestArrival']);
  $preceremonyMusic = stripslashes($_POST['PreceremonyMusic']);
  $processionalMusic = stripslashes($_POST['ProcessionalMusic']);
  $licenseSigingMusic = stripslashes($_POST['LicenseSigningMusic']);
  $recessionalMusic = stripslashes($_POST['RecessionalMusic']);
  $guestsUnderTwenty = stripslashes($_POST['GuestsUnderTwenty']);
  $guestsInTwenties = stripslashes($_POST['GuestsInTwenties']);
  $guestsInThirties = stripslashes($_POST['GuestsInThirties']);
  $guestsInFourties = stripslashes($_POST['GuestsInFourties']);
  $guestsInFifties = stripslashes($_POST['GuestsInFifties']);
  $guestsSixtyPlus = stripslashes($_POST['GuestsSixtyPlus']);
  $brideEthnicBackground = stripslashes($_POST['BridesEthnicBackground']);
  $groomEthnicBackground = stripslashes($_POST['GroomsEthnicBackground']);
  $bridalPartyMusic = stripslashes($_POST['BridalPartyMusic']);
  $bridalPartyMusicArtist = stripslashes($_POST['BridalPartyMusicArtist']);
  $bridalPartyMusicProvided = stripslashes($_POST['BridalPartyMusicProvided']);
  $brideGroomMusic = stripslashes($_POST['BrideGroomMusic']);
  $brideGroomMusicProvided = stripslashes($_POST['BrideGroomMusicProvided']);
  $brideGroomMusicArtist = stripslashes($_POST['BridalPartyMusicArtist']);

  $msg = 	//"DATE OF WEDDING:$DateOfWedding\n BRIDE'S NAME:$BrideName\n GROOM'S NAME:$GroomName\n";
'<html>
<body>
<body bgcolor="#ffffff" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" link="#202C64" vlink="#202C64" alink="#202C64">

	<h1 align="center"><font color="red">I GOT THE BEAT - WEDDING PLANNER</FONT></H1>
	<BR></BR>

			<TABLE WIDTH=580 border=0 cellspacing="0" cols=4>
				<TR>
					<TD colspan="4"><u>BASIC INFORMATION:</u></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DATE OF WEDDING:</FONT></td>
					<TD><B>'.$dateOfWedding.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>BRIDE\'S NAME:</FONT></td>
					<TD><B>'.$bridesName.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>GROOM\'S NAME</FONT></td>
					<TD><B>'.$groomsName.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>BRIDE\'S PARENTS:</FONT></td>
					<TD><B>'.$bridesParents.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>GROOM\'S PARENTS:</FONT></td>
					<TD><B>'.$groomsParents.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>MAID/MATRON OF HONOUR\'S NAME:</FONT></td>
					<TD><B>'.$maidOfHonour.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>BEST MAN\'S NAME:</FONT></td>
					<TD><B>'.$bestMan.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>CONTACT\'S NAME:</FONT></td>
					<TD><B>'.$nameContact.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>PHONE NUMBER OF CONTACT:</FONT></td>
					<TD><B>'.$contactsPhone.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>EMAIL OF CONTACT:</FONT></td>
					<TD><B>'.$contactsEmail.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="40"></TD>
				</TR>
				<TR>
					<TD colspan="4"><u>RECEPTION:</u></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>LOCATION:</FONT></td>
					<TD><B>'.$location.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>ROOM NAME:</FONT></td>
					<TD><B>'.$roomName.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>ESTIMATED NUMBER OF GUESTS:</FONT>
					<TD><B>'.$estGuest.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>NAME OF RECEPTION FACILITY CONTACT PERSON:</FONT>
					<TD><B>'.$receptionContactsName.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>PHONE NUMBER OF CONTACT:</FONT></td>
					<TD><B>'.$receptionContactsPhone.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>WHAT IS THE DJ\'s SET UP TIME?:</FONT>
					<TD><B>'.$guestArrivalTime.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>TIME THE MUSIC IS TO START:</FONT>
					<TD><B>'.$musicStart.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="40"></TD>
				</TR>
				<TR>
					<TD colspan="4"><u>COCKTAILS AND DINNER:</u></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DO YOU HAVE A MASTER OF CEREMONIES?:</B></FONT>
					<TD><B>'.$masterOfCeremonies.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>If Yes, Who?:</FONT></td>
					<TD><B>'.$masterOfCeremoniesName.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DJ TO ANNOUNCE BRIDAL PARTY?</FONT></td>
					<TD><B>'.$announceBridalParty.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>When?</FONT></TD>
					<TD><B>'.$announceBridalPartyWhen.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>BRIDAL PARTY SONG:</FONT></td>
					<TD><B>'.$bridalPartyMusic.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>ARTIST:</FONT></td>
					<TD><B>'.$bridalPartyMusicArtist.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>PROVIDED:</FONT></td>
					<TD><B>'.$bridalPartyMusicProvided.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>BRIDE AND GROOM SONG:</FONT></td>
					<TD><B>'.$brideGroomMusic.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>ARTIST:</FONT></td>
					<TD><B>'.$brideGroomMusicArtist.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>PROVIDED:</FONT></td>
					<TD><B>'.$brideGroomMusicProvided.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DO YOU NEED OUR MICROPHONE FOR SPEECHES?:</FONT></td>
					<TD><B>'.$microphone.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>COCKTAIL AND DINNER MUSIC?:</FONT></td>
					<TD><B>'.$coktailDinerMusic.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>WILL YOU PROVIDE A MEAL FOR THE DJ?</td>
					<TD><B>'.$provideMeal.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="40"></TD>
				</TR>
				<TR>
					<TD colspan="4"><u>DANCING:</u></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>1ST DANCE:</FONT></td>
					<TD><B>'.$firstDanceTitle.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>ARTIST:</FONT></td>
					<TD><B>'.$firstDanceArtist.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>CLIENT PROVIDES:</FONT></td>
					<TD><B>'.$firstDanceProvided.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>2ND DANCE:</FONT></td>
					<TD><B>'.$secondDanceTitle.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>ARTIST:</FONT></td>
					<TD><B>'.$secondDanceArtist.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>CLIENT PROVIDES:</FONT></td>
					<TD><B>'.$secondDanceProvided.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>PEOPLE DANCING TO 2ND SONG:</FONT></td>
					<TD><B>'.$secondDancePeople.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>3RD DANCE:</FONT></td>
					<TD><B>'.$thirdDanceTitle.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>ARTIST:</FONT></td>
					<TD><B>'.$thirdDanceArtist.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>CLIENT PROVIDES:</FONT></td>
					<TD><B>'.$thirdDanceProvided.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>PEOPLE DANCING TO 3RD SONG:</FONT></td>
					<TD><B>'.$thirdDancePeople.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DJ TO ANNOUNCE BOUQUET TOSS?</FONT></td>
					<TD><B>'.$announceBouquet.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>TIME:</FONT></td>
					<TD><B>'.$bouquetTime.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>IF YES, ARE THERE PARTICULAR SONGS YOU WANT US TO USE?:</FONT>
					<TD><B>'.$bouquetMusic.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DJ TO ANNOUNCE GARTER TOSS?:</FONT></td>
					<TD><B>'.$announceGarter.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>TIME:</FONT></td>
					<TD><B>'.$garterTime.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>IF YES, ARE THERE PARTICULAR SONGS YOU WANT US TO USE?:</FONT>
					<TD><B>'.$garterMusic.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DJ TO ANNOUNCE WEDDING CAKE?:</FONT></td>
					<TD><B>'.$announceCake.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>TIME:</FONT></td>
					<TD><B>'.$cakeTime.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DJ TO ANNOUNCE LAST DANCE?:</FONT></td>
					<TD><B>'.$announceLastDance.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>TIME:</FONT></td>
					<TD><B>'.$lastDanceTime.'</B></TD>
				</tr>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>IF YES, ARE THERE PARTICULAR SONGS YOU WANT US TO USE?:</FONT></TD>
					<TD><B>'.$lastDanceMusic.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>GUESTS TO FORM CIRCLE AROUND BRIDE AND GROOM?:</FONT></TD>
					<TD><B>'.$guestsCircle.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>DETAILS NOT HAVE ALREADY COVERED:</FONT></TD>
					<TD><B>'.$extraDetails.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>MUST PLAY SONGS, DEDICATIONS, BIRTHDAYS, AND ANNOUNCEMENTS:</FONT></td>
					<TD><B>'.$mustPlayMusic_Announcements_Dedications.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=2><HR></td>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>SONGS YOU DO NOT WANT PLAYED:</FONT></td>
					<TD><B>'.$doNotPlayMusic.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><HR></td>
				</TR>
				<TR>
					<TD colspan="3"><FONT SIZE=-2>MUSIC YOU WANT PLAYED:</FONT></td>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>BIG BAND & 40\'s:</FONT></td>
					<TD><B>'.$bigBand.'</B></TD>
					<TD><FONT SIZE=-2>BALLROOM:</FONT></td>
					<TD><B>'.$ballroom.'</B></TD>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>50\'S AND 60\'S ROCK:</FONT></td>
					<TD><B>'.$fifties.'</B></TD>
					<TD><FONT SIZE=-2>CLASSIC BALLADS:</FONT></td>
					<TD><B>'.$ballads.'</B></TD>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>70\'S AND 80\'S ROCK:</FONT></td>
					<TD><B>'.$seventies.'</B></TD>
					<TD><FONT SIZE=-2>MOWTOWN / FUNK:</FONT></td>
					<TD><B>'.$funk.'</B></TD>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>DISCO:</FONT></td>
					<TD><B>'.$disco.'</B></TD>
					<TD><FONT SIZE=-2>80\'S RETRO:</FONT></td>
					<TD><B>'.$eightiesRetro.'</B></TD>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>80\'S ALTERNATIVE:</FONT></td>
					<TD><B>'.$eightiesAlt.'</B></TD>
					<TD><FONT SIZE=-2>90\'S DANCE MUSIC:</FONT></td>
					<TD><B>'.$ninetiesDance.'</B></TD>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>90\'S ALTERNATIVE:</FONT></td>
					<TD><B>'.$ninetiesAlt.'</B></TD>
					<TD><FONT SIZE=-2>OLD SKOOL:</FONT></td>
					<TD><B>'.$oldSchool.'</B></TD>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>COUNTRY:</FONT></td>
					<TD><B>'.$country.'</B></TD>
					<TD><FONT SIZE=-2>CURRENT BALLADS:</FONT></td>
					<TD><B>'.$currentBallads.'</B></TD>
				</TR>
				<TR>
					<TD><FONT SIZE=-2>PARTICIPATION:</FONT></td>
					<TD><B>'.$participation.'</B></TD>
					<TD><FONT SIZE=-2>TRUST THE DJ:</FONT></td>
					<TD><B>'.$trustTheDJ.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4"></TD>
				</TR>
				<TR>
					<TD colspan="4">IF MUSIC IS REQUIRED FOR YOUR WEDDING CEREMONY PLEASE COMPLETE THE FOLLOWING:</TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>EARLIEST GUESTS ARRIVE BEFORE THE CEREMONY:</FONT></td>
					<TD><B>'.$guestArrival.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>WHAT STYLE OF MUSIC WOULD YOU LIKE BEFORE THE CEREMONY?:</FONT></td>
					<TD><B>'.$preceremonyMusic.'</B></TD>
				<TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
					<TD COLSPAN=3><FONT SIZE=-2>PROCESSIONAL:</FONT></td>
					<TD><B>'.$processionalMusic.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>LICENCE SIGNING SONG:</FONT></td>
					<TD><B>'.$licenseSigingMusic.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<TR>
					<TD COLSPAN=3><FONT SIZE=-2>RECESSIONAL:</FONT></td>
					<TD><B>'.$recessionalMusic.'</B></TD>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<tr>
					<td colspan="3"><font size="2">PLEASE LIST THE NUMBER OF GUESTS THAT FIT INTO EACH OF THE FOLLOWING CATEGORIES.</font></td>
				</tr>
				<TR>
					<TD width="33%" align=right><FONT SIZE=-2>Under 20:&nbsp;&nbsp;<B>'.$guestsUnderTwenty.'</B></FONT></td>
					<TD width="33%" align=right><FONT SIZE=-2>20\'s:&nbsp;&nbsp;<B>'.$guestsInTwenties.'</B></FONT></td>
					<TD width="34%" align=right><FONT SIZE=-2>30\'s:&nbsp;&nbsp;<B>'.$guestsInThirties.'</B></FONT></td>
				</TR>
				<TR>
					<TD width="33%" align=right><FONT SIZE=-2>40\'s:&nbsp;&nbsp;<B>'.$guestsInFourties.'</B></FONT></td>
					<TD width="33%" align=right><FONT SIZE=-2>50\'s:&nbsp;&nbsp;<B>'.$guestsInFifties.'</B></FONT></td>
					<TD width="34%" align=right><FONT SIZE=-2>60+:&nbsp;&nbsp;<B>'.$guestsSixtyPlus.'</B></FONT></td>
				</TR>
				<TR>
					<TD colspan="4" height="15"></TD>
				</TR>
				<tr>
					<td colspan="3"><font size="2">IS THERE AN ETHNIC OR REGIONAL BACKGROUND THAT MAY REQUIRE SPECIFIC MUSIC?:</font></td>
				</tr>
				<tr>
					<td colspan="3"><font size="1">(Italian, Portuguese, Greek, Indian, West Indian, Maritime Provinces, Scottish, Chinese, Filipino)</font></td>
				</tr>
				<TR>
					<TD COLSPAN="3"><FONT SIZE=-2>BRIDE:</FONT></td>
					<TD><B>'.$brideEthnicBackground.'</B></TD>
				</TR>
				<TR>
					<TD COLSPAN="3"><FONT SIZE=-2>GROOM</FONT></td>
					<TD><B>'.$groomEthnicBackground.'</B></TD>
				</TR>
			</table>
</body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  if (mail($recipient, $subject, $msg, $headers))
	 echo("<b>Message Sent:</b>
	 $msg");
  else
	 echo "Message failed to send";
}
?>

</body>
</html>
