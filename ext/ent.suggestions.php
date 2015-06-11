<?php
/* ----------------------------------
+ Suggestions
+ Description of Suggestions class
+
------------------------------------ */

class Suggestion extends Constants {

	private $suggestion_id;
	private $title;
	private $description;
	private $suggestion_type_id;

	function __construct()
	{
		$this->setSuggestionId(1);
		$this->setTitle(" ");
		$this->setDescription (" ");
		$this->setSuggestionTypeId(1);
	}
	// constructor wherein you pass a whole array in
	function suggestionConstruct($suggestions)
	{
		// populate the values
		try {
			$this->setSuggestionId($suggestions['suggestion_id']);
			$this->setTitle($suggestions['title']);
			$this->setDescription($suggestions['description']);
			$this->setSuggestionTypeId($suggestions['suggestion_type_id']);
		}
		catch (Exception $e)
		{
			throw $e;
		}
	}


	function getSuggestionId()
	{
		return $this->suggestion_id;
	}

	function setSuggestionId($value)
	{
		// Can't have empty or null values
		if ($value == "")
		{
			$this->addError('suggestion_id', $this->NullException);
		}
		else
		{
			if (is_numeric($value) && is_int($value))
			{
				if($value >= 0)
				{
					$this->suggestion_id = $value;
				}
				else
				{
					$this->addError('suggestion_id', $this->NegativeException);
				}
			}
			else
			{
				$this->addError('suggestion_id', $this->InvalidTypeException);
			}
		}
	}

	function getTitle()
	{
		return $this->title;
	}

	function setTitle($value)
	{
		if ($value == "")
		{
			$this->addError('title', $this->NullException);
		}
		else
		{
			if (strlen($value) > 50)
			{
				$this->addError('title', $this->TooLargeException);
			}
			else
			{
				$this->title = $value;
			}
		}
	}

	function getDescription()
	{
		return $this->description;
	}

	function setDescription($value)
	{
		if ($value == "")
		{
			$this->addError('description', $this->NullException);
		}
		else
		{
			$this->description = $value;
		}
	}

	function getSuggestionTypeId()
	{
		return $this->suggestion_type_id;
	}

	// Does both at once
	function setSuggestionTypeId($value)
	{
		if ($value == "")
		{
			$this->addError('suggestion_type_id', $this->NullException);
		}
		else
		{
			if (is_numeric($value) && is_int($value))
			{
				if($value >= 0)
				{
					$this->suggestion_type_id = $value;
				}
				else
				{
					$this->addError('suggestion_type_id', $this->NegativeException);
				}
			}
			else
			{
				$this->addError('suggestion_type_id', $this->InvalidTypeException);
			}
		}
	}
}
?>
