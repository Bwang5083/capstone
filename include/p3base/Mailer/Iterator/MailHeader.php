<?php

/**
* @author 		Samuel Carlier
* @package 		P3Base_Mailer
* @subpackage 	P3Base_Mailer_Iterator
*/
class P3Base_Mailer_Iterator_MailHeader implements Iterator {

	/**
	* @var array
	*/
	private $array;

	/**
	* @var bool
	*/
	var $valid = true;

	/**
	* @param array $array
	*/
	public function __construct( $array) {
		$this->array = $array;

		if(count($array) === 0) {
			$this->valid = false;
		}
	}

	/**
	* sets pointer at begin
	*/
	public function rewind() {
		reset($this->array);
		$this->valid = true;

		if(count($this->array) === 0) {
			$this->valid = false;
		}
	}

	/**
	* according RFC 2822 lines cannot be longer then 1000 chars including CRLF
	* but RECOMMENDED is creating lines no longer then 80 chars including CRLF
	*
	* long headers should also contain a space at the begin of a line
	*
	* @return string
	*/
	public function current() {
		$name  = key($this->array);
		$value = current($this->array);

		$header = $name . ':' . $value;

		//headers should not contain any linefeed at this point
		$header = str_replace(array("\n", "\r", "\r\n"), '', $header);
		$header = chunk_split($header, 78,  P3Base_Mailer_Handler_SMTP::CRLF . ' ');

		//remove last space
		$header = substr($header, 0, -1);

		return $header;
	}

	/**
	* the interface required it..
	*/
	public function key() {
		throw new P3Base_Mailer_Exception('Unsupported method: ' . __METHOD__);
	}

	/**
	* move forward
	*/
	public function next() {
		$next = next($this->array);

		if($next === false) {
			$this->valid = false;
		}
	}

	/**
	* @return bool
	*/
	public function valid() {
		return $this->valid;
	}
}
?>
