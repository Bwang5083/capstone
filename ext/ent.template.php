<?php
/* ----------------------------------
+ Template Class
+ Class used for storing a template instance
+
------------------------------------ */

class SiteTemplate extends Constants {

	private $template_id;
	private $name;
	private $body;

	// Default Constructor
	function __construct()
	{
		$this->setTemplateId(1);
		$this->setName(" ");
		$this->setBody(" ");
	}

	/* ---------------------------
	+ Loaded Constructor
	+ Input: Takes in an array
	----------------------------*/
	function siteTemplateConstruct($site_template)
	{
		try {
			$this->setTemplateId($site_template['template_id']);
			$this->setName($site_template['name']);
			$this->setBody($site_template['body']);
		}
		catch (Exception $e)
		{
			throw $e;
		}
	}

	function getTemplateId()
	{
		return $this->template_id;
	}
	/* ---------------------------
	+ setTemplateId
	+ Input: Takes in an int
	----------------------------*/
	function setTemplateId($value)
	{
		if ($value == "")
		{
			$this->addError('template_id', $this->NullException);
		}
		else
		{
			if (is_numeric($value) && is_int($value))
			{
				if($value >= 0)
				{
					$this->template_id = $value;
				}
				else
				{
					$this->addError('template_id', $this->NegativeException);
				}
			}
			else
			{
				$this->addError('template_id', $this->InvalidTypeException);
			}

		}
	}

	function getName()
	{
		return $this->name;
	}

	/* ---------------------------
	+ setName
	+ Input: Takes in a string 150 characters or less
	----------------------------*/
	function setName($value)
	{
		if ($value == "")
		{
			$this->addError('name', $this->NullException);
		}
		else
		{
			if (strlen($value) > 150)
			{
				$this->addError('name', $this->TooLargeException);
			}
			else
			{
				$this->name = $value;
			}
		}
	}

	function getBody()
	{
		return $this->body;
	}

	/* ---------------------------
	+ setBody
	+ Input: Takes in a string
	----------------------------*/
	function setBody($value)
	{
		if ($value == "")
		{
			$this->addError('body', $this->NullException);
		}
		else
		{
			$this->body = $value;
		}
	}

}
?>
