<?
/* ----------------------------------
+ Contract Fee TestClass
+
------------------------------------ */

/* entity we're testing */
require('../ext/ent.person.php');

	$testClass = new Person();
	if ($func->isErrors())
	{
		echo "<li><b>15001</b> - Default Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15001</b> - Default Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array(
	'person_id'			=> 1,
	'first_name'		=> 'test name',
	'last_name'			=> 'test name',
	'address'			=> 'test address',
	'city'				=> 'test city',
	'postal_code'		=> 'a1a 1a1',
	'home_phone'		=> '(111)111-1111',
	'cell_phone'		=> '(111)111-1111',
	'work_phone'		=> '(111)111-1111',
	'extension'			=> 0,
	'email'				=> 'a@a.com',
	'company'			=> 'test company',
	'notes'				=> 'test notes',
	'preferred_contact' => 'email',
	'username'			=> 'test username',
	'password'			=> 'test password',
	'is_admin'			=> true,
	'is_master'			=> true,
	);

	$testClass->personConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>15002</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15002</b> - Loaded Constructor Test: <div class='success'>Passed</div> </li>";
	}

	$testArray = array();

	$testClass->personConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>15003</b> - Null Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15003</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

	$testArray = "fff";

	$testClass->personConstruct($testArray);
	if ($func->isErrors())
	{
		echo "<li><b>15004</b> - Not Array Loaded Constructor Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15004</b> - Loaded Constructor Test: <div class='fail'>Failed</div> </li>";
	}

/*********************************/
/* Test all the individual parts */
/*********************************/

