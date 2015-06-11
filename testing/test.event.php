<?
/* ----------------------------------
+ Contract Fee TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.event.php');

	$testClass = new event();
	if ($func->isErrors())
	{
		echo "<li><b>05001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";
		$ws->error = array();
	}
	else
	{
		echo "<li><b>05001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'event_id'			=> 1,
	'type_id'			=> 1,
	'event_date'		=> '12-30-9999',
	'start_time'		=> '20:17:AM',
	'event_time'		=> '22:46',
	'loc_address'		=> 'address',
	'loc_city'			=> 'city',
	'loc_name'			=> 'name',
	'loc_info'			=> 'info',
	'loc_roomname'		=> 'roomname',
	'person_id'			=> 1,
	'paid_deposit'		=> true,
	'complete_pay'		=> true,
	'loc_address'		=> 'location address',
	'contact_name'		=> 'contact name',
	'contact_phone'		=> '(123)456-7890',
	'contact_extension'	=> 12345,
	'additional_notes'	=> 'additional notes',
	'price_charged'		=> 465.43,
	'extra_services'	=> true,
	'service_details'	=> 'service details',
	);

	$testClass->eventConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>05002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->eventConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>05003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->eventConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>05004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// event_id

	$testClass->setEventId(1);
	if ($func->isErrors())
	{
		echo "<li><b>05010</b> - setEventId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05010</b> - setEventId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventId('');
	if ($func->isErrors())
	{
		echo "<li><b>05011</b> - setEventId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05011</b> - setEventId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05012</b> - setEventId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05012</b> - setEventId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>05013</b> - setEventId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05013</b> - setEventId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>05014</b> - setEventId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05014</b> - setEventId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// type_id

	$testClass->setTypeId(1);
	if ($func->isErrors())
	{
		echo "<li><b>05020</b> - setTypeId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05020</b> - setTypeId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setTypeId('');
	if ($func->isErrors())
	{
		echo "<li><b>05021</b> - setTypeId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05021</b> - setTypeId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTypeId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05022</b> - setTypeId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05022</b> - setTypeId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTypeId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>05023</b> - setTypeId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05023</b> - setTypeId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setTypeId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>05024</b> - setTypeId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05024</b> - setTypeId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// event_date

	$testClass->setEventDate('10-26-2029');
	if ($func->isErrors())
	{
		echo "<li><b>05030</b> - setEventDate('10-26-2006') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05030</b> - setEventDate('10-26-2006') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventDate('');
	if ($func->isErrors())
	{
		echo "<li><b>05031</b> - setEventDate('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05031</b> - setEventDate('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEventDate('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05032</b> - setEventDate('testvalue') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05032</b> - setEventDate('testvalue') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// start_time

	$testClass->setStartTime('10:24:AM');
	if ($func->isErrors())
	{
		echo "<li><b>05040-A</b> - setStartTime('10:24:AM') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05040-A</b> - setStartTime('10:24:AM') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setStartTime('10:24:PM');
	if ($func->isErrors())
	{
		echo "<li><b>05040-B</b> - setStartTime('10:24:PM') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05040-B</b> - setStartTime('10:24:PM') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setStartTime('');
	if ($func->isErrors())
	{
		echo "<li><b>05041</b> - setStartTime('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05041</b> - setStartTime('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// event_time

	$testClass->setEventTime('10:34');
	if ($func->isErrors())
	{
		echo "<li><b>05050</b> - setEventTime('10:34') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05050</b> - setEventTime('10:34') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setEventTime('');
	if ($func->isErrors())
	{
		echo "<li><b>05051</b> - setEventTime('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05051</b> - setEventTime('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

// loc_address

	$testClass->setLocAddress('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05060</b> - setLocAddress('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05060</b> - setLocAddress('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLocAddress('');
	if ($func->isErrors())
	{
		echo "<li><b>05061</b> - setLocAddress('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05061</b> - setLocAddress('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setLocAddress($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>05062</b> - setLocAddress(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05062</b> - setLocAddress(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// loc_city

	$testClass->setLocCity('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05070</b> - setLocCity('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05070</b> - setLocCity('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLocCity('');
	if ($func->isErrors())
	{
		echo "<li><b>05071</b> - setLocCity('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05071</b> - setLocCity('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setLocCity($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>05072</b> - setLocCity(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05072</b> - setLocCity(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// loc_name

	$testClass->setLocName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05080</b> - setLocName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05080</b> - setLocName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLocName('');
	if ($func->isErrors())
	{
		echo "<li><b>05081</b> - setLocName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05081</b> - setLocName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setLocName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>05082</b> - setLocName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05082</b> - setLocName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// loc_info

	$testClass->setLocInfo('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05090</b> - setLocInfo('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05090</b> - setLocInfo('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLocRoomName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05091</b> - setLocRoomName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05091</b> - setLocRoomName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLocRoomName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>05092</b> - setLocRoomName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05092</b> - setLocRoomName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// person_id

	$testClass->setPersonId(1);
	if ($func->isErrors())
	{
		echo "<li><b>05100</b> - setPersonId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05100</b> - setPersonId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPersonId('');
	if ($func->isErrors())
	{
		echo "<li><b>05101</b> - setPersonId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05101</b> - setPersonId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05102</b> - setPersonId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05102</b> - setPersonId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>05103</b> - setPersonId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05103</b> - setPersonId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>05104</b> - setPersonId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05104</b> - setPersonId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// paid_deposit

	$testClass->setPaidDeposit(true);
	if ($func->isErrors())
	{
		echo "<li><b>05120</b> - setPaidDeposit(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05120</b> - setPaidDeposit(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPaidDeposit('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05121</b> - setPaidDeposit(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05121</b> - setPaidDeposit(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// complete_pay

	$testClass->setCompletePay(true);
	if ($func->isErrors())
	{
		echo "<li><b>05130</b> - setCompletePay(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05130</b> - setCompletePay(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setCompletePay('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05131</b> - setCompletePay(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05131</b> - setCompletePay(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// contact_name

	$testClass->setContactName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05140</b> - setContactName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05140</b> - setContactName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setContactName('');
	if ($func->isErrors())
	{
		echo "<li><b>05141</b> - setContactName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05141</b> - setContactName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContactName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>05142</b> - setContactName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05142</b> - setContactName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// contact_phone

	$testClass->setContactPhone('(123)456-7890');
	if ($func->isErrors())
	{
		echo "<li><b>05150</b> - setContactPhone('(123)456-7890') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05150</b> - setContactPhone('(123)456-7890') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setContactPhone('');
	if ($func->isErrors())
	{
		echo "<li><b>05151</b> - setContactPhone('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05151</b> - setContactPhone('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContactPhone('fdhsatejhw');
	if ($func->isErrors())
	{
		echo "<li><b>05152</b> - setContactPhone('fdhsatejhw') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05152</b> - setContactPhone('fdhsatejhw') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// contact_extention

	$testClass->setContactExtension(1);
	if ($func->isErrors())
	{
		echo "<li><b>05160</b> - setContactExtension(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05160</b> - setContactExtension(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setContactExtension('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05161</b> - setContactExtension(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05161</b> - setContactExtension(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContactExtension(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>05162</b> - setContactExtension(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05162</b> - setContactExtension(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContactExtension(-1);
	if ($func->isErrors())
	{
		echo "<li><b>05163</b> - setContactExtension(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05163</b> - setContactExtension(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setContactExtension(7654321);
	if ($func->isErrors())
	{
		echo "<li><b>05164</b> - setContactExtension(7654321) Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05164</b> - setContactExtension(7654321) Test: <div class='fail'>Failed</div> </li>";
	}

// additional_notes

	$testClass->setAdditionalNotes('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05170</b> - setAdditionalNotes('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05170</b> - setAdditionalNotes('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

// service_details

	$testClass->setServiceDetails('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05180</b> - setServiceDetails('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05180</b> - setServiceDetails('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}


// price_charged

	$testClass->setPriceCharged(101.20);
	if ($func->isErrors())
	{
		echo "<li><b>05190</b> - setPriceCharged(101.20) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05190</b> - setPriceCharged(101.20) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPriceCharged('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05191</b> - setPriceCharged(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05191</b> - setPriceCharged(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPriceCharged(-1);
	if ($func->isErrors())
	{
		echo "<li><b>05192</b> - setPriceCharged(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05192</b> - setPriceCharged(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

	// extra_services

	$testClass->setExtraServices(true);
	if ($func->isErrors())
	{
		echo "<li><b>05200</b> - setExtraServices(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05200</b> - setExtraServices(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setExtraServices('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>05201</b> - setExtraServices(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>05201</b> - setExtraServices(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
