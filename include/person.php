<?php
/* ----------------------------------
+ Person
+ Description on Person Class
+
+ Revision History:
+		02.27.2006 : Created
------------------------------------ */

require('include/constants.php');
$constant = new Constants();

class Person {
	private $person_id;
	private $first_name;
	private $last_name;
	private $address;
	private $city;
	private $postal_code;
	private $home_phone;
	private $cell_phone;
	private $work_phone;
	private $extension;
	private $email;
	private $company;
	private $notes;
	private $preferred_contact;
	private $username;
	private $password;
	private $is_admin;


	// default constructor
	function __construct()
	{
		$this->setPersonId("0");
		$this->setFirstName("");
		$this->setLastName("");
		$this->setAddress("");
		$this->setCity("");
		$this->setPostalCode("");
		$this->setHomePhone("");
		$this->setCellPhone("");
		$this->setWorkPhone("");
		$this->setExtension("");
		$this->setEmail("");
		$this->setPreferredContact("");
		$this->setCompany("");
		$this->setNotes("");
		$this->setUsername("");
		$this->setPassword("");
		$this->setIsAdmin(false);
	}

	// constructor wherein you pass a whole array in
	function personConstruct($person)
	{
		// populate the values
		try {
			$this->setPersonId($person["person_id"]);
			$this->setFirstName($person["first_name"]);
			$this->setLastName($person["last_name"]);
			$this->setAddress($person["address"]);
			$this->setCity($person["city"]);
			$this->setPostalCode($person["postal_code"]);
			$this->setHomePhone($person["home_phone"]);
			$this->setCellPhone($person["cell_phone"]);
			$this->setWorkPhone($person["work_phone"]);
			$this->setExtension($person["extension"]);
			$this->setEmail($person["email"]);
			$this->setPreferredContact($person["preferred_contact"]);
			$this->setCompany($person("company"]);
			$this->setNotes($person["notes"]);
			$this->setUsername($person["username"]);
			$this->setPassword($person["password"]);
			$this->setIsAdmin($person["is_admin"]);
		}
		catch (Exception $e)
		{
			throw new Exception ($e);
		}
	}


	function getPersonId()
	{
		return $this->person_id;
	}
	private function setPersonId($value)
	{
		// Can't have empty or null values
		if (is_numeric($value))
		{
			if(!is_null($value)
			{
				if(!$value < 0)
				{
					$this->person_id = $value;
				}
				else
				{
					throw new Exception($contant->NegativeException());
				}
			}
			else
			{
				throw new Exception($contant->NullException());
			}
		}
		else
		{
			throw new Exception($contant->InvalidTypeException());
		}
	}

	function getFirstName()
	{
		return $this->first_name;
	}
	function setFirstName($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 15)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
				$this->first_name = $value;
			}
		}
	}

	function getLastName()
	{
		return $this->last_name;
	}
	function setLastName($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 25)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
			$this->last_name = $value;
			}
		}
	}

	function getAddress()
	{
		return $this->address;
	}
	function setAddress($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 99)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
			$this->address = $value;
			}
		}
	}

	function getCity()
	{
		return $this->city;
	}
	function setCity($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 30)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
			$this->city = $value;
			}
		}
	}

	function getPostalCode()
	{
		return $this->postal_code;
	}
	function setPostalCode($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (!preg_match($constant->RegPostalCheck() , $value))
			{
				$this->postal_code = $value;
			}
			else
			{
				throw new Exception(($contant->InvalidFormatException());
			}
		}
	}

	function getHomePhone()
	{
		return $this->home_phone;
	}
	function setHomePhone($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (!preg_match($constant->RegPhoneCheck(), $value)
			{
				throw new Exception(($contant->InvalidFormatException());
			}
			else
			{
				$this->home_phone = $value;
			}
		}
	}

	function getCellPhone()
	{
		return $this->cell_phone;
	}
	function setCellPhone($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (!preg_match($constant->RegPhoneCheck(), $value)
			{
				throw new Exception(($contant->InvalidFormatException());
			}
			else
			{
				$this->cell_phone = $value;
			}
		}
	}

	function getWorkPhone()
	{
		return $this->work_phone;
	}
	function setWorkPhone($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (!preg_match($constant->RegPhoneCheck(), $value)
			{
				throw new Exception(($contant->InvalidFormatException());
			}
			else
			{
				$this->work_phone = $value;
			}
		}
	}

	function getEmail()
	{
		return $this->email;
	}
	function setEmail($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (!preg_match($constant->RegEmailCheck() , $value))
			{
				$this->email = $value;
			}
			else
			{
				throw new Exception(($contant->InvalidFormatException());
			}
		}
	}

	function getCompany()
	{
		return $this->company;
	}
	function setCompany($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 100)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
				$this->company = $value;
			}
		}
	}

	function getNotes()
	{
		return $this->notes;
	}
	function setNotes($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 100)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
				$this->notes = $value;
			}
	}

	function getPreferredContact()
	{
		return $this->preferred_contact;
	}
	function setPreferredContact($value)
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			$this->preferred_contact = $value;
		}
	}

	function getUsername()
	{
		return $this->username;
	}
	function setUsername($value);
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 25)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
				$this->username = $value;
			}
	}

	function getPassword()
	{
		return $this->password;
	}
	function setPassword($value);
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			if (strlen($value) > 15)
			{
				throw new Exception($contant->TooLargeException());
			}
			else
			{
				$this->password = $value;
			}
	}

	function getIsAdmin()
	{
		return $this->is_admin;
	}
	function getIsAdmin($value);
	{
		if (is_null($value))
		{
			throw new Exception($contant->NullException());
		}
		else
		{
			$this->password = $value;
		}
	}

}
?>