// person_id

	$testClass->setPersonId(1);
	if ($func->isErrors())
	{
		echo "<li><b>15010</b> - setPersonId(1) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15010</b> - setPersonId(1) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPersonId('');
	if ($func->isErrors())
	{
		echo "<li><b>15011</b> - setPersonId('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15011</b> - setPersonId('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15012</b> - setPersonId(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15012</b> - setPersonId(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId(1.1);
	if ($func->isErrors())
	{
		echo "<li><b>15013</b> - setPersonId(1.1) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15013</b> - setPersonId(1.1) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPersonId(-1);
	if ($func->isErrors())
	{
		echo "<li><b>15014</b> - setPersonId(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15014</b> - setPersonId(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// first_nme

	$testClass->setFirstName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15020</b> - setFirstName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15020</b> - setFirstName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setFirstName('');
	if ($func->isErrors())
	{
		echo "<li><b>15021</b> - setFirstName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15021</b> - setFirstName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setFirstName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15022</b> - setFirstName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15022</b> - setFirstName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// last_name

	$testClass->setLastName('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15030</b> - setLastName('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15030</b> - setLastName('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setLastName('');
	if ($func->isErrors())
	{
		echo "<li><b>15031</b> - setLastName('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15031</b> - setLastName('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setLastName($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15032</b> - setLastName(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15032</b> - setLastName(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// address

	$testClass->setAddress('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15040</b> - setAddress('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15040</b> - setAddress('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setAddress('');
	if ($func->isErrors())
	{
		echo "<li><b>15041</b> - setAddress('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15041</b> - setAddress('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setAddress($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15042</b> - setAddress(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15042</b> - setAddress(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// city

	$testClass->setCity('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15050</b> - setCity('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15050</b> - setCity('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setFirstName('');
	if ($func->isErrors())
	{
		echo "<li><b>15051</b> - setCity('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15051</b> - setCity('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setCity($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15052</b> - setCity(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15052</b> - setCity(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// postal code

	$testClass->setPostalCode('a1a 1a1');
	if ($func->isErrors())
	{
		echo "<li><b>15060</b> - setPostalCode('a1a 1a1') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15060</b> - setPostalCode('a1a 1a1') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPostalCode('');
	if ($func->isErrors())
	{
		echo "<li><b>15061</b> - setPostalCode('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15061</b> - setPostalCode('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPostalCode('fdhsatejhw');
	if ($func->isErrors())
	{
		echo "<li><b>15062</b> - setPostalCode('fdhsatejhw') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15062</b> - setPostalCode('fdhsatejhw') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// home_phone

	$testClass->setHomePhone('(111)111-1111');
	if ($func->isErrors())
	{
		echo "<li><b>15070</b> - setHomePhone('(111)111-1111') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15070</b> - setHomePhone('(111)111-1111') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setHomePhone('fdhsatejhw');
	if ($func->isErrors())
	{
		echo "<li><b>15071</b> - setHomePhone('fdhsatejhw') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15071</b> - setHomePhone('fdhsatejhw') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// cell_phone

	$testClass->setCellPhone('(111)111-1111');
	if ($func->isErrors())
	{
		echo "<li><b>15080</b> - setCellPhone('(111)111-1111') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15080</b> - setCellPhone('(111)111-1111') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setCellPhone('fdhsatejhw');
	if ($func->isErrors())
	{
		echo "<li><b>15081</b> - setCellPhone('fdhsatejhw') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15081</b> - setCellPhone('fdhsatejhw') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// work_phone

	$testClass->setWorkPhone('(111)111-1111');
	if ($func->isErrors())
	{
		echo "<li><b>15090</b> - setWorkPhone('(111)111-1111') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15090</b> - setWorkPhone('(111)111-1111') Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setWorkPhone('fdhsatejhw');
	if ($func->isErrors())
	{
		echo "<li><b>15091</b> - setWorkPhone('fdhsatejhw') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15091</b> - setWorkPhone('fdhsatejhw') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// extension

	$testClass->setExtension(3412);
	if ($func->isErrors())
	{
		echo "<li><b>15100</b> - setExtension(3412) Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15100</b> - setExtension(3412) Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setExtension($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15101</b> - setExtension(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15101</b> - setExtension(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setExtension('sdga');
	if ($func->isErrors())
	{
		echo "<li><b>15102</b> - setExtension('sdga') Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15102</b> - setExtension('sdga') Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setExtension(-1);
	if ($func->isErrors())
	{
		echo "<li><b>15103</b> - setExtension(-1) NegativeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15103</b> - setExtension(-1) NegativeException Test: <div class='fail'>Failed</div> </li>";
	}

// email

	$testClass->setEmail('email@email.com');
	if ($func->isErrors())
	{
		echo "<li><b>15110</b> - setEmail('email@email.com') Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15110</b> - setEmail('email@email.com') Test: <div class='success'>Passed</div> </li>";
	}

	$temp = $toolong . "@ddd.com";
	$testClass->setEmail($temp);
	if ($func->isErrors())
	{
		echo "<li><b>15111</b> - setEmail(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15111</b> - setEmail(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setEmail('fdhsatejhw');
	if ($func->isErrors())
	{
		echo "<li><b>15112</b> - setEmail('fdhsatejhw') InvalidFormatException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15112</b> - setEmail('fdhsatejhw') InvalidFormatException Test: <div class='fail'>Failed</div> </li>";
	}

// company

	$testClass->setCompany('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15120</b> - setCompany('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15120</b> - setCompany('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setCompany($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15121</b> - setCompany(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15121</b> - setCompany(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// preferred_contact

	$testClass->setPreferredContact('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15130</b> - setPreferredContact('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15130</b> - setPreferredContact('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPreferredContact('');
	if ($func->isErrors())
	{
		echo "<li><b>15131</b> - setPreferredContact('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15131</b> - setPreferredContact('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPreferredContact($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15132</b> - setPreferredContact(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15132</b> - setPreferredContact(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// notes

	$testClass->setNotes('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15140</b> - setNotes('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15140</b> - setNotes('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setNotes($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15141</b> - setNotes(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15141</b> - setNotes(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// username

	$testClass->setUsername('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15150</b> - setUsername('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15150</b> - setUsername('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setUsername('');
	if ($func->isErrors())
	{
		echo "<li><b>15151</b> - setUsername('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15151</b> - setUsername('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setUsername($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15152</b> - setUsername(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15152</b> - setUsername(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// username

	$testClass->setPassword('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15160</b> - setPassword('testvalue') Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15160</b> - setPassword('testvalue') Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setPassword('');
	if ($func->isErrors())
	{
		echo "<li><b>15161</b> - setPassword('') NullException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15161</b> - setPassword('') NullException Test: <div class='fail'>Failed</div> </li>";
	}

	$testClass->setPassword($toolong);
	if ($func->isErrors())
	{
		echo "<li><b>15162</b> - setPassword(toolong) TooLargeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15162</b> - setPassword(toolong) TooLargeException Test: <div class='fail'>Failed</div> </li>";
	}

// is_admin

	$testClass->setIsAdmin(true);
	if ($func->isErrors())
	{
		echo "<li><b>15170- setIsAdmin(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15170</b> - setIsAdmin(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setIsAdmin('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15171</b> - setIsAdmin(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15171</b> - setIsAdmin(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}

// is_master

	$testClass->setIsMaster(true);
	if ($func->isErrors())
	{
		echo "<li><b>15180</b> - setIsMaster(true) Proper Test: <div class='fail'>Failed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15180</b> - setIsMaster(true) Proper Test: <div class='success'>Passed</div> </li>";
	}

	$testClass->setIsMaster('testvalue');
	if ($func->isErrors())
	{
		echo "<li><b>15181</b> - setIsMaster(toolong) InvalidTypeException Test: <div class='success'>Passed</div> </li>";

		$ws->error = array();
	}
	else
	{
		echo "<li><b>15181</b> - setIsMaster(toolong) InvalidTypeException Test: <div class='fail'>Failed</div> </li>";
	}
